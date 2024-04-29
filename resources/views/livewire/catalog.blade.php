<div class="catalog_row">
    <div class="catalog_col catalog_form">

        <div class="catalog_form_group">
            <h2>Магазин</h2>
            <ul class="catalog_form_list">
                <li class="catalog_form_item">
                    <input type="checkbox" id="1" wire:model="shop" value="1">
                    <label for="1">
                        <p>Мегафон</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="2" wire:model="shop" value="2">
                    <label for="2">
                        <p>Зурмаркет</p>
                    </label>
                </li>
            </ul>
        </div>
        <div class="catalog_form_group">
            <h2>Раздел</h2>
            <ul class="catalog_form_list">
                <li class="catalog_form_item">
                    <input type="checkbox" id="mobile" wire:model="filter" value="mobile">
                    <label for="mobile">
                        <p>Смартфоны</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="telephones" wire:model="filter" value="telephones">
                    <label for="telephones">
                        <p>Кнопочные телефоны</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="second_hand_smartphones" wire:model="filter"
                           value="second_hand_smartphones">
                    <label for="second_hand_smartphones">
                        <p>Б/У смартфоны</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="planshety" wire:model="filter"
                           value="planshety">
                    <label for="planshety">
                        <p>Планшеты</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="notebooks" wire:model="filter" value="notebooks">
                    <label for="notebooks">
                        <p>Ноутбуки и аксессуары</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="accessories" wire:model="filter" value="accessories">
                    <label for="accessories">
                        <p>Аксессуары</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="elektrotransport" wire:model="filter" value="elektrotransport">
                    <label for="elektrotransport">
                        <p>Электро транспорт</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="modems_routers" wire:model="filter" value="modems_routers">
                    <label for="modems_routers">
                        <p>Модемы и роутеры</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="smart_watches" wire:model="filter" value="smart_watches">
                    <label for="smart_watches">
                        <p>Смарт-часы</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="igrovye_pristavki_i_aksessuary_k_nim" wire:model="filter"
                           value="igrovye_pristavki_i_aksessuary_k_nim">
                    <label for="igrovye_pristavki_i_aksessuary_k_nim">
                        <p>Приставки и игры</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="portativnaya_akustika_1" wire:model="filter"
                           value="portativnaya_akustika_1">
                    <label for="portativnaya_akustika_1">
                        <p>Аудиотехника</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="tekhnika_xiaomi_i_meizu" wire:model="filter"
                           value="tekhnika_xiaomi_i_meizu">
                    <label for="tekhnika_xiaomi_i_meizu">
                        <p>Xiaomi и Meizu</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="shlemy_i_ochki_virtualnoy_realnosti" wire:model="filter"
                           value="shlemy_i_ochki_virtualnoy_realnosti">
                    <label for="shlemy_i_ochki_virtualnoy_realnosti">
                        <p>Виртуальная реальность</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="ekshn_kamery" wire:model="filter"
                           value="ekshn_kamery">
                    <label for="ekshn_kamery">
                        <p>Экшн камеры</p>
                    </label>
                </li>
                <li class="catalog_form_item">
                    <input type="checkbox" id="umnyy_dom" wire:model="filter" value="umnyy_dom">
                    <label for="umnyy_dom">
                        <p>Умный дом</p>
                    </label>
                </li>
                {{--                <li class="catalog_form_item">--}}
                {{--                    <input type="checkbox" id="kids_watch" wire:model="filter" value="kids_watch">--}}
                {{--                    <label for="kids_watch">--}}
                {{--                        <p>Детские часы</p>--}}
                {{--                    </label>--}}
                {{--                </li>--}}
                {{--                <li class="catalog_form_item">--}}
                {{--                    <input type="checkbox" id="headphones_and_headsets" wire:model="filter"--}}
                {{--                           value="headphones_and_headsets">--}}
                {{--                    <label for="headphones_and_headsets">--}}
                {{--                        <p>Наушники</p>--}}
                {{--                    </label>--}}
                {{--                </li>--}}
                {{--                <li class="catalog_form_item">--}}
                {{--                    <input type="checkbox" id="planshet" wire:model="filter" value="planshet">--}}
                {{--                    <label for="planshet">--}}
                {{--                        <p>Планшеты</p>--}}
                {{--                    </label>--}}
                {{--                </li>--}}
                {{--                <li class="catalog_form_item">--}}
                {{--                    <input type="checkbox" id="automotive" wire:model="filter" value="automotive">--}}
                {{--                    <label for="automotive">--}}
                {{--                        <p>mashine</p>--}}
                {{--                    </label>--}}
                {{--                </li>--}}
                {{--                <li class="catalog_form_item">--}}
                {{--                    <input type="checkbox" id="for_kids" wire:model="filter" value="for_kids">--}}
                {{--                    <label for="for_kids">--}}
                {{--                        <p>Гейминг</p>--}}
                {{--                    </label>--}}
                {{--                </li>--}}
                {{--                <li class="catalog_form_item">--}}
                {{--                    <input type="checkbox" id="hobbies_and_gadgets" wire:model="filter" value="hobbies_and_gadgets">--}}
                {{--                    <label for="hobbies_and_gadgets">--}}
                {{--                        <p>Гейминг</p>--}}
                {{--                    </label>--}}
                {{--                </li>--}}
            </ul>
        </div>
        <button type="button" class="btn_clear" wire:click="clearAllFilters">Очистить все</button>
    </div>
    <div class="catalog_col catalog_catalog">
        <div class="sorts_catalog">
            <div class="input_icon input_search">
                <input type="text" class="input" wire:model="search" placeholder="Поиск по каталогу">
                <ion-icon name="search" class="icon"></ion-icon>
            </div>
            <div class="catalog_sort">
                <p>Сортировать</p>
                <select name="" id="" wire:model="sortBy">
                    <option value="default">По умолчанию</option>
                    <option value="name_asc">Название (А - Я)</option>
                    <option value="name_desc">Название (Я - А)</option>
                    <option value="price_asc">Цена (низкая > высокая)</option>
                    <option value="price_desc">Цена (высокая > низкая)</option>
                </select>
            </div>
        </div>
        <ul class="catalog_list">
            <div id="notification-container"></div>
            @if (session('success'))
                <script>
                    showNotification("{{ session('success') }}");
                </script>
            @endif
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
                        <img src="{{$product->photos[0]}}" alt="" loading="lazy">
                    </div>
                    <div class="catalog_info">
                        <a href="{{route('product', $product)}}">
                            <p class="catalog_info_name">{{$product->name}}</p>
                        </a>
                        <div class="catalog_price_info">
                            @if ($product->actual_price > 0)
                                <p>
                                    <span class="circle icon"></span>
                                    <span>В наличии</span>
                                </p>
                            @else
                                <p>
                                    <span class="circle icon red"></span>
                                    <span>Нет в наличии</span>
                                </p>
                            @endif
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
        <div class="paginator-center">
            {{$paginator->links()}}
        </div>
    </div>
</div>

<script>
    function showNotification(message) {
        var container = document.getElementById('notification-container');
        container.innerHTML = message;
        container.style.display = 'block';
        setTimeout(function () {
            container.style.display = 'none';
        }, 5000); // Спустя 5 секунд
    }
</script>
