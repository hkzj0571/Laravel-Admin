<?php

return [
    'admins' => [
        'users'       => [
            'login'  => [
                'email'    => 'required|email|exists:users',
                'password' => 'required|between:6,20',
            ],
            'create' => [
                'roles'    => 'array|nullable',
                'name'     => 'required|between:3,20|unique:users',
                'email'    => 'required|email|unique:users',
                'password' => 'required|between:6,20',
            ],
            'update' => [
                'roles'    => 'array|nullable',
                'name'     => 'required|between:3,20',
                'email'    => 'required|email',
                'password' => 'between:6,20|nullable',
            ],
        ],
        'roles'       => [
            'create' => [
                'alias'       => 'required',
                'permissions' => 'array|nullable',
                'name'        => 'required|between:2,20|unique:roles',
            ],
            'update' => [
                'alias'       => 'required',
                'permissions' => 'array|nullable',
                'name'        => 'required|between:2,20',
            ],
        ],
        'permissions' => [
            'create' => [
                'alias' => 'required',
                'name'  => 'required|between:2,50|unique:permissions',
            ],
            'update' => [
                'alias' => 'required',
                'name'  => 'required|between:2,50',
            ],
        ],
        'routers'     => [
            'create' => [
                'name'      => 'required|between:2,50',
                'slug'      => 'nullable',
                'icon'      => 'nullable',
                'weight'    => 'numeric',
                'parent_id' => 'numeric',
            ],
            'update' => [
                'name'      => 'required|between:2,50',
                'slug'      => 'nullable',
                'icon'      => 'nullable',
                'weight'    => 'numeric',
                'parent_id' => 'numeric',
            ],
        ],
    ],
];