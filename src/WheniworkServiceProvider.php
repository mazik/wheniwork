<?php

namespace Mazik\Wheniwork;

use Wheniwork;
use Illuminate\Support\ServiceProvider;

class WheniworkServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/wheniwork.php' => config_path('wheniwork.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/wheniwork.php', 'wheniwork'
        );

        $this->app->singleton(Wheniwork::class, function () {
            return new Wheniwork(config('wheniwork.api'), config('wheniwork.options'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Wheniwork::class];
    }
}
