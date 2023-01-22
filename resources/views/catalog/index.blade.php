@extends('layouts.master')
@section('content')
    <div class="row">
        @foreach ($peliculas as $peli)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/catalog/show/' . $loop->index) }}">
                    <img src="{{ $peli['poster'] }}" alt='img' style="height:200px" />
                    <h4 style="min-height:45px;margin:5px 0 10px 0">{{$peli['titol']}}</h4>
                </a>
            </div>
        @endforeach
    </div>
@endsection
