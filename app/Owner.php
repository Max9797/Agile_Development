<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
     use Notifiable;

     protected $guard = 'owner';

     protected $fillable = [
         'name', 'email', 'password',
     ];

     protected $hidden = [
         'password', 'remember_token',
     ];
}

