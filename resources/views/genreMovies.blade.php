@extends('master')
@section('content')
<h1>Peliculas del genero: {{ $elGenero->name }} </h1>
<section>
    <ul>
        @foreach($pelis as $peli)
        <li>
            <a href="/movies/{{ $peli->id }}">{{ $peli->title }}</a>
        </li>
        @endforeach
    </ul>
</section>
<div class="btn btn-info"><a href="/genres">VOLVER</a></div>
@endsection