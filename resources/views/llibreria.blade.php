@extends('layouts.admin')
@section('title')
{{Auth::user()->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-3 text-center">Personal</h4>
            <div class="card p-3 d-flex flex-column">



                <a class="btn btn-outline-success" href="{{ route('messages') }}">
                    Missatges
                    @include('messenger.unread-count')
                </a>
                <a class="btn btn-outline-success mt-3" href="{{route('admin.users.edit',Auth()->user()->id)}}">
                    Editar perfil

                </a>
                <a class="btn btn-outline-success mt-3" href="{{route('home.activitat',auth()->user()->id)}}"
                    target="_blank">Activitat</a>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="mt-3 text-center">Accions</h4>
            @if (Auth()->user()->condicio == 'llibreria')
            @php
            $bookshop = \App\Models\Bookshop::where('nom',Auth()->user()->name);
            @endphp

            @if ($bookshop->exists())
            <p class="mt-2 text-center">Ja ets a la base de dades de les Llibreries</p>
            @else
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">

                <p>Vols formar part de la base de dades de Llibreries ?</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <a href="{{route('admin.bookshops.create')}}" class="btn btn-outline-success">Afegir Llibreria
                </a>
            </div>
            @endif
            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>



            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>

            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Multimedia</a>
            </div>

            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>
        </div>
        @endif
    </div>
</div>
</div>

@endsection