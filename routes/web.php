<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/','PagesController@index')->name('home.index');
Route::post('/','PagesController@store')->name('home.store');

Route::get('/about', 'PagesController@about');


Route::get('/services', 'PagesController@services');

Route::get('/blog', 'PagesController@blog');
Route::get('/single-blog', 'PagesController@singleblog');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');

Route::get('/send-mail', 'PagesController@contact');

Route::get('/checkout-business', 'CheckoutBusinessController@index')->name('checkout-business.index');
Route::post('/checkout-business', 'CheckoutBusinessController@store')->name('checkout-business.store');

Route::resource('posts', 'PostsController');
Route::get('/search', 'PostsController@search')->name('search');

Route::get('/reservate/{id}', 'CheckoutBusinessController@reservate')->name('post.reservate');
Route::post('/reservate', 'CheckoutBusinessController@reservated')->name('post.reservated');
Route::resource('profile', 'UserProfileController');
Route::resource('business', 'BusinessController');





