<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'first_name','last_name','email','password','blood_group','city','mobile_number',
    ];

    protected $hidden = [
        'password'
    ];
}
