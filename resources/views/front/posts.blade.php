@extends('layouts.front')
@section('title')
Noticies
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <a href="{{route('post',$post)}}" class="nav-link">
                <div class="card">
                    <img src="{{ Storage::url($post->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->titol }}</h5>

                    </div>
                </div>

            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')

@endsection