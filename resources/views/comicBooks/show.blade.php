@extends('layouts/main')


@section('content')

<main class="text-center text-light">
    {{dd($comicbook->series)}}
  <img src="{{$comicbook->thumb}}" alt="immagine della pasta">

  <hr>

  <h1>{{$comicbook->title}}</h1>

  <ul class="text-left">
    <li>
      Tipo: {{$comicbook->type}}
    </li>

  <p>
    {{$comicbook->description}}
  </p>
</main>
{{-- {{dd($comicbook)}} --}}

@endsection