<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_number', 'gpa','subject', 'degree_level','preferred_destination', 'country', 'city',
    ];
}
