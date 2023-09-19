@extends('layouts.front')
@section('title')
Llibreries
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($bookshops as $bookshop)
        <div class="col-md-3">
            <a href="{{route('bookshop',$bookshop)}}" class="nav-link">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($bookshop->logo != null)
                            <img src="{{ $bookshop->logo }}" class="img-fluid rounded-start" alt="...">
                            @else
                            <img src="{{Storage::url($bookshop->image)}}" alt="" class="d-block mx-auto" width="80">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $bookshop->nom }}</h5>

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