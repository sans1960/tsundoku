@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                     <h4>Benvingut@ {{Auth()->user()->name}}</h4>
                    {{ Str::title(Auth()->user()->type) }}@
                    
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <h4>Accions</h4>
        @if (Auth()->user()->type == 'lector')
            <div class="col-md-3">
                <div class="card">
                    <a href="{{route('admin.books.create')}}">Afegir Llibre</a>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
