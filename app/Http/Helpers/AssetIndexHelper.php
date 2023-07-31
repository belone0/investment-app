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

        foreach($response['stocks'] as $acao){
            if(!Str::endsWith($acao, ['11','34','F','39','B'])){
                $acoes[] = $acao;
            }
        }
        return $acoes;
    }

    public static function fiisIndex(){
        $response = Http::get('https://brapi.dev/api/available');

        foreach($response['stocks'] as $fii){
            if(Str::endsWith($fii, '11')){
                $fiis[] = $fii;
            }
        }
        return $fiis;

    }

    public static function stocksIndex(){
        try {
            $client = new \GuzzleHttp\Client();

            $response = $client->request('GET', 'https://twelve-data1.p.rapidapi.com/stocks?exchange=NASDAQ&format=json', [
                'headers' => [
                    'X-RapidAPI-Host' => 'twelve-data1.p.rapidapi.com',
                    'X-RapidAPI-Key' => 'b228328727msh65ef4c24bb9ffa9p1dbe3ejsn9b68bfde22ec',
                ],
            ]);

            $data = json_decode($response->getBody())->data;

            foreach($data as $stock){
                $stocks[] = $stock->symbol;
            }
            return $stocks;
        }catch(\Throwable $e){
            return json_encode('Erro no servidor');
        }
    }

    public static function cryptoIndex(){
        $response = Http::get('https://brapi.dev/api/v2/crypto/available');
        return $response['coins'];
    }

    public static function getAssetInfo(Asset $asset){
        if($asset->type == 'crypto'){
            $response = Http::get('https://brapi.dev/api/v2/crypto?coin='.$asset->code.'&currency=BRL');
            $price = $response['coins'][0]['regularMarketPrice'];
            $image = $response['coins'][0]['coinImageUrl'];
            $info['price'] = round($price,2);
            $info['image'] = $image;
            return $info;
        }

        //if acao or fii
        $response = Http::get('https://brapi.dev/api/quote/'.$asset->code);
        $price = $response['results'][0]['regularMarketPrice'];
        return $price;
    }
}
