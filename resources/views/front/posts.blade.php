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
                <div class="card border-0 d-flex justify-content-end align-items-start p-3 mb-3"
                    style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{Storage::url($post->image)}});background-size:cover;background-position:center;object-fit:fill;">


                    <h5 class="text-uppercase text-white">{{ $post->titol }}</h5>


                </div>

            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')

@endsection