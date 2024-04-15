@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row mt-2">

        <div class="col-md-12 ">
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
    <div class="row mt-2">
        <div class="col-md-8 mx-auto">
            <div class="card">
                @if (Auth::user()->avatar)
                <img src="{{Storage::url(Auth::user()->avatar)}}" alt="" class="img-fluid d-block mx-auto p-3"
                    width="150">

                @else
                <img src="https://ui-avatars.com/api/?name={{Auth()->user()->name}}&background=0D8ABC&color=fff&rounded=true"
                    class="img-fluid d-block mx-auto p-3" alt="..." width="150">

                @endif
                <div class="card-body text-center">
                    <h4 class="card-title">{{Auth()->user()->name}}</h4>
                    <h5 class="card-text">{{Str::title(Auth()->user()->condicio)}}</h5>
                    <h5 class="card-text">{{Auth()->user()->nickname}}</h5>
                    <h5 class="card-text">{{\Carbon\Carbon::parse(Auth()->user()->created_at)->format('d/m/Y');}}</h5>
                    <p>{{Auth()->user()->novetats}} rebre novetats</p>
                    <p>{{Auth()->user()->biopic}}</p>
                    @if (Auth()->user()->email_verified_at !=null)
                    @switch(Auth()->user()->condicio)
                    @case('lector')
                    <a href="{{route('home.lector')}}" class="btn btn-outline-primary">Panell
                        de control</a>
                    @break
                    @case('autor')
                    <a href="{{route('home.autor')}}" class="btn btn-outline-secondary">Panell
                        de control</a>
                    @break
                    @case('editorial')
                    <a href="{{route('home.editorial')}}" class="btn btn-outline-success">Panell
                        de control</a>
                    @break
                    @case('llibreria')
                    <a href="{{route('home.llibreria')}}" class="btn btn-outline-warning">Panell
                        de control</a>
                    @break
                    @default

                    @endswitch

                    @else
                    <div class="alert alert-success" role="alert">
                        <p class="text-center text-uppercase">Recorda confirmar el teu email per poguer interactuar</p>

                    </div>
                    @endif

                </div>
            </div>

        </div>




    </div>
    @endsection