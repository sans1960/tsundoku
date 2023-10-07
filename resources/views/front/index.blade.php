@extends('layouts.front')
@section('title')
TSUNDOKU
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<style>
    .vertical-shake {
        animation: vertical-shaking 0.35s infinite;
    }

    @keyframes vertical-shaking {
        0% {
            transform: translateY(0)
        }

        25% {
            transform: translateY(5px)
        }

        50% {
            transform: translateY(-5px)
        }

        75% {
            transform: translateY(5px)
        }

        100% {
            transform: translateY(0)
        }
    }
</style>

@endsection
@section('content')

<div class="container ">
    <div class="row">
        <div class="alert alert-success alert-dismissible fade show vertical-shake" role="alert">
            <h4 class="alert-heading">Benvingut/da a Tsundoku.cat</h4>
            <p>El punt de trobada dels acaparadors de llibres compulsius! Tria, remena i xafardeja sense por, aquí en
                tenim per donar i
                per vendre!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    </div>

    <div class="row mb-3">
        <div class="col-md-6 ">
            <h4 class="mb-3 text-center">Mes valorats :</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($topratedbook as $book)
                <div class="d-flex flex-column">
                    <a class="nav-link" href="{{route('book',$book)}}">
                        <div class="card"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;"
                            data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">


                        </div>
                    </a>
                    <div class="d-flex flex-column justify-content-center align-items-center">

                        <input id="input-1" name="input-1" class="rating " data-min="0" data-max="5" data-step="0.1"
                            value="{{number_format(\App\Models\RatingBook::where('book_id',$book->id)->avg('rate'),2)}}"
                            data-size="xs" disabled="">
                        <p>{{$book->ratingbook->count()}} Valoracions</p>


                    </div>

                </div>

                @endforeach

            </div>
        </div>
        <div class="col-md-6">
            <h4 class="mb-3 text-center">Mes comentats :</h4>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <h4 class="mb-3 text-center">Ultims llibres pujats :</h4>
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
        <div class="col-md-6">
            <h4 class="mb-3 text-center">Acabats de sortir d'impremta</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($novetats as $book)
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
        <div class="col-md-12 bg-success d-flex flex-column justify-content-center align-items-center text-white p-3 mb-3 rounded"
            style="height: 300px;">
            <h1>Banner</h1>

        </div>
    </div>
    <div class="row" style="height: 400px;">

        <div class="col-md-6">
            <h4 class="mb-3 text-center">S'estrenen</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($estrenes as $book)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;">


                    </div>

                </a>

                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <h4 class="mb-3 text-center">Autopublicats</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($autos as $book)
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
    <div class="row" style="height: 400px;">

        <div class="col-md-6">
            <h4 class="mb-3 text-center">Tsundoku TV</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($medis as $medi)
                <a href="{{route('medi',$medi)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$medi->titol}}">
                    <div class="card">
                        <img src="{{Storage::url($medi->image)}}" class="card-img-top" alt="...">


                    </div>

                </a>

                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <h4 class="mb-3 text-center">Noticies</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($posts as $post)
                <a href="{{route('post',$post)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$post->titol}}">
                    <div class="card">
                        <img src="{{Storage::url($post->image)}}" class="card-img-top" alt="...">


                    </div>

                </a>

                @endforeach
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 bg-success d-flex flex-column justify-content-center align-items-center text-white p-3 mb-3 rounded"
            style="height: 300px;">
            <h1>Banner</h1>

        </div>
    </div>
    <div class="row" style="height: 400px;">
        <div class="col-md-6 mx-auto">
            <h4 class="mb-3 text-center">Agenda</h4>
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
                            items: 2,
                            nav: false
                          },
                          1000: {
                            items: 3,
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

<script>
    $(document).ready(function(){
     
     
        $('#input-1').rating({displayOnly: true});
     
    });
</script>
@endsection