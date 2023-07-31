<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Helper\Helper;

class AssetIndexHelper
{
    public static function cryptoIndex(){
        $response = Http::get('https://brapi.dev/api/v2/crypto/available');
        return $response['coins'];
    }

}
