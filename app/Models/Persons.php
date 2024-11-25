<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $fillable = [
        'name_1',
        'name_2',
        'surname_1',
        'surname_2',
        'sex',
        'nacionality',
        'identity_number',
        'phone_area_codes_id',
        'phone_number',
        'cell_phone_area_codes_id',
        'cellphone_number',
        'federals_state_id',
        'municipalities_id',
        'parishes_id',
        'cities_id',
        'address',
        'birth_date',
        'type',
        'active',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function secretariat()
    {
        return $this->hasOne(Secretariat::class, 'persons_id', 'id');
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, 'persons_id', 'id');
    }

    public function patient()
    {
        return $this->hasOne(Patients::class, 'persons_id', 'id');
    }
}