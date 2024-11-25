<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical_specialities extends Model
{
    protected $fillable = [
        'name',
        'active'
       ];
    public function doctors(){
        return $this->hasMany(Doctor::class);
    }
}
