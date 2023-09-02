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

                        <p class="mb-2">{{$book->usersRated()}} Valoracions</p>
                        <p class="mb-2">{{$com}} Comentaris</p>



                        <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                            data-step="0.1" value="{{ $book->averageRating }}" data-size="xs" disabled="">



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
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn btn-outline-success mb-3"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Veure valoracions
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
                                                        {{$book->titol}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3>Valoracions</h3>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Usuari</th>
                                                                <th>Puntuació/5</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($book->ratings as $rating)
                                                            <tr>
                                                                <td>{{$rating->user->nickname}} </td>
                                                                <td>{{$rating->rating}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tancar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <form action="{{route('rating.book')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" required="" value="{{ $book->id }}">
                                        <label for="input-5" class="control-label">Valora</label>
                                        <div class="row">
                                            <div class="col">

                                                <input id="input-5" name="rating" class="rating-loading"
                                                    data-show-clear="false" data-show-caption="true">
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

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="card">
                    <h5 class="card-header">Veure Comentaris</h5>
                    <div class="card-body">
                        @include('layouts.bookcomment_replies', ['comments' => $book->comments, 'book_id' => $book->id])
                    </div>
                </div>
                @if (Auth::check())
                <div class="card">


                    <h5 class="card-header">Fes un comentari</h5>

                    <div class="card-body">
                        <form action="{{route('comment.book')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" name="book_id" value="{{$book->id}}">
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
     
    });
    </script>

    @endsection