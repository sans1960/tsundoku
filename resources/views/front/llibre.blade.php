@extends('layouts.front')
@section('title')
{{ $book->titol }}
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-3 d-flex flex-column p-2">
                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid rounded-start" alt="...">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="" class="d-block mx-auto" width="80">
                        @endif

                        <p>{{ $book->isbn }}</p>
                        <p>{{$book->ratingbook->count()}} Valoracions</p>
                        <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                            data-step="0.1" value="{{ $rating }}" data-size="xs" disabled="">


                        <p class="mb-2">{{$com}} Comentaris</p>







                    </div>
                    <div class="col-md-9 p-2">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->titol }}</h5>
                            <div class="row">
                                <div class="col">
                                    @if ($book->autor != null)
                                    <a href="{{route('autor',$book->autor)}}">
                                        {{ $book->autor->autor_nom }}
                                    </a>
                                    @else
                                    <p>{{$book->autor_nom}}</p>
                                    @endif





                                </div>
                                <div class="col">
                                    @if ($book->editorial != null)
                                    <a href="{{route('editorial',$book->editorial)}}">
                                        {{ $book->editorial->editorial_nom }}
                                    </a>
                                    @else
                                    <p>{{$book->editorial_nom}}</p>
                                    @endif


                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ $book->genere->nom }}
                                </div>
                                <div class="col">
                                    {{ $book->idioma }}
                                </div>
                            </div>
                            <div class="mt-3">
                                {!! $book->sinopsi !!}
                            </div>
                            @if (Auth::check())

                            @if (Session::has('notif.success'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('notif.success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="row mt-3 mb-3">
                                <div class="col-md-12">
                                    @if ($book->ratingbook->contains('user_id',Auth::user()->id))
                                    <p class="text-success fw-bold">Ja has valorat aquest llibre</p>
                                    @else
                                    <h4>Valora</h4>
                                    <form action="{{route('rating.book')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="book_id" value="{{$book->id}}">
                                        <div class="row">
                                            <div class="col">
                                                <input id="input-5" name="rate" class="rating-loading"
                                                    data-show-clear="false" data-show-caption="true">
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
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="card p-3">
                    <h5 class="card-header">Veure Comentaris</h5>
                    @include('front.partials.comentbookDisplay', ['comentbooks' =>
                    $book->comentbook,'book_id',$book->id])
                </div>

                @if (Auth::check())
                @if (Session::has('notif.success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('notif.success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card p-3">


                    <h5 class="card-header">Fes un comentari</h5>
                    <form method="post" action="{{ route('coment.book'   ) }}">
                        @csrf
                        <div class="form-group mb-3 p-2">
                            <textarea class="form-control" name="body" required></textarea>
                            <input type="hidden" name="book_id" value="{{ $book->id }}" />
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