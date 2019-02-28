<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
	public $table="commands";
   public function produits(){
    	return $this->belongsToMany('App\Produit');
    }

    ///////////////////////////////

    public function client(){
    	return $this->belongsTo('App\Client');
    }
}
