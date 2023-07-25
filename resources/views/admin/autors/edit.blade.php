@extends('layouts.admin')
@section('title')
Editar {{ $autor->nom }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Editar Autor
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.autors.update', $autor) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="autor_nom" value="{{ $autor->autor_nom }}"
                                name="autor_nom" required>
                        </div>
                        <div class="mb-3">
                            <select name="user_id" id="" class="form-select">
                                @foreach ($users as $user)
                                <option value="{{$user->id}}" @if ($autor->user_id == $user->id)
                                    selected @endif>{{$user->nickname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="foto" class="form-label">Foto</label>
                                <input class="form-control" type="text" id="foto" name="url_foto"
                                    value="{{ $autor->url_foto }}">
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1"
                                        value="0" {{ $autor->active == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2"
                                        value="1" {{ $autor->active == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Biopic</label>
                            <textarea class="form-control " name="biopic" id="" rows="3">
                                    {!! $autor->biopic !!}
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