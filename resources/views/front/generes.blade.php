@extends('layouts.front')
@section('title')
Tsundoku.cat-Gèneres
@endsection
@section('meta_title')
Tsundoku.cat-Gèneres
@endsection
@section('meta_description')
Géneres
@endsection
@section('meta_url')
{{url('generes')}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <h1 class="ubuntu fs-2  ">Tots els gèneres</h1>
        @foreach ($generes as $genere)
        <div class="col-md-4">
            <a href="{{route('genere',$genere)}}" class="nav-link">
                <div class="card mb-4 p-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://ui-avatars.com/api/?name={{$genere->nom}}&background=0D8ABC&color=fff&rounded=true"
                                class="img-fluid rounded-start" alt="{{$genere->nom}}" width="80">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title ubuntu fs-4">{{ $genere->nom }}</h1>

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