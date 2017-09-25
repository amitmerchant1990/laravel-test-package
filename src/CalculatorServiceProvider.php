<?php

namespace Amitmerchant\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // registed controller
        $this->app->make('Amitmerchant\Calculator\Controllers\CalculatorController');
        $this->loadViewsFrom(__DIR__ . '/views', 'calculator');
    }
}
