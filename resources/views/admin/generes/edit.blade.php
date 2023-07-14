@extends('layouts.admin')
@section('title')
{{ __('Editar génere') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Editar génere
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.generes.update', $genere) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" value="{{ $genere->nom }}" name="nom"
                                required>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" value="0"
                                {{ $genere->active == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault1">
                                No actiu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2" value="1"
                                {{ $genere->active == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Actiu
                            </label>
                        </div>

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