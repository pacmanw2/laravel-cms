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

Route::resource('posts', 'PostsController');
Route::resource('bg', 'BloodGlucoseController');
//Route::get('/', 'PagesController@home');
//Route::get('/about', 'PagesController@about');
//Route::get('/posts', 'PostsController@index');
//Route::get('/posts/{post}', 'PostsController@show');
//Route::get('/posts', 'PostsController@store');
//Route::get('/posts/{post}/edit', 'PostsController@edit');
//Route::patch('/posts/{post}', 'PostsController@update');
//Route::delete('/posts/{post}', 'PostsController@destroy');
