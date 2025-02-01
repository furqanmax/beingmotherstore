<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;
use App\Models\CountryCode;

class CountryCodePolicy
{
    /**
     * Determine whether the user can view-any the model.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view-any CountryCode');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CountryCode $model): bool
    {
        return $user->hasPermissionTo('view CountryCode');
    }

    /**
     * Determine whether the user can create the model.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create CountryCode');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CountryCode $model): bool
    {
        return $user->hasPermissionTo('update CountryCode');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CountryCode $model): bool
    {
        return $user->hasPermissionTo('delete CountryCode');
    }

    /**
     * Determine whether the user can delete-any the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete-any CountryCode');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CountryCode $model): bool
    {
        return $user->hasPermissionTo('restore CountryCode');
    }

    /**
     * Determine whether the user can restore-any the model.
     */
    public function restoreAny(User $user): bool
    {
        return $user->hasPermissionTo('restore-any CountryCode');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user): bool
    {
        return $user->hasPermissionTo('replicate CountryCode');
    }

    /**
     * Determine whether the user can reorder the model.
     */
    public function reorder(User $user): bool
    {
        return $user->hasPermissionTo('reorder CountryCode');
    }

    /**
     * Determine whether the user can force-delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return $user->hasPermissionTo('force-delete CountryCode');
    }

    /**
     * Determine whether the user can force-delete-any the model.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->hasPermissionTo('force-delete-any CountryCode');
    }

}
