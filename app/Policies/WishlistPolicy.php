<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Auth\Access\HandlesAuthorization;

class WishlistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Wishlist $wishlist)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        // Any user can create a new card
        return Auth::check();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function addItem(User $user, Wishlist $wishlist){
        
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Wishlist $wishlist)
    {
        return $user->id == $wishlist->userid
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Wishlist $wishlist)
    {
        //
    }

}
