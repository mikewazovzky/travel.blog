<?php

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');
Route::post('/contacts', 'PagesController@feedback');

Route::resource('/users', 'UsersController');

Route::resource('/posts', 'PostsController');
Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/tags', function() {
	\App\Tag::create(['name' => 'Personal']);
	\App\Tag::create(['name' => 'Travel']);
	\App\Tag::create(['name' => 'PHP']);
	\App\Tag::create(['name' => 'Laravel']);
	
	return redirect('/posts');
});

