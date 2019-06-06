@extends('master')
@section('content')
<section>
    <ul>
        @foreach($generos as $genero)
        <li>
            <a href="/genres/{{ $genero->id }}">{{ $genero->name }}</a>
        </li>
        @endforeach
    </ul>
</section>

@endsection