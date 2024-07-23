@extends('layouts.front')
@section('title')
Tsundoku.cat-Tots els llibres
@endsection
@section('meta_title')
Tsundoku.cat-Tots els llibres
@endsection
@section('meta_description')
Tots els llibres
@endsection
@section('meta_url')
{{url()->current()}}
@endsection
@section('content')
<div class="container">
    <h1 class="ubuntu fs-2 mb-3">Tots els llibres</h1>
    <div class="row">
        @foreach ($books as $book)
        @if ($book->active == 1)
        <div class="col-md-4 mb-2">

            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid rounded-start" alt="{{ $book->titol }}"
                            style="object-fit:cover;width:100%;height:100%;">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="{{ $book->titol }}"
                            class="img-fluid rounded-start" style="object-fit:cover;width:100%;height:100%;">
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <a href="{{route('book',$book)}}" class="nav-link">
                                <h5 class="card-title">{{ $book->titol }}</h5>
                            </a>

                            <h5 class="">{{ $book->autor_nom }}</h5>
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
                <p>{{ \App\Models\ComentBook::where('book_id',$book->id)->count()}} Ressenyes</p>

            </div>
        </div>
        @endif

        @endforeach
    </div>
    {!! $books->withQueryString()->links('pagination::bootstrap-5') !!}
</div>

@endsection
@section('js')
<script>
    $(document).ready(function(){


$('#input-1').rating();

});
</script>
@endsection