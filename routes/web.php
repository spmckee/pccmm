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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'HomeController@index');

Route::get('/posts', 'PostsController@index');
Route::get('/events', 'EventsController@index');


// Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/create', 'PostsController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ## Admin ##
Route::get('/admin', 'Admin\AdminController@dashboard');

// Events
Route::get('/admin/events', 'Admin\EventsController@index');
Route::get('/admin/events/create', 'Admin\EventsController@create');
Route::get('/admin/events/edit', 'Admin\EventsController@patch');
Route::get('/admin/events/delete', 'Admin\EventsController@delete');