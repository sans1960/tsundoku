@extends('layouts.admin')
@section('title')
{{ $medi->titol }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                <img src="{{Storage::url($medi->image)}}" width="150" class=" d-block mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $medi->titol }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($medi->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $medi->active }}</p>
                        </div>
                        <div class="col">
                            <p>{{$medi->tipus}}</p>
                        </div>
                        <div class="col">
                            <a href="{{ $medi->url }}" target="_blank">web</a>
                        </div>
                    </div>
                    <div>
                        {!! $medi->body !!}
                    </div>
                    <p>{{ $medi->data }}</p>

                </div>
            </div>
            <p>{{$medi->user->nickname}}</p>


        </div>
    </div>
</div>
@endsection