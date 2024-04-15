<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('registration');
    Route::post('/login', [\App\Http\Controllers\RegisterController::class, 'login'])->name('auth');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\RegisterController::class, 'logout'])->name('logout');
});

Route::post('/test', [\App\Http\Controllers\ParseDNSController::class, 'test']);

Route::prefix('/megafon')->group(function () {
    Route::prefix('/parse')->group(function () {
        Route::get('/product-links', [\App\Http\Controllers\ParseDNSController::class, 'parseProductLinks']);
        Route::get('/product-characteristics', [\App\Http\Controllers\ParseDNSController::class, 'parseCharacteristics']);
        Route::get('/parseProductLinksFromCatalog', [\App\Http\Controllers\ParseDNSController::class, 'parseProductLinksFromCatalog']);
        Route::get('/addCategoryToProductLink', [\App\Http\Controllers\ParseDNSController::class, 'addCategoryToProductLink']);
    });
});


Route::get('/dns', function () {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://mapi.dns-shop.ru/v1/get-search-result?q=%D0%BD%D0%BE%D1%83%D1%82%D0%B1%D1%83%D0%BA%20acer&init=0&p=1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'CityId: 30b7c1f3-03fb-11dc-95ee-00151716f9f5';
    $headers[] = 'User-Agent: ru.dns.shop.android/0.66.0-18';
    $headers[] = 'InstallationId: Ck+pkr91S3Cg73CMayWwKg==';
    $headers[] = 'X-Dns-App-Id: 0.66.0-18';
    $headers[] = 'X-Dns-Timestamp: 1706369647691';
    $headers[] = 'Sentry-Trace: 1f7b92d2d035450394f97d9ba132253b-765fa15519a34048-0';
    $headers[] = 'Baggage: sentry-environment=production,sentry-public_key=44d903f0bf2440fbad140a95aca3c78a,sentry-release=ru.dns.shop.android%400.66.0-18%2B660018,sentry-sample_rate=0.01,sentry-sampled=false,sentry-trace_id=1f7b92d2d035450394f97d9ba132253b,sentry-transaction=%2Fsearch_suggestions';
    $headers[] = 'Host: mapi.dns-shop.ru';
    $headers[] = 'X-Dns-Hash: 428967641373f64c63fd7046450a997a';

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
});


Route::get('/', function () {
    $product = \App\Models\Product::first();
    return new \Illuminate\Http\JsonResponse($product);
});

