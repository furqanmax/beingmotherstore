<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\User;
use App\Models\Post;

class PostPolicy
{
    /**
     * Determine whether the user can view-any the model.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view-any Post');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $model): bool
    {
        return $user->hasPermissionTo('view Post');
    }

    /**
     * Determine whether the user can create the model.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create Post');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $model): bool
    {
        return $user->hasPermissionTo('update Post');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $model): bool
    {
        return $user->hasPermissionTo('delete Post');
    }

    /**
     * Determine whether the user can delete-any the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete-any Post');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $model): bool
    {
        return $user->hasPermissionTo('restore Post');
    }

    /**
     * Determine whether the user can restore-any the model.
     */
    public function restoreAny(User $user): bool
    {
        return $user->hasPermissionTo('restore-any Post');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user): bool
    {
        return $user->hasPermissionTo('replicate Post');
    }

    /**
     * Determine whether the user can reorder the model.
     */
    public function reorder(User $user): bool
    {
        return $user->hasPermissionTo('reorder Post');
    }

    /**
     * Determine whether the user can force-delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return $user->hasPermissionTo('force-delete Post');
    }

    /**
     * Determine whether the user can force-delete-any the model.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->hasPermissionTo('force-delete-any Post');
    }

}
