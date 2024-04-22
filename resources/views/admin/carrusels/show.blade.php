@extends('layouts.admin')
@section('title')
{{$carrusel->titol}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{$carrusel->titol}}</h1>
            <h3>{{$carrusel->subtitol}}</h3>
            <h5>{{$carrusel->tema}}</h5>
            <p>{{$carrusel->actiu}}</p>
            <div class="owl-carousel owl-theme tres">
                @foreach ($carrusel->books as $book)
                <a href="" class="nav-link" data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">
                    <div class="card d-flex justify-content-end align-items-center p-3"
                        style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( @if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif );background-size:cover;background-position:center;object-fit:fill;">

                    </div>

                </a>

                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function () {
    $('.tres').owlCarousel({
        loop: false,
        autoplay:true,
        margin: 10,
        responsiveClass: true,
     
        responsive: {
        0: {
        items: 2,
        nav: true
        },
        600: {
        items: 4,
        nav: false
        },
        1000: {
        items: 6,
        nav: true,
        loop: false,
        margin: 20
        }
        }
        });
    });
</script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endsection