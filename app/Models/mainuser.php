<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mainuser extends Model
{
    use HasFactory;

    // Mainuser tablosunun adı
    protected $table = 'mainuser';

    // Şifre ve diğer hassas verilerin güvenliği için fillable özelliği ayarlayabilirsiniz.
    protected $fillable = [
         'mail', 'password', // gerekli diğer alanlar
    ];

    public function profile()
    {
        return $this->hasOne(Myprofil::class, 'mail', 'mail'); // Myprofil tablosuyla mail üzerinden ilişkilendir
    }

}


