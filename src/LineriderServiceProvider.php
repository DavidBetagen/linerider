<?php

namespace Betagen\Linerider;

use Illuminate\Support\ServiceProvider;

class LineriderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/linerider.php', 'linerider');

        $this->app->singleton('linerider', function () {
            return new Linerider(config('linerider'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/linerider.php' => config_path('linerider.php'),
        ], 'linerider-config');

        $this->loadRoutesFrom(__DIR__ . '/../routes/linerider.php');
    }
}
