@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning">
                      {{$user->name}}
                    </div>
                    <div class="card-body">
                         <form action="{{route('admin.users.update',$user)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="formFile" class="form-label">Avatar</label>
                                    <input class="form-control" type="file" id="formFile" name="avatar">
                                </div>
                                <div class="col">
                                    @if($user->avatar)
                                    <img id="preview-image-before-upload" class="img-fluid w-50 d-block mx-auto"
                                        src="{{Storage::url($user->avatar)}}"
                                        alt="">
                                        @else
                                        <img id="preview-image-before-upload" class="img-fluid w-25 d-block mx-auto" src="https://ui-avatars.com/api/?name={{$user->name}}&background=0D8ABC&color=fff&rounded=true" >
                                        @endif
                                    
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="nickname" class="form-label">Nickname</label>
                                    <input class="form-control" type="text" id="nickname" name="nickname" value="{{$user->nickname}}">
                                </div>
                                <div class="col">
                                    <label for="">Novetats</label>
                                    <select class="form-select mt-2" aria-label="Default select example" name="novetats">
                                        <option selected disabled hidden>Escull</option>
                                        <option></option>
                                        <option value="Si"{{$user->novetats === 'Si' ? 'selected' : '' }}>Si</option>
                                        <option value="No"{{$user->novetats === 'No' ? 'selected' : '' }}>No</option>
                                        
                                    </select>
                                    @error('novetats')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 mt-5 d-flex justify-content-center">
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
       $('#formFile').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });
    });
</script>  
@endsection