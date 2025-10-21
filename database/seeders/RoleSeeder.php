<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'students.view',
            'students.create',
            'students.edit',
            'students.delete',
            'guardians.view',
            'guardians.create',
            'guardians.edit',
            'guardians.delete',
            'announcements.view',
            'announcements.create',
            'announcements.edit',
            'announcements.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign created permissions
        $ownerRole = Role::create(['name' => 'Owner']);
        $ownerRole->givePermissionTo($permissions);

        $headmasterRole = Role::create(['name' => 'Headmaster']);
        $headmasterRole->givePermissionTo($permissions);
    }
}
