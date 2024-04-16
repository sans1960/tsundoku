@extends('layouts.front')
@section('title')
{{ $acte->titol }}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto  d-flex flex-column">
            <h3 class="text-center">{{$acte->titol}}</h3>
            <img src="{{Storage::url($acte->image)}}" alt="" class="img-fluid w-50 d-block mx-auto mt-2">
            <div class=" d-flex justify-content-center">
                <a href="{{$acte->url}}" target="_blank" class="nav-link text-success fw-bold">Acte</a>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col d-flex justify-content-center">
                    <p>{{$acte->lloc}}</p>
                </div>

                <div class="col d-flex justify-content-center">
                    <p>{{\Carbon\Carbon::parse($acte->data)->format('d/m/Y');}}</p>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{$acte->hora}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-3">
                    <p>{{$acte->ratingacte->count()}} Valoracions</p>
                    <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="0.1" value="{{$rating}}" data-size="xs" disabled="">
                    <p>{{$acte->comentacte->count()}} Comentaris</p>


                </div>
            </div>

            <div>
                {!! $acte->body!!}
            </div>
        </div>
    </div>
    @if (Auth::check())

    @if (Session::has('notif.success'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('notif.success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            @if ($acte->ratingacte->contains('user_id',Auth::user()->id))
            <p class="text-success fw-bold">Ja has valorat aquest acte</p>
            @else
            <h4>Valora</h4>
            <form action="{{route('rating.acte.store')}}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="acte_id" value="{{$acte->id}}">
                <div class="row">
                    <div class="col">
                        <input id="input-5" name="rate" class="rating-loading" data-show-clear="false"
                            data-show-caption="true">
                    </div>
                    <div class="col mt-2">
                        <button type="submit" class="btn btn-outline-success">
                            <i class="bi bi-check-square-fill"></i>
                        </button>&nbsp;
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
    @endif


    <div class="row mt-4">
        <div class="col-md-12">
            @if ($acte->comentacte->count())
            <div class="card p-3 border-0">
                <h5 class="card-header bg-white">Comentaris</h5>
                @include('front.partials.comentacteDisplay', ['comentactes' =>
                $acte->comentacte,'acte_id',$acte->id])

            </div>
            @endif
            @if (Auth::check())
            <div class="card p-3 border-0">


                <h5 class="card-header bg-white">Fes un comentari</h5>
                <form method="post" action="{{route('coment.acte.store')}}">
                    @csrf
                    <div class="form-group mb-3 p-2">
                        <textarea class="form-control" name="body" required></textarea>
                        <input type="hidden" name="acte_id" value="{{ $acte->id }}" />
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
            <h3 class="mb-3">Darrers actes</h3>
            <div class="owl-carousel owl-theme">
                @foreach ($actes as $acte)
                <a href="{{route('acte',$acte)}}" class="nav-link">
                    <div class="card d-flex justify-content-end align-items-start p-3"
                        style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{Storage::url($acte->image)}});background-size:cover;background-position:center;">
                        <h5 class="text-white text-uppercase">{{$acte->titol}}</h5>

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
    $(document).ready(function(){
             
                $('#input-5').rating({clearCaption: 'No stars yet'});
                $('#input-1').rating();
             
            });
</script>

@endsection