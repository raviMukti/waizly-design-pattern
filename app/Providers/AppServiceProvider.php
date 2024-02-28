<?php

namespace App\Providers;

// use App\Models\Product;
use App\Repository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Singleton ProductRepository
        // $this->app->singleton(ProductRepository::class, function ($app) {
        //     return new ProductRepository(new Product());
        // });

        $this->app->singleton(ProductRepository::class, function ($app) {
            return new ProductRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
