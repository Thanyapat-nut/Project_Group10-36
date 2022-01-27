<?php

use Illuminate\Support\Facades\Route;

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

//ค้นหาข้อมูลแบบเลือกประเภทสินค้า
Route::get('/product/category/{id}','Admin\ProductController@findCategory');

//route admin
Route::get('/admin/index', 'Admin\AdminController@index')->name('index');

//route category
Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');
Route::post('/admin/category/create','Admin\CategoryController@create')->name('create');
Route::get('/admin/category/Edit/{id}','Admin\CategoryController@edit');
Route::post('/admin/category/Update/{id}','Admin\CategoryController@update');
Route::get('/admin/category/Delete/{id}','Admin\CategoryController@delete');

//route product
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');
Route::post('/admin/product/create','Admin\ProductController@create')->name('product.c');
Route::get('/admin/product/edit/{id}','Admin\ProductController@edit');
Route::post('/admin/product/update/{id}','Admin\ProductController@update');
Route::get('/admin/product/delete/{id}','Admin\ProductController@delete');

//route user
Route::get('/admin/user/index','Admin\UserController@index')->name('user');
Route::get('/admin/user/edit/{id}','Admin\UserController@edit');
Route::get('/admin/user/delete/{id}','Admin\UserController@delete');

//route page
Route::get('/page', 'page\PageController@index')->name('page');
Route::get('/aboutpage', 'page\PageController@about')->name('page.a');
Route::get('/contactpage', 'page\PageController@contact')->name('page.c');
Route::get('/productpage', 'page\PageController@product')->name('page.p');


Auth::routes();

//profile
Route::get('/about', 'HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');  

//out
Route::get('/out', 'Admin\OutController@index')->name('out');