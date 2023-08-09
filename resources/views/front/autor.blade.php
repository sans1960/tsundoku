@extends('layouts.front')
@section('title')
{{ $autor->autor_nom }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="card p-3">

                @if ($autor->url_foto != null)
                <img src="{{ $autor->url_foto }}" alt="" class="d-block mx-auto" width="80">
                @else
                <img src="{{Storage::url($autor->image)}}" alt="" class="d-block mx-auto" width="80">
                @endif


                <div class="card-body">
             
                    <div class="row">
                        <div class="col">
                            @if ($autor->twitter)
                                <a href="{{$autor->twitter}}" target="_blank">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            @endif
                        </div>
                        <div class="col">
                            @if ($autor->facebook)
                            <a href="{{$autor->facebook}}" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                        @endif
                        </div>
                        <div class="col">
                            @if ($autor->web)
                            <a href="{{$autor->web}}" target="_blank">
                                <i class="bi bi-globe"></i>
                            </a>
                        @endif
                        </div>
                        <div class="col">
                            @if ($autor->instagram)
                            <a href="{{$autor->instagram}}" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        @endif
                        </div>
                    </div>
                    <h5 class="card-title">{{ $autor->autor_nom }}</h5>
                    <div>
                        {!! $autor->biopic !!}
                    </div>
                    <p class="mb-2">{{$autor->usersRated()}} Valoracions</p>
                    <p class="mb-2">{{$com}} Comentaris</p>
                    <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="0.1" value="{{ $autor->averageRating }}" data-size="xs" disabled="">
                    @if (Auth::check())
                    <form action="{{route('rating.autor')}}" method="post">
                        @csrf
                        <label for="input-5" class="control-label">Valora</label>
                        <input id="input-5" name="rating" class="rating-loading" data-show-clear="false"
                            data-show-caption="true">

                        <input type="hidden" name="id" required="" value="{{ $autor->id }}">
                        <hr>
                        <button type="submit" class="btn btn-outline-success">
                            <i class="bi bi-check-square-fill"></i>
                        </button>&nbsp;
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column">
            <h3>Llibres</h3>
            @foreach ($autor->book as $book)
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
                <div class="card-body">
                    @include('layouts.autorcomment_replies', ['comments' => $autor->comments, 'autor_id' => $autor->id])
                </div>
            </div>
            @if (Auth::check())
            <div class="card">


                <h5 class="card-header">Fes un comentari</h5>
                <div class="card-body">
                    <form action="{{route('comment.autor')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="autor_id" value="{{$autor->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <textarea class="form-control" required name="comment_body" id="" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-warning">
                                <i class="bi bi-plus-square-fill"></i></button>
                        </div>
                    </form>
                </div>
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