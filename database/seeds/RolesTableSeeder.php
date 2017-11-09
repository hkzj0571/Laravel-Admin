<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(
            ['alias' => 'Admin', 'name' => 'admin']
        );

        $role->syncPermissions(Permission::pluck('name')->toArray());
    }
}
