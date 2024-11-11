<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Criar um usuário com a role 'admin'
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),  // Coloque a senha desejada
        ]);
        $admin->assignRole('admin');  // Atribuir o role 'admin'

        // Criar um usuário com a role 'common_user'
        $commonUser = User::create([
            'name' => 'Common User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),  // Coloque a senha desejada
        ]);
        $commonUser->assignRole('common_user');  // Atribuir o role 'common_user'
    }
}
