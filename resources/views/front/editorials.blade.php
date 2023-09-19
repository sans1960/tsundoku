@extends('layouts.front')
@section('title')
Editorials
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($editorials as $editorial)
        <div class="col-md-4">
            <a href="{{ route('editorial', $editorial) }}" class="nav-link">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex">
                            @if ($editorial->logo != null)
                            <img src="{{ $editorial->logo }}" class="card-img-top img-fluid w-25 d-block mx-auto"
                                alt="...">
                            @else
                            <img src="{{Storage::url($editorial->image)}}" alt="" class="d-block mx-auto" width="80">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $editorial->editorial_nom }}</h5>

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