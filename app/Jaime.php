<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaime extends Model
{
    public function produit(){
    	return $this->belongsTo(Produit::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
