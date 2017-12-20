<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    protected $fillable = [
        'first_name','last_name','email','password','blood_group','city','mobile_number',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
