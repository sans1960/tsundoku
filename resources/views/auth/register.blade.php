@extends('layouts.app')
@section('css')
<style>

</style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header bg-white ubuntu fw-bold">
                    <h3 class="text-success">
                        {{ __('Register') }}</h3>
                    <p class="text-danger">Els camps marcats amb * son obligatoris</p>
                </div>

                <div class="card-body ">
                    <ul class="list-group mb-5">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item bg-danger border-0 text-white fw-bold ubuntu">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="form-label fs-4 ubuntu text-success">Nom i cognoms / Nom de
                                l'editorial / Nom de
                                la
                                llibreria <span class="text-danger fs-4"> * </span>
                            </label>


                            <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}"
                                required autocomplete="name" autofocus>



                        </div>
                        <div class="row mb-3">
                            <label for="nickname" class="form-label fs-4 ubuntu text-success">Nom
                                d'usuari/a <span class="text-danger fs-4"> * </span>
                            </label>


                            <input id="nickname" type="text" class="form-control " name="nickname"
                                value="{{ old('nickname') }}" required>



                        </div>
                        <div class="row mb-3">
                            <label for="avatar" class="form-label fs-4 ubuntu text-success">Avatar
                            </label>


                            <input id="avatar" type="file" class="form-control " name="avatar">



                        </div>
                        <div class="row mb-3">
                            <label for="email" class="form-label fs-4 ubuntu text-success">Adreça de correu <span
                                    class="text-danger fs-4"> * </span></label>


                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                required>


                        </div>
                        <div class="row mb-3">
                            <label for="" class="form-label fs-4 ubuntu text-success">A què et dediques ? <span
                                    class="text-danger fs-4"> * </span></label>

                            <select class="form-select" required aria-label="Default select example" name="condicio">
                                <option selected disabled hidden>Escull</option>
                                <option></option>
                                <option value="lector" @selected(old('condicio')=='lector' )>Lector
                                </option>

                                <option value="autor" @selected(old('condicio')=='autor' )>Autor
                                </option>
                                <option value="editorial" @selected(old('condicio')=='editorial' )>
                                    Editorial</option>
                                <option value="llibreria" @selected(old('condicio')=='llibreria' )>
                                    Llibreria</option>
                            </select>

                        </div>
                        <div class="row mb-3">
                            <label for="" class="form-label fs-4 ubuntu text-success">Quatre mots sobre tu
                                mateix/a <span class="text-danger">
                                </span>
                            </label>

                            <textarea name="biopic" id="" cols="30" rows="10" class="form-control">
                                    {{old('biopic')}}
                                </textarea>

                        </div>
                        <div class="row mb-3">
                            <label for="" class="form-label fs-4 ubuntu text-success">Vols rebre les novetats i
                                promocions de tsundoku.cat ? <span class="text-danger fs-4"> *
                                </span>
                            </label>

                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input border border-black" required value="Si" {{
                                    (old('novetats')=='Si' ) ? 'checked' : '' }} type="radio" name="novetats"
                                    id="flexRadioDefault1">
                                <label class="form-check-label ubuntu" for="flexRadioDefault1">
                                    Sí
                                </label>
                            </div>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input border border-black" value="No" {{ (old('novetats')=='No'
                                    ) ? 'checked' : '' }} type="radio" name="novetats" id="flexRadioDefault2">
                                <label class="form-check-label ubuntu" for="flexRadioDefault2">
                                    No
                                </label>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="password" class="form-label fs-4 ubuntu text-success">Contrasenya <span
                                    class="fs-6">(Mínim 8
                                    caracters)
                                </span><span class="text-danger fs-4"> *</span></label>



                            <input id="password" type="password" class="form-control" name="password" required>



                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="form-label fs-4 ubuntu text-success">Confirma
                                Contrasenya <span class="text-danger fs-4"> * </span></label>


                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required>

                        </div>
                        <div class="row mb-3 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input me-3  border border-black" type="radio" required
                                    name="legal" value="true" @checked(old('legal')) id="flexRadioDefault1">
                                <label class="form-check-label ubuntu" for="flexRadioDefault1">
                                    He llegit i acepto la <span><a
                                            href="{{asset('documents/politica-de-privacitat.pdf')}}" target="_blank"
                                            style="text-decoration: none;"><b>Politica de
                                                privacitat</b></a></span>,
                                    i els <span><a href="{{asset('documents/avis-legal-i-condicions-generals.pdf')}}"
                                            target="_blank" style="text-decoration: none;"><b>Termes
                                                i
                                                Condicions</b></a>
                                    </span>
                                    <span class="text-danger "> * </span>
                                </label>

                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
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
    $(() => {

$('[type="password"]').togglepassword('btn');

});
</script>
@endsection