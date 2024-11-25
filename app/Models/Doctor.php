<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Persons;
use App\Models\Medical_specialities;

class Doctor extends Model
{
    protected $fillable = ['persons_id', 'medical_license', 'specialtys_id',
        'employee_contract_types_id',
        'potition_id',
        'organizational_unit_types_id'];

    public function person()
    {
        return $this->belongsTo(Persons::class, 'persons_id', 'id');
    }

    public function specialtys()
    {
        return $this->belongsTo(Medical_specialities::class,'specialtys_id', 'id');
    }//
}