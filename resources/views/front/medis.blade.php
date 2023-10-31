@extends('layouts.front')
@section('title')
Medis
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($medis as $medi)
        <div class="col-md-4">
            <a href="{{route('medi',$medi)}}" class="nav-link">
                <div class="card mb-3">
                    <img src="{{ Storage::url($medi->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $medi->titol }}</h5>

                    </div>
                </div>

            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')

@endsection