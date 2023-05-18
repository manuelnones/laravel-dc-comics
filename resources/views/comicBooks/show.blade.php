@extends('layouts/main')

@section('content')

<main class="text-center text-light">
    <div class="big-img-comic">
        <img src="{{$comicbook->thumb}}" alt="immagine della pasta">
    </div>

    <hr>

    <h1>{{$comicbook->series}}</h1>

    <ul class="text-left comic-type">
        <li>
        Tipo: {{$comicbook->type}}
        </li>
    </ul>

    <p class="p-5">
        {{$comicbook->description}}
    </p>

    <div class="btn-container p-4">
        <button class="btn btn-primary mb-3"><a href="{{route('comicbooks.edit', $comicbook)}}" class="text-decoration-none text-light">EDIT COMIC</a></button>

        <form action="{{route('comicbooks.destroy', $comicbook)}}" method="POST">
            @csrf
            
            @method('DELETE')
            <button class="btn btn-danger mx-5">DELETE COMIC</button>
        </form>
    </div>
</main>

@endsection