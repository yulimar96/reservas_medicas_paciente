<?php

namespace App\Models;
use App\Models\Persons;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['persons_id','medical_history'];

    public function person()
    {
        return $this->belongsTo(Persons::class, 'persons_id', 'id');
    }
}
