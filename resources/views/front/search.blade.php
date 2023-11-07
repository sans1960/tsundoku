@extends('layouts.front')
@section('title')
Resultats
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            @if(isset($searchResults))
            @if ($searchResults-> isEmpty())
            <h4 class="text-center">No hi ha resultats per : <b>"{{ $searchterm }}"</b>.</h4>

            @else
            <h4 class="text-center">Hem trobat {{ $searchResults->count() }} resultats per : <b>"{{ $searchterm }}"</b>
            </h4>
            @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <div class="card">
                <div class="card-header">
                    {{ ucwords($type) }}
                </div>
                <div class="card-body">
                    @foreach($modelSearchResults as $searchResult)
                    <ul>
                        <a target="_blank" class="nav-link text-success fw-bold" href="{{ $searchResult->url }}">{{
                            $searchResult->title }}</a>
                    </ul>
                    @endforeach
                </div>
            </div>



            @endforeach
            @endif
            @endif

        </div>
    </div>
</div>

@endsection