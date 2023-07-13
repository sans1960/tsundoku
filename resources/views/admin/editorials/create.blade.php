@extends('layouts.admin')
@section('title')
    {{ __('Crear Editorial') }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        Crear Editorial
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.editorials.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="editorial_nom" placeholder="Nom"
                                    name="editorial_nom" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" readonly>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="url" class="form-label">Url</label>
                                    <input class="form-control" type="text" id="url" name="url">
                                </div>
                                <div class="col">
                                    <label for="url_ventas" class="form-label">Url Vendes</label>
                                    <input class="form-control" type="text" id="url_ventas" name="url_vendes">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="foto" class="form-label">Logo</label>
                                    <input class="form-control" type="text" id="foto" name="logo">
                                </div>
                                <div class="col d-flex flex-column align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input me-2" type="radio" name="active"
                                            id="flexRadioDefault1" value="0">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            No actiu
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input me-2" type="radio" name="active"
                                            id="flexRadioDefault2" value="1">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Actiu
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="adreça" class="form-label">Adreça</label>
                                <input type="text" class="form-control" id="adreça" name="adreça"
                                    placeholder="Adreça">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Descripció</label>
                                <textarea class="form-control " name="descripcio" id="" rows="3"></textarea>
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
        $(document).ready(function() {
            $('#editorial_nom').change(function(e) {
                $.get('{{ route('check_slug_editorial') }}', {
                        'editorial_nom': $(this).val()
                    },
                    function(data) {
                        $('#slug').val(data.slug);
                    }
                );
            });
        });
    </script>
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
