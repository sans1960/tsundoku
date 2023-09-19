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
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ Storage::url($post->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->titol }}</h5>

                            </div>
                        </div>
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