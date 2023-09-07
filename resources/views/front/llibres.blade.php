@extends('layouts.front')
@section('title')
TSUNDOKU
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-4 mb-2">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6">
                        @if ($book->imatge != null)
                        <img src="{{ $book->imatge }}" class="img-fluid rounded-start" alt="..."
                            style="width: 100%;height:100%;object-fit:cover;">
                        @else
                        <img src="{{Storage::url($book->foto)}}" alt="" class="img-fluid rounded-start"
                            style="width: 100%;height:100%;object-fit:cover;">
                        @endif

                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->titol }}</h5>
                            <h5 class="">{{ $book->autor_nom }}</h5>
                            <p class="card-title ">{{ $book->editorial_nom }}</p>
                            <p class="card-title">{{ $book->genere->nom }}</p>
                            <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                                data-step="0.1" value="{{ $book->averageRating }}" data-size="xs" disabled="">
                            <a href="{{ route('book', $book) }}">
                                <i class="bi bi-eye-fill text-success" style="font-size: 1.5rem;"></i>
                            </a>



                        </div>
                    </div>
                </div>

            </div>
        </div>
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