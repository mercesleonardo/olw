<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Http::macro('punkapi', function() {
            return Http::acceptJson()->baseUrl(url: config(key: 'punkapi.url'))
                ->retry(times: 3, sleepMilliseconds: 100);
        });
    }
}
