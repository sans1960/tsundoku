@extends('layouts.admin')
@section('title')
{{$user->nickname}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex justity-content-center align-items-center">
            @if ($user->avatar)
            <img src="{{Storage::url($user->avatar)}}" alt="" width="100">
            <h4 class="ms-3"> {{$user->name}}</h4>
            @else
            <img src="https://ui-avatars.com/api/?name={{$user->name}}&background=0D8ABC&color=fff&rounded=true"
                class="img-fluid rounded-start" alt="..." width="40">
            <h4 class="ms-3">{{$user->name}}</h4>
            @endif
        </div>
        <div class="col-md-6 d-flex justity-content-center align-items-center">
            <h4 class="ms-3">{{ $user->type }}</h4>
            <h4 class="ms-3">{{ $user->condicio }}</h4>
            <h4 class="ms-3">{{ $user->nickname }}</h4>
        </div>
    </div>
    <div class="row">
        <h4 class="mt-3">Activitat</h4>
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
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Autors
                </div>
                <div class="card-body">
                    @foreach ($user->autor as $item)
                    <p>{{$item->autor_nom}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Editorials
                </div>
                <div class="card-body">
                    @foreach ($user->editorial as $item)
                    <p>{{$item->editorial_nom}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Llibreries
                </div>
                <div class="card-body">
                    @foreach ($user->bookshop as $item)
                    <p>{{$item->nom}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Noticies
                </div>
                <div class="card-body">
                    @foreach ($user->post as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Medis
                </div>
                <div class="card-body">
                    @foreach ($user->medi as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Actes
                </div>
                <div class="card-body">
                    @foreach ($user->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</div>
@endsection