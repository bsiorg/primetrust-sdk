<?php

namespace BsiOrg\PrimeTrust;

use Illuminate\Support\ServiceProvider;

class PrimeTrustServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/primetrust.php' => config_path('primetrust.php')
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/primetrust.php', 'primetrust');

        $this->app->bind('primetrust', function () {
            return new PrimeTrust();
        });
    }
}