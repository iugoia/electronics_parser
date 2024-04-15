@extends('layouts.header-footer')

@section('content')
    <style>
        .header {
            background: var(--white);
        }
    </style>
    <section class="product">
        <div class="container">
            <div class="product_wrapper">
                <h1>{{$product->name}}</h1>
                <div class="product_row">
                    <div class="product_slider">
                        <div class="product_gallery">
                            <div class="product_slider">
                                <button type="button" class="btn btn_prev" data-controls="prev" tabindex="-1"
                                        aria-controls="tns22">
                                    <ion-icon name="chevron-up"></ion-icon>
                                </button>
                                <button type="button" class="btn btn_next" data-controls="next" tabindex="-1"
                                        aria-controls="tns22">
                                    <ion-icon name="chevron-down"></ion-icon>
                                </button>
                                <div class="tns_ovh" id="slider">
                                    <div class="tns_inner">
                                        <div class="tns_slider">
                                            @foreach($product->photos as $photo)
                                                <div class="item_slide">
                                                    <img src="{{$photo}}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_image">
                            <img src="{{$product->photos[0]}}" alt="">
                        </div>
                    </div>
                    <div class="product_info">
                        <p class="product_tiny_desc">ядер - 8x(2.8 ГГц), 4 ГБ, 2 SIM, AMOLED, 2400x1080, камера 50+8+2
                            Мп, NFC, 4G, GPS, FM, 5000 мА*ч
                            <a href="#char" class="link">подробнее</a>
                        </p>
                        <div class="product_info_price">
                            <div class="product_row">
                                <p class="price">от {{ number_format($product->actual_price, 0, '', ' ') }}₽</p>
                                <a href="#" class="product_fav">
                                    <svg width="24" height="24" viewBox="0 0 20 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M0.25 6.36912C0.25 3.07041 2.65767 0.25 5.79925 0.25C7.49913 0.25 8.99404 1.08608 10 2.36847C11.0059 1.08613 12.5006 0.25 14.1996 0.25C17.3423 0.25 19.75 3.07167 19.75 6.36912C19.75 7.69532 19.2489 8.97129 18.5251 10.1284C17.7997 11.2883 16.8229 12.3733 15.8015 13.3326C13.7592 15.2508 11.4589 16.7397 10.3901 17.3906C10.1504 17.5365 9.84927 17.5365 9.60965 17.3904C8.54109 16.7391 6.24079 15.2501 4.19851 13.3322C3.17709 12.3729 2.20033 11.288 1.47488 10.1283C0.751138 8.97123 0.25 7.69533 0.25 6.36912ZM5.79925 1.75C3.63983 1.75 1.75 3.73625 1.75 6.36912C1.75 7.31789 2.11117 8.31698 2.74658 9.33278C3.38027 10.3458 4.25947 11.3316 5.22537 12.2387C6.94066 13.8496 8.86662 15.1546 10.0001 15.8678C11.1335 15.1552 13.0594 13.8502 14.7746 12.2392C15.7405 11.3321 16.6197 10.3462 17.2534 9.33299C17.8888 8.31707 18.25 7.3179 18.25 6.36912C18.25 3.73751 16.3602 1.75 14.1996 1.75C12.7203 1.75 11.3843 2.66549 10.6719 4.10155C10.5452 4.35679 10.2849 4.51824 10 4.51824C9.71508 4.51824 9.45476 4.35679 9.32813 4.10155C8.61575 2.66559 7.2798 1.75 5.79925 1.75Z"
                                              fill="#AFAFAF"></path>
                                    </svg>
                                </a>
                            </div>
{{--                            <p class="price_memory">--}}
{{--                                <span>Память:</span>--}}
{{--                                <a href="#" class="active">128/4 ГБ</a>--}}
{{--                                <a href="#">256/8 ГБ</a>--}}
{{--                                <a href="#">128/6 ГБ</a>--}}
{{--                            </p>--}}
                            <div class="product_availability">
                                <p>В наличии:</p>
                                <a href="#" class="link">в 2 магазинах</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product_characteristics" id="char">
                <h2>Характеристики {{$product->name}}</h2>
                <ul class="character_list hidden">
                    @foreach ($product->characteristics as $title => $value)
                        <li class="character_item">
                            <p class="character_title">{{ $title }}</p>
                            <p class="character_value">{{ $value }}</p>
                        </li>
                    @endforeach
                </ul>
                <a href="#" class="btn btn_secondary" id="character">
                    <span>Развернуть все</span>
                    <ion-icon name="chevron-down" class="icon"></ion-icon>
                </a>
            </div>
{{--            <div class="description">--}}
{{--                <h2>Описание</h2>--}}
{{--                <p>Смартфон Xiaomi Redmi Note 12 с объемом встроенной памяти 128 ГБ производит верификацию личности по--}}
{{--                    отпечатку пальца. Трехмодульная оптика повысит четкость снимков в условиях кромешной темноты.--}}
{{--                    Интегрированное приложение Google-Объектив сумеет распознать не только тексты, но также штрих- и--}}
{{--                    QR-коды. Спрятанный в 6.67-дюймовом дисплее датчик настроит яркость в соответствии с внешней--}}
{{--                    освещенностью. Просмотр контента теперь возможен в солнечную погоду. Почти незаметные рамки--}}
{{--                    способствуют полному погружению в трансляцию.--}}
{{--                    Смартфон Xiaomi Redmi Note 12 выполнит мгновенную загрузку приложений и обеспечит навигацию между--}}
{{--                    ними без единой задержки. Высокая работоспособность достигается оперативной памятью объемом 4 ГБ и--}}
{{--                    8-ядерным процессором. Не допустить негативного воздействия влаги поможет защита корпуса по--}}
{{--                    стандарту IP53. Аккумулятор емкостью 5000 мАч выступает гарантом длительной автономной работы модели--}}
{{--                    без подключения к источнику питания.</p>--}}
{{--            </div>--}}

            <div class="shops">
                @php
                    $shop = $product->shop;
                @endphp
                <h2>Цены на {{$product->name}} - выбрать интернет-магазин</h2>
                <ul class="shops_list">
                    <li class="shop_item">
                        <div class="shop_product_image">
                            <img src="{{$product->photos[0]}}" alt="">
                        </div>
                        <div class="shop_product_info">
                            <h3>{{$product->name}}</h3>
                            <a href="{{$product->link}}" target="_blank">
                                <ion-icon name="ellipse" class="icon"></ion-icon>
                                <span>{{$shop->name}}</span>
                            </a>
                        </div>
                        <div class="shop_product_price">
                            <p>{{ number_format($product->actual_price, 0, '', ' ') }}₽</p>
                            <a href="{{$product->link}}" class="btn btn_primary" target="_blank">Перейти в магазин</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script src="{{asset('js/product.js')}}"></script>
@endsection
