<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	public $table="categories";
   public function produits(){
    	return $this->hasMany('App\Produit');
    }

    ////////////////////////////

     public function user(){
    	return $this->belongsTo('App\Admin');
    }
}
