<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AssetIndexHelper;

class PortfolioController extends Controller
{
    public function index()
    {
        $data['portfolio_value'] = auth()->user()->portfolioValue();
        return view('portfolio.index',$data);
    }

}
