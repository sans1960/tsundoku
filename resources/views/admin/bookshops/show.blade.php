@extends('layouts.admin')
@section('title')
{{ $bookshop->nom }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card p-1">
                <img src="{{ $bookshop->logo }}" class="d-block mx-auto" alt="" width="150">
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
                    <div id="map" style="width:100%;height:400px">

                    </div>
                    <p class="mt-5 mb-5">{{$bookshop->user->nickname}}</p>
                </div>
            </div>
        </div>




    </div>
</div>
@endsection
@section('js')
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
@endsection