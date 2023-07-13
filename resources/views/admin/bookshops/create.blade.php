@extends('layouts.admin')
@section('title')
    {{ __('Crear Llibreria') }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        Crear Llibreria
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.bookshops.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom"
                                    autofocus required>
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
                                    <label for="foto" class="form-label">Logo</label>
                                    <input class="form-control" type="text" id="foto" name="logo">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="ciutat" class="form-label">Ciutat</label>
                                    <input type="text" class="form-control" id="ciutat" name="ciutat"
                                        placeholder="Ciutat">
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
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" id="latitud" placeholder="Latitud"
                                        name="latitud" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="longitud" placeholder="Longitud"
                                        name="longitud" required>
                                </div>
                                <div class="col">
                                    <input type="number" name="zoom" class="form-control" id=""
                                        placeholder="Zoom">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Qui Som</label>
                                <textarea class="form-control " name="qui_som" id="" rows="3"></textarea>
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
            $('#nom').change(function(e) {
                $.get('{{ route('check_slug_bookshop') }}', {
                        'nom': $(this).val()
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
