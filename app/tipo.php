<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class tipo extends Model{

    protected $table ='tipos';
    public function pokemon(){
    	return $this->belongsToMany('App\pokedex');

    }
}
