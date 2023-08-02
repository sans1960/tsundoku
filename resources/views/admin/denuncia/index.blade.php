@extends('layouts.admin')
@section('title')
Totes les denuncies
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Totes les denuncies') }}</div>

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
    <div class="row">
        <div class="col-md-8 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Denunciant</th>
                        <th>Denunciat</th>


                        <th colspan="3" class="text-center">Accions</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($denuncies as $denuncia)
                    <tr>
                        <td>{{$denuncia->user->nickname}}</td>
                        <td>{{$denuncia->nickname_comentari}}</td>
                        <td>

                            <a href="{{route('admin.denuncia.show',$denuncia->id)}}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>

                        </td>

                        <td>
                            <form action="{{route('admin.denuncia.destroy',$denuncia->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
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