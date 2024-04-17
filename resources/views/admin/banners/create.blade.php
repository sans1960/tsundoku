@extends('layouts.admin')
@section('title')
{{ __('Crear banner') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    Afegir banner
                </div>
                <div class="card-body">
                    <form action="{{route('admin.banners.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" value="{{old('nom')}}" id="nom" placeholder="Nom"
                                name="nom" autofocus required>

                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Url</label>
                            <input type="text" class="form-control" value="{{old('url')}}" id="url" placeholder="Url"
                                name="url" autofocus required>

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

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="posicio" class="form-label">Posicio</label>
                                <input class="form-control" type="text" id="posicio" name="posicio"
                                    value="{{old('posicio')}}" placeholder="Posició">
                            </div>
                            <div class="col">
                                <p>Actiu</p>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="actiu"
                                        id="flexRadioDefault1" value="0" {{ (old('actiu')=='0' ) ? 'checked' : '' }}
                                        required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="actiu"
                                        id="flexRadioDefault2" value="1" {{ (old('actiu')=='1' ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Si
                                    </label>
                                </div>
                            </div>

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