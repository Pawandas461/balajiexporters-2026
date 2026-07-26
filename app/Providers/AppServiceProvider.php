<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\Transport\BrevoApiTransport;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.admin', function ($view) {
            $notificationCount = auth()->user() ? auth()->user()->unreadNotifications()->count() : 0;
            $view->with('notificationCount', $notificationCount);
        });

        Mail::extend('brevo-api', function () {
            return new BrevoApiTransport(config('services.brevo.api_key'));
        });
    }
}
