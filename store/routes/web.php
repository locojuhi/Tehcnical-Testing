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
    return redirect('stores');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::resource('stores', 'StoreController');

Route::get('stores/{store_id}/products', [
    'as'   => 'showProductsStore',
    'uses' => 'ProductController@index',
]);

Route::get('stores/{store_id}/products/create', [
    'as'   => 'createProductStore',
    'uses' => 'ProductController@create',
]);

Route::get('stores/{store_id}/products/{product_id}', [
    'as'   => 'showProductDetail',
    'uses' => 'ProductController@show',
]);

Route::get('stores/{store_id}/products/{product_id}/edit', [
    'as'   => 'editProductStore',
    'uses' => 'ProductController@edit',
]);

Route::resource('products', 'ProductController');