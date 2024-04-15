<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create(['name' => 'Мегафон', 'photo' => 'https://chelny.shop.megafon.ru/images/goods/img/logo.png?v1']);
    }
}
