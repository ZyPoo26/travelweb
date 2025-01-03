<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = ['user_id', 'product_name', 'quantity'];

    // Cart modelindeki ürün adı ile ilişki
    public function product()
    {
        return $this->hasOne(Product::class, 'name', 'product_name');
    }

    // Kullanıcı ile ilişki
    public function user()
    {
        return $this->belongsTo(Mainuser::class, 'user_id', 'id');
    }
}
