<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detay extends Model
{
    protected $table = 'detay'; // Tablo adı
    protected $fillable = ['image', 'tur_name', 'fiyat', 'indirimli_fiyat', 'aciklama', 'gün', 'ay', 'yer', 'detayli_aciklama', 'yaninizda_olmali']; // Doldurulabilir alanlar
}
