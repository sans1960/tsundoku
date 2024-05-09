@extends('layouts.front')
@section('title')
{{ $bookshop->nom }}
@endsection
@section('meta_title')
{{ $bookshop->nom }}
@endsection
@section('meta_url')
{{url('bookshops/'.$bookshop->slug)}}
@endsection

@section('meta_image')
@if ($bookshop->logo != null)
{{ $bookshop->logo }}
@else
{{url(Storage::url($bookshop->image))}}
@endif
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 d-flex flex-column justify-content-center align-items-center">
                @if ($bookshop->logo != null)
                <img src="{{ $bookshop->logo }}" class="img-fluid w-50 " alt="...">
                @else
                <img src="{{Storage::url($bookshop->image)}}" alt="" class="img-fluid  w-50">
                @endif
                <div class="d-flex justify-content-start align-items-center ms-2">

                    <p class="fs-5 fw-bold text-success-emphasis mt-1">{{round($rating,2)}}</p>
                    <p class="ms-4 fs-5">{{$bookshop->ratingbookshop->count()}} <i class="bi bi-person"
                            style="font-size: 1.5em;"></i>
                    </p>
                </div>
                <button type="" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal">
                    Veure localització
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$bookshop->nom}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="map" style="width:100%;height:400px">


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tanca</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <h4 class="card-title ubuntu">{{ $bookshop->nom }}</h4>
                <a href="{{ $bookshop->url }}" target="_blank">
                    <i style="font-size: 1.5rem;" class="bi bi-globe"></i>
                </a>
                <div>
                    {!! $bookshop->qui_som !!}
                </div>
                @if (Auth::check() and Auth::user()->email_verified_at !=null)
                @if (Session::has('notif.success'))
                <div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
                    <strong>{{ Session::get('notif.success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if ($bookshop->ratingbookshop->contains('user_id',Auth::user()->id))
                <p class="text-success fw-bold">Ja has valorat aquesta llibreria</p>
                @else
                <h4 class="ubuntu">Valora</h4>
                <form action="{{route('rating.bookshop.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="bookshop_id" value="{{$bookshop->id}}">

                    <div class="">
                        <input id="input-5" name="rate" class="rating-loading" data-show-clear="false"
                            data-show-caption="true">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-outline-success">
                            <i class="bi bi-check-square-fill"></i>
                        </button>&nbsp;
                    </div>

                </form>
                @endif
                @endif
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            @if ($bookshop->comentbookshop->count())
            <div class="card p-3 border-0">
                <h4 class="card-header bg-white ubuntu">Comentaris</h4>
                @include('front.partials.comentbookshopDisplay', ['comentbookshops' =>
                $bookshop->comentbookshop,'bookshop_id',$bookshop->id])

            </div>
            @endif



            @if (Auth::check() and Auth::user()->email_verified_at !=null)
            <div class="card p-3 border-0">


                <h5 class="card-header bg-white ubuntu">Fes un comentari</h5>
                <form method="post" action="{{route('coment.bookshop.store')}}">
                    @csrf
                    <div class="form-group mb-3 p-2">
                        <textarea class="form-control" name="body" required></textarea>
                        <input type="hidden" name="bookshop_id" value="{{ $bookshop->id }}" />
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
<script src="{{ asset('js/leaflet.js') }}"></script>

<script>
    var map = L.map('map').setView([{{ $bookshop->latitud }}, {{ $bookshop->longitud }}], {{ $bookshop->zoom }});

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env('MAP_KEY') }}', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,

    }).addTo(map);
    var datos = <?= json_encode($bookshop) ?>;

    var marker = L.marker([datos.latitud, datos.longitud]).addTo(map)
        .bindPopup(datos.nom);

</script>
<script>
    $(document).ready(function(){
     
     
     $('#modal').on('shown.bs.modal', function () {      
                  
                        map.invalidateSize();
                    
                });
        
   
     
    });
</script>
<script>
    $(document).ready(function(){
         
            $('#input-5').rating({clearCaption: 'No stars yet'});
            $('#input-1').rating();
         
        });
</script>

@endsection