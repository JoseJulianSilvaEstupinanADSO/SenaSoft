<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superAdminRole = Role::create(['name' => "superadministrador"]);
        $administradorRole = Role::create(['name' => "administrador"]);
        $clienteRole = Role::create(['name' => 'cliente']);
        $aprendizRole = Role::create(['name' => 'aprendiz']);
        $funcionarioRole = Role::create(['name' => 'funcionario']);
        $usurioRole = Role::create(['name' => 'usuario']);

        // Crear super administrador
        $superAdmin = User::create([
            'email' => 'jhonfredy2325@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
        $superAdmin->assignRole($superAdminRole);

        $admin = User::create([
            'email' => 'jjgmail.com',
            'password' => bcrypt('1234567890')
        ]);
        $admin->assignRole($administradorRole);

        // Crear un usuario normal
        $usuario = User::create([
            'email' => 'jhonfredy@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
        $usuario->assignRole($usurioRole);

        // Crear un permiso y asignarselo al administrador
        Permission::create([
            'name' => 'regionales.index',
            'description' => 'Listar regionales'
        ])->syncRoles([$administradorRole]);

        Permission::create([
            'name' => 'roles.index',
            'description' => 'Listar roles'
        ])->syncRoles([$superAdminRole, $administradorRole]);
        Permission::create([
            'name' => 'roles.edit',
            'description' => 'Editar rol'
        ])->syncRoles([$superAdminRole, $administradorRole]);
        Permission::create([
            'name' => 'roles.destroy',
            'description' => 'Eliminar rol'
        ])->syncRoles([$superAdminRole, $administradorRole]);
        Permission::create([
            'name' => 'roles.update',
            'description' => 'Actualizar rol'
        ])->syncRoles([$superAdminRole, $administradorRole]);
    }
}
