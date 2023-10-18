<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>P-catalog</title>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-[#242A38] text-white">
    <div class="container mx-auto max-w-screen-xl">
        <header>
            <div class="py-8 flex items-center justify-between space-x-8">
                <a href="/" class="w-64">
                    <img src="{{asset('image/logo.svg')}}" alt="" class="w-44">
                </a>

                <form action="" class="w-full">
                    <label for="" class="flex items-center justify-end">
                        <input type="text" class="h-12 w-full bg-[#202430] text-sm pl-3 rounded-xl outline-none" placeholder="Поиск по каталогу">
                        <button type="submit" class="absolute mr-5 flex items-center justify-center">
                            <ion-icon name="search" class="w-6 h-6 rotate-90 text-[#F76A63] hover:scale-110 duration-300"></ion-icon>
                        </button>
                    </label>
                </form>

                <a href="{{ route('catalog') }}" class="flex items-center justify-center w-96 h-12 bg-gradient-to-r from-[#F54B64] to-[#F78361] rounded-xl uppercase font-medium hover:scale-105 duration-300">
                    <ion-icon name="ellipsis-horizontal" class="w-6 h-6 mr-2"></ion-icon>
                    Каталог товаров
                </a>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="mt-44 mb-10">
            <div class="flex">
                <div class="">
                    <a href="">
                        <img src="{{asset('image/logo.svg')}}" alt="" class="w-52">
                    </a>

                    <p class="mt-12">Магазин гаджетов и электроники. В нашем каталоге <br>
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

                <div class="ml-20 flex space-x-10 border-r border-white/30 pr-10">
                    <ul class="space-y-5">
                        <li><a href="" class="font-bold text-[#F76A63] hover:opacity-50 duration-300">МЕНЮ</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Гарантия</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Оплата</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Доставка и возвраты</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Кредит</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Блог</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Контакты</a></li>
                    </ul>

                    <ul class="space-y-5">
                        <li><a href="{{ route('catalog') }}" class="font-bold text-[#F76A63] hover:opacity-50 duration-300">КАТЕГОРИИ</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Смартфоны</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Планшеты и книги</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Аудио</a></li>
                        <li><a href="" class="hover:text-[#F76A63] duration-300">Компьютерная техника</a></li>
                    </ul>

                </div>

                <div class="ml-10">
                    <p class="font-bold text-[#F76A63]">КОНТАКТЫ</p>

                    <p class="text-xl font-bold mt-5">+7 (123) 456-78-90</p>
                    <p class="text-sm mt-5">info@p-katalog.ru</p>
                    <p class="text-sm opacity-50 mt-5">Бесплатная консультация <br> С 10:00 до 21:00, без выходных</p>
                    
                    <div class="flex items-center space-x-5 mt-20 border-t border-white/30 pt-5">
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

                    <a href="" class="flex items-center justify-center mt-10 h-12 bg-[#F76A63] rounded-xl font-bold hover:scale-105 duration-300">Задать вопрос</a>
                </div>
            </div>
        </footer>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>