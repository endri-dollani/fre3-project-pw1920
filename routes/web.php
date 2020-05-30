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
//Auth Component utils:
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/','PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/blog', 'PagesController@blog');
Route::get('/single-blog', 'PagesController@singleblog');

Route::get('/contact', 'PagesController@contact');


Route::resource('posts', 'PostsController');

