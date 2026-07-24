<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('isSuperadmin', function ($user) {
            return $user->role == 'superadmin'? Response::allow(): Response::deny('You must be a Superadministrator.');
        });
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin'? Response::allow(): Response::deny('You must be an Administrator.');
        });
        Gate::define('isAdminIsSuperadmin', function ($user) {
            return ($user->role == 'admin' || $user->role == 'superadmin')? Response::allow(): Response::deny('You must be an Administrator.');
        });
        Gate::define('isUser', function ($user) {
            return $user->role == 'user'? Response::allow(): Response::deny('You must be a Client.');
        });
    }
}
