@extends('layouts.front')
@section('title')
    Autors
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($autors as $autor)
                <div class="col-md-3">
                    <a href="{{ route('autor', $autor) }}" class="nav-link">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $autor->url_foto }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $autor->autor_nom }}</h5>
                                    
                                    </div>
                                </div>
                            </div>
                            <input id="input-2" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $autor->averageRating }}" data-size="xs" disabled="">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
     
     
        $('#input-2').rating();
     
    });
</script>  
@endsection

