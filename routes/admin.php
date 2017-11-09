<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('admin.')->group(function() {

    Route::prefix('auth')->group(
        function($router) {
            $router->view('login', 'admin.auths.login')->name('auth.login');
            $router->post('login', 'AuthController@login')->name('auth.login');
            $router->get('logout', 'AuthController@logout')->name('auth.logout');
        }
    );

    Route::middleware('permission')->group(
        function($router) {
            $router->get('/', 'IndexController@index')->name('index');
            $router->get('/clear', 'IndexController@clear')->name('clear');
            $router->resource('users', 'UsersController');
            $router->resource('roles', 'RolesController');
            $router->resource('routers', 'RoutersController');
            $router->resource('permissions', 'PermissionsController');
            $router->resource('course', 'CourseController');
        }
    );

//    Route::get('/', 'IndexController@index')->name('index');
//
//    Route::resource('users', 'UsersController');
//    Route::resource('roles', 'RolesController');
//    Route::resource('routers', 'RoutersController');
//    Route::resource('permissions', 'PermissionsController');
});


