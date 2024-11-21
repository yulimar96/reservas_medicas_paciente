<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class secretariat extends Model
{
    protected $fillable = [
        'name',
        'surname1',
        'ci,',
        'email',
        'password',
    ];//

    public function User(): HasMany
    {
        return $this->belongsTo(User::class);
    }

}
