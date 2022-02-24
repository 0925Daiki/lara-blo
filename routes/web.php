<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/create', function () {
//     return view('posts.create');
// });

// Route::get('/edit', function () {
//     return view('posts.edit');
// });

// Route::get('/index', function () {
//     return view('posts.index');
// });

// Route::get('/show', function () {
//     return view('posts.show');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('posts.index');

Route::get('/post/create','PostController@create')->name('posts.create');

Route::post('/post','PostController@store')->name('posts.store');

Route::get('/post/{id}', 'PostController@show')->name('posts.show');

Route::get('/post/{id}/edit', 'PostController@edit')->name('posts.edit');

Route::put('/post/{id}', 'PostController@update')->name('posts.update');

Route::delete('/post/{id}', 'PostController@destroy')->name('posts.destroy');

// Route::resource('/post', 'PostController');