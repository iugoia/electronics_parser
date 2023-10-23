@extends('layouts.header-footer')

@section('content')
    <section>
        <div class="mt-16">
            <p class="text-4xl font-bold mt-5">Смартфон Apple iPhone 14 128 ГБ, тёмная ночь, Dual SIM (nano SIM+eSIM)</p>

            <div class="flex mt-10 space-x-14">
                <div class="space-y-5 flex flex-col justify-center">
                    <div class="w-28 h-28 rounded-xl p-3 border border-[#F76A63]/50 hover:border-[#F76A63] hover:scale-[1.02] duration-300 cursor-pointer">
                        <img src="{{ asset('image/tapic.png') }}" alt="" class="w-full h-full">
                    </div>

                    <div class="w-28 h-28 rounded-xl p-3 border border-[#F76A63]/50 hover:border-[#F76A63] hover:scale-[1.02] duration-300 cursor-pointer">
                        <img src="{{ asset('image/tapic.png') }}" alt="" class="w-full h-full">
                    </div>

                    <div class="w-28 h-28 rounded-xl p-3 border border-[#F76A63]/50 hover:border-[#F76A63] hover:scale-[1.02] duration-300 cursor-pointer">
                        <img src="{{ asset('image/tapic.png') }}" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="w-96">
                    <img src="{{ asset('image/tapic.png') }}" alt="" class="w-full h-full">
                </div>
            </div>
        </div>
    </section>
@endsection