@extends('layouts.admin')
@section('title')
{{ __('Crear autor') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Crear Autor
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.autors.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="autor_nom" placeholder="Nom" name="autor_nom"
                                autofocus required>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="foto" class="form-label">Foto</label>
                                <input class="form-control" type="text" id="foto" name="url_foto">
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1"
                                        value="0">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2"
                                        value="1">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Biopic</label>
                            <textarea class="form-control " name="biopic" id="" rows="3"></textarea>
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