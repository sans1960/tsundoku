@extends('layouts.front')
@section('title')
{{ $editorial->editorial_nom }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="card p-3">
                @if ($editorial->logo != null)
                <img src="{{ $editorial->logo }}" class="card-img-top img-fluid w-25 d-block mx-auto" alt="...">
                @else
                <img src="{{Storage::url($editorial->image)}}" alt="" class="d-block mx-auto" width="80">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $editorial->editorial_nom }}</h5>
                    <div class="row">
                        <div class="col">
                            <a href="{{ $editorial->url }}" target="_blank">Lloc web</a>
                        </div>

                        <div class="col">
                            <p>{{ $editorial->adreça }}</p>
                        </div>
                    </div>
                    <div>
                        {!! $editorial->descripcio !!}
                    </div>
                    <p class="mb-2">{{$editorial->usersRated()}} Valoracions</p>

                    <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="0.1" value="{{ $editorial->averageRating }}" data-size="xs" disabled="">
                    @if (Auth::check())
                    <div class="row">

                        <div class="col-md-12">
                            <form action="{{route('rating.editorial')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" required="" value="{{ $editorial->id }}">
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
        </div>
        <div class="col-md-4 d-flex flex-column">
            <h3>Llibres</h3>
            @foreach ($editorial->book as $book)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid rounded-start" alt="...">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="" class="d-block mx-auto" width="80">
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->titol }}</h5>
                            <p class="card-text">{{ $book->genere->nom }}</p>
                            <p class="card-text">{{ $book->editorial_nom }}
                            </p>
                            <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                                data-step="0.1" value="{{ $book->averageRating }}" data-size="xs" disabled="">
                            <a href="{{ route('book', $book) }}">
                                <i class="bi bi-eye-fill text-success" style="font-size: 1.5rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">

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
</div>

@endsection
@section('js')

<script>
    $(document).ready(function(){
     
        $('#input-5').rating({clearCaption: 'No stars yet'});
        $('#input-1').rating();
        $('#input-2').rating();
     
    });
</script>

@endsection