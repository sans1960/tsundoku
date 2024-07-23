@extends('layouts.front')
@section('title')
Tsundoku.cat-Gèneres-{{$genere->nom}}
@endsection
@section('meta_title')
Tsundoku.cat-Gèneres-{{$genere->nom}}
@endsection
@section('meta_description')
{{$genere->nom}}
@endsection
@section('meta_url')
{{url()->current()}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <h1 class=" ubuntu fs-2">Gènere-{{ $genere->nom }}</h1>
        @foreach ($books as $book)
        @if ($book->active == 1)
        <div class="col-md-4 mb-2">

            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid rounded-start" alt="{{$book->titol}}"
                            style="object-fit:cover;width:100%;height:100%;">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="{{$book->titol}}" class="img-fluid rounded-start"
                            style="object-fit:cover;width:100%;height:100%;">
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <a href="{{route('book',$book)}}" class="nav-link">
                                <h2 class="card-title ubuntu fs-4">{{ $book->titol }}</h2>
                            </a>

                            <h3 class="ubuntu fs-5">{{ $book->autor_nom }}</h3>
                            <p class="card-title ">{{ $book->editorial_nom }}</p>
                            <p class="card-title">{{ $book->genere->nom }}</p>

                            <a href="{{ route('book', $book) }}">
                                <i class="bi bi-eye-fill text-success" style="font-size: 1.5rem;"></i>
                            </a>



                        </div>
                    </div>
                </div>
                <p>{{$book->ratingbook->count()}} Valoracions</p>
                <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                    data-step="0.1" value="{{ \App\Models\RatingBook::where('book_id',$book->id)->avg('rate')}}"
                    data-size="xs" disabled="">



            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
     
        
        $('#input-1').rating();
     
    });
</script>
@endsection