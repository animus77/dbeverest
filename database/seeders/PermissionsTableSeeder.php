<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //declaracion de ventas permisos
        Permission::create(['name' => 'sells.index']);
        Permission::create(['name' => 'sells.edit']);
        Permission::create(['name' => 'sells.show']);
        Permission::create(['name' => 'sells.create']);
        Permission::create(['name' => 'sells.destroy']);
        
        //declaracion de usuarios 
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.destroy']);

        //declaracion roles 
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.show']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.destroy']);
        
        //declaracion supplies 
        Permission::create(['name' => 'supplies.index']);
        Permission::create(['name' => 'supplies.show']);
        Permission::create(['name' => 'supplies.create']);
        Permission::create(['name' => 'supplies.edit']);
        Permission::create(['name' => 'supplies.destroy']);
        
        //permiso de vista para route y routing 
        Permission::create(['name' => 'route']);
        Permission::create(['name' => 'routing']);

        $admin = Role::create(['name' => 'Admin']);
        $guest = Role::create(['name' => 'Guest']);

        $admin->givePermissionTo([
            'sells.index',
            'sells.edit',
            'sells.show',
            'sells.create',
            'sells.destroy',
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
            'roles.index',
            'roles.edit',
            'roles.show',
            'roles.create',
            'roles.destroy',
            'supplies.index',
            'supplies.edit',
            'supplies.show',
            'supplies.create',
            'supplies.destroy',
            'route',
            'routing'
        ]);

        $guest->givePermissionTo([
            'sells.index',
            'sells.show',
            'routing'
        ]);

        $user = User::find(1);
        $user->assignRole($admin);
    }
}
