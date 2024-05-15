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
                <div class="card mb-3 border-0 d-flex justify-content-end align-items-start p-3"
                    style="background-image:url(@if ($autor->url_foto != null){{ $autor->url_foto }} @else {{Storage::url($autor->image)}} @endif);background-size:cover;background-position:center;height:250px;">
                    <h5 class="text-uppercase text-white">{{ $autor->autor_nom }}</h5>



                </div>
            </a>
            <div>

            </div>
        </div>
        @endforeach
    </div>
    {!! $autors->withQueryString()->links('pagination::bootstrap-5') !!}
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