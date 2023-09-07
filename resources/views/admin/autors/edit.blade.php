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
                    <form action="{{ route('admin.autors.update', $autor) }}" method="post"
                        enctype="multipart/form-data">
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
                        <div class="row mb-3">
                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="auto" id="flexRadioDefault1"
                                        value="0" {{$autor->auto
                                    == 0 ? 'checked' : ''}}
                                    required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No autopublica
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="auto" id="flexRadioDefault2"
                                        value="1" {{$autor->auto
                                    == 1 ? 'checked' : ''}}>
                                    <label class="form-check-label" for="flexRadioDefault2">

                                        Autopublica
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="web" class="form-label">Web</label>
                                <input type="text" class="form-control" value="{{$autor->web}}" id="web" name="web">
                                @if ($errors->has('web'))
                                <span class="text-danger">{{ $errors->first('web') }}</span>
                                @endif
                            </div>
                            <div class="col">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" value="{{$autor->facebook}}" id="facebook"
                                    name="facebook">
                                @if ($errors->has('facebook'))
                                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" value="{{$autor->instagram}}" id="instagram"
                                    name="instagram">
                                @if ($errors->has('instagram'))
                                <span class="text-danger">{{ $errors->first('instagram') }}</span>
                                @endif
                            </div>
                            <div class="col">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" value="{{$autor->twitter}}" id="twitter"
                                    name="twitter">
                                @if ($errors->has('twitter'))
                                <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Imatge</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    value="{{$autor->image}}">
                            </div>
                            <div class="col">
                                <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                    src="{{Storage::url($autor->image)}}" alt="">
                            </div>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
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