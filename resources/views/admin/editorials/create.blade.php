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
                                name="editorial_nom" autofocus required value="{{old('editorial_nom')}}">
                            @if ($errors->has('editorial_nom'))
                            <span class="text-danger">{{ $errors->first('editorial_nom') }}</span>
                            @endif
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="url" class="form-label">Url</label>
                                <input class="form-control" value="{{old('url')}}" type=" text" id="url" name="url">
                                @if ($errors->has('url'))
                                <span class="text-danger">{{ $errors->first('url') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="foto" class="form-label">Logo</label>
                                <input class="form-control" type="text" id="foto" value="{{old('logo')}}" name="logo">
                                @if ($errors->has('logo'))
                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                                @endif
                            </div>
                            @if (Auth()->user()->type == 'admin')
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
                                @if ($errors->has('active'))
                                <span class="text-danger">{{ $errors->first('active') }}</span>
                                @endif
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Descripció</label>
                            <textarea class="form-control " name="descripcio" id="" rows="3">
                                {!! old('descripcio')!!}
                            </textarea>
                            @if ($errors->has('descripcio'))
                            <span class="text-danger">{{ $errors->first('descripcio') }}</span>
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
@endsection