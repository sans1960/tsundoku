<div class="container-fluid">
    <div class="row">

        <div class=" col-md-4 d-flex justify-content-start align-items-center ">

            <a href="{{route('index')}}">
                <img src="{{asset('img/logo.jpg')}}" class="img-fluid  " width="100" alt="">
            </a>

        </div>


        <div class=" col-md-8 d-flex justify-content-end align-items-center">

            <a href="https://www.facebook.com/profile.php?id=61551435838696" target="_blank" class="nav-link ms-3">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="nav-link ms-3">
                <i class="bi bi-instagram"></i>

            </a>
            <a href="" class="nav-link ms-3">
                <i class="bi bi-twitter-x"></i>
            </a>
            @guest
            @if (Route::has('login'))

            <a class="nav-link ms-3" href="{{ route('login') }}">
                <i class="bi bi-lock-fill"></i>
            </a>

            @endif

            @if (Route::has('register'))

            <a class="nav-link ms-3" href="{{ route('register') }}">
                <i class="bi bi-person-add"></i>
            </a>

            @endif
            @else

            <a id="navbarDropdown" class="nav-link dropdown-toggle ms-3" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->nickname }}
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

            @endguest
            @if (Auth::check())

            <a class="nav-link ms-3" href="{{route('home')}}">
                <i class="bi bi-speedometer"></i>
            </a>

            @endif

        </div>
    </div>
</div>