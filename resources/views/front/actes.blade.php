@extends('layouts.front')
@section('title')
Actes
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($actes as $acte)
        <div class="col-md-4">
            <a href="{{route('acte',$acte)}}" class="nav-link">
                <div class="card mb-3 border-0">
                    <div class="row g-0 mb-3">
                        <div class="col-md-4">
                            <img src="{{ $acte->image }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $acte->titol }}</h5>

                            </div>
                        </div>
                    </div>

                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')

@endsection