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
      $loader = \Illuminate\Foundation\AliasLoader::getInstance();

      $loader->alias('Notifications', \App\Facades\Notifications::class);

      $this->app->singleton('NotificationService', function ($app) {
            return app(\App\Services\NotificationService::class);
      });


    }
}
