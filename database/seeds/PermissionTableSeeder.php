<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create',
            'edit',
            'view',
            'delete',
            'excel',
            'search',
            'print',
            'roles-list',
            'roles-create',
            'roles-edit',
            'roles-delete',
            'hygiene-inspections-list',
            'hygiene-inspections-create',
            'hygiene-inspections-edit',
            'hygiene-inspections-delete',

        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
