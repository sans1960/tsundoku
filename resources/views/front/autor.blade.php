@extends('layouts.front')

@section('title')
{{ $autor->autor_nom }}
@endsection
@section('meta_title')
{{ $autor->autor_nom }}
@endsection
@section('meta_url')
{{url('autors/'.$autor->slug)}}
@endsection

@section('meta_image')
@if ($autor->url_foto != null)
{{ $autor->url_foto }}
@else
{{url(Storage::url($autor->image))}}
@endif
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="card p-3 border-0">

                @if ($autor->url_foto != null)
                <img src="{{ $autor->url_foto }}" alt="" class=" img-fluid ">
                @else
                <img src="{{Storage::url($autor->image)}}" alt="" class=" img-fluid ">
                @endif


                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center">

                        <p class="fs-5 fw-bold text-success-emphasis mt-2">{{round($rating,2)}}</p>
                        <p class="ms-4 fs-5">{{$autor->ratingautor->count()}} <i class="bi bi-person"
                                style="font-size: 1.5em;"></i>
                        </p>
                    </div>



                    @if ($autor->auto == 1)
                    <p class="bg-success text-white p-1 rounded w-25 text-center">Autopublica</p>
                    @endif


                    <div class="row mb-3">
                        <div class="col">
                            @if ($autor->twitter)
                            <a href="{{$autor->twitter}}" target="_blank">
                                <i style="font-size: 1.5rem;" class="bi bi-twitter-x"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->facebook)
                            <a href="{{$autor->facebook}}" target="_blank">
                                <i style="font-size: 1.5rem;" class="bi bi-facebook"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->web)
                            <a href="{{$autor->web}}" target="_blank">
                                <i style="font-size: 1.5rem;" class="bi bi-globe"></i>
                            </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->instagram)
                            <a href="{{$autor->instagram}}" target="_blank">
                                <i style="font-size: 1.5rem;" class="bi bi-instagram"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h4 class="card-title ubuntu">{{ $autor->autor_nom }}</h4>
            <div>
                {!! $autor->biopic !!}
            </div>


            @if (Auth::check() and Auth::user()->email_verified_at !=null)
            @if (Session::has('notif.success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('notif.success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class=" mt-3 mb-3">

                @if ($autor->ratingautor->contains('user_id',Auth::user()->id))
                <p class="text-success fw-bold">Ja has valorat aquest autor</p>
                @else
                <h4 class="ubuntu">Valora</h4>
                <form action="{{route('rating.autor.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="autor_id" value="{{$autor->id}}">
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
    <div class="row">
        @if (count($autor->book))
        <div class="col-md-12">
            <h4 class="ubuntu">Llibres</h4>


            <div class="owl-carousel owl-theme ">
                @foreach ($autor->book as $book)

                <a href="{{route('book',$book)}}">
                    <div class="card mb-3 border-0" data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">


                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid  " alt="..."
                            style="object-fit:cover;width:100%;height:100%;">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="" class=" img-fluid "
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


            <div class="card p-3 border-0">
                @if ($autor->comentautor->count())
                <h4 class="card-header bg-white ubuntu">Comentaris</h4>
                @include('front.partials.comentautorDisplay', ['comentautors' =>
                $autor->comentautor,'autor_id',$autor->id])
                @endif


            </div>
            @if (Auth::check() and Auth::user()->email_verified_at !=null)

            <div class="card p-3 border-0">


                <h4 class="card-header bg-white ubuntu">Fes un comentari</h4>
                <form method="post" action="{{route('coment.autor.store')}}">
                    @csrf
                    <div class="form-group mb-3 p-2">
                        <textarea class="form-control" name="body" required></textarea>
                        <input type="hidden" name="autor_id" value="{{ $autor->id }}" />
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