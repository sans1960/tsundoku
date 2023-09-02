@extends('layouts.front')
@section('title')
TSUNDOKU
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container ">
    <div class="row">
        <h3>Ultims llibres :</h3>
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                @foreach ($books as $book)
                <a href="{{route('book',$book)}}" class="nav-link">
                    <div class="card">
                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="card-img-top w-75" alt="...">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="" class="card-img-top w-75">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$book->titol}}</h5>
                        </div>
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
                <a href="{{route('autor',$autor)}}" class="nav-link">
                    <div class="card">
                        @if ($autor->url_foto != null)
                        <img src="{{ $autor->url_foto }}" class="card-img-top w-75" alt="...">
                        @else
                        <img src="{{Storage::url($autor->image)}}" alt="" class="card-img-top w-75">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$autor->autor_nom}}</h5>
                        </div>
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
                            items: 1,
                            nav: true
                          },
                          600: {
                            items: 3,
                            nav: false
                          },
                          1000: {
                            items: 4,
                            nav: true,
                            loop: false,
                            margin: 20
                          }
                        }
                      })
                    })
</script>
@endsection