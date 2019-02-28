<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    public $table="fournisseurs";
     public function produits(){
    	return $this->belongsToMany('App\Produit');
    }

     public function profil(){
    	return $this->hasOne('App\Profil');
    }

    /////////////////

    

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
