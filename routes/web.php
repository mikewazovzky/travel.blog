<?php

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');


Route::resource('/users', 'UsersController');

Route::resource('/posts', 'PostsController');
Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::post('/posts/{post}/comments', 'CommentsController@store');

