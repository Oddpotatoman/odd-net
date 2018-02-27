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
//INDEX
    Route::get('/', function () {
        return view('welcome');
    });
//CV
    Route::get('/cv', function () {
        return view('cv');
    });

//Dynamic sites
    //DnD Character
        Route::get('/dnd', 'CharactersController@index.css');
        Route::get('/dnd/create', 'CharactersController@create');
        Route::get('/dnd/character/{id}', 'CharacterController@show');

    //DndTables
        Route::get('/dndtables/add', 'DndtablesController@add');
        Route::get('/dndtables/view/{id}', 'DndtablesController@view');

        Route::post('/dndtables/add', 'DndtablesController@addImportedTable');

//Blog
        Route::get('/blog', 'PostsController@index');
        Route::get('/blog/create', 'PostsController@create');
        Route::post('/posts', 'PostsController@store');
        Route::get('/blog/{id}', 'PostsController@show');
        Route::post('blog/posts/{post}/comments', 'CommentsController@store');

    // Daylog
        Route::get('/daylog', 'DaylogsController@index');
        Route::post('/daylog', 'DaylogsController@create');

    // The Game KP
        Route::get('/thegame', 'ThegameController@index');
        Route::get('/thegame/addarea', 'ThegameController@addarea');
        Route::get('/thegame/view', 'ThegameController@view');
        Route::get('/thegame/addpoint', 'ThegameController@points');
        Route::post('/thegame/givepoints', 'ThegameController@givepoints');
        Route::post('/thegame/addarea', 'ThegameController@createArea');
    // Budget manager
        Route::get('/budget', 'BudgetController@index');



// Authentication
    //Global site function
        Route::get('/register', 'RegistrationController@create');
        Route::post('/register', 'RegistrationController@store');

        Route::get('/login', 'SessionsController@login')->name('login');
        Route::post('/login', 'SessionsController@store');
        Route::get('/logout', 'SessionsController@logout');