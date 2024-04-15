<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['photos' => 'array', 'characteristics' => 'array'];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }
}
