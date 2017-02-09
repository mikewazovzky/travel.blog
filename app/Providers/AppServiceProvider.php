<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Tag;
use App\Post;
use App\Tools\Country;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('layouts.blog.sidebar', function($view){
            $archives = Post::archives();
            $tags = Tag::pluck('name');
			$countries = Post::byCountry();
            
            $view->with([ 'archives' => $archives, 'tags' => $tags, 'countries' => $countries ]);
        });        
        
        view()->composer('posts.form', function($view){
            $tags = Tag::pluck('name', 'id');
			$countries = Country::all();
			
            $view->with(['tags' => $tags, 'countries' => $countries]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
