<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nzstudy extends Model
{
   protected $fillable = [
        'discipline', 'degree_title', 'university', 'time',
    ];

   
}
