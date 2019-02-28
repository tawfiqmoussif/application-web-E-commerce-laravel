<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
	public $table="profils";
     public function fournisseur(){
    	return $this->belongsTo('App\Fournisseur');
    }
}
