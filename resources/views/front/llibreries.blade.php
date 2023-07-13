@extends('layouts.front')
@section('title')
    Llibreries
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($bookshops as $bookshop)
                <div class="col-md-3">
                    <a href="{{route('bookshop',$bookshop)}}" class="nav-link">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $bookshop->logo }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $bookshop->nom }}</h5>
                                    
                                    </div>
                                </div>
                            </div>
                            <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $bookshop->averageRating }}" data-size="xs" disabled="">
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
     
        $('#input-1')-rating();
      
     
    });
</script>  
@endsection