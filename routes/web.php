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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','AmishBazarController@home_page')->name('home-page.index');
Route::get('/shop','AmishBazarController@shop_page')->name('shop-page.index');
Route::get('/blog','AmishBazarController@blog_page')->name('blog-page.index');
