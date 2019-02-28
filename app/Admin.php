<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

	public $table="admins";

    public function categories(){
    	return $this->hasMany('App\Categorie');
    }


    public function user(){
    	return $this->belongsTo('App\User');
    }

}