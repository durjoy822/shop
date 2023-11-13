<?php

namespace App\Providers;

use App\Models\Blogcategory;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view::composer('*' ,function($view){
            $view->with('categories',Category::all());
            $view->with('blogCategories',Blogcategory::all());
        });
    }
}