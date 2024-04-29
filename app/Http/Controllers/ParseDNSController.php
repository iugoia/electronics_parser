<?php

namespace App\Http\Controllers;

use App\Http\Services\ParseService;
use App\Models\MegafonProductLink;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use phpQuery;


class ParseDNSController extends Controller
{
    protected ParseService $parseService;
    protected string $base_url = "https://chelny.shop.megafon.ru/";

    public function __construct(ParseService $parseService)
    {
        $this->parseService = $parseService;
    }

    public function test(Request $request)
    {
        $link = $request->link;
        return new JsonResponse(MegafonProductLink::where('link', $link)->get());
    }

    /**
     * @return void
     */
    public function addCategoryToProductLink()
    {
        $productLinks = Product::all();
        foreach ($productLinks as $productLink) {
            $url = parse_url($productLink->link);
            $path = ltrim($url['path'], '/');
            $pathParts = explode('/', $path);
            $category = $pathParts[0] ?? null;
            $productLink->update(['type' => $category]);
        }
    }

    public function parseProductLinks()
    {
        set_time_limit(10000000);
        $url = $this->base_url;

        $catalogLinks = $this->parseLinks($url);

        $links = MegafonProductLink::pluck('link');

        foreach ($links as $link) {
            $this->parseCharacteristics($link);
        }

        $arrDataProductLinks = MegafonProductLink::pluck('link');
        if (count($arrDataProductLinks) === 0) {
            foreach ($catalogLinks as $link) {
                $arrDataProductLinks = $this->parseProductLinksFromCatalog($link);
            }
            $links = MegafonProductLink::pluck('link');

            foreach ($links as $link) {
                $this->parseCharacteristics($link);
            }
        }

        $this->addCategoryToProductLink();
    }

    public function parseCharacteristics($url)
    {
        $baseUrl = "https://chelny.shop.megafon.ru";
        $productLink = "$baseUrl$url";
        $html = $this->parseService->index($productLink);
        $pq = phpQuery::newDocument($html);

        $oldPriceElement = $pq->find('.b-price-cards__actual .b-price-cards__value')->eq(0);
        $oldPrice = intval(str_replace([' ', '&nbsp;'], '', $oldPriceElement->text()));

        $actualPriceMetaElement = $pq->find('meta[itemprop="price"]')->eq(0);
        $actualPrice = intval($actualPriceMetaElement->attr('content'));

        $name = $pq->find('.b-good-cards__title')->text();
        $description = $pq->find('.b-good-description__small')->html();

        $characteristicsList = [];
        $specsBlocks = $pq->find('.b-good-specs__block');

        foreach ($specsBlocks as $specsBlock) {
            $specsBlock = pq($specsBlock);
            $characteristics = $specsBlock->find('.b-good-specs__item');
            foreach ($characteristics as $characteristic) {
                $characteristic = pq($characteristic);
                $title = "";
                $fullText = trim($characteristic->find('.b-good-specs__head')->text());
                if (str_contains($fullText, '?')) {
                    $parts = explode(':', $fullText, 2);
                    $title = trim($parts[0]);
                }
                if (strlen($title) === 0) {
                    $title = $fullText;
                }
                $description = trim($characteristic->find('.b-good-specs__content')->text());
                if ($description === '' || $title === '') {
                    break;
                }
                $characteristicsList[$title] = $description;
            }
        }

        // фотки
        $photos = $pq->find('.b-gallery__image-img');

        $arrDataPhotos = [];

        foreach ($photos as $photo) {
            $photo = pq($photo);
            $src = $photo->attr('data-lazy') ?: $photo->attr('src');
            $arrDataPhotos[] = "$baseUrl$src";
        }

        $dataToProduct = [
            'name'            => $name,
            'link'            => "$baseUrl$url",
            'actual_price'    => $actualPrice,
            'old_price'       => $oldPrice,
            'shop_id'         => 1,
            'characteristics' => $characteristicsList,
            'photos'          => $arrDataPhotos,
            'description'     => $description,
        ];

        if ($name !== '') {
            Product::create($dataToProduct);
        }
    }

    protected function parseLinks($baseUrl)
    {
        $html = $this->parseService->index($baseUrl);
        $pq = phpQuery::newDocument($html);
        $links = $pq->find(".ch-platform-menu-drop__partition:nth-child(2) .ch-platform-menu-drop-list__item > a");
        $arrDataLinks = array();
        $uniqueLinks = array();

        foreach ($links as $link) {
            $href = pq($link)->attr('href');
            if ($href) {
                $parts = explode('/', $href);
                $result = $parts[1] ?? '';

                if (!in_array($result, $uniqueLinks)) {
                    $arrDataLinks[] = "$baseUrl$result";
                    $uniqueLinks[] = $result;
                }
            }
        }
        array_pop($arrDataLinks);

        return $arrDataLinks;
    }

    protected function parseProductLinksFromCatalog($catalogLink)
    {
        $arrDataProductLinks = array();
        $page = 1;
        while (true) {
            $catalogLinkWithPage = $catalogLink . '?page=' . $page;
            $html = $this->parseService->index($catalogLinkWithPage);
            $pq = phpQuery::newDocument($html);
            $productLinks = $pq->find('.b-good__photo > a');

            if ($productLinks->count() === 0) {
                break;
            }

            foreach ($productLinks as $productLink) {
                $productHref = pq($productLink)->attr('href');
                $arrDataProductLinks[] = $productHref;
                MegafonProductLink::create(['link' => $productHref, 'shop_id' => 1]);
            }

            $nextPageLink = $pq->find('.b-pagination__next')->attr('href');
            if ($nextPageLink && !$pq->find('.b-pagination__num.selected')->count()) {
                break;
            }
            $page++;
        }

        return $arrDataProductLinks;
    }
}
