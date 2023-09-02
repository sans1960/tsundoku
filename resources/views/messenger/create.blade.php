@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Crear nou missatge</h3>
    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-10 mx-auto">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Objecte</label>
                <input type="text" class="form-control" required name="subject" placeholder="Objecte"
                    value="{{ old('subject') }}">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Missatge</label>
                <textarea name="message" required class="form-control">{{ old('message') }}</textarea>
            </div>


            <div class="mb-3 mt-3">
                <select name="recipient" required class="form-select" id="">
                    <option value="">Destinatari</option>
                    <option value=""></option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nickname }}</option>
                    @endforeach
                </select>
            </div>


            <!-- Submit Form Input -->
            <div class="mb-3 mt-3">
                <button type="submit" class="btn btn-outline-success">Envia</button>
            </div>
        </div>
    </form>
</div>
@stop