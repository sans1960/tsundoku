@extends('layouts.front')
@section('title')
TSUNDOKU
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

@endsection
@section('content')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dicta nobis at
    dolor maxime error dignissimos magni sunt optio expedita, obcaecati quaerat praesentium qui itaque incidunt.
    Voluptatem, obcaecati at natus dolores ullam labore quas laudantium totam earum, voluptas sed rerum quisquam fuga
    nemo ut alias in molestiae libero saepe aliquam quae culpa enim quo? Eos non autem sequi quisquam obcaecati
    temporibus eum voluptatem cupiditate, commodi dolor tempora quibusdam dicta dolorem, provident quaerat saepe aliquam
    officia consequuntur molestiae voluptates. Sunt alias sequi autem ab ipsam fugit non quae sapiente explicabo! Nulla
    ut recusandae at, aspernatur, delectus laudantium vero voluptates consequatur in dicta quam minus. Natus ex,
    repellat veritatis iure saepe sapiente cumque nulla dolores libero quos alias magni harum itaque sequi ratione ad
    quod corrupti autem enim quo. Fuga aliquam blanditiis, qui hic consequatur soluta quis officiis facilis modi et
    accusantium dolorum cumque neque architecto vitae! Aspernatur fugiat quis quia recusandae a voluptatem quam ducimus,
    quas commodi at repudiandae soluta architecto similique est cum aut. Eveniet sed temporibus ut, eum molestiae
    doloribus sequi voluptas unde libero veritatis cum nam doloremque id ducimus tempore commodi exercitationem,
    corrupti porro quia reprehenderit! Debitis architecto sed earum hic perspiciatis. Ad impedit esse consequuntur
    molestiae at!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="container ">

    <div class="row">
        <div class="col-md-4">
            <h4 class="mb-3">Mes valorats :</h4>
            <div class="owl-carousel owl-theme">
                @foreach ($topratedbook as $book)

                <div class="card d-flex flex-column justify-content-end align-items-center"
                    style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;"
                    data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">
                    <a class="" data-bs-toggle="popover"
                        data-bs-title="Rating:{{number_format(\App\Models\RatingBook::where('book_id',$book->id)->avg('rate'),2)}}"
                        data-bs-content="{{$book->ratingbook->count()}} Valoracions"><i class="bi bi-eye-fill"></i>

                    </a>
                    <a href="{{route('book',$book)}}">
                        <i class="bi bi-link"></i></a>

                </div>



                @endforeach

            </div>
        </div>
        <div class="col-md-4">
            <h4 class="mb-3">Mes comentats :</h4>
        </div>

        <div class="col-md-4">
            <h4 class="mb-3">Ultims llibres pujats :</h4>
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
        <h4 class="mb-3">Ultims autors :</h4>
        <div class="col-md-4">
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
    <div class="row">
        @foreach ($topratedbook as $book)
        {{$book->titol}}

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
                            items: 2,
                            nav: false
                          },
                          1000: {
                            items: 2,
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
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
@endsection