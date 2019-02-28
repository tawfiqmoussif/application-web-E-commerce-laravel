<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

	public $table="clients";

    public function commands(){
    	return $this->hasMany('App\Command');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
