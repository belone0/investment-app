<?php

namespace App\Http\Helpers;

use App\Models\Asset;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\Console\Helper\Helper;

class AssetIndexHelper
{
    public static function acoesIndex(){
        $response = Http::get('https://brapi.dev/api/available');

        $acoes = [];
        foreach($response['stocks'] as $acao){
            if(!Str::endsWith($acao, ['11','34','F','39','B'])){
                $acoes[] = $acao;
            }
        }
        return $acoes;
    }

    public static function fiisIndex(){
        $response = Http::get('https://brapi.dev/api/available');

        $fiis = [];
        foreach($response['stocks'] as $fii){
            if(Str::endsWith($fii, '11')){
                $fiis[] = $fii;
            }
        }
        return $fiis;

    }

    public static function stocksIndex(){
        $response = Http::get('https://financialmodelingprep.com/api/v3/sp500_constituent?apikey=311f92490553a7c243ff0bd7ab3d3366');
        $stocks = [];

        return $response->json();

    }

    public static function cryptoIndex(){
        $response = Http::get('https://brapi.dev/api/v2/crypto/available');
        return $response['coins'];
    }

    public static function getAssetInfo(Asset $asset){
        if($asset->type == 'stock')return;
        if($asset->type == 'crypto'){
            $response = Http::get('https://brapi.dev/api/v2/crypto?coin='.$asset->code.'&currency=BRL');
            $price = $response['coins'][0]['regularMarketPrice'];
            $image = $response['coins'][0]['coinImageUrl'];
            $info['price'] = $price;
            $info['image'] = $image;
            return $info;
        }

        //if acao or fii
        $response = Http::get('https://brapi.dev/api/quote/'.$asset->code);
        $price = $response['results'][0]['regularMarketPrice'];
        return $price;
    }
}
