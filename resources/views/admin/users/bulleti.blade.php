@extends('layouts.admin')
@section('title')
Usuaris suscrita
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h4 class="ubuntu">Usuaris suscrits al bulleti</h4>
            <table class="table table-stripped">
                <thead>
                    <tr>

                        <th>Nom</th>
                        <th>Email</th>
                        <th>Verificat</th>

                        <th>Condició</th>
                        <th>Data</th>






                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>

                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>@if ($user->email_verified_at !=null)
                            Si
                            @else
                            No
                            @endif</td>

                        <td>{{$user->condicio}}</td>
                        <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y');}}</td>




                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection