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

    </div>
</div>
@endsection