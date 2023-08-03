@extends('layouts.admin')
@section('title')
{{ $book->titol }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <h1 class="text-center">{{$book->titol}}</h1>
        <div class="col-md-8 mt-3 mx-auto">
            <div class="card p-2">
                @if ($book->imatge  != null)
                <img src="{{ $book->imatge }}" width="150" class=" d-block mx-auto" alt="...">
                @else
                <img src="{{Storage::url($book->foto)}}" alt="" class="d-block mx-auto" width="80">
                @endif
                
                <div class="card-body">
                    <h5 class="card-title">{{ $book->autor_nom }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($book->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $book->active }}</p>
                        </div>
                        <div class="col">
                            <p>{{ $book->editorial_nom}}</p>
                        </div>
                        <div class="col">
                            <a href="{{ $book->editorial_web }}" target="_blank">Editorial web</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{{$book->genere->nom}}</p>
                        </div>
                        <div class="col">
                            <p>{{$book->idioma}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{{$book->user->nickname}}</p>
                        </div>
                        <div class="col">
                            <p>{{$book->isbn}}</p>
                        </div>
                    </div>
                    <div>
                        {!! $book->sinopsi!!}
                    </div>
                    @foreach ($book->ratings as $rating)
                    <p>{{$rating->user->name}} {{$rating->rating}}</p>
                    @endforeach
                </div>
            </div>



        </div>
    </div>
</div>
@endsection