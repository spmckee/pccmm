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
Route::get('/events', 'EventsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ## Admin ##
Route::get('/admin', 'Admin\AdminController@dashboard');

// Events
Route::get('/admin/events', 'Admin\EventsController@index');

// Create
Route::get('/admin/events/create', 'Admin\EventsController@create');

// Edit
// Route::post('/admin/events/{id}/edit', 'Admin\EventsController@edit');

// Update
// Route::post('/admin/events/{id}/edit', 'Admin\EventsController@edit');

// Delete
// Route::patch('/admin/{id}', 'Admin\EventsController@update');

// Show
Route::get('/admin/events/{post}', 'Admin\PostsController@show');

// Save
Route::post('/admin/events', 'Admin\EventsController@store');