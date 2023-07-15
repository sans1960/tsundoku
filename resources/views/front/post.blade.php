@extends('layouts.front')
@section('title')
{{ $post->titol }}
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto  d-flex flex-column">
            <h3 class="text-center">{{$post->titol}}</h3>
            <img src="{{Storage::url($post->image)}}" alt="" class="img-fluid w-50 d-block mx-auto mt-2">
            <div class="row mt-3 mb-3">
                <div class="col d-flex justify-content-center">
                    <h5>{{$post->font}}</h5>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="{{$post->url}}" target="_blank" class="nav-link text-success fw-bold">Notícia</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <p>{{\Carbon\Carbon::parse($post->data)->format('d/m/Y');}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="0.1" value="{{ $post->averageRating }}" data-size="xs" disabled="">
                </div>
                <div class="col d-flex justify-content-center">
                    <p class="mb-2">{{$post->usersRated()}} Valoracions</p>
                </div>
                <div class="col d-flex justify-content-center">
                    <p class="mb-2">{{$com}} Comentaris</p>
                </div>
            </div>

            <div>
                {!! $post->body!!}
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-4 mx-auto">
            @if (Auth::check())
            <form action=" {{route('rating.post')}}" method="post">
                @csrf
                <label for="input-5" class="control-label">Valora</label>
                <input id="input-5" name="rating" class="rating-loading" data-show-clear="false"
                    data-show-caption="true">

                <input type="hidden" name="id" required="" value="{{ $post->id }}">
                <hr>
                <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-check-square-fill"></i>
                </button>&nbsp;
            </form>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <h5 class="card-header">Veure Comentaris</h5>
                <div class="card-body">
                    @include('layouts.postcomment_replies', ['comments' => $post->comments, 'post_id' =>
                    $post->id])
                </div>
            </div>
            @if (Auth::check())
            <div class="card">


                <h5 class="card-header">Fes un comentari</h5>

                <div class="card-body">
                    <form action="{{route('comment.post')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="post_id" value="{{$post->id}}">
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