<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assessment extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email','phone_number' ,'age', 'marital_status', 'children', 'english','french','level_of_studies','have_you_ever','visa_status','relatives_canada','net_worth','information','resume',
    ];
}
