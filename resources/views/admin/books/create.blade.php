@extends('layouts.admin')
@section('title')
{{ __('Crear Llibre') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Crear Llibre
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="titol" class="form-label">Títol del llibre</label>
                            <input type="text" class="form-control" id="titol" placeholder="Títol" name="titol"
                                value="{{old('titol')}}" autofocus required>
                            @if ($errors->has('titol'))
                            @foreach ($errors as $error)
                            <span class="text-danger">{{ $error }}</span>
                            @endforeach
                            @endif
                        </div>



                        @if (Auth()->user()->type == 'admin')
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-class" for="genere">Autor:</label>
                                <select class="form-select" aria-label="Default select example" name="autor_id">
                                    <optgroup label="Escull autor">
                                        <option></option>
                                        @foreach ($autors as $autor)
                                        <option value="{{ $autor->id }}" {{ ($autor->id === old('autor_id')) ?
                                            'selected'
                                            :
                                            '' }}>{{ $autor->autor_nom }}</option>
                                        @endforeach
                                    </optgroup>

                                </select>

                            </div>
                            <div class="col">
                                <label class="form-class" for="genere">Editorial:</label>
                                <select class="form-select" aria-label="Default select example" name="editorial_id">
                                    <optgroup label="Escull editorial">
                                        <option></option>
                                        @foreach ($editorials as $editorial)
                                        <option value="{{ $editorial->id }}" {{ ($editorial->id === old('editorial_id'))
                                            ?
                                            'selected'
                                            :
                                            '' }}>{{ $editorial->editorial_nom }}</option>
                                        @endforeach
                                    </optgroup>

                                </select>
                            </div>
                        </div>
                        @endif

                        <div class=" mb-3">
                            <div class="col">
                                <label for="autor_nom" class="form-label">Nom del autor</label>
                                <input class="form-control" type="text" id="autor_nom" name="autor_nom"
                                    value="{{old('autor_nom')}}">
                                @if ($errors->has('autor_nom'))
                                <span class="text-danger">{{ $errors->first('autor_nom') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="imatge" class="form-label">Imatge de portada (copia i enganxa l'adreça web a la
                                imatge)</label>
                            <input class="form-control" type="text" id="imatge" name="imatge" value="{{old('imatge')}}">
                            @if ($errors->has('imatge'))
                            <span class="text-danger">{{ $errors->first('imatge') }}</span>
                            @endif
                        </div>
                        <p>O si prefereixes</p>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="foto" class="form-label">Puja un fitxer amb la imatge de la portada</label>
                                <input class="form-control" type="file" id="foto" name="foto" value="{{old('foto')}}">
                            </div>
                            <div class="col">
                                <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                    src="https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266_960_720.jpg"
                                    alt="">
                            </div>
                            @if ($errors->has('foto'))
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-class" for="genere">Escull genere:</label>
                                <select class="form-select" aria-label="Default select example" name="genere_id"
                                    id="genere">
                                    {{-- <option hidden>Escull génere</option> --}}
                                    <optgroup label="Escull génere">
                                        <option value=""></option>
                                        @foreach ($generes as $genere)
                                        <option value="{{ $genere->id }}" {{ ($genere->id === old('genere_id')) ?
                                            'selected'
                                            :
                                            '' }} >{{ $genere->nom }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                                @if ($errors->has('genere_id'))
                                <span class="text-danger">{{ $errors->first('genere_id') }}</span>
                                @endif
                            </div>
                        </div>
                        @if (Auth()->user()->type == 'admin')
                        <div class="col d-flex flex-column align-items-center">
                            <div class="form-check">
                                <input class="form-check-input me-2" type="radio" name="active" id="flexRadioDefault1"
                                    value="0" {{ (old('active')=='0' ) ? 'checked' : '' }} required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    No actiu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input me-2" type="radio" name="active" id="flexRadioDefault2"
                                    value="1" {{ (old('active')=='1' ) ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Actiu
                                </label>
                            </div>

                        </div>
                        @else
                        <input type="hidden" name="active" value="0">
                        @endif



                        <div class="row mb-3">
                            <div class="col">

                                <input type="text" class="form-control" id="" value="{{old('editorial_nom')}}"
                                    placeholder="Editorial" name="editorial_nom" required>
                                @if ($errors->has('editorial_nom'))
                                <span class="text-danger">{{ $errors->first('editorial_nom') }}</span>
                                @endif
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" id="" value="{{old('editorial_web')}}"
                                    placeholder="Editorial web" name="editorial_web" required>
                                @if ($errors->has('editorial_web'))
                                <span class="text-danger">{{ $errors->first('editorial_web') }}</span>
                                @endif
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" id="" value="{{old('isbn')}}" placeholder="ISBN"
                                    name="isbn" required>
                                @if ($errors->has('isbn'))
                                <span class="text-danger">{{ $errors->first('isbn') }}</span>
                                @endif
                            </div>

                            <div class="col">
                                <select name="idioma" class="form-select" id="">
                                    <option selected disabled hidden>Escull idioma</option>
                                    <option></option>
                                    <option value="Català" {{ ("Català"===old('idioma')) ? 'selected' : '' }}>Català
                                    </option>
                                    <option value="Occità" {{("Occità"===old('idioma')) ? 'selected' : '' }}>Occità
                                    </option>

                                </select>
                                @if ($errors->has('idioma'))
                                <span class="text-danger">{{ $errors->first('idioma') }}</span>
                                @endif


                            </div>
                        </div>



                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}" id="">


                        <div class="row mb-3">
                            <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">
                                <p>És novetat editorial?</p>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="novetat"
                                        id="flexRadioDefault1" value="0" {{ (old('novetat')=='0' ) ? 'checked' : '' }}
                                        required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="novetat"
                                        id="flexRadioDefault2" value="1" {{ (old('novetat')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sí
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">
                                <p>És la primera obra publicada de l'autor?</p>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="primera"
                                        id="flexRadioDefault1" value="0" {{ (old('primera')=='0' ) ? 'checked' : '' }}
                                        required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="primera"
                                        id="flexRadioDefault2" value="1" {{ (old('primera')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sí
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">
                                <p>És autopublicat?</p>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="auto" id="flexRadioDefault1"
                                        value="0" {{ (old('auto')=='0' ) ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="auto" id="flexRadioDefault2"
                                        value="1" {{ (old('auto')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sí
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-3 d-flex flex-column justify-content-start align-items-start">
                                <p>És la primera vegada que publiques?</p>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="estrena"
                                        id="flexRadioDefault1" value="0" {{ (old('estrena')=='0' ) ? 'checked' : '' }}
                                        required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="estrena"
                                        id="flexRadioDefault2" value="1" {{ (old('estrena')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sí
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="" class="form-label">Sinopsi</label>
                            <textarea class="form-control " name="sinopsi" id="" rows="3">
        {!! old('sinopsi')!!}
    </textarea>
                            @if ($errors->has('sinopsi'))
                            <span class="text-danger">{{ $errors->first('sinopsi') }}</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="" class="form-label">Escriu una cita del llibre que t&#39;hagi agradat
                                (opcional)</label>
                            <textarea class="form-control " name="cita" id="" rows="3">
                                        {!! old('cita')!!}
                                    </textarea>
                            @if ($errors->has('cita'))
                            <span class="text-danger">{{ $errors->first('cita') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Escriu la teva ressenya (opcional)</label>
                            <textarea class="form-control " name="comentari" id="" rows="3">
                                                        {!! old('comentari')!!}
                                                    </textarea>
                            @if ($errors->has('comentari'))
                            <span class="text-danger">{{ $errors->first('comentari') }}</span>
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
       $('#foto').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });
    });
</script>
@endsection