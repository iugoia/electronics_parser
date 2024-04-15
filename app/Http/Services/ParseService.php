<?php

namespace App\Http\Services;
use Illuminate\Http\JsonResponse;

class ParseService
{
    /**
     * @param $url
     * @return JsonResponse|bool|string
     */
    public function index($url): JsonResponse|bool|string
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

        $result = curl_exec($curl);
        if (!$result)
            return response()->json([
                'message' => "Ошибка CURL (ParseService index())",
                'error' => curl_error($curl)
            ]);
        else return $result;
    }
}
