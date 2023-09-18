@extends('layouts.front')
@section('title')
{{ $acte->titol }}
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto  d-flex flex-column">
            <h3 class="text-center">{{$acte->titol}}</h3>
            <img src="{{Storage::url($acte->image)}}" alt="" class="img-fluid w-50 d-block mx-auto mt-2">
            <div class="row mt-3 mb-3">

                <div class="col d-flex justify-content-center">
                    <a href="{{$acte->url}}" target="_blank" class="nav-link text-success fw-bold">Acte</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{\Carbon\Carbon::parse($acte->data)->format('d/m/Y');}}</p>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{$acte->hora}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="0.1" value="{{ $acte->averageRating }}" data-size="xs" disabled="">
                </div>
                <div class="col d-flex justify-content-center">
                    <p class="mb-2">{{$acte->usersRated()}} Valoracions</p>
                </div>
                <div class="col d-flex justify-content-center">
                    {{-- <p class="mb-2">{{$com}} Comentaris</p> --}}
                </div>
            </div>

            <div>
                {!! $acte->body!!}
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4 mx-auto">
            @if (Auth::check())
            <div class="row">

                <div class="col-md-12">
                    <form action="{{route('rating.acte')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" required="" value="{{ $acte->id }}">
                        <label for="input-5" class="control-label">Valora</label>
                        <div class="row">
                            <div class="col">

                                <input id="input-5" name="rating" class="rating-loading" data-show-clear="false"
                                    data-show-caption="true">
                            </div>
                            <div class="col mt-2">
                                <button type="submit" class="btn btn-outline-success">
                                    <i class="bi bi-check-square-fill"></i>
                                </button>&nbsp;
                            </div>
                        </div>



                        <hr>

                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <h5 class="card-header">Veure Comentaris</h5>

            </div>
            @if (Auth::check())
            <div class="card">


                <h5 class="card-header">Fes un comentari</h5>


            </div>
            @endif
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

    @endsection