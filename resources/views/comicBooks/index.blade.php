@extends('layouts/main')

@section('content')
<div class="top-img"></div>

<main class="pt-5">
    <div class="container">
        
        <div class="comic-books-container">

            @foreach ($comicBooks as $book)
            <div class="comic-book">
                <div class="img-comic-book">
                    <a href="{{ route('comicbooks.show', $book) }}"><img src="{{ $book['thumb'] }}" alt=""></a>
                </div>
                <a href="{{ route('comicbooks.show', $book) }}" class="text-light"><h5>{{ $book['series'] }}</h5></a>
            </div>
            @endforeach
                
        </div>

        <div class="btn-container mb-4">
            <button type="button" class="btn ps-5 pe-5 rounded-0">LOAD MORE</button>
        </div>
    </div>
    
    <div id="shop-elements-container">
        <div class="container d-flex gap-5">
            @foreach ($iconShopElement as $icon)
            <a href="#" class="shop-element">
                <img src="{{ Vite::asset("resources/img/" . $icon['src']) }}" alt="" class="icon">
                <span class="title">{{ $icon['title'] }}</span>
            </a>
            @endforeach
        </div> 
    </div>
</main>
@endsection