<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Tag;

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
            $tags = Tag::pluck('name');
            $view->with(['tags' => $tags]);
        });        
        
        view()->composer('posts.form', function($view){
            $tags = Tag::pluck('name', 'id');
            $view->with(['tags' => $tags]);
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
