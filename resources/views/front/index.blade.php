@extends('layouts.front')
@section('title')
Tsundoku.cat és una plataforma digital de suport a la literatura catalana i aranesa i a l'obra publicada en aquestes
ambdues llengües als PP.CC.
@endsection
@section('meta_title')
Tsundoku.cat és una plataforma digital de suport a la literatura catalana i aranesa i a l'obra publicada en aquestes
ambdues llengües als PP.CC.
@endsection
@section('meta_description')
Tsundoku.cat és una plataforma digital de suport a la literatura catalana i aranesa i a l'obra publicada en aquestes
ambdues llengües als PP.CC.
@endsection
@section('meta_url')
{{env('APP_URL')}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">




@endsection
@section('content')
<div class=" d-flex justify-content-center align-items-center">
    <img src="{{asset('img/capsmile.png')}}" class="img-fluid w-100" alt="Tsundoku.cat">

</div>


<div class="container ">
    <div class="row mt-3 mb-3">
        <div class="col-md-6 mx-auto">
            <form action="{{route('search')}}" method="post">
                @csrf
                <div class="mb-3 d-flex text-secondary">

                    <input type="text" class="form-control " placeholder="Cercar Gènere, Títol, Autor..." name="query"
                        required>
                    <button type="submit" class="btn btn-outline-success ms-2 btn-sm">
                        <i class="bi bi-search"></i>
                    </button>
                </div>



            </form>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 p-3 ">
            <h1 class="fs-2 ubuntu mb-4">Tsundoku.cat és una plataforma digital de suport a la literatura catalana i
                aranesa
                i a
                l'obra publicada
                en aquestes
                ambdues llengües als PP.CC.</h1>
            <h2 class="mt-2 ubuntu">Últims llibres afegits:</h3>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($allbooks as $book)
                    @if ($book->active == 1)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endif

                    @endforeach

                </div>
        </div>
    </div>
    @if (count($primer))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($primer as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>

                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif




    @if (count($segon))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($segon as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif
    @if (count($tercer))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($tercer as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif

    <div class="row mb-3">

        <a href="https://www.awin1.com/cread.php?s=2821954&v=21491&q=405855&r=1656093" target="_blank" rel="sponsored"
            data-bs-toggle="tooltip" data-bs-title="Casa del llibre">
            <div class="col-md-12  rounded ">
                {{-- style="height: 250px;
                background-image:url({{asset('img/imglanzamientosjunio2024_468x60-1717407183897.jpg')}});background-position:center;background-size:cover;">
                --}}
                {{-- <img src="{{asset('img/imglanzamientosjunio2024_468x60-1717407183897.jpg')}}"
                    class="img-fluid w-100" alt=""> --}}
                <img src="https://www.awin1.com/cshow.php?s=2821954&v=21491&q=405855&r=1656093" class="img-fluid w-100"
                    alt="">

            </div>
        </a>

    </div>

    @if (count($un))
    <div class="row mb-3">
        @foreach ($un as $item)
        <a href="{{$item->url}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
            data-bs-title="{{$item->nom}}">
            <div class="col-md-12  rounded "
                style="height: 250px; background-image:url({{Storage::url($item->image)}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
        @endforeach
    </div>

    @endif
    @if (count($cuart))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($cuart as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif
    @if (count($cinque))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($cinque as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif
    @if (count($sise))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($sise as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif
    @if (count($sete))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($sete as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif
    @if (count($vuite))
    <div class="row mb-3">
        <div class="col-md-12 p-3">
            @foreach ($vuite as $item)
            <h2 class="mt-2 ubuntu">{{$item->titol}}</h3>
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2 ubuntu">{{$item->subtitol}}</h5>
                    <h5 class="mt-2 ubuntu">{{$item->tema}}</h5>

                </div>
                <div class="owl-carousel owl-theme dos">
                    @foreach ($item->books as $book)
                    <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$book->titol}}">
                        <div class="card d-flex justify-content-center align-items-center border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                            @if ($book->auto == 1)
                            <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                            @endif
                            @if ($book->novetat == 1)
                            <p class="bg-primary text-white p-1 rounded">Novetat</p>
                            @endif

                        </div>

                    </a>
                    @endforeach

                </div>

                @endforeach

        </div>

    </div>

    @endif
    @if (count($dos))
    <div class="row mb-3">
        @foreach ($dos as $item)
        <a href="{{$item->url}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
            data-bs-title="{{$item->nom}}">
            <div class="col-md-12  rounded "
                style="height: 250px; background-image:url({{Storage::url($item->image)}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
        @endforeach

    </div>



    @endif
    <div class="row mb-3">
        <div class="col-md-12">

            <h2 class="mt-2 ubuntu">Els més votats:</h2>
            <div class="owl-carousel owl-theme dos">
                @foreach ($topratedbook as $book)
                <div class="d-flex flex-column">
                    <a class="nav-link" href="{{route('book',$book)}}">
                        <div class="card border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;"
                            data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">


                        </div>
                    </a>
                    <div class="d-flex flex-column justify-content-center align-items-center">

                        <input id="input-1" name="input-1" class="rating " data-min="0" data-max="5" data-step="0.1"
                            value="{{number_format(\App\Models\RatingBook::where('book_id',$book->id)->avg('rate'),2)}}"
                            data-size="xs" disabled="">
                        <p>{{$book->ratingbook->count()}} Valoracions</p>


                    </div>

                </div>

                @endforeach

            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md.12 p-3">
            <h2 class="mt-2 ubuntu">Els més comentats:</h2>
            <div class="owl-carousel owl-theme dos">
                @foreach ($topcoment as $book)
                @if ($book->comentbook_count > 0)
                <div class="d-flex flex-column">
                    <a class="nav-link" href="{{route('book',$book)}}">
                        <div class="card border-0"
                            style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;"
                            data-bs-toggle="tooltip" data-bs-title="{{$book->titol}}">


                        </div>
                    </a>
                    <div class="d-flex flex-column justify-content-center align-items-center">

                        <p>{{$book->comentbook_count}} Comentaris</p>


                    </div>

                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12 p-3">
            <h2 class="mt-2 ubuntu">Acabats de sortir d'impremta:</h2>
            <div class="owl-carousel owl-theme dos">
                @foreach ($novetats as $book)
                @if ($book->active == 1)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card border-0 d-flex justify-content-center align-items-center"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;">

                        @if ($book->auto == 1)
                        <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                        @endif
                    </div>

                </a>
                @endif

                @endforeach
            </div>
        </div>

    </div>


    <div class="row mb-3" style="">

        <div class="col-md-12 p-3 ">
            <h2 class="mt-2 ubuntu">S'estrenen:</h2>
            <div class="owl-carousel owl-theme dos">
                @foreach ($estrenes as $book)
                @if ($book->active == 1)
                <a href="{{route('book',$book)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$book->titol}}">
                    <div class="card border-0 d-flex justify-content-center align-items-center"
                        style="height: 300px;background-image:url(@if ($book->imatge != null){{ $book->imatge }} @else {{Storage::url($book->foto)}} @endif);background-size:cover;background-position:center;object-fit:fill;">

                        @if ($book->auto == 1)
                        <p class="bg-success text-white p-1 rounded">Autopublicat</p>
                        @endif
                    </div>

                </a>
                @endif

                @endforeach
            </div>
        </div>
    </div>
    @if (count($tres))
    <div class="row mb-3">
        @foreach ($tres as $item)
        <a href="{{$item->url}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
            data-bs-title="{{$item->nom}}">
            <div class="col-md-12  rounded "
                style="height: 250px; background-image:url({{Storage::url($item->image)}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
        @endforeach

    </div>

    @endif
    <div class="row mb-3">
        <div class="col-md-12">
            <h2 class="mt-2 ubuntu">Autors:</h2>
            <div class="owl-carousel owl-theme uno">
                @foreach ($autors as $autor)


                <a href="{{route('autor',$autor)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$autor->autor_nom}}">
                    <div class="card d-flex justify-content-end align-items-start border-0 p-3"
                        style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( @if ($autor->url_foto != null){{ $autor->url_foto }} @else {{Storage::url($autor->image)}} @endif);background-size:cover;background-position:center;object-fit:fill;">
                        <h5 class="text-uppercase text-white">{{ $autor->autor_nom }}</h5>
                    </div>


                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <h3 class="mt-2 ubuntu">Ens ha agradat:</h3>
            <div class="owl-carousel owl-theme tres">
                @foreach ($posts as $post)


                <a href="{{route('post',$post)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$post->titol}}">
                    <div class="card d-flex justify-content-end align-items-center border-0 p-3 "
                        style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{ Storage::url($post->image) }} );background-size:cover;background-position:center;object-fit:fill;">
                        <h5 class="text-uppercase text-white">{{ $post->titol }}</h5>
                    </div>

                </a>
                @endforeach
            </div>
        </div>
    </div>



    @if (count($cuatre))
    <div class="row mb-3">
        @foreach ($cuatre as $item)
        <a href="{{$item->url}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
            data-bs-title="{{$item->nom}}">
            <div class="col-md-12  rounded "
                style="height: 250px; background-image:url({{Storage::url($item->image)}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
        @endforeach

    </div>

    @endif

    <div class="row mb-3">

        <div class="col-md-12">
            <h2 class="mt-2 ubuntu">Tsundoku TV:</h4>

                <div class="owl-carousel owl-theme tres">
                    @foreach ($medis as $medi)


                    <a href="{{route('medi',$medi)}}" class="nav-link" data-bs-toggle="tooltip"
                        data-bs-title="{{$medi->titol}}">
                        <div class="card d-flex justify-content-end align-items-center p-3"
                            style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{ Storage::url($medi->image) }} );background-size:cover;background-position:center;object-fit:fill;">
                            <h5 class="text-uppercase text-white">{{ $medi->titol }}</h5>
                        </div>

                    </a>
                    @endforeach
                </div>




        </div>



    </div>
    @if (count($cinc))
    <div class="row mb-3">
        @foreach ($cinc as $item)
        <a href="{{$item->url}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
            data-bs-title="{{$item->nom}}">
            <div class="col-md-12  rounded "
                style="height: 250px; background-image:url({{Storage::url($item->image)}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
        @endforeach

    </div>

    @endif
    <div class="row mb-3" style="">
        <div class="col-md-12">
            <h2 class="mt-2 ubuntu">Agenda:</h2>

            <div class="owl-carousel owl-theme tres">
                @foreach ($actes as $acte)
                <a href="{{route('acte',$acte)}}" class="nav-link" data-bs-toggle="tooltip"
                    data-bs-title="{{$acte->titol}}">
                    <div class="card d-flex justify-content-end align-items-center p-3"
                        style="height: 300px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url( {{ Storage::url($acte->image) }} );background-size:cover;background-position:center;object-fit:fill;">
                        <h5 class="text-uppercase text-white">{{ $acte->titol }}</h5>
                    </div>
                    <p>{{\Carbon\Carbon::parse($acte->data)->format('d/m/Y')}}</p>
                </a>
                @endforeach

            </div>

        </div>
    </div>
    @if (count($sis))
    <div class="row mb-3">
        @foreach ($sis as $item)
        <a href="{{$item->url}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
            data-bs-title="{{$item->nom}}">
            <div class="col-md-12  rounded "
                style="height: 250px; background-image:url({{Storage::url($item->image)}});background-position:center;background-size:cover; object-fit:fill;">


            </div>
        </a>
        @endforeach

    </div>

    @endif
</div>


</div>
<div class="cookies-eu-banner hidden">
    En fer clic a "D'acord", accepteu l'emmagatzematge de cookies al vostre dispositiu
    Millora la navegació, analitza l'ús del lloc i millora el màrqueting.
    <button>D'acord</button>
</div>
@endsection
@section('js')
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function () {
    
    $('.dos').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
    0: {
    items: 2,
    nav: true
    },
    600: {
    items: 4,
    nav: false
    },
    1000: {
    items: 6,
    nav: true,
    loop: false,
    margin: 20
    }
    }
    });
    $('.uno').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
    0: {
    items: 2,
    nav: true
    },
    600: {
    items: 4,
    nav: false
    },
    1000: {
    items: 4,
    nav: true,
    loop: false,
    margin: 20
    }
    }
    });
    $('.tres').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
    0: {
    items: 1,
    nav: true
    },
    600: {
    items: 3,
    nav: false
    },
    1000: {
    items: 3,
    nav: true,
    loop: false,
    margin: 20
    }
    }
    });
    
    })
</script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

<script>
    $(document).ready(function(){
     
     
        $('#input-1').rating({displayOnly: true});
     
    });
</script>

@endsection