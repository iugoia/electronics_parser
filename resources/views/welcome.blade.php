@extends('layouts.header-footer')

@section('content')
    <section>
        <div class="flex items-center mt-5 space-x-5">
            <a href="" class="hover:opacity-50 duration-300">
                <ion-icon name="chevron-back" class="w-8 h-8 text-[#F76A63]"></ion-icon>
            </a>

            <a href="" class="hover:scale-[1.02] duration-300">
                <img src="{{asset('image/banner-2.png')}}" alt="" class="">
            </a>

            <a href="" class="hover:opacity-50 duration-300">
                <ion-icon name="chevron-forward" class="w-8 h-8 text-[#F76A63]"></ion-icon>
            </a>
        </div>
    </section>

    <section class="mt-[75px] flex flex-col items-center">
        <div class="flex space-x-5">
            <a href="">
                <div class="w-[400px] h-[600px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                    <p class="text-3xl font-bold">Телефоны</p>

                    <img src="{{asset('image/iphone.png')}}" alt="" class="w-[600px] h-[500px] mt-10">
                </div>
            </a>

            <div class="space-y-5">
                <div class="flex items-center space-x-5">
                    <a href="">
                        <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                            <p class="text-3xl font-bold">Наушники</p>

                            <img src="{{asset('image/headphone.png')}}" alt="" class="mt-10 ml-12">
                        </div>
                    </a>

                    <a href="">
                        <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                            <p class="text-3xl font-bold">Компьютеры</p>

                            <img src="{{asset('image/pc.png')}}" alt="" class="mt-6 ml-12">
                        </div>
                    </a>
                </div>

                <div class="flex items-center space-x-5">
                    <a href="">
                        <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                            <p class="text-3xl font-bold">Планшеты</p>

                            <img src="{{asset('image/ipad.png')}}" alt="" class="mt-10 ml-8">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-[400px] h-[290px] bg-[#202430] rounded-2xl p-8 hover:scale-105 duration-300 overflow-hidden">
                            <p class="text-3xl font-bold">Акустика</p>
                            
                            <img src="{{asset('image/ac.png')}}" alt="" class="mt-12 ml-14">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-[75px]">
        <div class="flex items-center justify-between">
            <p class="text-3xl font-bold">Популярные товары</p>

            <a href="{{ route('catalog') }}" class="text-sm font-bold flex items-center justify-center text-[#F76A63] hover:scale-105 duration-300">
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
                        <img src="{{asset('image/tapic.png')}}" alt="" class="w-52">
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
                <img src="{{asset('image/banner-3.png')}}" alt="" class="">
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
                <img src="{{asset('image/ras.png')}}" alt="">
            </div>
        </div>
    </section>
@endsection
