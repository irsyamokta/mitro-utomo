<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'order_id',
        'product_details',
        'payment_status',
        'shipping',
        'notes',
        'total_price',
        'resi',
        'quantity',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getProductDetailsAttribute($value)
    {
        return json_decode($value, true);
    }

}
