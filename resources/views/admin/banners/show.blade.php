@extends('layouts.admin')
@section('title')
{{$banner->nom}}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                <img src="{{Storage::url($banner->image)}}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$banner->nom}}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($banner->actiu == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>


                        <div class="col">
                            <a href="{{$banner->url}}" target="_blank">web</a>
                        </div>
                        <div class="col">
                            <p>{{$banner->posicio}}</a>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>
@endsection