@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
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
                    @if (Auth::user()->avatar))
                    <img src="{{Storage::url(Auth::user()->avatar)}}" alt="" width="100">
                    @else
                    <img src="https://ui-avatars.com/api/?name={{Auth()->user()->name}}&background=0D8ABC&color=fff&rounded=true"
                        class="img-fluid rounded-start" alt="..." width="80">
                    @endif

                    <h4>Benvingut@ {{Auth()->user()->name}}</h4>
                    <p>{{ Str::title(Auth()->user()->type) }}@</p>
                    <p>{{ Str::title(Auth()->user()->condicio) }}@</p>
                    <p>{{ Str::title(Auth()->user()->nickname) }}@</p>

                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <h4>Accions</h4>
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

    </div>
</div>
@endsection