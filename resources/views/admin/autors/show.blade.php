@extends('layouts.admin')
@section('title')
    {{ $autor->autor_nom }}
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-8 mt-5 mx-auto">
                <div class="card p-1">
                    <img src="{{ $autor->url_foto }}" alt="" class="d-block mx-auto" width="80">
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

                        <div>
                            {!! $autor->biopic !!}
                        </div>
                    
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection
