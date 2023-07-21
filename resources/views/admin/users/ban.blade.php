@extends('layouts.admin')
@section('title')
{{ __('Bloquejar Usuari') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Bloquejar usuari
                </div>
                <div class="card-body d-flex flex-column">
                    <form action="{{ route('admin.users.updateban',$user) }}" method="post">
                        @csrf
                        @method('patch')


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="banned" value="1"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Bloquejar
                            </label>
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Motiu</label>
                            <input type="text" class="form-control" id="comment" placeholder="Motiu" name="comment">
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

@endsection