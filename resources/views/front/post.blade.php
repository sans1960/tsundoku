@extends('layouts.front')
@section('title')
{{ $post->titol }}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-10 mx-auto">
            <h3 class="">{{$post->titol}}</h3>
            <img src="{{Storage::url($post->image)}}" alt="" class="img-fluid w-50 d-block mx-auto mt-2">
            <div class="row mt-3 mb-3">

                <div class="col d-flex">
                    <p> Font : </p>
                    <a href="{{$post->url}}" target="_blank" class="nav-link text-success fw-bold">
                        {{$post->font}}</a>
                </div>
                <div class="col">
                    <p>{{\Carbon\Carbon::parse($post->data)->format('d/m/Y');}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">

                </div>
                <div class="col d-flex justify-content-center">

                </div>

            </div>

            <div>
                {!! $post->body!!}
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12 p-3 ">
            <h3 class="mb-3">Altres noticies</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($posts as $post)
                <a href="{{route('post',$post)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$post->titol}}">
                    <div class="card"
                        style="height: 300px;background-image:url( {{Storage::url($post->image)}});background-size:cover;background-position:center;">


                    </div>

                </a>

                @endforeach
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4 mx-auto">
            @if (Auth::check())
            <div class="row">

                <div class="col-md-12">

                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <h5 class="card-header">Veure Comentaris</h5>

            </div>
            @if (Auth::check())
            <div class="card">


                <h5 class="card-header">Fes un comentari</h5>


            </div>
            @endif
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
                            items: 2,
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
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

@endsection