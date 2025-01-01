<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
{
    $this->registerPolicies();

    Gate::define('access-dashboard', function ($user) {
        return $user->roles->pluck('name')->contains('admin');
    });
}
}
