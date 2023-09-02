@extends('layouts.front')
@section('title')
{{ $medi->titol }}
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto  d-flex flex-column">
            <h3 class="text-center">{{$medi->titol}}</h3>
            <img src="{{Storage::url($medi->image)}}" alt="" class="img-fluid w-50 d-block mx-auto mt-2">
            <div class="row mt-3 mb-3">

                <div class="col d-flex justify-content-center">
                    <a href="{{$medi->url}}" target="_blank" class="nav-link text-success fw-bold">Medi</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{$medi->tipus}}</p>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{\Carbon\Carbon::parse($medi->data)->format('d/m/Y');}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="0.1" value="{{ $medi->averageRating }}" data-size="xs" disabled="">
                </div>
                <div class="col d-flex justify-content-center">
                    <p class="mb-2">{{$medi->usersRated()}} Valoracions</p>
                </div>
                <div class="col d-flex justify-content-center">
                    <p class="mb-2">{{$com}} Comentaris</p>
                </div>
            </div>

            <div>
                {!! $medi->body!!}
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4 mx-auto">
            @if (Auth::check())
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn btn-outline-success mb-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Veure valoracions
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
                                        {{$medi->titol}}</h1>
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
                                            @foreach ($medi->ratings as $rating)
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
                    <form action="{{route('rating.medi')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" required="" value="{{ $medi->id }}">
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
                <div class="card-body">
                    @include('layouts.medicomment_replies', ['comments' => $medi->comments, 'medi_id' =>
                    $medi->id])
                </div>
            </div>
            @if (Auth::check())
            <div class="card">


                <h5 class="card-header">Fes un comentari</h5>

                <div class="card-body">
                    <form action="{{route('comment.medi')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="medi_id" value="{{$medi->id}}">
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
    @endsection
    @section('js')

    <script>
        $(document).ready(function(){
     
        $('#input-5').rating({clearCaption: 'No stars yet'});
        $('#input-1').rating();
     
    });
    </script>

    @endsection