<?php

namespace App\Policies;

use App\User;
use App\Produit;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProduitPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the produit.
     *
     * @param  \App\User  $user
     * @param  \App\Produit  $produit
     * @return mixed
     */
    public function view(User $user, Produit $produit)
    {
        return true;
    }

    /**
     * Determine whether the user can create produits.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the produit.
     *
     * @param  \App\User  $user
     * @param  \App\Produit  $produit
     * @return mixed
     */
    public function update(User $user, Produit $produit)
    {
        return $user->id==$produit->user_id;
    }

    /**
     * Determine whether the user can delete the produit.
     *
     * @param  \App\User  $user
     * @param  \App\Produit  $produit
     * @return mixed
     */
    public function delete(User $user, Produit $produit)
    {
        return $user->id==$produit->user_id;
    }
}
