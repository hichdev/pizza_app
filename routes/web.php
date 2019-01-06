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


Route::get('product/createOrder', [

    'uses' => 'FrontendCartController@createOrder',
    'as' => 'createOrder'
]);

Route::get('product/checkout', [

    'uses' => 'FrontendCartController@checkoutProducts',
    'as' => 'checkoutProducts'
]);

Route::post('product/createNewOrder/', [

    'uses' => 'FrontendCartController@createNewOrder',
    'as' => 'createNewOrder'


]);

Route::get('payment/paymentpage', [

    'uses' => 'PaymentsController@showPaymentPage',
    'as' => 'showPaymentPage'

]);

Route::get('payment/paymentreceived/{paymentID}/{payerID}', [

    'uses' => 'PaymentsController@showPaymentreceived',
    'as' => 'showPaymentreceived'

]);


Route::get('/users/logout', [

    'uses'=> 'Auth\LoginController@userlogout',
    'as' => 'user.logout'
]);

Route::get('/profile/orders', [

    'uses'=> 'FrontendProfileController@orders',
    'as' => 'profile.orders'
]);

Route::get('/profile/order/{id}', [

    'uses'=> 'FrontendProfileController@details',
    'as' => 'profile.orderDetails'
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

        'middleware' => 'admin',
        'uses' => 'BackendController@dashboard',
        'as' => 'admin.dashboard'

    ]);

    Route::get('/users', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@index',
        'as' => 'admin.user'
    ]);

    Route::get('/users/create', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@create',
        'as' => 'admin.user.create'
    ]);

    Route::post('/users/store', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@store',
        'as' => 'admin.users.store'
    ]);

    Route::get('/users/edit/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@edit',
        'as' => 'admin.users.edit'

    ]);

    Route::post('/users/update/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@update',
        'as' => 'admin.users.update'


    ]);

    Route::get('/users/delete/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@delete',
        'as' => 'admin.user.delete'
    ]);

    Route::get('/users/roles', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@roles',
        'as' => 'admin.users.roles'


    ]);

    Route::get('/users/roles/create', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@rolesCreate',
        'as' => 'admin.users.role.create'


    ]);

    Route::post('/users/roles/store', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@roleStore',
        'as' => 'admin.users.role.store'
    ]);


    Route::get('/users/roles/delete/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminUsersController@roleDelete',
        'as' => 'admin.users.role.delete'
    ]);

    Route::get('/customers', [

        'middleware' => 'admin',
        'uses' => 'AdminCustomersController@index',
        'as' => 'admin.customers'
    ]);

    Route::get('/customer/edit/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminCustomersController@edit',
        'as' => 'admin.customers.edit'

    ]);

    Route::post('/customer/update/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminCustomersController@update',
        'as' => 'admin.customers.update'
    ]);

    Route::get('/customer/delete/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminCustomersController@delete',
        'as' => 'admin.customer.delete'
    ]);


    Route::get('/products', [

        'middleware' => 'admin',
        'uses' => 'AdminProductsController@index',
        'as' => 'admin.products'
    ]);


    Route::get('/products/create', [

        'middleware' => 'admin',
        'uses' => 'AdminProductsController@create',
        'as' => 'admin.product.create'


    ]);

    Route::post('/products/store', [

        'middleware' => 'admin',
        'uses' => 'AdminProductsController@store',
        'as' => 'admin.product.store'


    ]);

    Route::get('/products/delete/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminProductsController@delete',
        'as' => 'admin.product.delete'
    ]);

    Route::get('/products/edit/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminProductsController@edit',
        'as' => 'admin.product.edit'
    ]);

    Route::post('/products/update/{id}', [

        'middleware' => 'admin',
        'uses' => 'AdminProductsController@update',
        'as' => 'admin.product.update'
    ]);


    Route::get('/orders', [

        'uses' => 'AdminOrdersController@index',
        'as' => 'admin.order.index'
    ]);


    Route::get('/orders/edit/{id}', [


        'uses' => 'AdminOrdersController@edit',
        'as' => 'admin.order.edit'
    ]);


    Route::post('/orders/update/{id}', [


        'uses' => 'AdminOrdersController@update',
        'as' => 'admin.order.update'
    ]);







});





