<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Criar permissões
        $editPermission = Permission::create(['name' => 'edit']);
        $writePermission = Permission::create(['name' => 'write']);
        $downloadPermission = Permission::create(['name' => 'download']);
        $deletePermission = Permission::create(['name' => 'delete']);

        // Criar o role 'admin' e atribuir permissões
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo([$editPermission, $writePermission, $downloadPermission, $deletePermission]);

        // Criar o role 'common_user' e atribuir permissões
        $commonUserRole = Role::create(['name' => 'common_user']);
        $commonUserRole->givePermissionTo($downloadPermission);  // Apenas download
    }
}
