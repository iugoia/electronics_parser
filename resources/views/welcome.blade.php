@extends('layouts.header-footer')

@section('content')
    <section class="slider_main">
        <div class="container">
            <div class="slider_par">
                <div class="slider_wrapper">
                    <ul class="slider">
                        <li class="slider_item">
                            <div class="slider_ctn">
                                <div class="slider_img">
                                    <img src="{{asset('image/banner_iphone.png')}}" alt="dsadasd">
                                </div>
                                <div class="slider_content">
                                    <h2>iPhone 15 Pro Max</h2>
                                    <p class="badge">Взгляните поближе</p>
                                    <ul class="characteristics_list">
                                        <li class="characteristic_item">128 GB</li>
                                        <li class="characteristic_item">256 GB</li>
                                        <li class="characteristic_item">512 GB</li>
                                        <li class="characteristic_item">1 TB</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="slider_item">
                            <div class="slider_ctn">
                                <div class="slider_img">
                                    <img src="{{asset('image/banner_iphone_r.png')}}" alt="dsadasd">
                                </div>
                                <div class="slider_content">
                                    <h2>iPhone 15</h2>
                                    <p class="badge">Взгляните поближе</p>
                                    <ul class="characteristics_list">
                                        <li class="characteristic_item">128 GB</li>
                                        <li class="characteristic_item">256 GB</li>
                                        <li class="characteristic_item">512 GB</li>
                                        <li class="characteristic_item">1 TB</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="slider_item">
                            <div class="slider_ctn">
                                <div class="slider_img slider_img_sm">
                                    <img src="{{asset('image/banner_watch.png')}}" alt="dsadasd">
                                </div>
                                <div class="slider_content">
                                    <h2>Apple Watch ultra 2</h2>
                                    <p class="badge">Взгляните поближе</p>
                                    <ul class="characteristics_list">
                                        <li class="characteristic_item">128 GB</li>
                                        <li class="characteristic_item">256 GB</li>
                                        <li class="characteristic_item">512 GB</li>
                                        <li class="characteristic_item">1 TB</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <a href="" class="btn btn_prev">
                    <ion-icon name="chevron-back" class="w-8 h-8 text-[#F76A63]"></ion-icon>
                </a>
                <a href="" class="btn btn_next">
                    <ion-icon name="chevron-forward" class="w-8 h-8 text-[#F76A63]"></ion-icon>
                </a>
            </div>
        </div>
    </section>

    <section class="mini_catalog">
        <div class="container">
            <div class="catalog_grid">
                <a href="" class="catalog_card">
                    <div
                        class="">
                        <p class="text-3xl font-bold">Телефоны</p>

                        <img src="{{asset('image/iphone.png')}}" alt="" class="w-[600px] h-[500px] mt-10">
                    </div>
                </a>

                <a href="" class="catalog_card">
                    <div
                        class="w-[400px] h-[600px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                        <p class="text-3xl font-bold">Наушники</p>

                        <img src="{{asset('image/headphone.png')}}" alt="" class="w-[600px] h-[500px] mt-10">
                    </div>
                </a>

                <a href="" class="catalog_card">
                    <div
                        class="w-[400px] h-[600px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                        <p class="text-3xl font-bold">Компьютеры</p>

                        <img src="{{asset('image/pc.png')}}" alt="" class="w-[600px] h-[500px] mt-10">
                    </div>
                </a>

                <a href="" class="catalog_card">
                    <div
                        class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                        <p class="text-3xl font-bold">Планшеты</p>

                        <img src="{{asset('image/ipad.png')}}" alt="" class="mt-10 ml-8">
                    </div>
                </a>

                <a href="" class="catalog_card">
                    <div
                        class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                        <p class="text-3xl font-bold">Акустика</p>

                        <img src="{{asset('image/ac.png')}}" alt="" class="mt-12 ml-14">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="catalog_main">
        <div class="container">
            <h2>Смартфоны и гаджеты купить - каталог и цены</h2>
            <div class="catalog_main_row">
                <p>Популярные товары</p>
                <a href="" class="catalog_link">
                    <span>Показать все</span>
                    <ion-icon name="chevron-forward-circle"></ion-icon>
                </a>
            </div>
            <ul class="catalog_list">
                <li class="catalog_item">
                    <a href="#">
                        <div class="catalog_fav">
                            <ion-icon name="heart-circle" class="icon"></ion-icon>
                        </div>
                        <div class="catalog_img">
                            <img src="{{asset('image/headphones.png')}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <p class="catalog_info_name">Беспроводные наушники
                                Apple AirPods 2 с зарядным
                                футляром</p>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от 11 128₽</p>
                                <hr class="hr">
                                <a href="#" class="btn btn_secondary">Добавить в сравнение</a>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="catalog_item">
                    <a href="#">
                        <div class="catalog_fav">
                            <ion-icon name="heart-circle" class="icon"></ion-icon>
                        </div>
                        <div class="catalog_img">
                            <img src="{{asset('image/headphones.png')}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <p class="catalog_info_name">Беспроводные наушники
                                Apple AirPods 2 с зарядным
                                футляром</p>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от 11 128₽</p>
                                <hr class="hr">
                                <a href="#" class="btn btn_secondary">Добавить в сравнение</a>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="catalog_item">
                    <a href="#">
                        <div class="catalog_fav">
                            <ion-icon name="heart-circle" class="icon"></ion-icon>
                        </div>
                        <div class="catalog_img">
                            <img src="{{asset('image/headphones.png')}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <p class="catalog_info_name">Беспроводные наушники
                                Apple AirPods 2 с зарядным
                                футляром</p>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от 11 128₽</p>
                                <hr class="hr">
                                <a href="#" class="btn btn_secondary">Добавить в сравнение</a>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="catalog_item">
                    <a href="#">
                        <div class="catalog_fav">
                            <ion-icon name="heart-circle" class="icon"></ion-icon>
                        </div>
                        <div class="catalog_img">
                            <img src="{{asset('image/headphones.png')}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <p class="catalog_info_name">Беспроводные наушники
                                Apple AirPods 2 с зарядным
                                футляром</p>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от 11 128₽</p>
                                <hr class="hr">
                                <a href="#" class="btn btn_secondary">Добавить в сравнение</a>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about_row">
                <div class="about_col about_img">
                    <img src="{{asset('image/about.png')}}" alt="">
                </div>
                <div class="about_col about_info">
                    <h2>Как пользоваться каталогом товаров?</h2>
                    <p><strong><span class="blue">p-Katalog</span> — многофункциональный сервис поиска товаров в интернет-магазинах и сравнения цен.</strong> Мы делаем акцент на весь спектр бытовой электроники, в будущем перечень охватываемых категорий может быть расширен.</p>
                    <p class="bg_blue">Наша цель - помочь вам быстро найти лучшие предложения. Мы предоставляем текстовый поиск и систему фильтрации по категориям. В будущем добавим сравнение характеристик товаров. Каждая карточка товара содержит подробные спецификации и доступные цены.</p>
                    <p>Система p-Katalog постоянно развивается, мы добавляем новые товары и подключаем новые магазины. Мы используем передовые технологии и лучший пользовательский опыт. Мы не продаем товары и не размещаем рекламу. Присоединяйтесь к нашей аудитории, получите больше информации в нижнем меню.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/slider.js')}}"></script>
@endsection
