@extends('layouts.admin')
@section('title')
{{ $editorial->editorial_nom }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                <img src="{{ $editorial->logo }}" width="150" class=" d-block mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $editorial->editorial_nom }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($editorial->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $editorial->active }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ $editorial->url }}" target="_blank">Lloc web</a>
                        </div>
                        <div class="col">
                            <a href="{{ $editorial->url_vendes }}" target="_blank">Compres</a>
                        </div>
                    </div>
                    <div>
                        {!! $editorial->descripcio !!}
                    </div>
                    <p>{{ $editorial->adreça }}</p>
                    @foreach ($editorial->book as $book)
                    <p>{{$book->titol}} <span>{{$book->autor_nom}}</span></p>
                    @endforeach
                </div>
            </div>
            <p>{{$editorial->user->nickname}}</p>


        </div>
    </div>
</div>
@endsection