@extends('layouts.admin')
@section('title')
{{ $post->titol }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                <img src="{{Storage::url($post->image)}}" width="150" class=" d-block mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->titol }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($post->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $post->active }}</p>
                        </div>
                        <div class="col">
                            <p>{{$post->font}}</p>
                        </div>
                        <div class="col">
                            <a href="{{ $post->url }}" target="_blank">web</a>
                        </div>
                    </div>
                    <div>
                        {!! $post->body !!}
                    </div>
                    <p>{{ $post->data }}</p>

                </div>
            </div>
            <p>{{$post->user->nickname}}</p>


        </div>
    </div>
</div>
@endsection