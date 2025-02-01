<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;
use App\Models\Coupon;

class CouponPolicy
{
    /**
     * Determine whether the user can view-any the model.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view-any Coupon');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Coupon $model): bool
    {
        return $user->hasPermissionTo('view Coupon');
    }

    /**
     * Determine whether the user can create the model.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create Coupon');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Coupon $model): bool
    {
        return $user->hasPermissionTo('update Coupon');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Coupon $model): bool
    {
        return $user->hasPermissionTo('delete Coupon');
    }

    /**
     * Determine whether the user can delete-any the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete-any Coupon');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Coupon $model): bool
    {
        return $user->hasPermissionTo('restore Coupon');
    }

    /**
     * Determine whether the user can restore-any the model.
     */
    public function restoreAny(User $user): bool
    {
        return $user->hasPermissionTo('restore-any Coupon');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user): bool
    {
        return $user->hasPermissionTo('replicate Coupon');
    }

    /**
     * Determine whether the user can reorder the model.
     */
    public function reorder(User $user): bool
    {
        return $user->hasPermissionTo('reorder Coupon');
    }

    /**
     * Determine whether the user can force-delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return $user->hasPermissionTo('force-delete Coupon');
    }

    /**
     * Determine whether the user can force-delete-any the model.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->hasPermissionTo('force-delete-any Coupon');
    }

}
