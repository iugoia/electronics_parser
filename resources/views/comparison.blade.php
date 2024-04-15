@extends('layouts.header-footer')
@section('title')
    Сравнение цен
@endsection

@section('content')
    <section class="comparison">
        <div class="container">
            <h1>Сравнение Xiaomi Redmi Note 12 и Xiaomi Redmi Note 12S</h1>
            <ul class="catalog_list">
                <li class="catalog_item">
                    <a href="#">
                        <div class="catalog_fav">
                            <ion-icon name="heart-circle" class="icon"></ion-icon>
                        </div>
                        <div class="catalog_img">
                            <img src="{{asset('image/sr-1.jpg')}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <p class="catalog_info_name">6.43" Смартфон Xiaomi Redmi Note 12S 256 ГБ черный</p>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от 20 182₽</p>
                                <hr class="hr">
                                <a href="#" class="btn btn_secondary">Убрать из сравнения</a>
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
                            <img src="{{asset('image/sr-2.jpg')}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <p class="catalog_info_name">6.67" Смартфон Xiaomi Redmi Note 12 128 ГБ черный</p>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от 15 283₽</p>
                                <hr class="hr">
                                <a href="#" class="btn btn_secondary">Убрать из сравнения</a>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="comparison_list">
                <h2>Сравнение характеристик</h2>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Гарантия</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">12 мес. от продавца / производителя</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">12 мес. от продавца / производителя</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Модель</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">Xiaomi Redmi Note 12S</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">Xiaomi Redmi Note 12</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Год релиза</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">2023</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">2023</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Тип</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">смартфон</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">смартфон</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Код производителя</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">[MZB0E85RU]</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">[MZB0DOORU]</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Цвет, заявленный производителем</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">черный</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">серый оникс</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Цвет задней панели</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">черный</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">черный</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Цвет граней</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">черный</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">черный</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Поддержка сетей 5G</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">нет</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">нет</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Поддержка сетей 4G (LTE)</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">есть</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">есть</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Количество физических SIM-карт</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">2 SIM</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">2 SIM</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Формат SIM-карт</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">Nano-SIM</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">Nano-SIM</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Диапазоны частот 2G</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">GSM 850 (B5), GSM 900 (B8), GSM 1800 (B3), GSM 1900 (B2)</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">GSM 850 (B5), GSM 900 (B8), GSM 1800 (B3), GSM 1900 (B2)</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Диапазоны частот 3G</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">UMTS 850 (B5), UMTS 900 (B8), UMTS 1900 (B2), UMTS 2100 (B1)</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">UMTS 850 (B5), UMTS 900 (B8), UMTS 1900 (B2), UMTS 2100 (B1)</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Диапазоны частот 4G (LTE)</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">FDD-LTE 700 (B28), FDD-LTE 800 (B20), FDD-LTE 850 (B5), FDD-LTE 900 (B8), FDD-LTE 1800 (B3), FDD-LTE 2100 (B1), FDD-LTE 2600 (B7), TDD-LTE 2300 (B40), TDD-LTE 2500 (B41), TDD-LTE 2600 (B38)</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">FDD-LTE 700 (B28), FDD-LTE 800 (B20), FDD-LTE 850 (B5), FDD-LTE 900 (B8), FDD-LTE 1700 (B4), FDD-LTE 1800 (B3), FDD-LTE 1900 (B2), FDD-LTE 2100 (B1), FDD-LTE 2600 (B7), TDD-LTE 2300 (B40), TDD-LTE 2500 (B41), TDD-LTE 2600 (B38)</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Режим работы нескольких SIM-карт</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">режим ожидания</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">режим ожидания</p></div>
                        </section>
                    </div>
                </div>

                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Диагональ экрана</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">6.43"</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">6.67"</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Разрешение экрана</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">2400x1080</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">2400x1080</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Тип матрицы (подробно)</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">AMOLED</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">AMOLED</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Частота обновления экрана</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">90 Гц</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">120 Гц</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Конструктивные особенности экрана</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">-</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">безрамочный</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Плотность пикселей</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">409 ppi</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">395 ppi</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Технология изготовления матрицы</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">AMOLED</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">AMOLED</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Соотношение сторон</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">20:9</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">20:9</p></div>
                        </section>
                    </div>
                </div>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="group-table__option">
                            <span class="group-table__option-name">Количество цветов экрана</span>
                        </div>
                        <section class="group-table__row">
                            <div class="group-table__data"><p class="group-table__product-value">16 млн</p></div>
                            <div class="group-table__data"><p class="group-table__product-value">16.7 млн</p></div>
                        </section>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <style>
        .header {
            background: var(--white);
        }
    </style>
@endsection
