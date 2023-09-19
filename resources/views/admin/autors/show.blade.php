@extends('layouts.admin')
@section('title')
{{ $autor->autor_nom }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                @if ($autor->url_foto != null)
                <img src="{{ $autor->url_foto }}" alt="" class="d-block mx-auto" width="80">
                @else
                <img src="{{Storage::url($autor->image)}}" alt="" class="d-block mx-auto" width="80">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $autor->autor_nom }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($autor->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p class="card-text">{{ $autor->active }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if ($autor->twitter)
                            <a href="{{$autor->twitter}}" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->facebook)
                            <a href="{{$autor->facebook}}" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->web)
                            <a href="{{$autor->web}}" target="_blank">
                                <i class="bi bi-globe"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->instagram)
                            <a href="{{$autor->instagram}}" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            @endif
                        </div>
                    </div>

                    <div>
                        {!! $autor->biopic !!}
                    </div>

                    <p>{{$autor->user->nickname}}</p>
                </div>
            </div>




        </div>
    </div>
</div>
@endsection