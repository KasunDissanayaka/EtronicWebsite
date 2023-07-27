<?php

namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('pages.portfolio', compact('portfolios'));
    }
}
