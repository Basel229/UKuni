<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'university_id', 'discipline', 'degree_title', 'level', 'duration', 'type', 'session',
    ];

    public function user()
    {
        return $this->belongsTo(University::class);
    }
}
