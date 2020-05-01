<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ausuniversityquery extends Model
{
     protected $fillable = [
        'name', 'email', 'phone_number', 'gpa','discipline', 'university','degree_title','time',
    ];
}
