<?php

namespace App\Http\Helpers;

use App\Models\Asset;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\Console\Helper\Helper;

class AssetIndexHelper
{
    public static function acoesIndex()
    {
        $response = json_decode(file_get_contents('assetIndex/acoes.json'))->stocks;
        foreach ($response as $acao) {
            if (!Str::endsWith($acao, ['11', '34', 'F', '39', 'B'])) {
                $acoes[] = $acao;
            }
        }
        return $acoes;
    }

    public static function fiisIndex()
    {
        $response = json_decode(file_get_contents('assetIndex/acoes.json'))->stocks;
        foreach ($response as $fii) {
            if (Str::endsWith($fii, '11')) {
                $fiis[] = $fii;
            }
        }
        return $fiis;
    }

    public static function stocksIndex()
    {
        $response = file_get_contents('assetIndex/stocks.json');
        $response = json_decode($response)->data;
        foreach ($response as $stock) {
            $stocks[] = $stock->symbol;
        }
        return $stocks;
    }

    public static function cryptoIndex()
    {
        return json_decode(file_get_contents('assetIndex/crypto.json'))->coins;
    }

    public static function getAssetPrice($asset_code,$asset_type)
    {
        if ($asset_type == 'crypto') {
            $response = Http::get('https://brapi.dev/api/v2/crypto?coin=' . $asset_code . '&currency=BRL');
            $price = $response['coins'][0]['regularMarketPrice'];
            $price = round($price, 2);
            return $price;
        }
        //if acao or fii
        $response = Http::get('https://brapi.dev/api/quote/' . $asset_code);
        $price = $response['results'][0]['regularMarketPrice'];
        return $price;
    }
}
