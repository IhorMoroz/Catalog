<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/admin', ['middleware' => 'auth', 'uses' => 'AHomeController@indexAction']);
Route::get('/admin/category/add', ['middleware' => 'auth', 'uses' => 'ACategoryController@AddAction']);
Route::post('/admin/category/add', ['middleware' => 'auth', 'uses' => 'ACategoryController@AddCatAction']);
Route::get('/admin/category/list', ['middleware' => 'auth', 'uses' => 'ACategoryController@showListCategoryAction']);
Route::get('/admin/uncategory/add', ['middleware' => 'auth', 'uses' => 'AUnderCategoryController@showAddUnCategoryAction']);
Route::get('/admin/uncategory/list', ['middleware' => 'auth', 'uses' => 'AUnderCategoryController@showListUnCategoryAction']);
Route::post('/admin/uncategory/add', ['middleware' => 'auth', 'uses' => 'AUnderCategoryController@addUnCategoryAction']);
Route::get('/admin/goods/add', ['middleware' => 'auth', 'uses' => 'AGoodsController@showAddGoodsAction']);
Route::get('/admin/goods/delete/{id}', ['middleware' => 'auth', 'uses' => 'AGoodsController@deleteGoodsByIdAction']);
Route::get('/admin/goods/edit/{id}', ['middleware' => 'auth', 'uses' => 'AGoodsController@showEditGoodsAction']);
Route::post('/admin/goods/edit', ['middleware' => 'auth', 'uses' => 'AGoodsController@editGoodsAction']);
Route::post('/admin/goods/add', ['middleware' => 'auth', 'uses' => 'AGoodsController@AddGoodsAction']);
Route::get('/admin/{category}/{uncategory}', ['middleware' => 'auth', 'uses' => 'ASearchController@showListAction']);
Route::get('/admin/{category}/{uncategory}/{id}', ['middleware' => 'auth', 'uses' => 'ASearchController@showOneAction']);
Route::get('/login', function(){
   return view('auth.login');
});

