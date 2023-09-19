@extends('layouts.admin')
@section('title')
{{$denuncia->user->nickname}}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-10 mt-5 mx-auto">
            <div class="card p-3">
                <div class="row">
                    <div class="col">
                        <p>Denunciant : {{$denuncia->user->nickname}}</p>
                    </div>
                    <div class="col">
                        <p>Denunciat : {{$denuncia->comentbook->user->nickname}}</p>
                    </div>
                    <div class="col">
                        <p>Llibre : {{$denuncia->comentbook->book->titol}}</p>
                    </div>
                </div>

                <p>Comentari : {{$denuncia->comentbook->body}}</p>


                <p>Motiu : {{$denuncia->motiu}}</p>


                <p>Data Comentari : {{\Carbon\Carbon::parse($denuncia->comentbook->created_at)->format('d/m/Y-H:m')}}
                </p>
                <p>Data Denuncia : {{\Carbon\Carbon::parse($denuncia->created_at)->format('d/m/Y-H:m')}}
                </p>


            </div>
        </div>




    </div>
</div>
@endsection