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
                    <form action="{{ route('admin.bookshops.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="Nom"
                                name="nom" autofocus required>
                            @if ($errors->has('nom'))
                            <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                        <div class="mb-3">

                            <label for="url" class="form-label">Adreça web</label>
                            <input class="form-control" value="{{old('url')}}" type="text" id="url" name="url">
                            @if ($errors->has('url'))
                            <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Logo de la libreria (copia i enganxa l&#39;adreça
                                web del logo)</label>
                            <input class="form-control" type="text" id="foto" value="{{old('logo')}}" name="logo">
                            @if ($errors->has('logo'))
                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                            @endif
                        </div>
                        <p>O si prefereixes</p>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Puja un fitxer amb el logo de la llibreria</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    value="{{old('image')}}">
                            </div>
                            <div class="col">
                                <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                    src="https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266_960_720.jpg"
                                    alt="">
                            </div>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        @if (Auth()->user()->type == 'admin')
                        <div class="row mb-3">

                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault1" value="0" required>
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
                            @if ($errors->has('active'))
                            <span class="text-danger">{{ $errors->first('active') }}</span>
                            @endif
                        </div>
                        @endif
                        <div class="row mb-3">
                            <p>Intrudueix les coordenades per generar un mapa amb la localització</p>
                            <div class="col">
                                <input type="text" value="{{old('latitud')}}" class="form-control" id="latitud"
                                    placeholder="Latitud" name="latitud" required>
                                @if ($errors->has('latitud'))
                                <span class="text-danger">{{ $errors->first('latitud') }}</span>
                                @endif
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="longitud" placeholder="Longitud"
                                    name="longitud" required value="{{old('longitud')}}">
                                @if ($errors->has('longitud'))
                                <span class="text-danger">{{ $errors->first('longitud') }}</span>
                                @endif
                            </div>
                            @if (Auth()->user()->type == 'admin')
                            <div class="col">
                                <input type="number" name="zoom" class="form-control" id="" placeholder="Zoom"
                                    value="16">
                                @if ($errors->has('zoom'))
                                <span class="text-danger">{{ $errors->first('zoom') }}</span>
                                @endif
                            </div>
                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Qui Som</label>
                            <textarea class="form-control " name="qui_som" id="" rows="3">
                                {!! old('qui_som')!!}
                            </textarea>
                            @if ($errors->has('qui_som'))
                            <span class="text-danger">{{ $errors->first('qui_som') }}</span>
                            @endif
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