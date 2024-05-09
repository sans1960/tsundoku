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
                    <ul class="list-group mb-5">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item bg-danger border-0 text-white fw-bold ubuntu">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form action="{{ route('admin.editorials.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="editorial_nom" placeholder="Nom"
                                name="editorial_nom" autofocus required value="{{old('editorial_nom')}}">

                        </div>
                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="url" class="form-label">Url</label>
                                <input class="form-control" value="{{old('url')}}" type=" text" id="url" name="url">

                            </div>

                        </div>
                        <div class="mb-3">

                            <label for="foto" class="form-label">Logo de l'editorial (copia i enganxa l&#39;adreça
                                web del logo)</label>
                            <input class="form-control" type="text" id="foto" value="{{old('logo')}}" name="logo">

                        </div>
                        <p>O si prefereixes</p>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Puja un fitxer amb el logo de l'editorial</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    value="{{old('image')}}">
                            </div>
                            <div class="col">
                                <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                    src="https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266_960_720.jpg"
                                    alt="">
                            </div>

                        </div>
                        @if (Auth()->user()->type == 'admin')
                        <div class="row">
                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault1" value="0" {{ (old('active')=='0' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault2" value="1" {{ (old('active')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>
                            @endif
                        </div>



                        <div class="mb-3">
                            <label for="" class="form-label">Descripció</label>
                            <textarea class="form-control " name="descripcio" id="" rows="3">
                                {!! old('descripcio')!!}
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
<script>
    $(document).ready(function (e) {
       $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });
    });
</script>
@endsection