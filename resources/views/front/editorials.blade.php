@extends('layouts.front')
@section('title')
Editorials
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($editorials as $editorial)
        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <a href="{{ route('editorial', $editorial) }}" class="nav-link" data-bs-toggle="tooltip"
                data-bs-title="{{$editorial->editorial_nom}}">
                <div class="card mb-3 p-4 border-0 mb-4">


                    @if ($editorial->logo != null)
                    <img src="{{ $editorial->logo }}" class=" img-fluid " alt="..."
                        style="object-fit:cover;width:80%;height:80%;">
                    @else
                    <img src="{{Storage::url($editorial->image)}}" alt="" class="img-fluid"
                        style="object-fit:cover;width:80%;height:80%;">
                    @endif


                </div>


            </a>
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