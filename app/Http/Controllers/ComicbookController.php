<?php

namespace App\Http\Controllers;

use App\Models\Comicbook;
use Illuminate\Http\Request;

class ComicbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $comicBooks = Comicbook::all();
        // $comicBooks = config("comics");

        return view('comicBooks/index', compact('comicBooks', 'linkNav', 'iconShopElement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comicbook  $comicbook
     * @return \Illuminate\Http\Response
     */
    public function show(Comicbook $comicbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comicbook  $comicbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Comicbook $comicbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comicbook  $comicbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comicbook $comicbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comicbook  $comicbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comicbook $comicbook)
    {
        //
    }
}
