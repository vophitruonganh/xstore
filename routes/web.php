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

// HOME SITE
Route::get('/', 'SiteController@showSite');


//ADMIN DASHBOARD
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
/* ======================= PROUDUCT ROUTE ======================= */
Route::group(['middleware' => 'auth'], function() {
	Route::get('/dashboard/product', 'Product\ProductController@index');
	Route::get('/dashboard/product/lock', 'Product\ProductController@showLock');
	Route::get('/dashboard/product/create', 'Product\ProductController@create');
	Route::post('/dashboard/product/create', 'Product\ProductController@store');

	Route::get('/dashboard/product/edit/{id?}', 'Product\ProductController@edit');
	Route::post('/dashboard/product/edit/{id?}', 'Product\ProductController@update');

	Route::get('/dashboard/product/delete', 'Product\ProductController@show');
	Route::get('/dashboard/product/delete/{id?}', 'Product\ProductController@destroy');
});
/* ======================= CATEGORY ROUTE ======================= */
Route::get('/dashboard/category/create', 'Product\CategoryController@create');
Route::post('/dashboard/category/create', 'Product\CategoryController@store');
Route::get('/dashboard/category', 'Product\CategoryController@index');
Route::match(['get','post'],'/dashboard/category/{id?}', 'Product\CategoryController@show');
/* ======================= TRADEMARK ROUTE ======================= */
Route::get('/dashboard/trademark', 'Product\TrademarkController@index');
Route::match(['get','post'],'/dashboard/trademark/{id?}', 'Product\TrademarkController@show');
Route::get('/dashboard/trademark/edit/{key?}', 'Product\TrademarkController@edit');
Route::post('/dashboard/trademark/edit/{key?}', 'Product\TrademarkController@update');
/* ===================================================================== */
Route::get('admin', function () {
    return view('layouts.dashboard.admin_template');
});