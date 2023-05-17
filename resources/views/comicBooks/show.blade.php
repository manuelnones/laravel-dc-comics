@extends('layouts/main')


@section('content')

<main class="text-center text-light">
  <img src="{{$comicbook->thumb}}" alt="immagine della pasta">

  <hr>

  <h1>{{$comicbook->series}}</h1>

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