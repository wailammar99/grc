<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\contact as auth ;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class contacts extends Model
{
    use HasFactory,Notifiable ;
    protected $fillable = ['nom','prenom','foction','email','telephone','client','password'];
    protected $guarded = ['email','password'];

}
