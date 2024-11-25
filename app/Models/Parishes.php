<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parishes extends Model
{
    protected $table = 'parishes';
	public $timestamps = false;

	/*Relacion con modelo Municipality*/
	public function municipality(){

        return $this->belongsTo(Municipality::class);
}
}
