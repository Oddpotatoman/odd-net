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
//Static sites
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv', function () {
    return view('cv');
});

//Dynamic sites
Route::get('/blog', 'PostsController@index');
Route::get('/blog/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/blog/{id}', 'PostsController@show');

Route::post('blog/posts/{post}/comments', 'CommentsController@store');
