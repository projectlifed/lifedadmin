<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Healthmate extends Model
{
    protected $fillable = [
        'centre_name',
        'phone',
        'email',
        'address',
        'country',
        'state',
        'city'
    ];

    // Relationship: Healthmate has many Users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
