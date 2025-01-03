<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class myprofil extends Model
{
    use HasFactory;
    protected $table = 'myprofil';
    protected $fillable = ['mail', 'name']; // Doldurulabilir alanlar

    public function user()
    {
        return $this->belongsTo(Mainuser::class, 'mail', 'mail'); // 'mail' ile ilişkilendiriyoruz
    }
}
