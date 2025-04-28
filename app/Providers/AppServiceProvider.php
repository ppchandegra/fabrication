<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

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
        Blade::component('guest-layout', \App\View\Components\GuestLayout::class);
        Blade::component('app-layout', \App\View\Components\AppLayout::class);

        // Share services with all views using layouts.frontend
        View::composer('layouts.frontend', function ($view) {
            $services = Service::where('status', 1)->get();
            $view->with('services', $services);
        });
    }
}
