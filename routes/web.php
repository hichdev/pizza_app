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

//Route::get('/', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/menu', [

    'uses' => 'FrontendMenuController@index',
    'as' =>'menu'

]);

Route::get('cart', [

    'uses' => 'FrontendCartController@showCart',
    'as' => 'cartproducts'

]);


Route::get('product/addtocart/{id}', [

    'uses' => 'FrontendCartController@addToCart',
    'as' => 'AddToCart'

]);

Route::get('product/deleteFromCart/{id}', [

    'uses' => 'FrontendCartController@deleteItemFromCart',
    'as' => 'deleteItemFromCart'

]);





Route::get('/users/logout', [

    'uses'=> 'Auth\LoginController@userlogout',
    'as' => 'user.logout'

]);




Route::prefix('admin')->group(function (){


    Route::get('/login', [

        'uses' => 'Auth\AdminLoginController@showLoginForm',
        'as' => 'admin.login'

    ]);

    Route::post('/login', [

        'uses' => 'Auth\AdminLoginController@login',
        'as' => 'admin.login.submit'

    ]);

    Route::get('/logout', [

        'uses'=> 'Auth\AdminLoginController@logout',
        'as' => 'admin.logout'

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

    Route::get('/customers', [

        'uses' => 'AdminCustomersController@index',
        'as' => 'admin.customers'
    ]);

    Route::get('/customer/edit/{id}', [

        'uses' => 'AdminCustomersController@edit',
        'as' => 'admin.customers.edit'

    ]);

    Route::post('/customer/update/{id}', [

        'uses' => 'AdminCustomersController@update',
        'as' => 'admin.customers.update'
    ]);

    Route::get('/customer/delete/{id}', [

        'uses' => 'AdminCustomersController@delete',
        'as' => 'admin.customer.delete'
    ]);


    Route::get('/products', [

        'uses' => 'AdminProductsController@index',
        'as' => 'admin.products'
    ]);


    Route::get('/products/create', [

        'uses' => 'AdminProductsController@create',
        'as' => 'admin.product.create'


    ]);

    Route::post('/products/store', [

        'uses' => 'AdminProductsController@store',
        'as' => 'admin.product.store'


    ]);

    Route::get('/products/delete/{id}', [

        'uses' => 'AdminProductsController@delete',
        'as' => 'admin.product.delete'
    ]);

    Route::get('/products/edit/{id}', [

        'uses' => 'AdminProductsController@edit',
        'as' => 'admin.product.edit'
    ]);

    Route::post('/products/update/{id}', [

        'uses' => 'AdminProductsController@update',
        'as' => 'admin.product.update'
    ]);







});





