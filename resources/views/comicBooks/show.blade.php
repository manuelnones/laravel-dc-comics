@extends('layouts/main')


@section('content')

<main class="text-center text-light">
    <div class="big-img-comic">
        <img src="{{$comicbook->thumb}}" alt="immagine della pasta">
    </div>

    <hr>

    <h1>{{$comicbook->series}}</h1>

    <ul class="text-left">
        <li>
        Tipo: {{$comicbook->type}}
        </li>
    </ul>

    <p>
        {{$comicbook->description}}
    </p>
</main>
{{-- {{dd($comicbook)}} --}}

@endsection