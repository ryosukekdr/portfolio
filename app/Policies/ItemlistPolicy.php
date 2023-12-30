<?php

namespace App\Policies;

use App\Models\Itemlist;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemlistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Blog  $itemlist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function edit(User $user, Itemlist $itemlist)
    {
        return $user->id === $itemlist->user_id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Blog  $itemlist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete_check(User $user, Itemlist $itemlist)
    {
        return $user->id === $itemlist->user_id;
    }
}
