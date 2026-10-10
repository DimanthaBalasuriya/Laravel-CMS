<?php

namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'address',
        'profile_image'
    ];

    protected $hidden = [
        'password'
    ];
}

composer require mongodb/laravel-mongodb 

composer require laravel/sanctum --ignore-platform-req=ext-mongodb