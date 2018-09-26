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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todo', 'MessagesController');

// Route::get('contact', 'MessagesController@contacts');

// Route::get('todo', 'MessagesController@toDo');

// Route::post('contact/submit', 'MessagesController@submit');

// Route::post('todosave', 'MessagesController@todoSave');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('reg', 'UserController');
