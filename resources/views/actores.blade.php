@extends('master')
@section('content')

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

<section>

    <form action="/search-actor" class="form" method="GET">
        <input type="text" name="pollo">
        <input type="submit" class="btn btn-info" name="" id="">
    </form>
<ul>
        @foreach($actors as $actor)
        <li>
            <a href="/actors/{{ $actor->id }}">{{ $actor->getNombreCompleto() }}</a>
        </li>
        @endforeach
    </ul>
</section>

@endsection