@extends('layouts.front')
@section('title')
TSUNDOKU
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/accept-cookies.css')}}">



@endsection
@section('content')


<div class="container ">
    <div class="row mt-3 mb-3">
        <div class="col-md-6 ms-auto">
            <form action="{{route('search')}}" method="post">
                @csrf
                <div class="mb-3 d-flex text-secondary">

                    <input type="text" class="form-control " placeholder="Intrudueix la búsqueda" name="query" required>
                    <button type="submit" class="btn btn-outline-success ms-2 btn-sm">
                        <i class="bi bi-search"></i>
                    </button>
                </div>



            </form>

        </div>
    </div>






    <div class="row mb-3">
        <div class="col-md-12">

            <h3 class="mb-3">Els més valorats :</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($topratedbook as $book)
                <div class="d-flex flex-column">
                    <a class="nav-link" href="{{route('book',$book)}}">
                        <div class="card"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;"
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
    </div>
    <div class="row mb-3">
        <div class="col-md.12 p-3">
            <h3 class="mb-3">Els més comentats :</h3>
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
        <div class="col-md-12 p-3 ">
            <h3 class="mb-3">Últims llibres afegits :</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($books as $book)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card d-flex justify-content-center align-items-center"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                        @if ($book->auto == 1)
                        <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                        @endif

                    </div>

                </a>
                @endforeach

            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            <h3 class="mb-3">Acabats de sortir d'impremta</h3>
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
            <div class="col-md-10 mx-auto  rounded p-3"
                style="height: 250px; background-image:url({{asset('img/pl_no_texcusis_slide_web_desktop_1646932781_1400.png')}});background-position:center;background-size:cover;object-fit:fill;">


            </div>
        </a>
    </div>
    <div class="row mb-3" style="">

        <div class="col-md-12 p-3 ">
            <h3 class="mb-3">S'estrenen</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($estrenes as $book)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">


                    </div>

                </a>

                @endforeach
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            <h3 class="mb-3">Autopublicats</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($autos as $book)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">


                    </div>

                </a>

                @endforeach
            </div>
        </div>

    </div>
    <div class="row mb-3">

        <div class="col-md-6 p-3">
            <h4 class="mb-3">Tsundoku TV</h4>


            <a href="{{route('medi',$medi)}}" class="nav-link">
                <div class="card d-flex justify-content-end align-items-start p-3"
                    style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{Storage::url($medi->image)}});background-size:cover;background-position:center;object-fit:fill;">

                    <h5 class="text-white text-uppercase">{{$medi->titol}}</h5>



                </div>

            </a>



        </div>

        <div class="col-md-6 mb-3 p-3">
            <h4 class="mb-3">Notícies</h4>


            <a href="{{route('post',$post)}}" class="nav-link">
                <div class="card d-flex justify-content-end align-items-start p-3"
                    style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{Storage::url($post->image)}});background-size:cover;background-position:center;object-fit:fill;">
                    >

                    <h5 class="text-white text-uppercase">{{$post->titol}}</h5>

                </div>

            </a>



        </div>

    </div>
    <div class="row mb-3">
        <a href="https://www.escriptors.cat/" target="_blank" rel="noopener noreferrer">
            <div class="col-md-12  rounded"
                style="height: 250px; background-image:url({{asset('img/banner.jpg')}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
    </div>
    <div class="row mb-3" style="">
        <h3 class="mb-3">Agenda</h3>
        @foreach ($actes as $acte)
        <div class="col-md-4 mb-3">

            <a class="nav-link" href="{{route('acte',$acte)}}">
                <div class="card d-flex justify-content-end align-items-start p-3"
                    style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{Storage::url($acte->image)}});background-size:cover;background-position:center;object-fit:fill;">
                    <h5 class="text-white text-uppercase">{{$acte->titol}}</h5>

                </div>
            </a>
            <p>{{\Carbon\Carbon::parse($acte->data)->format('d/m/Y')}}</p>
        </div>
        @endforeach
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

<script>
    $(document).ready(function(){
     
     
        $('#input-1').rating({displayOnly: true});
     
    });
</script>
<script src="{{asset('js/cookiepopup.js')}}"></script>
<script>
    var options = {
    "title": "Aquest lloc web utilitza cookies",
    "text": "Per utilitzar aquest lloc, aproves el nostre ús de galetes.",
    "theme": "green",
    "learnMore": false,
    "position": "bottom"
    };
    $.acceptCookies(options);
</script>
@endsection