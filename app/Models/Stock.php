<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stock extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'size',
        'quantity',
        'product_id',
    ];

    protected $casts = [
        'size' => 'float',
    ];

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }
    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
