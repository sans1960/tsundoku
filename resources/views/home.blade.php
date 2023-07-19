@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            @if (Session::has('notif.success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('notif.success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex justity-content-center align-items-center">
            @if (Auth::user()->avatar)
            <img src="{{Storage::url(Auth::user()->avatar)}}" alt="" width="100">
            <h4 class="ms-3">Benvingut@ {{Auth()->user()->name}}</h4>
            @else
            <img src="https://ui-avatars.com/api/?name={{Auth()->user()->name}}&background=0D8ABC&color=fff&rounded=true"
                class="img-fluid rounded-start" alt="..." width="40">
            <h4 class="ms-3">Benvingut@ {{Auth()->user()->name}}</h4>
            @endif
        </div>
        <div class="col-md-6 d-flex justity-content-center align-items-center">
            <h4 class="ms-3">{{ Str::title(Auth()->user()->type) }}@</h4>
            <h4 class="ms-3">{{ Str::title(Auth()->user()->condicio) }}@</h4>
            <h4 class="ms-3">{{ Str::title(Auth()->user()->nickname) }}@</h4>
        </div>






    </div>
    <div class="row">
        <h4 class="mt-3">Accions</h4>
        @if (Auth()->user()->condicio == 'lector')
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>
        </div>
        @elseif (Auth()->user()->condicio == 'autor')
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.autors.create')}}" class="btn btn-outline-success">Afegir Autor</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Medi</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>
        </div>
        @elseif(Auth()->user()->condicio == 'editorial')
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.autors.create')}}" class="btn btn-outline-success">Afegir Autor</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.editorials.create')}}" class="btn btn-outline-success">Afegir Editorial</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Medi</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>
        </div>
        @elseif(Auth()->user()->condicio == 'llibreria')
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.bookshops.create')}}" class="btn btn-outline-success">Afegir Llibreria</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Medi</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>
        </div>
        @endif






    </div>
    <div class="row">
        <h4 class="mt-3">Activitat</h4>
        @if (Auth()->user()->condicio == 'lector')
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Llibres
                </div>
                <div class="card-body">
                    @foreach (Auth()->user()->book as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        @elseif(Auth()->user()->condicio == 'autor')
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Llibres
                </div>
                <div class="card-body">
                    @foreach (Auth()->user()->book as $item)
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
                    @foreach (Auth()->user()->autor as $item)
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
                    @foreach (Auth()->user()->post as $item)
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
                    @foreach (Auth()->user()->medi as $item)
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
                    @foreach (Auth()->user()->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        @elseif(Auth()->user()->condicio == 'editorial')
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Llibres
                </div>
                <div class="card-body">
                    @foreach (Auth()->user()->book as $item)
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
                    @foreach (Auth()->user()->autor as $item)
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
                    @foreach (Auth()->user()->editorial as $item)
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
                    @foreach (Auth()->user()->post as $item)
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
                    @foreach (Auth()->user()->medi as $item)
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
                    @foreach (Auth()->user()->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        @elseif(Auth()->user()->condicio == 'llibreria')
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header">
                    Llibres
                </div>
                <div class="card-body">
                    @foreach (Auth()->user()->book as $item)
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
                    @foreach (Auth()->user()->bookshop as $item)
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
                    @foreach (Auth()->user()->post as $item)
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
                    @foreach (Auth()->user()->medi as $item)
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
                    @foreach (Auth()->user()->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>

            </div>

        </div>
        @endif





    </div>
</div>
@endsection