<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    public function show(Product $product)
    {
        return view('product', ['product' => $product]);
    }
}