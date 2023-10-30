@extends('layouts.front')
@section('title')
{{ $bookshop->nom }}
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
@endsection
@section('content')
<div class="container ">
    <div class="row ">
        <div class="col-md-12 mt-3">
            <div class="card p-1">
                @if ($bookshop->logo != null)
                <img src="{{ $bookshop->logo }}" class="img-fluid d-block mx-auto w-25" alt="...">
                @else
                <img src="{{Storage::url($bookshop->image)}}" alt="" class="img-fluid d-block mx-auto w-25">
                @endif
                <div class="row">
                    <div class="col-md-6 p-3">
                        <p>{{$bookshop->ratingbookshop->count()}} Valoracions</p>
                        <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                            data-step="0.1" value="{{$rating}}" data-size="xs" disabled="">
                        <p class="mb-2">{{$com}} Comentaris</p>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $bookshop->nom }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($bookshop->active == 0)
                            <p class="card-text">No actiu</p>
                            @else
                            <p class="card-text">Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $bookshop->active }}</p>
                        </div>
                        <div class="col">
                            <a href="{{ $bookshop->url }}" target="_blank">Lloc web</a>
                        </div>
                        <div class="col">
                            <p>{{ $bookshop->ciutat }}</p>
                        </div>
                    </div>

                    <div>
                        {!! $bookshop->qui_som !!}
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#modal">
                        Veure localització
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tanca</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    @if (Auth::check())
                    @if (Session::has('notif.success'))
                    <div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
                        <strong>{{ Session::get('notif.success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="row mt-3 mb-3">
                        <div class="col">
                            @if ($bookshop->ratingbookshop->contains('user_id',Auth::user()->id))
                            <p class="text-success fw-bold">Ja has valorat aquesta llibreria</p>
                            @else
                            <h4>Valora</h4>
                            <form action="{{route('rating.bookshop.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="bookshop_id" value="{{$bookshop->id}}">
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

                </div>
            </div>
        </div>




    </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            @if ($bookshop->comentbookshop->count())
            <div class="card p-3">
                <h5 class="card-header">Comentaris</h5>
                @include('front.partials.comentbookshopDisplay', ['comentbookshops' =>
                $bookshop->comentbookshop,'bookshop_id',$bookshop->id])

            </div>
            @endif



            @if (Auth::check())
            <div class="card p-3">


                <h5 class="card-header">Fes un comentari</h5>
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