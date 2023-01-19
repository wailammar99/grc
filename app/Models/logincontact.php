<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\contact as auth ;

class logincontact extends auth
{
    use HasFactory;
    protected $guard = "email,password";

    protected $fillable = [
       
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
