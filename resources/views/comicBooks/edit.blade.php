@extends('layouts/main')

@section('content')

<main>
    
    <form action="{{route('comicbooks.update', $comicbook)}}" method="POST">
        @csrf
    
        @method('PUT')
        <div class="d-flex align-items-center flex-column text-light">
            <div class="m-4">
                <label for="title">Titolo originale:</label>
                <input type="text" id="title" name="title" value="{{$comicbook->title}}">
            </div>
        
            <div class="m-4">
                <label for="description">Descrizione:</label>
                <textarea id="description" name="description">
                    {{$comicbook->description}}
                </textarea>
            </div>
        
            <div class="m-4">
                <label for="thumb">Immagine:</label>
                <input type="text" id="thumb" name="thumb" value="{{$comicbook->thumb}}">
            </div>
        
            <div class="m-4">
                <label for="price">Prezzo:</label>
                <input type="text" id="price" name="price" value="{{$comicbook->price}}">
            </div>
        
            <div class="m-4">
                <label for="series">Titolo:</label>
                <input type="text" id="series" name="series" value="{{$comicbook->series}}">
            </div>
        
            <div class="m-4">
                <label for="sale_date">Data di uscita:</label>
                <input type="text" id="sale_date" name="sale_date" value="{{$comicbook->sale_date}}">
            </div>
        
            <div class="m-4">
                <label for="type">Tipo:</label>
                <input type="text" id="type" name="type" value="{{$comicbook->type}}">
            </div>
    
            <button class="btn btn-primary m-4" type="submit">EDIT</button>
        </div>
    
    </form>
</main>

@endsection