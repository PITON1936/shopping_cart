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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('remove/{id}', [
   'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shopping-cart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',

]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',

]);

Route::group(['prefix' => 'users'], function (){
    Route::group(['middleware' => 'guest'], function (){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'users.signup',
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'users.signup',
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'users.signin',
        ]);
        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'users.signin',
        ]);
    });

    Route::group(['middleware' => 'auth'], function (){
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'users.profile',
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'users.logout',
        ]);
    });
});
