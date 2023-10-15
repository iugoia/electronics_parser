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
                <a href="" class="w-64">
                    <img src="/img/logo.svg" alt="" class="w-44">
                </a>

                <form action="" class="w-full">
                    <label for="" class="flex items-center justify-end">
                        <input type="text" class="h-12 w-full bg-[#202430] text-sm pl-3 rounded-xl outline-none" placeholder="Поиск по каталогу">
                        <button type="submit" class="absolute mr-5 flex items-center justify-center">
                            <ion-icon name="search" class="w-6 h-6 rotate-90 text-[#F76A63] hover:scale-110 duration-300"></ion-icon>
                        </button>
                    </label>
                </form>

                <a href="" class="flex items-center justify-center w-96 h-12 bg-gradient-to-r from-[#F54B64] to-[#F78361] rounded-xl uppercase font-medium hover:scale-105 duration-300">
                    <ion-icon name="ellipsis-horizontal" class="w-6 h-6 mr-2"></ion-icon>
                    Каталог товаров
                </a>
            </div>


            <div class="flex items-center mt-5 space-x-5">
                <a href="" class="hover:opacity-50 duration-300">
                    <ion-icon name="chevron-back" class="w-8 h-8 text-[#F76A63]"></ion-icon>
                </a>

                <a href="" class="hover:scale-[1.02] duration-300">
                    <img src="/img/banner-2.png" alt="" class="">
                </a>

                <a href="" class="hover:opacity-50 duration-300">
                    <ion-icon name="chevron-forward" class="w-8 h-8 text-[#F76A63]"></ion-icon>
                </a>
            </div>
        </header>

        <section class="mt-[75px] flex flex-col items-center">
            <div class="flex space-x-5">
                <a href="">
                    <div class="w-[400px] h-[600px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                        <p class="text-3xl font-bold">Телефоны</p>

                        <img src="/img/iphone.png" alt="" class="w-[600px] h-[500px] mt-10">
                    </div>
                </a>

                <div class="space-y-5">
                    <div class="flex items-center space-x-5">
                        <a href="">
                            <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                                <p class="text-3xl font-bold">Наушники</p>

                                <img src="/img/headphone.png" alt="" class="mt-10 ml-12">
                            </div>
                        </a>
    
                        <a href="">
                            <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                                <p class="text-3xl font-bold">Компьютеры</p>

                                <img src="/img/pc.png" alt="" class="mt-6 ml-12">
                            </div>
                        </a>
                    </div>

                    <div class="flex items-center space-x-5">
                        <a href="">
                            <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                                <p class="text-3xl font-bold">Планшеты</p>

                                <img src="/img/ipad.png" alt="" class="mt-10 ml-8">
                            </div>
                        </a>
    
                        <a href="">
                            <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                                <p class="text-3xl font-bold">Акустика</p>

                                <img src="/img/ac.png" alt="" class="mt-12 ml-14">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-[75px]">
            <div class="flex items-center justify-between">
                <p class="text-3xl font-bold">Популярные товары</p>

                <a href="" class="text-sm font-bold flex items-center justify-center text-[#F76A63] hover:scale-105 duration-300">
                    Показать все

                    <ion-icon name="chevron-forward-circle" class="w-6 h-6 ml-2"></ion-icon>
                </a>
            </div>

            <div class="flex items-center mt-10 space-x-3">
                <a href="" class="hover:opacity-50 duration-300">
                    <ion-icon name="chevron-back" class="w-8 h-8 text-[#F76A63]"></ion-icon>
                </a>

                <div class="grid grid-cols-4 gap-5">
                    <div class="p-3 bg-[#202430] w-72 rounded-3xl hover:scale-105 duration-300 cursor-pointer">
                        <div class="flex justify-end">
                            <div class="w-16 h-16 bg-[#242A38] rounded-full flex items-center justify-center hover:opacity-50 duration-300">
                                <ion-icon name="heart-outline" class="w-9 h-9 text-[#F76A63]"></ion-icon>
                            </div>
                        </div>

                        <div class="w-full flex justify-center mt-5">
                            <img src="/img/tapic.png" alt="" class="w-52">
                        </div>

                        <p class="font-medium mt-5">Смартфон Apple iPhone 14
                        128 ГБ, тёмная ночь, Dual
                        SIM (nano SIM+eSIM)</p>

                        <div class="p-3 bg-[#242A38] rounded-2xl mt-5">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-[#27CC00] rounded-full"></div>
                                <p class="text-sm font-medium">В НАЛИЧИИ</p>
                            </div>

                            <p class="font-bold text-xl mt-3 ml-2">72 870₽</p>

                            <a href="" class="w-full h-12 flex items-center justify-center text-[#F76A63] border-2 border-[#F76A63] font-bold rounded-xl mt-3 hover:bg-[#F76A63] hover:text-white duration-300">Подробнее</a>
                        </div>
                    </div>

                    <div class="p-3 bg-[#202430] w-72 rounded-3xl hover:scale-105 duration-300 cursor-pointer">
                        <div class="flex justify-end">
                            <div class="w-16 h-16 bg-[#242A38] rounded-full flex items-center justify-center hover:opacity-50 duration-300">
                                <ion-icon name="heart-outline" class="w-9 h-9 text-[#F76A63]"></ion-icon>
                            </div>
                        </div>

                        <div class="w-full flex justify-center mt-5">
                            <img src="/img/tapic.png" alt="" class="w-52">
                        </div>

                        <p class="font-medium mt-5">Смартфон Apple iPhone 14
                        128 ГБ, тёмная ночь, Dual
                        SIM (nano SIM+eSIM)</p>

                        <div class="p-3 bg-[#242A38] rounded-2xl mt-5">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-[#27CC00] rounded-full"></div>
                                <p class="text-sm font-medium">В НАЛИЧИИ</p>
                            </div>

                            <p class="font-bold text-xl mt-3 ml-2">72 870₽</p>

                            <a href="" class="w-full h-12 flex items-center justify-center text-[#F76A63] border-2 border-[#F76A63] font-bold rounded-xl mt-3 hover:bg-[#F76A63] hover:text-white duration-300">Подробнее</a>
                        </div>
                    </div>

                    <div class="p-3 bg-[#202430] w-72 rounded-3xl hover:scale-105 duration-300 cursor-pointer">
                        <div class="flex justify-end">
                            <div class="w-16 h-16 bg-[#242A38] rounded-full flex items-center justify-center hover:opacity-50 duration-300">
                                <ion-icon name="heart-outline" class="w-9 h-9 text-[#F76A63]"></ion-icon>
                            </div>
                        </div>

                        <div class="w-full flex justify-center mt-5">
                            <img src="/img/tapic.png" alt="" class="w-52">
                        </div>

                        <p class="font-medium mt-5">Смартфон Apple iPhone 14
                        128 ГБ, тёмная ночь, Dual
                        SIM (nano SIM+eSIM)</p>

                        <div class="p-3 bg-[#242A38] rounded-2xl mt-5">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-[#27CC00] rounded-full"></div>
                                <p class="text-sm font-medium">В НАЛИЧИИ</p>
                            </div>

                            <p class="font-bold text-xl mt-3 ml-2">72 870₽</p>

                            <a href="" class="w-full h-12 flex items-center justify-center text-[#F76A63] border-2 border-[#F76A63] font-bold rounded-xl mt-3 hover:bg-[#F76A63] hover:text-white duration-300">Подробнее</a>
                        </div>
                    </div>

                    <div class="p-3 bg-[#202430] w-72 rounded-3xl hover:scale-105 duration-300 cursor-pointer">
                        <div class="flex justify-end">
                            <div class="w-16 h-16 bg-[#242A38] rounded-full flex items-center justify-center hover:opacity-50 duration-300">
                                <ion-icon name="heart-outline" class="w-9 h-9 text-[#F76A63]"></ion-icon>
                            </div>
                        </div>

                        <div class="w-full flex justify-center mt-5">
                            <img src="/img/tapic.png" alt="" class="w-52">
                        </div>

                        <p class="font-medium mt-5">Смартфон Apple iPhone 14
                        128 ГБ, тёмная ночь, Dual
                        SIM (nano SIM+eSIM)</p>

                        <div class="p-3 bg-[#242A38] rounded-2xl mt-5">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-[#27CC00] rounded-full"></div>
                                <p class="text-sm font-medium">В НАЛИЧИИ</p>
                            </div>

                            <p class="font-bold text-xl mt-3 ml-2">72 870₽</p>

                            <a href="" class="w-full h-12 flex items-center justify-center text-[#F76A63] border-2 border-[#F76A63] font-bold rounded-xl mt-3 hover:bg-[#F76A63] hover:text-white duration-300">Подробнее</a>
                        </div>
                    </div>
                </div>

                <a href="" class="hover:opacity-50 duration-300">
                    <ion-icon name="chevron-forward" class="w-8 h-8 text-[#F76A63]"></ion-icon>
                </a>
            </div>
        </section>

        <section class="mt-[75px] flex justify-center">
            <div class="flex space-x-8 items-center">
                <div class="">
                    <img src="/img/banner-3.png" alt="" class="">
                </div>

                <div class="space-y-7">
                    <p class="text-4xl font-bold text-[#F76A63]">Как пользоваться каталогом товаров?</p>

                    <p class=""><span class="text-[#F76A63]">p-Katalog</span> - многофункциональный сервис поиска и сравнения цен на <br>
                    товары в интернет-магазинах. Мы специализируемся на бытовой <br> 
                    электронике и планируем расширить ассортимент.</p>

                    <div class="p-5 bg-[#F76A63] rounded-2xl">
                        <p class="font-semibold text-lg">Наша цель - помочь вам быстро найти лучшие предложения. Мы <br> 
                        предоставляем текстовый поиск и систему фильтрации по <br> 
                        категориям. В будущем добавим сравнение характеристик товаров. <br> 
                        Каждая карточка товара содержит подробные спецификации и <br> 
                        доступные цены.</p>
                    </div>

                    <p class="font-medium">Мы постоянно обновляемся, добавляя новые товары и магазины. Мы <br> 
                    используем современные технологии и ценим ваш опыт. Мы не продаем <br> 
                    товары и не размещаем рекламу. Присоединяйтесь и узнавайте больше в <br> 
                    меню ниже.</p>
                </div>
            </div>
        </section>

        <section class="mt-[75px] flex justify-center">
            <div class="flex bg-[#202430] rounded-3xl p-20 space-x-5">
                <div class="">
                    <p class="text-4xl font-bold">Подписка на рассылку акций</p>

                    <p class="text-lg font-light mt-5">Давайте дружить! Оформите подписку на рассылку наших акций <br> 
                    получите бесплатную доставку на свою первую покупку!</p>

                    <form action="" class="mt-10 flex flex-col">
                        <label for="number">
                            <p class="text-lg font-bold">ВВЕДИТЕ СВОЙ ТЕЛЕФОН:</p>
                            <input type="text" name="number" id="number" class="p-3 w-96 bg-[#242A38] rounded-xl outline-none mt-2 focus:scale-105 duration-300" placeholder="+7">
                        </label>

                        <button class="p-4 w-96 bg-[#F76A63] font-bold rounded-xl mt-5 text-lg hover:scale-105 duration-300">Подписаться</button>
                    </form>
                </div>

                <div class="">
                    <img src="/img/ras.png" alt="">
                </div>
            </div>
        </section>

        <footer class="mt-[100px] mb-10">
            <div class="flex">
                <div class="">
                    <a href="">
                        <img src="/img/logo.svg" alt="" class="w-52">
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
                        <li><a href="" class="font-bold text-[#F76A63] hover:opacity-50 duration-300">КАТЕГОРИИ</a></li>

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

                    <p class="text-sm opacity-50 mt-5">Бесплатная консультация <br>
                    С 10:00 до 21:00, без выходных</p>

                    <div class="flex items-center space-x-5 mt-20 border-t border-white/30 pt-5">
                        <a href="" class="hover:scale-110 duration-300">
                            <img src="/img/wa.svg" alt="">
                        </a>
                        
                        <a href="" class="hover:scale-110 duration-300">
                            <img src="/img/tg.svg" alt="">
                        </a>

                        <a href="" class="hover:scale-110 duration-300">
                            <img src="/img/vk.svg" alt="">
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