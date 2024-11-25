<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FederalStates extends Model
{
    protected $table = 'federals_state';
	public $timestamps = false;

    /* Ralación con modelo Municipality*/
    public function municipalities(){

        return $this->hasMany(Municipality::class);
    }
    /* Ralación con modelo City*/
    public function tasks(){
        return $this->hasMany(City::class);
    }
}
