<?php

namespace App\Models;

use App\Http\Controllers\FavoriteController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['photos' => 'array', 'characteristics' => 'array'];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(FavoriteController::class);
    }
}
