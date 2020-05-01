<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'user_id', 'name', 'type', 'description', 'logo', 'country', 'city','area','address','email','phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
