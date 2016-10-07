<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokedex extends Model{

    protected $table ='pokedex';
    public function tipos(){
    	return $this->belongsToMany('App\tipo');

    }
}
