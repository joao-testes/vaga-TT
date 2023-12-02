<?php

namespace App\Providers;

use App\Contracts\ApiRandomServiceContract;
use App\Services\ApiRandomDataService;
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
        $this->app->bind(ApiRandomServiceContract::class, ApiRandomDataService::class);
    }
}
