<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $iconShopElement = [
            [
                "src" => "buy-comics-digital-comics.png",
                "title" => "digital comics",
            ],
            [
                "src" => "buy-comics-merchandise.png",
                "title" => "dc merchandise",
            ],
            [
                "src" => "buy-comics-shop-locator.png",
                "title" => "subscription",
            ],
            [
                "src" => "buy-comics-subscriptions.png",
                "title" => "comic shop locator",
            ],
            [
                "src" => "buy-dc-power-visa.svg",
                "title" => "dc power visa",
            ]
        ];
    
        $linkNav = [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ];
        
        return view('home', compact('linkNav', 'iconShopElement'));
    }
}
