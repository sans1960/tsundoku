@extends('layouts.front')
@section('title')
Géneres
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($generes as $genere)
        <div class="col-md-4">
            <a href="{{route('genere',$genere)}}" class="nav-link">
                <div class="card mb-4 p-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://ui-avatars.com/api/?name={{$genere->nom}}&background=0D8ABC&color=fff&rounded=true"
                                class="img-fluid rounded-start" alt="..." width="80">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $genere->nom }}</h5>

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