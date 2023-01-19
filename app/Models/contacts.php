<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as auth ;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class contacts extends auth 

{
    use HasFactory,Notifiable ;
    protected $guard = "contact";
    protected $fillable = ['nom','prenom','foction','email','telephone','client','password'];
    protected $guarded = ['email','password'];


}
