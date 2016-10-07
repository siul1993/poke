<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candy extends Model{

    protected $table ='candy';
    public function candys(){
    	return $this->belongsToMany('App\tipo');
    	
    }
}
