<?php

namespace RomegaDigital\MultitenancyNovaTool\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class Tenant
{
    use HandlesAuthorization;

    /**
     * Checks if user is allowed to see the resource.
     *
     * @param \Illuminate\Database\Eloquent\Model $user
     * @return void
     */
    public function viewAny($user)
    {
        $userClass = config('multitenancy.user_model');

        if (!$user instanceof $userClass) {
            return false;
        }

        return $user->can('access admin');
    }

    public function view()
    {
        return true;
    }

    public function create()
    {
        return true;
    }

    public function update()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }

    public function restore()
    {
        return true;
    }

    public function forceDelete()
    {
        return true;
    }
}
