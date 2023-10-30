@extends('layouts.admin')
@section('title')
Totes les denuncies
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Totes les denuncies de comentaris de noticies') }}</div>

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
            <table class="table">
                <thead>
                    <tr>
                        <th>Denunciant</th>
                        <th>Denunciat</th>
                        <th>Data</th>
                        <th colspan="2">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($denuncies as $denuncia)
                    <tr>
                        <td>{{$denuncia->user->nickname}}</td>
                        <td>{{$denuncia->comentpost->user->nickname}}</td>
                        <td>{{\Carbon\Carbon::parse($denuncia->created_at)->format('d/m/Y-H:m')}}</td>
                        <td><a href="{{route('denunciacoment.post.show',$denuncia->id)}}"
                                class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a></td>
                        <td>
                            <form action="{{route('denunciacoment.post.destroy',$denuncia->id)}}" method="post">
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