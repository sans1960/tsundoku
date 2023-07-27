@extends('layouts.admin')
@section('title')
{{ $denuncia->id }}
@endsection
@section('content')
<div class="container">
    <div class="row ">

        <div class="col-md-8 mt-3 mx-auto">
            <div class="card p-2">

                <div class="card-body">
                    <h5 class="card-title">{{ $denuncia->user->nickname }}</h5>
                    <div class="row">
                        <div class="col">
                            <p>{{$denuncia->nickname_comentari}}</p>
                        </div>
                        <div class="col">
                            <p>{{$denuncia->objecte_comentari}}</p>
                        </div>
                        <div class="col">
                            <p>{{$denuncia->data_comentari}}</p>
                        </div>

                        <div>
                            {{$denuncia->comentari}}
                        </div>
                        <div>
                            {{$denuncia->motiu}}
                        </div>
                        <p>{{$denuncia->data}}</p>
                    </div>
                </div>



            </div>
        </div>
    </div>
    @endsection