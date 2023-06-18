<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        User::class => UserPolicy::class,
        Worker::class => WorkerPolicy::class,
    ];


    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-categories', [UserPolicy::class, 'viewCategories']);
        Gate::define('view-workers', [UserPolicy::class, 'viewWorkers']);
        Gate::define('view-bookings', [UserPolicy::class, 'viewBookings']);
        Gate::define('view-vehicles', [UserPolicy::class, 'viewVehicles']);
        Gate::define('view-clients', [UserPolicy::class, 'viewClients']);
        Gate::define('view-services', [UserPolicy::class, 'viewServices']);
        Gate::define('view-myvehicles', [UserPolicy::class, 'viewMyvehicles']);
        Gate::define('view-cart', [UserPolicy::class, 'viewCart']);
        Gate::define('view-addcart', [UserPolicy::class, 'viewAddcart']);
    }
}
