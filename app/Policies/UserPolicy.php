<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;


class UserPolicy
{
    use HandlesAuthorization;

    public function viewCategories(User $user)
    {
        return $user->hasRole(User::ROLE_ADM)
            ? Response::allow()
            : Response::deny('No tienes permiso para entrar a las categorías.');
    }

    public function viewWorkers(User $user)
    {
        return $user->hasRole(User::ROLE_ADM)
            ? Response::allow()
            : Response::deny('No tienes permiso para entrar a los trabajadores.');
    }

    public function viewBookings(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM)
            ? Response::allow()
            : Response::deny('No tienes permiso para entrar a las reservas.');
    }

    public function viewVehicles(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM)
            ? Response::allow()
            : Response::deny('No tienes permiso para entrar a los vehículos.');
    }
    public function viewClients(User $user)
    {
        return $user->hasRole(User::ROLE_TRA) || $user->hasRole(User::ROLE_ADM)
            ? Response::allow()
            : Response::deny('No tienes permiso para entrar a los clientes.');
    }

}
