<?php

namespace Bakhtiari\PaymentGateway;

use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadViewsFrom(__DIR__ . '/views', 'gateway');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/bakhtiari/paymentgateway')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Bakhtiari\PaymentGateway\PaymentGatewayController');
    }
}
