@extends('master')

@section('content')
@if(session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif
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