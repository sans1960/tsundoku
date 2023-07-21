@extends('layouts.admin')
@section('title')
Tots els usuaris
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Tots els usuaris') }}</div>

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
    <div class="row mt-3">
        <div class="col-md-12 ">
            <table class="table table-stripped">
                <thead>
                    <tr>

                        <th>Nom</th>
                        <th>Email</th>
                        <th>Verificat</th>
                        <th>Tipus</th>
                        <th>Condició</th>
                        <th>Data</th>
                        <th>Bannejat</th>


                        <th colspan="3" class="text-center">Accions</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>

                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>No</td>
                        <td>{{Str::title($user->type)}}</td>
                        <td>{{$user->condicio}}</td>
                        <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y');}}</td>
                        <td>
                            {{$user->isBanned()}}



                        </td>
                        <td>
                            <a href="{{route('admin.users.show',$user)}}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin.users.ban',$user)}}" class="btn btn-danger btn-sm">
                                <i class="bi bi-emoji-angry-fill"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin.users.unban',$user)}}" class="btn btn-warning btn-sm">
                                <i class="bi bi-balloon"></i>
                            </a>
                        </td>
                        {{-- <td>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td> --}}

                    </tr>

                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("nom");
            event.preventDefault();
            swal({
                    title: `Estás segur de borrar aquesta entrada?`,
                    text: "Si el borras es perdrá per sempre.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
</script>
@endsection