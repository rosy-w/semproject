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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'HomeController@menu')->name('menu');

Route::get('/menu/category/{category}', 'HomeController@category')->name('category');

Route::get('/cart', 'CartController@index')->name('cart.index');

/* Route::get('/cart/add/{id}', 'CartController@addtocart')->name('cart_add');
Route::get('/cart/update/{item}/{quantity}', 'CartController@update')->name('cart_update'); */

Route::get('/admin/menu','MenuController@index')->name('admenu');
Route::get('/admin/menu/edit/{id}','MenuController@edit')->name('edit');
Route::get('/admin/menu/add','MenuController@add')->name('add');

Route::post('/cart', 'CartController@store')->name('cart.store');
