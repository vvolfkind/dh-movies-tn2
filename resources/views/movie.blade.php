@extends('master')
@section('content')
<section class="col-md-6">
    <article class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p class="card-text">Premios: {{ $movie->awards ?? 'No tiene.' }}</p>
            <p class="card-text">Estreno: {{ date('m/d/Y', strtotime($movie->release_date)) }}</p>
        </div>
    </article>
</section>
<section class="row">
    <article>
        <a class="btn btn-info" href="/movies">VOLVER</a>
    </article>
</section>
@endsection