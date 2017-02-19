<?php

use App\Post;

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/', 'PagesController@main');
Route::get('/about', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');
Route::post('/contacts', 'PagesController@feedback');

Route::resource('/users', 'UsersController');

Route::resource('/posts', 'PostsController');
Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::delete('/comments/{comment}', 'CommentsController@destroy');

Route::resource('/articles', 'ArticlesController');

// Tags
Route::get('/tags', function() {
	return view('tags.tags');
});

// Ajax tags API
Route::get('/api/tags', 'TagsController@list');
Route::post('/api/tags/create', 'TagsController@store');
Route::delete('/api/tags/{tag}', 'TagsController@destroy');

/* Testing and Debugging */
Route::get('/setuptags', function() {
	\App\Tag::create(['name' => 'Personal']);
	\App\Tag::create(['name' => 'Travel']);
	\App\Tag::create(['name' => 'PHP']);
	\App\Tag::create(['name' => 'Laravel']);
	
	$user = \App\User::create(['name' => 'Alex', 'email' => 'alexvn.home@gmail.com', 'password' => bcrypt('password')]);
	auth()->login($user);
	
	// factory(App\Post::class, 12)->create();	
	return redirect('/posts');
});


Route::get('/test', function() {

	return Post::byCountry();

});