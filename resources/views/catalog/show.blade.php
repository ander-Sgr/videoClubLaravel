@extends('layouts.master')
@section('content')
    Vista detail peli-licula
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ $peli['poster'] }}" alt='img' style="height:200px" />
        </div>
        <div class="col-sm-8">
            <h1>{{ $peli['titol'] }}</h1>
            <h2>Any: {{ $peli['any'] }}</h2>
            <h2>Director: {{ $peli['director'] }}</h2>
            <p><strong>Resum: </strong>{{ $peli['resum'] }}</p>
            @if (!$peli['llogat'])
                <button type="button" class="btn btn-primary">Llogar pel-licula</button>
                <a href="{{ url('catalog/edit/' . $id) }}">
                    <button type="button" class="btn btn-warning">Editar pel-licula</button>
                </a>
                <a href="{{ url('/catalog') }}">
                    <button type="button" class="btn btn-light"> Tornar al llistat</button>
                </a>
            @else
                <button type="button" class="btn btn-danger">Retornar pel-licula</button>
                <a href="{{ url('catalog/edit/' . $id) }}">
                    <button type="button" class="btn btn-warning">Editar pel-licula</button>
                </a>
                <a href="{{ url('/catalog') }}">
                    <button type="button" class="btn btn-light"> Tornar al llistat</button>
                </a>
            @endif

        </div>
    </div>
@endsection
