<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;
use App\Models\WalletReport;

class WalletReportPolicy
{
    /**
     * Determine whether the user can view-any the model.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view-any WalletReport');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, WalletReport $model): bool
    {
        return $user->hasPermissionTo('view WalletReport');
    }

    /**
     * Determine whether the user can create the model.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create WalletReport');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, WalletReport $model): bool
    {
        return $user->hasPermissionTo('update WalletReport');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, WalletReport $model): bool
    {
        return $user->hasPermissionTo('delete WalletReport');
    }

    /**
     * Determine whether the user can delete-any the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete-any WalletReport');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, WalletReport $model): bool
    {
        return $user->hasPermissionTo('restore WalletReport');
    }

    /**
     * Determine whether the user can restore-any the model.
     */
    public function restoreAny(User $user): bool
    {
        return $user->hasPermissionTo('restore-any WalletReport');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user): bool
    {
        return $user->hasPermissionTo('replicate WalletReport');
    }

    /**
     * Determine whether the user can reorder the model.
     */
    public function reorder(User $user): bool
    {
        return $user->hasPermissionTo('reorder WalletReport');
    }

    /**
     * Determine whether the user can force-delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return $user->hasPermissionTo('force-delete WalletReport');
    }

    /**
     * Determine whether the user can force-delete-any the model.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->hasPermissionTo('force-delete-any WalletReport');
    }

}
