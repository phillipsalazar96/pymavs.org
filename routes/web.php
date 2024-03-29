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

Route::get('/console', 'ViewsController@console');

Route::resource('/blog' ,'BlogsController' );

Route::get('/blog/category/{slug}' ,'BlogsController@getSlugToRoute');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'DashboardController@index');
Route::get('/admin/blog', 'DashboardController@showAllPosts');

Route::get('/manual', 'DashboardController@manual');
// resources at the bottom

// Emails
Route::resource('/email', 'EmailController');

