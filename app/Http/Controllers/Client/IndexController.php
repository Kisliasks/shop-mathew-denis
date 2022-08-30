<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\ProductClient;

class IndexController extends Controller
{
    public function __invoke() {
        
        $products = ProductClient::all();
        return view('front.index.index', compact('products'));
    }
}
