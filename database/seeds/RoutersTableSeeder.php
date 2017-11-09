<?php

use App\Models\Router;
use Illuminate\Database\Seeder;

class RoutersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dashboard = Router::create(
            [
                'name' => 'Dashboard',
                'icon' => 'fa-dashboard',
                'slug' => 'admin.index',
            ]
        );

        $auths = Router::create(
            [
                'name' => 'Auths',
                'icon' => 'fa-user',
            ]
        );

        $setting = Router::create(
            [
                'name' => 'Setting',
                'icon' => 'fa-cogs',
            ]
        );

        $childers = [
            [
                'name'      => 'Users',
                'slug'      => 'admin.users.index',
                'parent_id' => $auths->id,
            ],
            [
                'name'      => 'Roles',
                'slug'      => 'admin.roles.index',
                'parent_id' => $auths->id,
            ],
            [
                'name'      => 'Permissions',
                'slug'      => 'admin.permissions.index',
                'parent_id' => $auths->id,
            ],

            [
                'name'      => 'Routers',
                'slug'      => 'admin.routers.index',
                'parent_id' => $setting->id,
            ],
        ];

        foreach ($childers as $childer) {
            Router::create($childer);
        }
    }
}
