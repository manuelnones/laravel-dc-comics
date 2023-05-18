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
        <a href="" class="mx-5">EDIT COMIC</a></button>
        <a href="" class="text-danger mx-5">DELETE COMIC</a></button>
    </div>
</main>

@endsection