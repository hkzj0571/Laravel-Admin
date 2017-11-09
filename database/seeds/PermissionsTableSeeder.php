<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     *Runthedatabaseseeds.
     *
     * @returnvoid
     */
    public function run()
    {
        $needs = [
            [
                'alias'      => 'Admin Index',
                'name'       => 'admin.index',
            ],
            [
                'alias'      => 'Admin Clear',
                'name'       => 'admin.clear',
            ],
            [
                'alias'      => 'Admin Auth Login',
                'name'       => 'admin.auth.login',
            ],
            [
                'alias'      => 'Admin Auth Logout',
                'name'       => 'admin.auth.logout',
            ],
            [
                'alias'      => 'Admin Permissions index',
                'name'       => 'admin.permissions.index',
            ],
            [
                'alias'      => 'Admin Permissions store',
                'name'       => 'admin.permissions.store',
            ],
            [
                'alias'      => 'Admin Permissions create',
                'name'       => 'admin.permissions.create',
            ],
            [
                'alias'      => 'Admin Permissions show',
                'name'       => 'admin.permissions.show',
            ],
            [
                'alias'      => 'Admin Permissions update',
                'name'       => 'admin.permissions.update',
            ],
            [
                'alias'      => 'Admin Permissions destroy',
                'name'       => 'admin.permissions.destroy',
            ],
            [
                'alias'      => 'Admin Permissions edit',
                'name'       => 'admin.permissions.edit',
            ],
            [
                'alias'      => 'Admin Roles index',
                'name'       => 'admin.roles.index',
            ],
            [
                'alias'      => 'Admin Roles store',
                'name'       => 'admin.roles.store',
            ],
            [
                'alias'      => 'Admin Roles create',
                'name'       => 'admin.roles.create',
            ],
            [
                'alias'      => 'Admin Roles update',
                'name'       => 'admin.roles.update',
            ],
            [
                'alias'      => 'Admin Roles destroy',
                'name'       => 'admin.roles.destroy',
            ],
            [
                'alias'      => 'Admin Roles show',
                'name'       => 'admin.roles.show',
            ],
            [
                'alias'      => 'Admin Roles edit',
                'name'       => 'admin.roles.edit',
            ],
            [
                'alias'      => 'Admin Routers index',
                'name'       => 'admin.routers.index',
            ],
            [
                'alias'      => 'Admin Routers store',
                'name'       => 'admin.routers.store',
            ],
            [
                'alias'      => 'Admin Routers create',
                'name'       => 'admin.routers.create',
            ],
            [
                'alias'      => 'Admin Routers show',
                'name'       => 'admin.routers.show',
            ],
            [
                'alias'      => 'Admin Routers update',
                'name'       => 'admin.routers.update',
            ],
            [
                'alias'      => 'Admin Routers destroy',
                'name'       => 'admin.routers.destroy',
            ],
            [
                'alias'      => 'Admin Routers edit',
                'name'       => 'admin.routers.edit',
            ],
            [
                'alias'      => 'Admin Users store',
                'name'       => 'admin.users.store',
            ],
            [
                'alias'      => 'Admin Users index',
                'name'       => 'admin.users.index',
            ],
            [
                'alias'      => 'Admin Users create',
                'name'       => 'admin.users.create',
            ],
            [
                'alias'      => 'Admin Users destroy',
                'name'       => 'admin.users.destroy',
            ],
            [
                'alias'      => 'Admin Users update',
                'name'       => 'admin.users.update',
            ],
            [
                'alias'      => 'Admin Users show',
                'name'       => 'admin.users.show',
            ],
            [
                'alias'      => 'Admin Users edit',
                'name'       => 'admin.users.edit',
            ],
        ];

        foreach ($needs as $need) {
            Permission::create($need);
        }
    }
}
