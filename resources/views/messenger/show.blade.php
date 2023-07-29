@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <h4>{{ $thread->subject }}</h4>
        @foreach ($thread->messages as $message)
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">{{ $message->user->nickname }}</h5>
                <p>{{ $message->body }}</p>
                <div class="text-muted">
                    <small>Enviat {{ $message->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach

        <h5 class="mt-3 mb-3">Respon</h5>
        <div class="card">
            <form action="{{ route('messages.update', $thread->id) }}" method="post">
                {{ method_field('put') }}
                {{ csrf_field() }}

                <!-- Message Form Input -->
                <div class="mb-3 mt-3">
                    <textarea name="message" class="form-control"></textarea>
                </div>



                <!-- Submit Form Input -->
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-outline-success">Respon</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop