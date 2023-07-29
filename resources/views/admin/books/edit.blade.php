@extends('layouts.admin')
@section('title')
{{ __('Editar Llibre') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Editar Llibre
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.books.update',$book) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="titol" class="form-label">Titol</label>
                            <input type="text" class="form-control" id="titol" value="{{$book->titol}}" name="titol"
                                required>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="autor_id">
                                    <option></option>
                                    @foreach ($autors as $autor)
                                    <option value="{{ $autor->id }}">{{ $autor->autor_nom }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="editorial_id">
                                    <option></option>
                                    @foreach ($editorials as $editorial)
                                    <option value="{{ $editorial->id }}">{{ $editorial->editorial_nom }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="autor_nom" class="form-label">Autor</label>
                                <input class="form-control" type="text" id="autor_nom" name="autor_nom"
                                    value="{{$book->autor_nom}}">
                            </div>
                            <div class="col">
                                <label for="imatge" class="form-label">Imatge</label>
                                <input class="form-control" type="text" id="imatge" name="imatge"
                                    value="{{$book->imatge}}">
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="genere_id">
                                    <option>Escull génere</option>
                                    @foreach ($generes as $genere)
                                    <option value="{{ $genere->id }}" @if ($book->genere_id == $genere->id) selected

                                        @endif>{{ $genere->nom }}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault1" value="0" {{$book->active == 0 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault2" value="1" {{$book->active == 1 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">

                                <input type="text" class="form-control" id="" placeholder="Editorial"
                                    name="editorial_nom" value="{{$book->editorial_nom}}" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="" placeholder="Editorial web"
                                    name="editorial_web" value="{{$book->editorial_web}}" required>
                            </div>


                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" id="" placeholder="ISBN" name="isbn" required
                                    value="{{$book->isbn}}">
                            </div>
                            <div class="col">
                                <select name="idioma" class="form-select" id="">
                                    <option selected disabled hidden>Escull idioma</option>
                                    <option></option>
                                    <option value="Català" {{$book->idioma === 'Català' ? 'selected' : '' }} >Català
                                    </option>
                                    <option value="Occità" {{$book->idioma === 'Occità' ? 'selected' : '' }}>Occità
                                    </option>

                                </select>
                            </div>
                            <div class="col">
                                <select name="user_id" id="" class="form-select">
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}" @if ($book->user_id == $user->id)
                                        selected @endif>{{$user->nickname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sinopsi</label>
                            <textarea class="form-control " name="sinopsi" id="" rows="3">
                                    {!!$book->sinopsi!!}
                                </textarea>
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

<script>
    tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons  link lists  searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link  table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            branding: false,
            menubar: false,
            language: 'ca',
        });
</script>
@endsection