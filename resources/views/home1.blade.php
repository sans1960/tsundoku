@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row mt-2">

        <div class="col-md-12 ">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            @if (Session::has('notif.success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('notif.success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card">
                @if (Auth::user()->avatar)
                <img src="{{Storage::url(Auth::user()->avatar)}}" alt="" class="img-fluid d-block mx-auto p-3"
                    width="150">

                @else
                <img src="https://ui-avatars.com/api/?name={{Auth()->user()->name}}&background=0D8ABC&color=fff&rounded=true"
                    class="img-fluid d-block mx-auto p-3" alt="..." width="150">

                @endif
                <div class="card-body">
                    <h4 class="card-title">{{Auth()->user()->name}}</h4>
                    <h5 class="card-text">{{Str::title(Auth()->user()->condicio)}}</h5>
                    <h5 class="card-text">{{Auth()->user()->nickname}}</h5>
                    <h5 class="card-text">{{\Carbon\Carbon::parse(Auth()->user()->created_at)->format('d/m/Y');}}</h5>
                    <p>{{Auth()->user()->novetats}} rebre novetats</p>
                    <p>{{Auth()->user()->biopic}}</p>

                </div>
            </div>

        </div>
        @if (Auth()->user()->email_verified_at !=null)
        <div class="col-md-4">
            <h4 class="mt-3 text-center">Personal</h4>
            <div class="card p-3 d-flex flex-column">



                <a class="btn btn-outline-success" href="{{ route('messages') }}">
                    Missatges
                    @include('messenger.unread-count')
                </a>
                <a class="btn btn-outline-success mt-5" href="{{route('admin.users.edit',Auth()->user()->id)}}">
                    Editar perfil

                </a>
                @if (Auth()->user()->condicio == 'autor')


                @if (\App\Models\Autor::where('autor_nom',Auth::user()->name)->exists())
                <p class="mt-5 text-center">Ja ets a la base de dades dels Autors</p>
                @else
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">

                    <p>Vols formar part de la base de dades d'Autors ?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <a href="{{route('admin.autors.create')}}" class="btn btn-outline-success">Afegir Autor
                    </a>
                </div>
                @endif
                @elseif (Auth()->user()->condicio == 'editorial')
                @if (\App\Models\Editorial::where('editorial_nom',Auth::user()->name)->exists())
                <p class="mt-5 text-center">Ja ets a la base de dades de les Editorials</p>
                @else
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">

                    <p>Vols formar part de la base de dades d'Editorials ?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <a href="{{route('admin.editorials.create')}}" class="btn btn-outline-success">Afegir Editorial
                    </a>
                </div>
                @endif
                @elseif (Auth()->user()->condicio == 'llibreria')
                @if (\App\Models\Bookshop::where('nom',Auth::user()->name)->exists())
                <p class="mt-5 text-center">Ja ets a la base de dades de les Llibreries</p>
                @else
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">

                    <p>Vols formar part de la base de dades de Llibreries ?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <a href="{{route('admin.bookshops.create')}}" class="btn btn-outline-success">Afegir Llibreria
                    </a>
                </div>
                @endif

            </div>
        </div>







        @if (Auth()->user()->type == 'admin')
        <a href="{{route('admin')}}">Admin</a>
        @else
        <div class="col-md-4 d-flex flex-column">
            <h4 class="mt-3 text-center">Accions</h4>
            @if (Auth()->user()->condicio == 'lector')

            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>

            @elseif (Auth()->user()->condicio == 'autor')

            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>





            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>


            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Multimedia</a>
            </div>


            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>

            @elseif(Auth()->user()->condicio == 'editorial')

            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>


            <div class="card p-2">
                <a href="{{route('admin.autors.create')}}" class="btn btn-outline-success">Afegir Autor</a>
            </div>



            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>

            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Multimedia</a>
            </div>

            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>

            @elseif(Auth()->user()->condicio == 'llibreria')

            <div class="card p-2">
                <a href="{{route('admin.books.create')}}" class="btn btn-outline-success">Afegir Llibre</a>
            </div>



            <div class="card p-2">
                <a href="{{route('admin.posts.create')}}" class="btn btn-outline-success">Afegir Noticia</a>
            </div>

            <div class="card p-2">
                <a href="{{route('admin.medis.create')}}" class="btn btn-outline-success">Afegir Multimedia</a>
            </div>

            <div class="card p-2">
                <a href="{{route('admin.actes.create')}}" class="btn btn-outline-success">Afegir Acte</a>
            </div>
        </div>
        @endif






    </div>


    @else

    <div class="col-md-8">
        <div class="alert alert-success" role="alert">
            <p class="text-center text-uppercase">Recorda confirmar el teu email per poguer interactuar</p>

        </div>
    </div>
    @endif




    <div class="row mt-2">
        <div class="col-md-12 mt-2 ">
            <a class="btn btn-outline-success" href="{{route('home.activitat',auth()->user()->id)}}">Activitat</a>
        </div>

    </div>
</div>
@endsection