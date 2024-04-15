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
                <a class="btn btn-outline-success mt-3"
                    href="{{route('home.activitat',auth()->user()->id)}}">Activitat</a>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="mt-3 text-center">Accions</h4>
            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>
        </div>
    </div>
</div>

@endsection