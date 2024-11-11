<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    // Construtor para garantir que apenas usuários com permissão possam acessar
    public function __construct()
    {
        $this->middleware('permission:edit')->only('edit', 'update');
        $this->middleware('permission:delete')->only('destroy');
    }

    // Exibir lista de usuários
    public function index()
    {
        $users = User::all();  // Aqui você pode adicionar paginação ou filtros se necessário
        return view('users.index', compact('users'));
    }

    // Exibir o formulário para criar um novo usuário
    public function create()
    {
        $roles = Role::all();  // Buscar todas as roles para exibir no formulário
        return view('users.create', compact('roles'));
    }

    // Armazenar um novo usuário
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|exists:roles,id',  // Validar role
        ]);

        // Criar o usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Atribuir a role ao usuário
        $user->assignRole($request->role);

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    // Exibir os dados de um usuário
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Exibir o formulário para editar um usuário
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();  // Obter todas as roles
        return view('users.edit', compact('user', 'roles'));
    }

    // Atualizar o usuário
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|exists:roles,id',  // Validar role
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        // Atualizar a role do usuário
        $user->syncRoles($request->role);

        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    // Deletar um usuário
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
