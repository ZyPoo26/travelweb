<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart1 extends Model
{

    protected $table = 'cart1';
    protected $fillable = ['user_id', 'product_name', 'quantity'];

    // İlişkilendirme (isteğe bağlı)
    public function detay()
    {
        return $this->belongsTo(Detay::class, 'product_name', 'tur_name');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'product_name', 'urun_adi');
    }
}
