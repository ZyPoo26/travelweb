<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table = 'shop';
    protected $fillable = ['urun_adi', 'image', 'urun_indirim'];
}
