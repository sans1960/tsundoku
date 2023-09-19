@extends('layouts.front')
@section('title')
{{ $post->titol }}
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto  d-flex flex-column">
            <h3 class="text-center">{{$post->titol}}</h3>
            <img src="{{Storage::url($post->image)}}" alt="" class="img-fluid w-50 d-block mx-auto mt-2">
            <div class="row mt-3 mb-3">
                <div class="col d-flex justify-content-center">
                    <h5>{{$post->font}}</h5>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="{{$post->url}}" target="_blank" class="nav-link text-success fw-bold">Notícia</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{\Carbon\Carbon::parse($post->data)->format('d/m/Y');}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">

                </div>
                <div class="col d-flex justify-content-center">

                </div>

            </div>

            <div>
                {!! $post->body!!}
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4 mx-auto">
            @if (Auth::check())
            <div class="row">

                <div class="col-md-12">

                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <h5 class="card-header">Veure Comentaris</h5>

            </div>
            @if (Auth::check())
            <div class="card">


                <h5 class="card-header">Fes un comentari</h5>


            </div>
            @endif
        </div>


    </div>
    @endsection
    @section('js')


    @endsection