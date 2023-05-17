@extends('layouts/main')

@section('content')
<div class="top-img"></div>

<main class="pt-5">
    <div class="container">
        
        <div class="text-center pb-5">
            <a href="{{ route('comicbooks.index') }}"><h1>Vai alla lista dei fumetti</h1></a>
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