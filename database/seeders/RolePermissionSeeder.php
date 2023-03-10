<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;





use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Hak akses modul user
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        // create roles and assign created permissions        
        $role = Role::create(['name' => 'super-administrator']);
        $role->givePermissionTo(Permission::all());

        // Role Administrator
        $role1 = Role::create(['name' => 'administrator']);
        // Hak Akses User - Administrator
        $role1->givePermissionTo('create user');
        $role1->givePermissionTo('read user');
        $role1->givePermissionTo('update user');
        $role1->givePermissionTo('delete user');

        // Role Unit
        $role2 = Role::create(['name' => 'unit']);
        $role2->givePermissionTo('read user');

        // Create Akun User
        $defaultUser = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        $superadmin = User::create(array_merge($defaultUser,[
            'name' => 'Achmad Izaaz',
            'email' => 'achmadizaaz@unmerpas.ac.id'
        ]));
        $superadmin->assignRole($role);

        $admin = User::create(array_merge($defaultUser,[
            'name' => 'Administrator',
            'email' => 'admin@unmerpas.ac.id'
        ]));
        $admin->assignRole($role1);

        $user = User::create(array_merge($defaultUser,[
            'name' => 'User',
            'email' => 'user@unmerpas.ac.id'
        ]));
        $user->assignRole($role2);


    }
}
