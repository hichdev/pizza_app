<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function (){


    Route::get('/login', [

        'uses' => 'Auth\AdminLoginController@showLoginForm',
        'as' => 'admin.login'

    ]);

    Route::post('/login', [

        'uses' => 'Auth\AdminLoginController@login',
        'as' => 'admin.login.submit'

    ]);


    Route::get('/', [

        'uses' => 'BackendController@dashboard',
        'as' => 'admin.dashboard'

    ]);

    Route::get('/users', [

        'uses' => 'AdminUsersController@index',
        'as' => 'admin.user'
    ]);

    Route::get('/users/create', [

        'uses' => 'AdminUsersController@create',
        'as' => 'admin.user.create'
    ]);

    Route::post('/users/store', [

        'uses' => 'AdminUsersController@store',
        'as' => 'admin.users.store'
    ]);

    Route::get('/users/edit/{id}', [

        'uses' => 'AdminUsersController@edit',
        'as' => 'admin.users.edit'

    ]);

    Route::post('/users/update/{id}', [

        'uses' => 'AdminUsersController@update',
        'as' => 'admin.users.update'


    ]);

    Route::get('/users/delete/{id}', [

        'uses' => 'AdminUsersController@delete',
        'as' => 'admin.user.delete'
    ]);

    Route::get('/users/roles', [

        'uses' => 'AdminUsersController@roles',
        'as' => 'admin.users.roles'


    ]);

    Route::get('/users/roles/create', [

        'uses' => 'AdminUsersController@rolesCreate',
        'as' => 'admin.users.role.create'


    ]);

    Route::post('/users/roles/store', [

        'uses' => 'AdminUsersController@roleStore',
        'as' => 'admin.users.role.store'
    ]);


    Route::get('/users/roles/delete/{id}', [

        'uses' => 'AdminUsersController@roleDelete',
        'as' => 'admin.users.role.delete'
    ]);



});





