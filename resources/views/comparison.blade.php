@extends('layouts.header-footer')
@section('title')
    Сравнение цен
@endsection

@section('content')
    @php
        $compareList = session()->get('compare_list', []);
        $products = \App\Models\Product::whereIn('id', $compareList)->get();
    @endphp
    <style>
        h1 {
            font-size: 24px !important;
        }

        h1 span {
            font-weight: 600;
        }
    </style>
    <section class="comparison">
        <div class="container">
            <h1>Сравнение
                @foreach($products as $product)
                    <span>{{ $product->name }}</span><br>
                    @if (!$loop->last)
                        и
                    @endif
                @endforeach
            </h1>
            <ul class="catalog_list">
                @foreach($products as $product)
                    <li class="catalog_item">
                        @if(\App\Models\FavoriteProduct::where('user_id', auth()->id())->where('product_id', $product->id)->exists())
                            <a href="{{route('favorite.toggle', $product)}}" class="catalog_fav catalog_fav_added">
                                <svg width="24" height="24" viewBox="0 0 20 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="icon">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.25 6.36912C0.25 3.07041 2.65767 0.25 5.79925 0.25C7.49913 0.25 8.99404 1.08608 10 2.36847C11.0059 1.08613 12.5006 0.25 14.1996 0.25C17.3423 0.25 19.75 3.07167 19.75 6.36912C19.75 7.69532 19.2489 8.97129 18.5251 10.1284C17.7997 11.2883 16.8229 12.3733 15.8015 13.3326C13.7592 15.2508 11.4589 16.7397 10.3901 17.3906C10.1504 17.5365 9.84927 17.5365 9.60965 17.3904C8.54109 16.7391 6.24079 15.2501 4.19851 13.3322C3.17709 12.3729 2.20033 11.288 1.47488 10.1283C0.751138 8.97123 0.25 7.69533 0.25 6.36912ZM5.79925 1.75C3.63983 1.75 1.75 3.73625 1.75 6.36912C1.75 7.31789 2.11117 8.31698 2.74658 9.33278C3.38027 10.3458 4.25947 11.3316 5.22537 12.2387C6.94066 13.8496 8.86662 15.1546 10.0001 15.8678C11.1335 15.1552 13.0594 13.8502 14.7746 12.2392C15.7405 11.3321 16.6197 10.3462 17.2534 9.33299C17.8888 8.31707 18.25 7.3179 18.25 6.36912C18.25 3.73751 16.3602 1.75 14.1996 1.75C12.7203 1.75 11.3843 2.66549 10.6719 4.10155C10.5452 4.35679 10.2849 4.51824 10 4.51824C9.71508 4.51824 9.45476 4.35679 9.32813 4.10155C8.61575 2.66559 7.2798 1.75 5.79925 1.75Z"
                                          fill="#AFAFAF"></path>
                                </svg>
                            </a>
                        @else
                            <a href="{{route('favorite.toggle', $product)}}" class="catalog_fav">
                                <svg width="24" height="24" viewBox="0 0 20 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="icon">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.25 6.36912C0.25 3.07041 2.65767 0.25 5.79925 0.25C7.49913 0.25 8.99404 1.08608 10 2.36847C11.0059 1.08613 12.5006 0.25 14.1996 0.25C17.3423 0.25 19.75 3.07167 19.75 6.36912C19.75 7.69532 19.2489 8.97129 18.5251 10.1284C17.7997 11.2883 16.8229 12.3733 15.8015 13.3326C13.7592 15.2508 11.4589 16.7397 10.3901 17.3906C10.1504 17.5365 9.84927 17.5365 9.60965 17.3904C8.54109 16.7391 6.24079 15.2501 4.19851 13.3322C3.17709 12.3729 2.20033 11.288 1.47488 10.1283C0.751138 8.97123 0.25 7.69533 0.25 6.36912ZM5.79925 1.75C3.63983 1.75 1.75 3.73625 1.75 6.36912C1.75 7.31789 2.11117 8.31698 2.74658 9.33278C3.38027 10.3458 4.25947 11.3316 5.22537 12.2387C6.94066 13.8496 8.86662 15.1546 10.0001 15.8678C11.1335 15.1552 13.0594 13.8502 14.7746 12.2392C15.7405 11.3321 16.6197 10.3462 17.2534 9.33299C17.8888 8.31707 18.25 7.3179 18.25 6.36912C18.25 3.73751 16.3602 1.75 14.1996 1.75C12.7203 1.75 11.3843 2.66549 10.6719 4.10155C10.5452 4.35679 10.2849 4.51824 10 4.51824C9.71508 4.51824 9.45476 4.35679 9.32813 4.10155C8.61575 2.66559 7.2798 1.75 5.79925 1.75Z"
                                          fill="#AFAFAF"></path>
                                </svg>
                            </a>
                        @endif
                        <div class="catalog_img">
                            <img src="{{$product->photos[0]}}" alt="">
                        </div>
                        <div class="catalog_info">
                            <a href="{{route('product', $product)}}" target="_blank">
                                <p class="catalog_info_name">{{$product->name}}</p>
                            </a>
                            <div class="catalog_price_info">
                                <p>
                                    <ion-icon name="ellipse" class="icon"></ion-icon>
                                    <span>В наличии</span>
                                </p>
                                <p class="price">от {{ number_format($product->actual_price, 0, '', ' ') }}₽</p>
                                <hr class="hr">
                                @php
                                    $compareList = session()->get('compare_list', []);
                                    $isInCompareList = in_array($product->id, $compareList);
                                @endphp
                                @if($isInCompareList)
                                    <a href="{{route('cart.remove.product', $product)}}" class="btn btn_secondary">Убрать из
                                        сравнения</a>
                                @else
                                    <a href="{{route('cart.add.product', $product)}}" class="btn btn_secondary">Добавить к
                                        сравнению</a>
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="comparison_list">
                <h2>Сравнение характеристик</h2>
                <div class="group-options">
                    <div class="group-table__option-wrapper">
                        <div class="product_name">
                            @foreach($products as $product)
                                <p class="group-table__option-name">{{$product->name}}</p>
                            @endforeach
                        </div>
                        <section class="group-table__row">
                            @foreach($products as $product)
                                <div class="group-table__data">
                                    <div class="group-table__product-value">
                                        @foreach($product->characteristics as $key => $item)
                                            <div class="group-table__option">
                                                <span class="group-table__option-name">{{$key}}</span>
                                            </div>
                                            {{$item}}<br>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
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
