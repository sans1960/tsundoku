@extends('layouts.front')
@section('title')
{{ $editorial->editorial_nom }}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                @if ($editorial->logo != null)
                <img src="{{ $editorial->logo }}" class=" img-fluid w-50 " alt="...">
                @else
                <img src="{{Storage::url($editorial->image)}}" alt="" class=" img-fluid w-50">

                @endif
                <div class="d-flex justify-content-start align-items-center ms-2">

                    <p class="fs-5 fw-bold text-success-emphasis mt-2">{{round($rating,2)}}</p>
                    <p class="ms-4 fs-5">{{$editorial->ratingeditorial->count()}} <i class="bi bi-person"
                            style="font-size: 1.5em;"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <h4 class="card-title ubuntu">{{ $editorial->editorial_nom }}</h4>
                <div class="row">
                    <div class="col">
                        <a href="{{ $editorial->url }}" target="_blank">
                            <i style="font-size: 1.5rem;" class="bi bi-globe"></i>
                        </a>
                    </div>

                    <div class="col">
                        <p>{{ $editorial->adreça }}</p>
                    </div>
                </div>
                <div>
                    {!! $editorial->descripcio !!}
                </div>
                @if (Auth::check())
                @if (Session::has('notif.success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('notif.success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


                <div class="">
                    @if ($editorial->ratingeditorial->contains('user_id',Auth::user()->id))
                    <p class="text-success fw-bold">Ja has valorat aquesta editorial</p>
                    @else
                    <h4>Valora</h4>
                    <form action="{{route('rating.editorial.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="editorial_id" value="{{$editorial->id}}">
                        <div class="row">
                            <div class="">
                                <input id="input-5" name="rate" class="rating-loading" data-show-clear="false"
                                    data-show-caption="true">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-outline-success">
                                    <i class="bi bi-check-square-fill"></i>
                                </button>&nbsp;
                            </div>
                        </div>
                    </form>
                </div>


                @endif
                @endif


            </div>
        </div>
    </div>
    <div class="row">
        @if (count($editorial->book))
        <div class="col-md-12">
            <h3 class="ubuntu">Llibres</h3>


            <div class="owl-carousel owl-theme ">
                @foreach ($editorial->book as $book)

                <a href="{{route('book',$book)}}">
                    <div class="card mb-3 border-0" data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">


                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid d-block mx-auto " alt="..."
                            style="object-fit:cover;width:100%;height:100%;">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="" class=" img-fluid d-block mx-auto"
                            style="object-fit:cover;width:100%;height:100%;">
                        @endif




                    </div>
                </a>

                @endforeach
            </div>
        </div>
        @endif


    </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            @if ($editorial->comenteditorial->count())
            <div class="card p-3 border-0">
                <h4 class="card-header ubuntu">Comentaris</h4>
                @include('front.partials.comenteditorialDisplay', ['comenteditorials' =>
                $editorial->comenteditorial,'editorial_id',$editorial->id])

            </div>
            @endif
            @if (Auth::check())

            <div class="card p-3 border-0">


                <h4 class="card-header bg-white ubuntu">Fes un comentari</h4>
                <form method="post" action="{{route('coment.editorial.store')}}">
                    @csrf
                    <div class="form-group mb-3 p-2">
                        <textarea class="form-control" name="body" required></textarea>
                        <input type="hidden" name="editorial_id" value="{{ $editorial->id }}" />
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <button type="submit" class="btn btn-outline-success">
                            Crea
                        </button>
                    </div>
                </form>


            </div>
            @endif



        </div>
    </div>

</div>


@endsection
@section('js')
<script>
    $(document).ready(function(){
         
            $('#input-5').rating({clearCaption: 'No stars yet'});
            $('#input-1').rating();
         
        });
</script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function () {
    
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