@extends('layouts.admin')
@section('content')
<div class="container">


    <h4 class="mt-3">Activitat</h4>
    @if ($user->condicio == 'lector')
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold  ">
                    Llibres pujats
                </div>
                <div class="card-body">
                    @foreach ($user->book as $item)
                    <p>{{$item->titol}}</p>



                    @endforeach
                </div>

            </div>



        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentbook as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->book->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentautor as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comenteditorial as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentbookshop as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentpost as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->post->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia comentaris
                </div>
                <div class="card-body">
                    @foreach ($user->comentmedi as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentacte as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbook as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->book->titol}} : {{$item->rate}}</p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingautor as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}} : {{$item->rate}}</p>

                    <hr>
                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingeditorial as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbookshop as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingpost as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->post->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia valoracions
                </div>
                <div class="card-body">
                    @foreach ($user->ratingmedi as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingacte as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    @elseif ($user->condicio == 'autor')
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold  ">
                    Llibres pujats
                </div>
                <div class="card-body">
                    @foreach ($user->book as $item)
                    <p>{{$item->titol}}</p>


                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors Pujats
                </div>
                <div class="card-body">
                    @foreach ($user->autor as $item)
                    <p>{{$item->autor_nom}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies
                </div>
                <div class="card-body">
                    @foreach ($user->post as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia
                </div>
                <div class="card-body">
                    @foreach ($user->medi as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes
                </div>
                <div class="card-body">
                    @foreach ($user->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentbook as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->book->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentautor as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comenteditorial as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentbookshop as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentpost as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->post->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia comentaris
                </div>
                <div class="card-body">
                    @foreach ($user->comentmedi as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentacte as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbook as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->book->titol}} : {{$item->rate}}</p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingautor as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}} : {{$item->rate}}</p>

                    <hr>
                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingeditorial as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbookshop as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingpost as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->post->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia valoracions
                </div>
                <div class="card-body">
                    @foreach ($user->ratingmedi as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingacte as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    @elseif($user->condicio == 'editorial')
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold  ">
                    Llibres pujats
                </div>
                <div class="card-body">
                    @foreach ($user->book as $item)
                    <p>{{$item->titol}}</p>


                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors Pujats
                </div>
                <div class="card-body">
                    @foreach ($user->autor as $item)
                    <p>{{$item->autor_nom}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials Pujades
                </div>
                <div class="card-body">
                    @foreach ($user->editorial as $item)
                    <p>{{$item->editorial_nom}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies
                </div>
                <div class="card-body">
                    @foreach ($user->post as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia
                </div>
                <div class="card-body">
                    @foreach ($user->medi as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes
                </div>
                <div class="card-body">
                    @foreach ($user->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentbook as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->book->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentautor as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comenteditorial as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentbookshop as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentpost as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->post->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia comentaris
                </div>
                <div class="card-body">
                    @foreach ($user->comentmedi as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentacte as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbook as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->book->titol}} : {{$item->rate}}</p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingautor as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}} : {{$item->rate}}</p>

                    <hr>
                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingeditorial as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbookshop as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingpost as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->post->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia valoracions
                </div>
                <div class="card-body">
                    @foreach ($user->ratingmedi as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingacte as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
    </div>

    @elseif($user->condicio == 'llibreria')
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold  ">
                    Llibres pujats
                </div>
                <div class="card-body">
                    @foreach ($user->book as $item)
                    <p>{{$item->titol}}</p>


                    @endforeach
                </div>

            </div>



        </div>

        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries Pujades
                </div>
                <div class="card-body">
                    @foreach ($user->bookshop as $item)
                    <p>{{$item->nom}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies
                </div>
                <div class="card-body">
                    @foreach ($user->post as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia
                </div>
                <div class="card-body">
                    @foreach ($user->medi as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes
                </div>
                <div class="card-body">
                    @foreach ($user->acte as $item)
                    <p>{{$item->titol}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentbook as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->book->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentautor as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comenteditorial as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentbookshop as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies comentades
                </div>
                <div class="card-body">
                    @foreach ($user->comentpost as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->post->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia comentaris
                </div>
                <div class="card-body">
                    @foreach ($user->comentmedi as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes comentats
                </div>
                <div class="card-body">
                    @foreach ($user->comentacte as $item)

                    <div>
                        <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}}</p>
                        <p>{{$item->body}}</p>
                    </div>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibres valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbook as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->book->titol}} : {{$item->rate}}</p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Autors valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingautor as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->autor->autor_nom}} : {{$item->rate}}</p>

                    <hr>
                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Editorials valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingeditorial as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->editorial->editorial_nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Llibreries valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingbookshop as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->bookshop->nom}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Noticies valorades
                </div>
                <div class="card-body">
                    @foreach ($user->ratingpost as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->post->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Multimedia valoracions
                </div>
                <div class="card-body">
                    @foreach ($user->ratingmedi as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->medi->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-header bg-warning text-uppercase fw-bold">
                    Actes valorats
                </div>
                <div class="card-body">
                    @foreach ($user->ratingacte as $item)
                    <p class="text-uppercase fw-bold text-success">{{$item->acte->titol}} : {{$item->rate}}
                    </p>
                    <hr>

                    @endforeach
                </div>

            </div>



        </div>
    </div>
    @endif


</div>
@endsection