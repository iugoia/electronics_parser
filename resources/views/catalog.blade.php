@extends('layouts.header-footer')
@section('title')
    Каталог
@endsection
@section('content')
    <section class="catalog">
        <div class="container">
            <h1 class="">Каталог товаров</h1>
            @livewire('catalog')
        </div>
    </section>
@endsection
