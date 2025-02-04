<?php

namespace App\Models;
use App\Models\User;
use App\Models\Persons;


use Illuminate\Database\Eloquent\Model;

class Secretariat extends Model
{
    protected $fillable = ['persons_id',
    'employee_contract_types_id',
    'potition_id',
    'organizational_unit_types_id'];

    public function person()
    {
        return $this->belongsTo(Persons::class, 'persons_id', 'id');
    }
}