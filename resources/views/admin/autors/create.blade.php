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
                    <form action="{{ route('admin.autors.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" value="{{old('autor_nom')}}" id="autor_nom"
                                placeholder="Nom" name="autor_nom" autofocus required>
                            @if ($errors->has('autor_nom'))
                            <span class="text-danger">{{ $errors->first('autor_nom') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">

                            <label for="foto" class="form-label">Imatge de l&#39;autor/a (copia i enganxa
                                l&#39;adreça web a la imatge)</label>
                            <input class="form-control" type="text" id="foto" name="url_foto">
                            @if ($errors->has('url_foto'))
                            <span class="text-danger">{{ $errors->first('url_foto') }}</span>
                            @endif
                        </div>
                        <p>O si prefereixes</p>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Puja un fitxer amb la imatge de
                                    l&#39;autor/a</label>
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
                        <div class="row mb-3">
                            @if (Auth()->user()->type == 'admin')
                            <div class="col p-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1"
                                        value="0" {{ (old('active')=='0' ) ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2"
                                        value="1" {{ (old('active')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                    @if ($errors->has('active'))
                                    <span class="text-danger">{{ $errors->first('active') }}</span>
                                    @endif
                                </div>

                            </div>
                            @endif
                            <div class="col d-flex flex-column align-items-center">
                                <p>És un autor autopublicat/da?</p>
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
                                        Si
                                    </label>
                                </div>

                            </div>
                        </div>




                        <div class="row mb-3">
                            <div class="col">
                                <label for="web" class="form-label">Web de l&#39;autor/a (opcional)</label>
                                <input type="text" class="form-control" value="{{old('web')}}" id="web"
                                    placeholder="Web" name="web">
                                @if ($errors->has('web'))
                                <span class="text-danger">{{ $errors->first('web') }}</span>
                                @endif
                            </div>
                            <div class="col">
                                <label for="facebook" class="form-label">Facebook de l&#39;autor/a (opcional)</label>
                                <input type="text" class="form-control" value="{{old('facebook')}}" id="facebook"
                                    placeholder="Facebook" name="facebook">
                                @if ($errors->has('facebook'))
                                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="instagram" class="form-label">Instagram de l&#39;autor/a (opcional)</label>
                                <input type="text" class="form-control" value="{{old('instagram')}}" id="instagram"
                                    placeholder="Instagram" name="instagram">
                                @if ($errors->has('instagram'))
                                <span class="text-danger">{{ $errors->first('instagram') }}</span>
                                @endif
                            </div>
                            <div class="col">
                                <label for="twitter" class="form-label">Twiter de l&#39;autor/a (opcional)</label>
                                <input type="text" class="form-control" value="{{old('twitter')}}" id="twitter"
                                    placeholder="Twitter" name="twitter">
                                @if ($errors->has('twitter'))
                                <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Biopic</label>
                            <textarea class="form-control " name="biopic" id="" rows="3">
                                {!! old('biopic')!!}
                            </textarea>
                            @if ($errors->has('biopic'))
                            <span class="text-danger">{{ $errors->first('biopic') }}</span>
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