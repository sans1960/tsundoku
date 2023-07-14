@extends('layouts.admin')
@section('title')
{{ $genere->nom }}
@endsection
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-4 mt-5 mx-auto">
            <div class="card p-1">
                <img src="https://ui-avatars.com/api/?name={{$genere->nom}}&background=0D8ABC&color=fff&rounded=true"
                    alt="" class="d-block mx-auto" width="60">
                <div class="card-body">
                    <h5 class="card-title">{{ $genere->nom }}</h5>
                    <div class="row">
                        <div class="col">
                            @if ($genere->active == 0)
                            <p>No Actiu</p>
                            @else
                            <p> Actiu</p>
                            @endif
                        </div>
                        <div class="col">
                            <p>{{ $genere->active }}</p>
                        </div>
                    </div>

                    @foreach ($genere->book as $book)
                    <p>{{$book->titol}}</p>
                    @endforeach



                </div>
            </div>



        </div>
    </div>
</div>
@endsection