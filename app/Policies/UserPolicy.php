<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;


class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM);
    }
    public function viewCategories(User $user)
    {
        return $user->hasRole(User::ROLE_ADM);
    }
       public function viewWorkers(User $user)
    {
        return $user->hasRole(User::ROLE_ADM);
    }




    public function viewVehicles(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM);
    }
    public function viewClients(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM);
    }
    public function viewBookings(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM);
    }



    public function create(User $user)
    {
        return $user->hasRole(User::ROLE_ADM);
    }
    public function show(User $user)
    {
        return $user->hasRole(User::ROLE_ADM);
    }
    public function edit(User $user)
    {
        return $user->hasRole(User::ROLE_ADM);
    }
}
