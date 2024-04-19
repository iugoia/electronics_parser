<?php

namespace App\Http\Controllers;

use App\Models\FavoriteProduct;
use App\Models\Product;

class FavoriteController extends Controller
{
    public function toggle(Product $product)
    {
        $user = auth()->user();
        $isFavorite = FavoriteProduct::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->exists();

        if ($isFavorite) {
            FavoriteProduct::where('user_id', $user->id)
                ->where('product_id', $product->id)
                ->delete();
            return redirect()->back()->with('success', 'Продукт удален из избранного');
        }
        FavoriteProduct::create([
            'user_id'    => $user->id,
            'product_id' => $product->id
        ]);
        return redirect()->back()->with('success', 'Продукт добавлен в избранное');
    }
}
