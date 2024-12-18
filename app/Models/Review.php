<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'order_id',
        'review',
        'rating',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
