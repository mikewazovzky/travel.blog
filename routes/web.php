<?php

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/users', 'UsersController');

Route::get('/test', function() {
    return Post::create([
        'title' => 'First Post',
        'body' => 'Lorem ipsum..'
    ]);
});

