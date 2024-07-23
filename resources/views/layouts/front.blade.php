<!doctype html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="title" content="@yield('meta_title')" />

    <meta property="description" content="@yield('meta_description')" />


    <meta name="author" content="Tsundoku.cat">
    <meta property="url" content="@yield('meta_url')" />
    <meta property="image" content="@yield('meta_image')" />

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/ulls.ico')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all"
        rel="stylesheet" type="text/css" />


    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css"
        media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    @yield('css')

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('img/ulls.png')}}" class="img-fluid  " width="100" alt="Tsundoku.cat">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                    <li class="nav-item {{ request()->routeIs('quisom*') ? 'active fw-bold ' : '' }}">
                        <a class="nav-link " href="{{route('quisom')}}">
                            Qui som ?
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->routeIs('generes*') ? 'active fw-bold ' : '' }}"
                            href="{{route('generes')}}">
                            Gèneres
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->routeIs('books*') ? 'active fw-bold ' : '' }}"
                            href="{{route('books')}}">
                            Llibres
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('autors*') ? 'active fw-bold ' : '' }}"
                            href="{{route('autors')}}">Autors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('editorials*') ? 'active fw-bold ' : '' }} "
                            href="{{route('editorials')}}">Editorials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('bookshops*') ? 'active fw-bold ' : '' }}"
                            href="{{route('bookshops')}}">Llibreries</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('medis*') ? 'active fw-bold ' : '' }}"
                            href="{{route('medis')}}">Tsundoku TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('posts*') ? 'active fw-bold ' : '' }}"
                            href="{{route('posts')}}">Ens ha agradat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('actes*') ? 'active fw-bold ' : '' }}"
                            href="{{route('actes')}}">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.tsundoku.cat/" target="_blank"
                            rel="noopener noreferrer">BLOG</a>
                    </li>



                </ul>
                @guest
                @if (Route::has('login'))

                <a class="nav-link ms-3" href="{{ route('login') }}">
                    <i class="bi bi-lock-fill" style="font-size: 2rem;color:red;"></i>
                </a>

                @endif

                @if (Route::has('register'))

                <a class=" nav-link ms-3" href="{{ route('register') }}">
                    <i class="bi bi-person-add" style="font-size: 2rem;color:green;"></i>
                </a>

                @endif
                @else

                <a id="navbarDropdown" class="nav-link dropdown-toggle ms-3" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->nickname }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

                @endguest
                @if (Auth::check())

                <a class="nav-link ms-3" href="{{route('home')}}">
                    <i class="bi bi-speedometer" style="font-size: 2rem; color:green;"></i>
                </a>

                @endif

            </div>
        </div>
    </nav>



    <main class=" mb-5">
        @yield('content')
    </main>

    <div class="container-fluid  p-3 mt-5 text-white" style="background-color:#9C155F;">

        <div class="row">
            <p class="mt-3 fs-5 text-center mb-5">Tsundoku.cat és un projecte d'agitació i propaganda literàries en
                favor de
                la cultura
                catalana. Participa-hi!</p>
            <div class="col-md-3 d-flex justify-content-center">
                <i class="bi bi-c-circle"></i>
                <p class="ms-2">TSUNDOKU.CAT 2024</p>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <a href="{{asset('documents/avis-legal-i-condicions-generals.pdf')}}" target="_blank"
                    rel="noopener noreferrer" class="nav-link">Avis legal</a>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <a href="{{asset('documents/politica-de-privacitat.pdf')}}" target="_blank" rel="noopener noreferrer"
                    class="nav-link">Política de privacitat</a>
            </div>
            <div class="col-md-3 d-flex justify-content-center">

                <a href="" class="nav-link ms-2">
                    <i class="bi bi-envelope-at"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61551435838696" target="_blank" class="nav-link ms-3">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="nav-link ms-3">
                    <i class="bi bi-instagram"></i>

                </a>
                <a href="" class="nav-link ms-3">
                    <i class="bi bi-twitter-x"></i>
                </a>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js"
        type="text/javascript"></script>

    <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>
    @yield('js')
</body>

</html>