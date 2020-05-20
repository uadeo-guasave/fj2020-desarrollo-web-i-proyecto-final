<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'firstname', 'lastname'
    ];

    protected $hidden = [
        'password', 'remember_code'
    ];
}
