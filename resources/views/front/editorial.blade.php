@extends('layouts.front')
@section('title')
{{ $editorial->editorial_nom }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card p-3">
                @if ($editorial->logo != null)
                <img src="{{ $editorial->logo }}" class="card-img-top img-fluid w-25 d-block mx-auto" alt="...">
                @else
                <img src="{{Storage::url($editorial->image)}}" alt="" class="d-block mx-auto" width="80">
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <p>{{$editorial->ratingeditorial->count()}} Valoracions</p>
                        <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                            data-step="0.1" value="{{ $rating }}" data-size="xs" disabled="">
                        <p class="mb-2">{{$com}} Comentaris</p>
                    </div>
                </div>
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
                    @if (Auth::check())
                    @if (Session::has('notif.success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('notif.success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="row mt-3 mb-3">
                        <div class="col">
                            @if ($editorial->ratingeditorial->contains('user_id',Auth::user()->id))
                            <p class="text-success fw-bold">Ja has valorat aquesta editorial</p>
                            @else
                            <h4>Valora</h4>
                            <form action="{{route('rating.editorial.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="editorial_id" value="{{$editorial->id}}">
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
        <div class="col-md-12 d-flex flex-column">
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
            <div class="card p-3">
                <h5 class="card-header">Veure Comentaris</h5>
                @include('front.partials.comenteditorialDisplay', ['comenteditorials' =>
                $editorial->comenteditorial,'editorial_id',$editorial->id])

            </div>
            @if (Auth::check())

            <div class="card p-3">


                <h5 class="card-header">Fes un comentari</h5>
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


@endsection