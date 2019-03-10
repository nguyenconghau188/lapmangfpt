<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//hau.nc add for error 767 bytes
use Illuminate\Support\Facades\Schema;

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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //hau.nc add for error 767 bytes
        Schema::defaultStringLength(191);
    }
}
