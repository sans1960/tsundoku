@extends('layouts.admin')
@section('content')
<div class="container">


    <h4 class="mt-3">Activitat</h4>
    @if ($user->condicio == 'lector')
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Llibres
                </div>
                <div class="card-body">
                    @foreach ($user->book as $item)
                    <p>{{$item->titol}}</p>


                    @endforeach
                </div>

            </div>



        </div>

        @endif


    </div>
    @endsection