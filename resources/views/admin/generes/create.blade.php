@extends('layouts.admin')
@section('title')
{{ __('Crear génere') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Crear génere
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.generes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="Nom"
                                name="nom" autofocus required>
                            @if ($errors->has('nom'))
                            <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" value="0"  {{ (old('active') == '0') ? 'checked' : ''}}>
                            <label class="form-check-label" for="flexRadioDefault1" required>
                                No actiu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2" value="1"  {{ (old('active') == '1') ? 'checked' : ''}}>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Actiu
                            </label>
                        </div>
                        @if ($errors->has('active'))
                        <span class="text-danger">{{ $errors->first('active') }}</span>
                        @endif
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>
@endsection
@section('js')

@endsection