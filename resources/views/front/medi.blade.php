@extends('layouts.front')
@section('title')
{{ $medi->titol }}
@endsection
@section('meta_title')
{{ $medi->titol }}
@endsection
@section('meta_url')
{{url('medis/'.$medi->slug)}}
@endsection

@section('meta_image')

{{url(Storage::url($medi->image))}}

@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{Storage::url($medi->image)}}" alt="" class="img-fluid  mt-2">
            <div class="d-flex justify-content-start align-items-center ms-2">

                <p class="fs-5 fw-bold text-success-emphasis mt-1">{{round($rating,2)}}</p>
                <p class="ms-4 fs-5">{{$medi->ratingmedi->count()}} <i class="bi bi-person"
                        style="font-size: 1.5em;"></i>
                </p>
            </div>
        </div>
        <div class="col-md-8">
            <h3 class="ubuntu">{{$medi->titol}}</h3>
            <div class="row mt-5 mb-3">

                <div class="col d-flex justify-content-start">
                    <a href="{{$medi->url}}" target="_blank" class="nav-link text-success fw-bold">Reproduir
                        {{$medi->tipus}} <span><i class="bi bi-play-fill"></i></span>

                    </a>
                </div>

                <div class="col d-flex justify-content-center">
                    <p>{{\Carbon\Carbon::parse($medi->data)->format('d/m/Y');}}</p>
                </div>
            </div>
            <div>
                {!! $medi->body!!}
            </div>
            @if (Auth::check() and Auth::user()->email_verified_at !=null)

            @if (Session::has('notif.success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('notif.success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            @if ($medi->ratingmedi->contains('user_id',Auth::user()->id))
            <p class="text-success fw-bold">Ja has valorat aquesta emissió</p>
            @else
            <h4 class="ubuntu">Valora</h4>
            <form action="{{route('rating.medi.store')}}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="medi_id" value="{{$medi->id}}">
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
            @endif
            @endif

        </div>

    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            @if ($medi->comentarimedi->count())
            <div class="card p-3 border-0">
                <h5 class="card-header bg-white ubuntu">Comentaris</h5>
                @include('front.partials.comentmediDisplay', ['comentmedis' =>
                $medi->comentarimedi,'medi_id',$medi->id])

            </div>
            @endif
            @if (Auth::check() and Auth::user()->email_verified_at !=null)
            <div class="card p-3 border-0 ">


                <h5 class="card-heade bg-white ubuntu">Fes un comentari</h5>
                <form method="post" action="{{route('coment.medi.store')}}">
                    @csrf
                    <div class="form-group mb-3 p-2">
                        <textarea class="form-control" name="body" required></textarea>
                        <input type="hidden" name="medi_id" value="{{ $medi->id }}" />
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
    <div class="row mb-3">
        <div class="col-md-12 p-3 ">
            <h3 class="mb-3">Darreres entrades</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($medis as $medi)
                <a href="{{route('medi',$medi)}}" class="nav-link">
                    <div class="card d-flex justify-content-end align-items-start p-3"
                        style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{Storage::url($medi->image)}});background-size:cover;background-position:center;">
                        <h5 class="text-white text-uppercase">{{$medi->titol}}</h5>

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
    $(document).ready(function(){
             
                $('#input-5').rating({clearCaption: 'No stars yet'});
                $('#input-1').rating();
             
            });
</script>


@endsection