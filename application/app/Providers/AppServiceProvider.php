<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
                
        // View composer can be used like a closure, which gets executed when a view is getting rendered to bind values to it
        
        View::composer('*', function ($view) {
                $view->with('services',  \App\Service::getActive());
            });
         }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){

    }
    
}
