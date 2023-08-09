@extends('layouts.admin')
@section('title')
{{ __('Editar Llibreria') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Editar Llibreria
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.bookshops.update', $bookshop) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" value="{{ $bookshop->nom }}" name="nom"
                                required>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="url" class="form-label">Url</label>
                                <input class="form-control" type="text" id="url" name="url"
                                    value="{{ $bookshop->url }}">
                            </div>
                            <div class="col">
                                <label for="foto" class="form-label">Logo</label>
                                <input class="form-control" type="text" id="foto" name="logo"
                                    value="{{ $bookshop->logo }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Imatge</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    value="{{$bookshop->image}}">
                            </div>
                            <div class="col">
                                <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                    src="{{Storage::url($bookshop->image)}}"
                                    alt="">
                            </div>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <select name="user_id" id="" class="form-select">
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}" @if ($bookshop->user_id == $user->id)
                                        selected @endif>{{$user->nickname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault1" value="0" {{ $bookshop->active == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault2" value="1" {{ $bookshop->active == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" id="latitud" value="{{ $bookshop->latitud }}"
                                    name="latitud" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="longitud" value="{{ $bookshop->longitud }}"
                                    name="longitud" required>
                            </div>
                            <div class="col">
                                <input type="number" name="zoom" class="form-control" id=""
                                    value="{{ $bookshop->zoom }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Qui Som</label>
                            <textarea class="form-control " name="qui_som" id="" rows="3">
                                    {!! $bookshop->qui_som !!}
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