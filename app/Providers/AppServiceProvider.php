<?php

namespace App\Providers;

use App\Models\Category;
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
        view()->composer('layouts.FrontendLayouts', function ($view) {
            $categories = Category::where('status', true)->select('id','title', 'slug')->latest()->get();
            return $view->with('categories', $categories);
        });
    }
}
