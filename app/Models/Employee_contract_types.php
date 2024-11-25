<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_contract_types extends Model
{

    protected $fillable = [
        'name',
        'description',
        'headquarter_id'
       ];
}
