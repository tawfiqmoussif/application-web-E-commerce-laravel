<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Produit extends Model
{
     use SoftDeletes;
     protected $dates = ['deleted_at'];



    public $table="produits";
     public function commands(){
    	return $this->belongsToMany('App\Command');
    }

    public function fournisseurs(){
    	return $this->belongsToMany('App\Fournisseur');
    }

    ///////////////////
     public function categorie(){
    	return $this->belongsTo('App\Categorie');
    }

    public function jaimes(){
        return $this->hasMany(Jaime::class);
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
}
