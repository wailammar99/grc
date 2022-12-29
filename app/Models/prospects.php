<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prospects extends Model
{
    protected $fillable = ['societe','adresse','telephone','site_web'];
    protected $table = 'prospects';
    use HasFactory;
}
