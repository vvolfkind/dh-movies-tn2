@extends('master')
@section('content')

@if(count($results) > 1)
<ul>
    @foreach($results as $result)
    <li>{{ $result->getNombreCompleto() }}</li>
    @endforeach
</ul>
@else
<article>
    <h1>{{ $results->getNombreCompleto() }}</h1>
    <p>Rating: {{ $results->rating }}</p>
</article>
@endif

@endsection