@extends('layouts.front')
@section('title')
TSUNDOKU
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
{{-- <style>
    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style> --}}
@endsection
@section('content')
<div class="container ">

    <div class="row">
        <h3>Ultims llibres :</h3>
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                @foreach ($books as $book)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;">


                    </div>

                </a>
                @endforeach

            </div>
        </div>

    </div>
    <div class="row">
        <h3>Ultims autors :</h3>
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                @foreach ($autors as $autor)
                <a href="{{route('autor',$autor)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$autor->autor_nom}}">
                    <div class="card"
                        style="height: 150px;background-image:url(@if ($autor->url_foto != null){{ $autor->url_foto }} @else {{Storage::url($autor->image)}} @endif);background-size:cover;background-position:center;">



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
    $(document).ready(function() {
                      $('.owl-carousel').owlCarousel({
                        loop: true,
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
                      })
                    })
</script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
@endsection