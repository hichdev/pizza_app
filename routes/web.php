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

Route::get('/admin', [

    'uses' => 'BackendController@dashboard',
    'as' => 'admin.dashboard'

]);

Route::get('/admin/users', [

    'uses' => 'AdminUsersController@index',
    'as' => 'admin.user'
]);

Route::get('/admin/users/create', [

    'uses' => 'AdminUsersController@create',
    'as' => 'admin.user.create'
]);

Route::post('/admin/users/store', [

    'uses' => 'AdminUsersController@store',
    'as' => 'admin.user.store'
]);