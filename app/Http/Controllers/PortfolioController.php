<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AssetIndexHelper;

class PortfolioController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data['portfolio_value'] = $user->portfolioValue();
        $data['acoes_value'] = $user->assetsValueByType('acao');
        $data['fiis_value'] = $user->assetsValueByType('fii');
        $data['stocks_value'] = $user->assetsValueByType('stock');
        $data['crypto_value'] = $user->assetsValueByType('crypto');



        return view('portfolio.index', $data);
    }

}
