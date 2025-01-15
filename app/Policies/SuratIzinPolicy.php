<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\Suratizin;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuratIzinPolicy
{
    /**
     * Create a new policy instance.
     */
    use HandlesAuthorization;
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_surat::izin');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Suratizin $suratizin): bool
    {
        return $user->can('view_surat::izin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_surat::izin');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Suratizin $suratizin): bool
    {
        return $user->can('update_surat::izin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Suratizin $suratizin): bool
    {
        return $user->can('delete_surat::izin');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_surat::izin');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Suratizin $suratizin): bool
    {
        return $user->can('force_delete_surat::izin');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_surat::izin');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Suratizin $suratizin): bool
    {
        return $user->can('restore_surat::izin');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_surat::izin');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Suratizin $suratizin): bool
    {
        return $user->can('replicate_surat::izin');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_surat::izin');
    }
}
