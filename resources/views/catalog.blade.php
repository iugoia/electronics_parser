@extends('layouts.header-footer')

@section('content')
    <section>
        <div class="mt-16">
            <p class="text-3xl font-bold">Каталог товаров</p>

            <div class="flex space-x-10 mt-10">
                <div class="space-y-5">
                    <div class="rounded-2xl">
                        <div class="p-3 bg-[#202430] rounded-xl">
                            <p class="font-bold text-lg">Производитель</p>
                        </div>

                        <ul class="p-3 mt-3 space-y-3">
                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    Apple
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    Asus
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    Blackview
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    Doogee
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    Google 
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    Honor
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl">
                        <div class="p-3 bg-[#202430] rounded-xl">
                            <p class="font-bold text-lg">Объём памяти</p>
                        </div>

                        <ul class="p-3 mt-3 space-y-3">
                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    8 ГБ
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    32 ГБ
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    64 ГБ
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    128 ГБ
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    256 ГБ
                                </a>
                            </li>

                            <li>
                                <a href="" class="flex items-center w-64 p-3 rounded-xl hover:bg-[#202430] duration-300">
                                    512 ГБ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full">
                    <div class="grid grid-cols-3 gap-5">
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
                </div>
            </div>
        </div>
    </section>
@endsection