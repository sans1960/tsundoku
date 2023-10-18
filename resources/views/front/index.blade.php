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






    <div class="row mb-3">
        <div class="col-md-6 p-3 border-end border-warning border-3">

            <h4 class="mb-3 text-center">Més valorats :</h4>
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
        <div class="col-md-6 p-3">
            <h4 class="mb-3 text-center">Més comentats :</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($topcoment as $book)
                @if ($book->comentbook_count > 0)
                <div class="d-flex flex-column">
                    <a class="nav-link" href="{{route('book',$book)}}">
                        <div class="card"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;"
                            data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">


                        </div>
                    </a>
                    <div class="d-flex flex-column justify-content-center align-items-center">

                        <p>{{$book->comentbook_count}} Comentaris</p>


                    </div>

                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6 p-3 border-end border-warning border-3">
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
        <div class="col-md-6 p-3">
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
    <div class="row mb-3">
        <a href="https://www.plataforma-llengua.cat/" target="_blank" rel="noopener noreferrer">
            <div class="col-md-12  rounded p-3"
                style="height: 300px; background-image:url({{asset('img/pl_no_texcusis_slide_web_desktop_1646932781_1400.png')}});background-position:center;background-size:cover;">


            </div>
        </a>
    </div>
    <div class="row mb-3" style="">

        <div class="col-md-6 p-3 border-end border-warning border-3">
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

        <div class="col-md-6 p-3">
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
    <div class="row mb-3">

        <div class="col-md-6 p-3">
            <h4 class="mb-3 text-center">Tsundoku TV</h4>
            <div class="owl-carousel2 owl-theme">

                <a href="{{route('medi',$medi)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$medi->titol}}">
                    <div class="card"
                        style="height: 300px;background-image:url( {{Storage::url($medi->image)}});background-size:cover;background-position:center;">





                    </div>

                </a>


            </div>
        </div>

        <div class="col-md-6 mb-3 p-3">
            <h4 class="mb-3 text-center">Noticies</h4>


            <a href="{{route('post',$post)}}" class="nav-link" data-bs-toggle="tooltip"
                data-bs-title="{{$post->titol}}">
                <div class="card"
                    style="height: 300px;background-image:url( {{Storage::url($post->image)}});background-size:cover;background-position:center;">
                    >



                </div>

            </a>



        </div>

    </div>
    <div class="row mb-3">
        <a href="https://www.escriptors.cat/" target="_blank" rel="noopener noreferrer">
            <div class="col-md-12  rounded"
                style="height: 250px; background-image:url({{asset('img/banner.jpg')}});background-position:center;background-size:cover;">


            </div>
        </a>
    </div>
    <div class="row mb-3" style="">
        <div class="col-md-6 mx-auto mt-5 mb-5">
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