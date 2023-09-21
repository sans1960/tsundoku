@extends('layouts.admin')
@section('title')
Tots les valoracions
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Tots les valoracions de llibres') }}</div>

            @if (Session::has('notif.success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('notif.success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif



        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-12">
            <table class="table mb-5">
                <thead>
                    <tr>

                        <th>Usuari</th>

                        <th>Llibre</th>
                        <th>Puntuació</th>

                        <th>Data</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ratingbooks as $ratingbook)
                    <tr>

                        <td>{{$ratingbook->user->nickname}}</td>
                        <td>{{$ratingbook->book->titol}}</td>
                        <td>{{$ratingbook->rate}}</td>

                        <td>{{\Carbon\Carbon::parse($ratingbook->created_at)->format('d/m/Y-H:m')}}</td>

                    </tr>

                    @endforeach
                </tbody>
            </table>


        </div>
        {!! $ratingbooks->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>

</div>
@endsection
@section('js')

@endsection