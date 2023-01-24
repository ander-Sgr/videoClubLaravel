@extends('layouts.master')
@section('content')
    <h1>{{ $peli['titol'] }}</h1>

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar pel-licula </div>
                <div class="card-body" style="padding:30px">
                    <form method="POST" >
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="titol">Titol</label>
                            <input value="{{ $peli['titol'] }}" type="text" name="titol" id="titol"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="any">Any</label>
                            <input value="{{ $peli['any'] }}" type="text" name="any" id="any"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="director">Director</label>
                            <input value="{{ $peli['director'] }}" type="text" name="director" id="director"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input value="{{ $peli['poster'] }}" type="text" name="poster" id="poster"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="resum">Resum</label>
                            <textarea name="resum" id="resum" class="form-control" rows="3">{{ $peli['resum'] }} </textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar pel-licula
                            </button>
                        </div>
                        <input type="hidden" name="postEdit" value="PUT">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
