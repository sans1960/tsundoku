@extends('layouts.admin')
@section('title')
{{ $acte->titol }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                <img src="{{$acte->image}}" width="450" class=" d-block mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $acte->titol }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($acte->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $acte->active }}</p>
                        </div>

                        <div class="col">
                            <a href="{{ $acte->url }}" target="_blank">web</a>
                        </div>
                    </div>
                    <div>
                        {!! $acte->body !!}
                    </div>
                    <p>{{ $acte->data }}</p>
                    <p>{{ $acte->hora }}</p>

                </div>
            </div>
            <p>{{$acte->user->nickname}}</p>


        </div>
    </div>
</div>
@endsection