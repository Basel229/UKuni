<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ukstudy extends Model
{
    protected $fillable = [
        'discipline', 'degree_title', 'univeristy', 'level', 'duration', 'type', 'session',
    ];
}
