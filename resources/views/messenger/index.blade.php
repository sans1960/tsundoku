@extends('layouts.admin')





@section('content')




<div class="container">
    @include('messenger.partials.flash')
    <div class="row">
        @if (Session::has('notif.success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('notif.success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-md-4">
            <a href="{{ route('messages.create') }}" class="btn btn-outline-success">nou missatge</a>
        </div>
        <div class="col-md-8">


            @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
        </div>
    </div>
</div>
@stop