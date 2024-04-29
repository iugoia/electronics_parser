<?php

namespace App\Http\Controllers;

use App\Http\Services\ParseService;
use App\Models\Product;
use phpQuery;

class ZurmarketController extends Controller
{
    private ParseService $parseService;
    private $baseUrl = "https://zurmarket.ru";

    public function __construct(ParseService $parseService)
    {
        $this->parseService = $parseService;
    }

    public function parseLinks()
    {
        set_time_limit(10000000);
        if (Product::where('shop_id', 2)->count() == 0) {
            $this->addCategory();
        }
        $url = "$this->baseUrl/catalog/";
        $html = $this->parseService->index($url);

        $pq = phpQuery::newDocument($html);

        $catalogLinks = $pq->find(".section_info .sect a");
        $arrCatalogLinksData = [];

        foreach ($catalogLinks as $link) {
            $arrCatalogLinksData[] = pq($link)->attr('href');
        }

        $arrProductLinksData = [];

        foreach ($arrCatalogLinksData as $link) {
            $html = $this->parseService->index("$this->baseUrl$link");
            $pq = phpQuery::newDocument($html);
            $productLinks = $pq->find('.item-title a');

            foreach ($productLinks as $productLink) {
                $arrProductLinksData[] = pq($productLink)->attr('href');
            }
        }

        foreach ($arrProductLinksData as $link) {
            $html = $this->parseService->index("$this->baseUrl$link");
            $pq = phpQuery::newDocument($html);

            $photos = $pq->find('.slides:first-of-type img');
            $arrPhotoData = [];
            foreach ($photos as $photo) {
                $arrPhotoData[] = $this->baseUrl . pq($photo)->attr('src');
            }

            $actualPrice = $pq->find('.values_wrapper:first-of-type')->text();
            $actualPrice = str_replace(' ', '', $actualPrice);

            $actualPrice = str_replace(['$', '₽', '€', '£', '¥'], '', $actualPrice);

            $actualPrice = (integer)$actualPrice;

            $oldPrice = $pq->find('.values_wrapper:nth-child(2)')->text();
            $oldPrice = str_replace(' ', '', $oldPrice);

            $oldPrice = str_replace(['$', '₽', '€', '£', '¥'], '', $oldPrice);

            $oldPrice = (integer)$oldPrice;

            $title = $pq->find('h1')->text();

            $characteristicsData = [];

            foreach ($pq->find('.propertyYandex') as $property) {
                $property = pq($property);

                $groupData = [];

                foreach ($property->find('dt') as $dtElement) {
                    $dtElement = pq($dtElement);

                    $dt = trim($dtElement->find('span')->text());

                    $ddElement = $dtElement->next('dd');

                    if ($ddElement->length) {
                        $dd = trim($ddElement->find('span')->text());

                        $groupData[$dt] = $dd;
                    }
                }
                $characteristicsData = array_merge($characteristicsData, $groupData);
            }

            $dataToCreateProduct = [
                'photos'          => $arrPhotoData,
                'name'            => $title,
                'actual_price'    => $actualPrice,
                'old_price'       => $oldPrice,
                'link'            => "$this->baseUrl$link",
                'shop_id'         => 2,
                'characteristics' => $characteristicsData
            ];

            Product::create($dataToCreateProduct);
        }
    }

    public function addCategory()
    {
        $products = Product::where('shop_id', 2)->get();

        foreach ($products as $product) {
            $link = $product->link;
            $type = explode('/', parse_url($link, PHP_URL_PATH))[3];
            $product->type = $type;
            $product->save();
        }
    }
}
