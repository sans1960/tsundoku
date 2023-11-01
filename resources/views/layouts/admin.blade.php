<!doctype html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm">
            <div class="container">
                @if (Auth()->user()->type == 'admin')
                <a class="navbar-brand" href="{{ route('admin') }}">
                    ADMIN PANEL
                </a>
                @else
                <a class="navbar-brand" href="{{ route('home') }}">
                    Panell d'usuari
                </a>
                @endif

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">
                                <i class="bi bi-house-door-fill "></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('messages') }}">
                                <i class="bi bi-chat"></i>
                                @include('messenger.unread-count')
                            </a>
                        </li>
                        @if (Auth()->user()->type == 'admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Models
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('admin.generes.index')}}">Generes</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.autors.index')}}">Autors</a></li>

                                <li><a class="dropdown-item" href="{{route('admin.editorials.index')}}">Editorials</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('admin.bookshops.index')}}">Llibreries</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('admin.books.index')}}">Llibres</a></li>
                            </ul>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users.index') }}">Usuaris</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Comunicacions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('admin.posts.index')}}">Noticies</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.medis.index')}}">Medis</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('admin.actes.index')}}">Agenda</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Valoracions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('rating.book.index')}}">Llibres</a></li>
                                <li><a class="dropdown-item" href="{{route('rating.autor.index')}}">Autors</a></li>

                                <li><a class="dropdown-item" href="{{route('rating.editorial.index')}}">Editorials</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('rating.bookshop.index')}}">Llibreries</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('rating.post.index')}}">Noticies</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('rating.medi.index')}}">Multimedia</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('rating.acte.index')}}">Actes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Comentaris
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('coment.book.index')}}">Llibres</a></li>
                                <li><a class="dropdown-item" href="{{route('coment.autor.index')}}">Autors</a></li>

                                <li><a class="dropdown-item" href="{{route('coment.editorial.index')}}">Editorials</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('coment.bookshop.index')}}">Llibreries</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('coment.post.index')}}">Noticies</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('coment.medi.index')}}">Multimedia</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('coment.acte.index')}}">Actes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Denuncies
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('denunciacoment.book.index')}}">Comentaris
                                        Llibres</a></li>
                                <li><a class="dropdown-item" href="{{route('denunciacoment.autor.index')}}">Comentaris
                                        Autors</a></li>

                                <li><a class="dropdown-item"
                                        href="{{route('denunciacoment.editorial.index')}}">Comentaris Editorials</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{route('denunciacoment.bookshop.index')}}">Comentaris Llibreries</a></li>
                                <li><a class="dropdown-item" href="{{route('denunciacoment.post.index')}}">Comentaris
                                        Noticies</a></li>
                                <li><a class="dropdown-item" href="{{route('denunciacoment.medi.index')}}">Comentaris
                                        Multimedia</a></li>
                                <li><a class="dropdown-item" href="{{route('denunciacoment.acte.index')}}">Comentaris
                                        Actes</a></li>
                            </ul>
                        </li>

                        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    @yield('js')
</body>

</html>