<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{asset('img/logo.png')}}" class="img-fluid  " width="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('messages') }}">
                                <i class="bi bi-house-door-fill "></i>
                                @include('messenger.unread-count')
                            </a>
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
    <div class="container-fluid  p-3 mt-5" style="background-color: 	#E80080;">

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
    <script src="{{asset('js/togglepassword.js')}}"></script>
    @yield('js')
</body>

</html>