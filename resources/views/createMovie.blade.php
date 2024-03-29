@extends('master')
@section('content')
<section>

    <article>
        <h1>Agregando nueva pelicula</h1>
    </article>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <article>
        <form method="POST" action="/movies/create">
            @csrf
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" value="{{ old('titulo') }}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" value="{{ old('rating') }}" />
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" value="{{ old('premios') }}" />
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" value="{{ old('duracion') }}" />
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit" />
        </form>
    </article>
</section>

@endsection