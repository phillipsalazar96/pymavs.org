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
Route::get('/', 'ViewsController@index' );

Route::get('/about', 'ViewsController@about');

Route::resource('/blog' ,'BlogsController' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'DashboardController@index');

Route::get('/manual', 'DashboardController@manual');
// resources at the bottom
