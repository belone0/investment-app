<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AssetIndexHelper;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

}
