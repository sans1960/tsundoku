@extends('layouts.app')
@section('css')
<style>

</style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nickname" class="col-md-4 col-form-label text-md-end">Nom
                                d'usuari/a
                            </label>

                            <div class="col-md-6">
                                <input id="nickname" type="text"
                                    class="form-control @error('nickname') is-invalid @enderror" name="nickname"
                                    value="{{ old('nickname') }}" required autocomplete="nickname">

                                @error('nickname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file"
                                    class="form-control @error('avatar') is-invalid @enderror" name="avatar">


                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Adreça de correu</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('A què et dediques?')
                                }}</label>
                            <div class="col-md-6">
                                <select class="form-select" required aria-label="Default select example"
                                    name="condicio">
                                    <option selected disabled hidden>Escull</option>
                                    <option></option>
                                    <option value="lector" {{ old('condicio')=="lector" ? 'selected' : '' }}>Lector
                                    </option>
                                    <option value="autor" {{ old('condicio')=="autor" ? 'selected' : '' }}>Autor
                                    </option>
                                    <option value="editorial" {{ old('condicio')=="editorial" ? 'selected' : '' }}>
                                        Editorial</option>
                                    <option value="llibreria" {{ old('condicio')=="llibreria" ? 'selected' : '' }}>
                                        Llibreria</option>
                                </select>
                                @error('condicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Quatre mots sobre tu
                                mateix/a')
                                }}</label>
                            <div class="col-md-6">
                                <textarea name="biopic" id="" cols="30" rows="10" class="form-control">
                                    {{old('biopic')}}
                                </textarea>
                                @error('biopic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Vols rebre novetats ?')
                                }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" required value="Si" {{ (old('novetats')=='Si' )
                                        ? 'checked' : '' }} type="radio" name="novetats" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="No" {{ (old('novetats')=='No' ) ? 'checked'
                                        : '' }} type="radio" name="novetats" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                                @error('novetats')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirma
                                Contrasenya') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="form-check d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="radio" required name="legal" value="true"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    He llegit i acepto la <span><a
                                            href="{{asset('documents/politica-de-privacitat.pdf')}}" target="_blank"
                                            style="text-decoration: underline;"><b>Politica de
                                                privacitat</b></a></span>,
                                    i els <span><a href="{{asset('documents/avis-legal-i-condicions-generals.pdf')}}"
                                            target="_blank" style="text-decoration: underline;"><b>Termes
                                                i
                                                Condicions</b></a></span>
                                </label>

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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