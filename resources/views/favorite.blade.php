@extends('layouts.header-footer')

@section('title')
    Избранное
@endsection

@section('content')
    <section class="favorite">
        <div class="container">
            <h1>Избранное</h1>
            <div class="favorite_wrap">
                <p class="price">2 товара на сумму 35 998 ₽</p>
                <ul class="favorite_list">
                    <li class="favorite_item">
                        <div class="favorite_col favorite_img">
                            <img src="{{asset('image/sr-1.jpg')}}" alt="">
                        </div>
                        <div class="favorite_col favorite_content">
                            <p>6.67" Смартфон Xiaomi Redmi Note 12 128 ГБ черный [ядер - 8x(2.8 ГГц), 4 ГБ, 2 SIM, AMOLED, 2400x1080, камера 50+8+2 Мп, NFC, 4G, GPS, FM, 5000 мА*ч]</p>
                            <div class="row">
                                <p class="fav">
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <a href="#" class="link">Подробнее</a>
                            </div>
                        </div>
                        <div class="favorite_col favorite_price">
                            <p>от 14 999 ₽</p>
                            <a href="#" class="btn btn_secondary">Убрать</a>
                        </div>
                    </li>
                    <li class="favorite_item">
                        <div class="favorite_col favorite_img">
                            <img src="{{asset('image/sr-1.jpg')}}" alt="">
                        </div>
                        <div class="favorite_col favorite_content">
                            <p>6.67" Смартфон Xiaomi Redmi Note 12 128 ГБ черный [ядер - 8x(2.8 ГГц), 4 ГБ, 2 SIM, AMOLED, 2400x1080, камера 50+8+2 Мп, NFC, 4G, GPS, FM, 5000 мА*ч]</p>
                            <div class="row">
                                <p class="fav">
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <a href="#" class="link">Подробнее</a>
                            </div>
                        </div>
                        <div class="favorite_col favorite_price">
                            <p>от 14 999 ₽</p>
                            <a href="#" class="btn btn_secondary">Убрать</a>
                        </div>
                    </li>
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
