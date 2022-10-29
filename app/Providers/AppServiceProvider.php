<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * 
     * @return void
     */
    public function register()
    {
        //
    }
    
    /**
     * Boostsrap any application services.
     * 
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
