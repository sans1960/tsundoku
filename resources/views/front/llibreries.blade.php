@extends('layouts.front')
@section('title')
Llibreries
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($bookshops as $bookshop)
        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <a href="{{route('bookshop',$bookshop)}}" class="nav-link" data-bs-toggle="tooltip"
                data-bs-title="{{$bookshop->nom}}">
                <div class="card mb-3 p-4">

                    @if ($bookshop->logo != null)
                    <img src="{{ $bookshop->logo }}" class="img-fluid " alt="..."
                        style="object-fit:contain;width:80%;height:80%;">
                    @else
                    <img src="{{Storage::url($bookshop->image)}}" alt="" class="img-fluid"
                        style="object-fit:contain;width:80%;height:80%;">
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