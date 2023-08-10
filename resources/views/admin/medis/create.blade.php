@extends('layouts.admin')
@section('title')
{{ __('Crear medi') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Crear medi
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.medis.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="titol" class="form-label">Titol</label>
                            <input type="text" class="form-control" id="titol" value="{{old('titol')}}"
                                placeholder="Títol" name="titol" >
                            @if ($errors->has('titol'))
                            <span class="text-danger">{{ $errors->first('titol') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="tipus" class="form-label">Tipus</label>
                             <select name="tipus" id="tipus" class="form-select">
                                <option value=""></option>
                                <option value="Video"  {{ "Video"===old('tipus') ? 'selected' : '' }}>Video</option>
                                <option value="Audio" {{ "Audio"===old('tipus') ? 'selected' : '' }}>Audio</option>
                             </select>
                            @if ($errors->has('tipus'))
                            <span class="text-danger">{{ $errors->first('tipus') }}</span>
                            @endif
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Imatge</label>
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


                        <div class="mb-3">


                            <label for="url" class="form-label">Url medi</label>
                            <input class="form-control" type="text" value="{{old('url')}}" id="url" name="url">
                            @if ($errors->has('url'))
                            <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="data" class="form-label">Data</label>
                                <input class="form-control" value="{{old('data')}}" type="date" id="data" name="data">
                                @if ($errors->has('data'))
                                <span class="text-danger">{{ $errors->first('data') }}</span>
                                @endif
                            </div>
                            @if (Auth()->user()->type == 'admin')
                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault1" value="0"  {{ (old('active') == '0') ? 'checked' : ''}}  required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault2" value="1"  {{ (old('active') == '1') ? 'checked' : ''}}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>
                            @endif



                        </div>





                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}" id="">




                        <div class="mb-3">
                            <label for="" class="form-label">Descripció</label>
                            <textarea class="form-control " name="body" id="" rows="3">
                                {!!old('body')!!}
                            </textarea>
                            @if ($errors->has('body'))
                            <span class="text-danger">{{ $errors->first('body') }}</span>
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