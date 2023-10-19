@extends('layouts.front')
@section('title')
Autors
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($autors as $autor)
        <div class="col-md-3">
            <a href="{{ route('autor', $autor) }}" class="nav-link" data-bs-toggle="tooltip"
                data-bs-title="{{$autor->autor_nom}}">
                <div class="card mb-3"
                    style="background-image:url(@if ($autor->url_foto != null){{ $autor->url_foto }} @else {{Storage::url($autor->image)}} @endif);background-size:cover;background-position:center;height:250px;">

                    {{-- <div class=" row g-0">
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
                    </div> --}}

                </div>
            </a>
            <div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endsection