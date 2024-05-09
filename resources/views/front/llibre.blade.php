@extends('layouts.front')
@section('meta_title')
{{ $book->titol }}
@endsection
@section('title')
{{ $book->titol }}
@endsection
@section('meta_url')
{{url('books/'.$book->slug)}}
@endsection

@section('meta_image')
@if ($book->imatge != null)
{{ $book->imatge }}
@else
{{url(Storage::url($book->foto))}}
@endif
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="card mb-3 p-2 border-0">

                @if ($book->imatge != null)
                <img src="{{ $book->imatge }}" class="img-fluid" alt="..."
                    style="object-fit:cover;width:100%;height:100%;">
                @else
                <img src="{{Storage::url($book->foto)}}" alt="" class="img-fluid"
                    style="object-fit:cover;width:100%;height:100%;">
                @endif

                <p>{{ $book->isbn }}</p>

                <p class="fw-bold">Pujat X </p>

                @if ($book->user->avatar)

                <img src="{{Storage::url($book->user->avatar)}}" alt="" class="float-start img-fluid rounded-circle p-1"
                    style="height: 100px;width:100px;">

                @else
                <img src="https://ui-avatars.com/api/?name={{$book->user->name}}&background=0D8ABC&color=fff&rounded=true"
                    class="img-fluid float-start p-1" alt="..." width="100">

                @endif

                <p>{{ \Carbon\Carbon::parse($book->created_at)->format('d/m/Y');}}</p>
                @if (Auth::check() and Auth::user()->email_verified_at !=null)
                <p>{{$book->user->nickname}} </p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Veure perfil públic
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil públic de
                                    {{$book->user->nickname}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if ($book->user->avatar)
                                <img src="{{Storage::url($book->user->avatar)}}" alt=""
                                    class="img-fluid d-block mx-auto rounded-circle p-3"
                                    style="height: 100px;width:100px;">

                                @else
                                <img src="https://ui-avatars.com/api/?name={{$book->user->name}}&background=0D8ABC&color=fff&rounded=true"
                                    class="img-fluid d-block mx-auto p-3" alt="..." width="100">

                                @endif
                                <p>{{$book->user->condicio}}</p>
                                <p>{{$book->user->biopic}}</p>
                                <p>{{\Carbon\Carbon::parse($book->user->created_at)->format('d-m-Y')}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tanca</button>

                            </div>
                        </div>
                    </div>
                </div>
                @else
                <p>{{$book->user->nickname}} </p>
                @endif









            </div>
        </div>
        <div class="col-md-4 ">

            <h4 class="card-title mb-3 ubuntu">{{ $book->titol }}</h4>
            <div class="d-flex justify-content-start align-items-center">

                <p class="fs-5 fw-bold text-success-emphasis">{{round($rating,2)}}/5</p>
                <p class="ms-4 fs-5">{{$book->ratingbook->count()}} <i class="bi bi-person"
                        style="font-size: 1.5em;"></i>
                </p>
            </div>

            @if ($book->autor != null)
            <a href="{{route('autor',$book->autor)}}" class="nav-link ubuntu fw-bold">
                {{ $book->autor->autor_nom }}
            </a>
            @else
            <p>{{$book->autor_nom}}</p>
            @endif


            {{-- <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                data-step="0.1" value="{{ $rating }}" data-size="xs" disabled=""> --}}


            {{-- <p class="mb-2">{{$com}} Comentaris</p> --}}







            @if ($book->editorial != null)
            <a href="{{route('editorial',$book->editorial)}}" class="nav-link mt-3 ubuntu">
                {{ $book->editorial->editorial_nom }}
            </a>
            @else
            <p class="mt-3">{{$book->editorial_nom}}</p>
            @endif






            @if ($book->auto == 1)
            <p class="bg-success text-white p-1 rounded w-75 text-center">Autopublicat</p>
            @endif


            @if ($book->novetat == 1)
            <p class="bg-primary text-white p-1 rounded w-75 text-center">Novetat</p>
            @endif

            @if ($book->primera == 1)
            <p class="bg-danger text-white p-1 rounded w-75 text-center">Primera obra de l'autor/a</p>
            @endif


            <p>{{ $book->genere->nom }}</p>
            <p>{{ $book->idioma }}</p>
        </div>
        <div class="col-md-6">
            <h4 class="ubuntu">Sinopsi</h4>
            <div class="mt-3">
                {!! $book->sinopsi !!}
            </div>
            @if ($book->cita)
            <h4 class="ubuntu">Cita destacada</h4>
            <div class="mt-3">
                {!! $book->cita !!}
            </div>
            @endif
            @if ($book->comentari)
            <h4 class="ubuntu">Ressenya</h4>
            <div class="mt-3">
                {!! $book->comentari !!}
            </div>
            @endif
            @if (Auth::check() and Auth::user()->email_verified_at !=null)

            @if (Session::has('notif.success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('notif.success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row mt-3 mb-3">
                <div class="col-md-10">
                    @if ($book->ratingbook->contains('user_id',Auth::user()->id))
                    <p class="text-success fw-bold">Ja has valorat aquest llibre</p>
                    @else
                    <h4 class="ubuntu">Valora</h4>
                    <form action="{{route('rating.book.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="book_id" value="{{$book->id}}">
                        <div class="row ">
                            <div class="">
                                <input id="input-5" name="rate" class="rating-loading" data-show-clear="false"
                                    data-show-caption="true">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-outline-success ">
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($book->comentbook->count())
            <div class="card p-3 border-0">
                <h4 class="card-header bg-white ubuntu ">Comentaris</h4>
                @include('front.partials.comentbookDisplay', ['comentbooks' =>
                $book->comentbook,'book_id',$book->id])
            </div>
            @endif
            @if (Auth::check() and Auth::user()->email_verified_at !=null)

            <div class="card p-3 border-0">


                <h4 class="card-header bg-white ubuntu">Fes un comentari</h4>
                <form method="post" action="{{ route('coment.book.store'   ) }}">
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