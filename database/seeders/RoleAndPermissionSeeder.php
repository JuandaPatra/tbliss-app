<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission::create(['name' => 'create-users']);
        // Permission::create(['name' => 'edit-users']);
        // Permission::create(['name' => 'delete-users']);

        // Permission::create(['name' => 'create-blog-posts']);
        // Permission::create(['name' => 'edit-blog-posts']);
        // Permission::create(['name' => 'delete-blog-posts']);

        // $superadminRole = Role::create(['name' => 'superadmin']);
        // $adminRole = Role::create(['name' => 'admin']);
        // $userRole = Role::create(['name' =>'user']);
        $editorRole = Role::create(['name' => 'editor']);

        $role = Role::findByName('admin');
        $role->givePermissionTo([
                'create-users',
                'edit-users',
                'delete-users',
                'create-blog-posts',
                'edit-blog-posts',
                'delete-blog-posts',
        ]);
        // $adminRole->givePermissionTo([
        //     'create-users',
        //     'edit-users',
        //     'delete-users',
        //     'create-blog-posts',
        //     'edit-blog-posts',
        //     'delete-blog-posts',
        // ]);

        $editorRole->givePermissionTo([
            'create-blog-posts',
            'edit-blog-posts',
            'delete-blog-posts',
        ]);

    }
}
