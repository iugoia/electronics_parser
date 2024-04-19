<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Агрегатор техники — это удобный сервис для сравнения цен и характеристик различных моделей бытовой и электронной техники.
          На нашем сайте вы найдете подробную информацию о товарах, отзывы покупателей и актуальные акции от магазинов."/>
    <meta name="keywords"
          content="агрегатор техники, сравнение цен, характеристики товаров, бытовая техника, электроника"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @livewireStyles
    <title>@yield('title')</title>
</head>
<body class="bg-[#242A38] text-white">

<header class="header">
    <div class="container">
        <div class="header_row">
            <a href="{{route('welcome')}}" class="logo">
                <img src="{{asset('image/logo.svg')}}" alt="" class="w-44">
            </a>

            <div class="header_col">
                <a href="{{route('comparison')}}" class="srav">
                    <svg width="34" height="34" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M4.66797 2.41797C3.42518 2.41797 2.41797 3.42518 2.41797 4.66797V17.332C2.41797 18.5748 3.42518 19.582 4.66797 19.582H17.334C18.5767 19.582 19.5842 18.5747 19.585 17.3315V4.66797C19.585 3.42518 18.5778 2.41797 17.335 2.41797H4.66797ZM0.917969 4.66797C0.917969 2.59676 2.59676 0.917969 4.66797 0.917969H17.335C19.4062 0.917969 21.085 2.59676 21.085 4.66797V17.332C21.0837 19.4027 19.4053 21.082 17.334 21.082H4.66797C2.59676 21.082 0.917969 19.4032 0.917969 17.332V4.66797ZM11.001 6.25097C11.4152 6.25097 11.751 6.58675 11.751 7.00097V14.999C11.751 15.4132 11.4152 15.749 11.001 15.749C10.5868 15.749 10.251 15.4132 10.251 14.999V7.00097C10.251 6.58675 10.5868 6.25097 11.001 6.25097ZM15.001 9.24997C15.4152 9.24997 15.751 9.58576 15.751 9.99997L15.751 14.999C15.751 15.4132 15.4152 15.749 15.001 15.749C14.5868 15.749 14.251 15.4132 14.251 14.999L14.251 9.99997C14.251 9.58575 14.5868 9.24997 15.001 9.24997ZM7.00097 11.583C7.41518 11.583 7.75097 11.9188 7.75097 12.333V14.999C7.75097 15.4132 7.41518 15.749 7.00097 15.749C6.58676 15.749 6.25097 15.4132 6.25097 14.999V12.333C6.25097 11.9188 6.58676 11.583 7.00097 11.583Z"
                              fill="#AFAFAF"></path>
                    </svg>
                </a>
                @if(auth()->check())
                    <a href="{{route('favorite')}}">
                        <svg width="34" height="34" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.25 6.36912C0.25 3.07041 2.65767 0.25 5.79925 0.25C7.49913 0.25 8.99404 1.08608 10 2.36847C11.0059 1.08613 12.5006 0.25 14.1996 0.25C17.3423 0.25 19.75 3.07167 19.75 6.36912C19.75 7.69532 19.2489 8.97129 18.5251 10.1284C17.7997 11.2883 16.8229 12.3733 15.8015 13.3326C13.7592 15.2508 11.4589 16.7397 10.3901 17.3906C10.1504 17.5365 9.84927 17.5365 9.60965 17.3904C8.54109 16.7391 6.24079 15.2501 4.19851 13.3322C3.17709 12.3729 2.20033 11.288 1.47488 10.1283C0.751138 8.97123 0.25 7.69533 0.25 6.36912ZM5.79925 1.75C3.63983 1.75 1.75 3.73625 1.75 6.36912C1.75 7.31789 2.11117 8.31698 2.74658 9.33278C3.38027 10.3458 4.25947 11.3316 5.22537 12.2387C6.94066 13.8496 8.86662 15.1546 10.0001 15.8678C11.1335 15.1552 13.0594 13.8502 14.7746 12.2392C15.7405 11.3321 16.6197 10.3462 17.2534 9.33299C17.8888 8.31707 18.25 7.3179 18.25 6.36912C18.25 3.73751 16.3602 1.75 14.1996 1.75C12.7203 1.75 11.3843 2.66549 10.6719 4.10155C10.5452 4.35679 10.2849 4.51824 10 4.51824C9.71508 4.51824 9.45476 4.35679 9.32813 4.10155C8.61575 2.66559 7.2798 1.75 5.79925 1.75Z"
                                  fill="#AFAFAF"></path>
                        </svg>
                    </a>
                @endif

                <a href="{{ route('catalog') }}"
                   class="btn btn_primary btn_icon">
                    <ion-icon name="ellipsis-horizontal" class="w-6 h-6 mr-2"></ion-icon>
                    Каталог товаров
                </a>
                @if(!auth()->check())
                    <a href="{{route('login')}}" class="auth">Авторизация</a>
                    <a href="{{route('register')}}" class="register btn_secondary">Регистрация</a>
                @else
                    <a href="{{route('logout')}}" class="auth">Выход</a>
                @endif
            </div>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        <div class="footer_row">
            <div class="footer_col footer_col_info">
                <a href="{{route('welcome')}}" class="logo">
                    <img src="{{asset('image/logo.svg')}}" alt="" class="w-52">
                </a>

                <p>Магазин гаджетов и электроники. В нашем каталоге <br>
                    представлен полный ассортимент смартфонов, планшетов, <br>
                    смарт-часов, компонентов для умного дома и других <br>
                    гаджетов производства всемирно известных брендов <br>
                    (Apple, Xiaomi, Samsung и т. д.). Мы продаем только <br>
                    оригинальную качественную технику, предлагая клиентам <br>
                    лояльные цены, персональные акции и дисконты. <br>
                    Сведения, указанные на сайте, носят справочный характер <br>
                    и не являются публичной офертой, определяемой статьями <br>
                    435, 437 ГК РФ.</p>
            </div>

            <div class="footer_col footer_col_category">
                <p class="blue">Категории</p>
                <ul class="footer_category_list">
                    <li><a href="" class="">Смартфоны</a></li>
                    <li><a href="" class="">Планшеты и книги</a></li>
                    <li><a href="" class="">Аудио</a></li>
                    <li><a href="" class="">TV и мониторы</a></li>
                    <li><a href="" class="">Компьютерная техника</a></li>
                    <li><a href="" class="">Гаджеты и электроника</a></li>
                    <li><a href="" class="">Часы и браслеты</a></li>
                    <li><a href="" class="">Аксессуары</a></li>
                    <li><a href="" class="">Виртуальная реальность</a></li>
                    <li><a href="" class="">Умный дом</a></li>
                </ul>

            </div>

            <div class="footer_col footer_contacts">
                <p class="blue">КОНТАКТЫ</p>

                <p class="phone">+7 (123) 456-78-90</p>
                <p class="email">info@p-katalog.ru</p>
                <p class="consulting">Бесплатная консультация <br> С 10:00 до 21:00, без выходных</p>
                <hr>
                <div class="contacts">
                    <a href="" class="hover:scale-110 duration-300">
                        <img src="{{asset('image/wa.svg')}}" alt="">
                    </a>

                    <a href="" class="hover:scale-110 duration-300">
                        <img src="{{asset('image/tg.svg')}}" alt="">
                    </a>

                    <a href="" class="hover:scale-110 duration-300">
                        <img src="{{asset('image/vk.svg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
@livewireScripts
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
