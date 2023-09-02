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
    </div>
    @elseif ($user->condicio == 'autor')
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
    @elseif($user->condicio == 'editorial')
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
    @elseif($user->condicio == 'llibreria')
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
    @endif
    <div class="row mt-5">
        <div class="col-md-4">
            <a href="{{route('home')}}" class="btn btn-outline-success">
                <i class="bi bi-arrow-left-square-fill"></i>
            </a>
        </div>

    </div>

</div>
@endsection