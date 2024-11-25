<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
	public $timestamps = false;

    /*Relacion con modelo State*/
	public function state(){
        return $this->belongsTo(FederalStates::class);
    }
}
