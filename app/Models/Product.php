<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'image',
        'name',
        'production',
        'description',
        'composition',
        'price',
        'category_id',
        'subcategory_id',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    public function subcategory(): BelongsTo {
        return $this->belongsTo(Subcategory::class);
    }
    public function stocks(): HasMany {
        return $this->hasMany(Stock::class);
    }
}
