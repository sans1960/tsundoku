@extends('layouts.admin')
@section('title')
{{ __('Editar acte') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Editar acte
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.actes.update',$acte) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="titol" class="form-label">Titol</label>
                            <input type="text" class="form-control" id="titol" value="{{$acte->titol}}" name="titol"
                                required>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="image" class="form-label">Imatge</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="col">
                                <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                    src="{{Storage::url($acte->image)}}" alt="">
                            </div>
                        </div>


                        <div class="mb-3">
                            <select name="user_id" id="" class="form-select">
                                @foreach ($users as $user)
                                <option value="{{$user->id}}" @if ($acte->user_id == $user->id)
                                    selected @endif>{{$user->nickname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">


                            <label for="url" class="form-label">Url acte</label>
                            <input class="form-control" type="text" id="url" name="url" value="{{$acte->url}}">

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="data" class="form-label">Data</label>
                                <input class="form-control" type="date" id="data" name="data" value="{{$acte->data}}">
                            </div>
                            <div class="col">
                                <label for="lloc" class="form-label">Lloc</label>
                                <input class="form-control" type="text" id="data" name="lloc" value="{{$acte->lloc}}">
                            </div>
                            <div class="col">
                                <label for="hora" class="form-label">Hora</label>
                                <input class="form-control" type="text" id="hora" name="hora" value="{{$acte->hora}}">
                            </div>

                            <div class="col d-flex flex-column align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault1" value="0" {{ $acte->active == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No actiu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="radio" name="active"
                                        id="flexRadioDefault2" value="1" {{ $acte->active == 1 ? 'checked' : '' }} >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Actiu
                                    </label>
                                </div>

                            </div>



                        </div>










                        <div class="mb-3">
                            <label for="" class="form-label">Descripció</label>
                            <textarea class="form-control " name="body" id="" rows="3">
                                {!!$acte->body!!}
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