<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'order_id',
        'stock_id',
        'quantity',
        'price',
    ];

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
    public function stock(): BelongsTo {
        return $this->belongsTo(Stock::class);
    }
}
