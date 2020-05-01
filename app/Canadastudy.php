<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canadastudy extends Model
{
    protected $fillable = [
        'discipline', 'degree_title', 'university', 'time',
    ];
}
