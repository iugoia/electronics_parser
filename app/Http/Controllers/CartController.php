<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    public function addToCompare(Product $product)
    {
        $compareList = session()->get('compare_list', []);
        $compareList[] = $product->id;
        session()->put('compare_list', $compareList);
        return redirect()->back()->with('success', 'Товар добавлен к сравнению');
    }

    public function removeFromCompare(Product $product)
    {
        $compareList = session()->get('compare_list', []);
        $compareList = array_diff($compareList, [$product->id]);
        session()->put('compare_list', $compareList);
        return redirect()->back()->with('success', 'Товар удален из сравнения');
    }

    public function clearCompareList()
    {
        session()->forget('compare_list');
        return redirect()->back()->with('success', 'Список сравнения очищен');
    }
}
