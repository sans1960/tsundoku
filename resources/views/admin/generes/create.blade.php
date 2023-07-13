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
                                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom"
                                    autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" readonly>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="icon" class="form-label">Imatge</label>
                                    <input class="form-control" type="file" id="icon" name="icon">
                                </div>
                                <div class="col">
                                    <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                                        src="https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266_960_720.jpg"
                                        alt="" width="100">
                                </div>

                            </div>
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
                $.get('{{ route('check_slug_genere') }}', {
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
        $(document).ready(function(e) {
            $('#icon').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
