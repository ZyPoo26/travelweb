<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuer_name extends Model
{
    protected $table = 'user_name';
    protected $fillable = ['email', 'password']; // Doldurulabilir alanlar
}
