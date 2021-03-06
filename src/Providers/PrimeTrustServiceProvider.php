<?php

namespace BsiOrg\PrimeTrust\Providers;

use BsiOrg\PrimeTrust\PrimeTrust;
use Illuminate\Support\ServiceProvider;

class PrimeTrustServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('primetrust', function ($app) {
            return new PrimeTrust();
        });

        $this->app->alias(PrimeTrust::class, 'primetrust');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__
            .'/../../config/primetrust.php' => config_path('primetrust.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/../../config/primetrust.php',
            'primetrust'
        );
    }

    public function provides(): array
    {
        return [PrimeTrust::class];
    }
}
