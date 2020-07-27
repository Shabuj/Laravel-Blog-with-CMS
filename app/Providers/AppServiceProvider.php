<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

        
         view()->composer('frontend.layout.sidebar' , function($view){
            $view->with('posts',\App\Post::RandomPostSelectForSidebar());
        });
        view()->composer('frontend.layout.sidebar' , function($view){
            $view->with('cat',\App\Catagory::RandomCatSelectForSidebar());
        });
        view()->composer('frontend.layout.header' , function($view){
            $view->with('title',\App\Title::RandomTitleSelectForSidebar());
        });

         view()->composer('backend.editpost' , function($view){
            $view->with('cat',\App\Catagory::RandomCatSelectForSidebar());
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
