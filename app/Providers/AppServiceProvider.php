<?php

namespace App\Providers;

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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('development')) { // consider turning this into a method like isDevEnvironment() if you need more logic
            array_map([$this->app, 'register'], config('app.devProviders'));
        }
    }
}
