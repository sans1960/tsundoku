@extends('layouts.front')
@section('title')
Autors
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($autors as $autor)
        <div class="col-md-3">
            <a href="{{ route('autor', $autor) }}" class="nav-link">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($autor->url_foto != null)
                            <img src="{{ $autor->url_foto }}" alt="" class="d-block mx-auto" width="80">
                            @else
                            <img src="{{Storage::url($autor->image)}}" alt="" class="d-block mx-auto" width="80">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $autor->autor_nom }}</h5>

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