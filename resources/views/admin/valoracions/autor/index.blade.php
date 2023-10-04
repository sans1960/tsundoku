@extends('layouts.admin')
@section('title')
Tots les valoracions
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Tots les valoracions de autors') }}</div>

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

                        <th>Autor</th>
                        <th>Puntuació</th>

                        <th>Data</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ratingautors as $ratingautor)
                    <tr>

                        <td>{{$ratingautor->user->nickname}}</td>
                        <td>{{$ratingautor->autor->autor_nom}}</td>
                        <td>{{$ratingautor->rate}}</td>

                        <td>{{\Carbon\Carbon::parse($ratingautor->created_at)->format('d/m/Y-H:m')}}</td>

                    </tr>

                    @endforeach
                </tbody>
            </table>


        </div>
        {!! $ratingautors->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>

</div>
@endsection
@section('js')

@endsection