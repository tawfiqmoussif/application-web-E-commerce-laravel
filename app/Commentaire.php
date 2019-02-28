<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
}
