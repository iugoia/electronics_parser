@extends('layouts.header-footer')

@section('title')
    Избранное
@endsection

@section('content')
    @php
        $favorites = \App\Models\FavoriteProduct::where('user_id', auth()->id())->pluck('product_id');
        $products = \App\Models\Product::whereIn('id', $favorites)->get();
        $total = $products->sum('actual_price');
    @endphp
    <section class="favorite">
        <div class="container">
            <h1>Избранное</h1>
            <div class="favorite_wrap">
                <p class="price">2 товара на сумму {{ number_format($total, 0, '', ' ') }} ₽</p>
                <ul class="favorite_list">
                    @foreach($products as $product)
                        <li class="favorite_item">
                            <div class="favorite_col favorite_img">
                                <img src="{{$product->photos[0]}}" alt="">
                            </div>
                            <div class="favorite_col favorite_content">
                                <p>{{$product->name}}</p>
                                <div class="row">
                                    <p class="fav">
                                        <ion-icon name="ellipse" class="icon"></ion-icon>
                                        <span>В наличии</span>
                                    </p>
                                    <a href="{{$product->link}}" target="_blank" class="link">Подробнее</a>
                                </div>
                            </div>
                            <div class="favorite_col favorite_price">
                                <p>от {{ number_format($product->actual_price, 0, '', ' ') }} ₽</p>
                                <a href="#" class="btn btn_secondary">Убрать</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <style>
        .header {
            background: var(--white);
        }
    </style>
@endsection
