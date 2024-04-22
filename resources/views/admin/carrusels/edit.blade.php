@extends('layouts.admin')
@section('title')
{{ __('Editar carrusel') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    Editar carrusel
                </div>
                <div class="card-body">
                    <form action="{{route('admin.carrusels.update',$carrusel)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="titol" class="form-label">Títol</label>
                            <input type="text" class="form-control" value="{{$carrusel->titol}}" id="titol" name="titol"
                                required>

                        </div>
                        <div class="mb-3">
                            <label for="subtitol" class="form-label">Subtitol</label>
                            <input type="text" class="form-control" value="{{$carrusel->subtitol}}" id="subtitol"
                                name="subtitol">

                        </div>
                        <div class="mb-3">
                            <label for="tema" class="form-label">Tema</label>
                            <input type="text" class="form-control" value="{{$carrusel->tema}}" id="tema" name="tema"
                                required>

                        </div>
                        <div class="row mb-3  ">
                            <h6>Llibres</h6>
                            <div class="col-md-12 mt-2 d-flex flex-wrap">
                                @foreach ($carrusel->books->sortBy('titol') as $book)

                                <div class="form-check me-4">
                                    <input class="form-check-input" checked name="books[]" type="checkbox"
                                        value="{{$book->id}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$book->titol}}
                                    </label>
                                </div>

                                @endforeach
                            </div>
                            <div class="col-md-12 d-flex flex-wrap mt-2">
                                @foreach ($diffbooks->sortBy('titol') as $book)

                                <div class="form-check me-3">
                                    <input class="form-check-input" name="books[]" type="checkbox" value="{{$book->id}}"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$book->titol}}
                                    </label>
                                </div>

                                @endforeach
                            </div>

                        </div>
                </div>
                <div class="row mb-3">
                    <p>Actiu</p>
                    <div class="form-check">
                        <input class="form-check-input me-2" type="radio" name="actiu" id="flexRadioDefault1" value="0"
                            {{ $carrusel->actiu ==
                        0 ? 'checked' : '' }}
                        required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            No actiu
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input me-2" type="radio" name="actiu" id="flexRadioDefault2" value="1"
                            {{ $carrusel->actiu ==
                        1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Actiu
                        </label>
                    </div>
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