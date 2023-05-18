@extends('layouts/main')

@section('content')

<main>
    
    <form action="{{route('comicbooks.store')}}" method="POST">
        @csrf
    
        <div class="d-flex align-items-center flex-column text-light">
            <div class="m-4">
                <label for="title">Titolo originale:</label>
                <input type="text" id="title" name="title">
            </div>
        
            <div class="m-4">
                <label for="description">Descrizione:</label>
                <textarea id="description" name="description"></textarea>
            </div>
        
            <div class="m-4">
                <label for="thumb">Immagine:</label>
                <input type="text" id="thumb" name="thumb">
            </div>
        
            <div class="m-4">
                <label for="price">Prezzo:</label>
                <input type="text" id="price" name="price">
            </div>
        
            <div class="m-4">
                <label for="series">Titolo:</label>
                <input type="text" id="series" name="series">
            </div>
        
            <div class="m-4">
                <label for="sale_date">Data di uscita:</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>
        
            <div class="m-4">
                <label for="type">Tipo:</label>
                <input type="text" id="type" name="type">
            </div>
    
            <button class="btn btn-primary m-4">ADD</button>
        </div>
    
    </form>
</main>

@endsection