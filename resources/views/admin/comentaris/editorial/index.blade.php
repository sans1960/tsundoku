@extends('layouts.admin')
@section('title')
Tots els comentaris
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Tots els comentaris de les editorials') }}</div>

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
                        <th>ID</th>
                        <th>Usuari</th>

                        <th>Editorial</th>
                        <th>Comentari</th>
                        <th>Replica id</th>
                        <th>Data</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comenteditorials as $comenteditorial)
                    <tr>
                        <td>{{$comenteditorial->id}}</td>
                        <td>{{$comenteditorial->user->nickname}}</td>
                        <td>{{$comenteditorial->editorial->editorial_nom}}</td>
                        <td>{{$comenteditorial->body}}</td>
                        <td>{{$comenteditorial->parent_id}}</td>
                        <td>{{\Carbon\Carbon::parse($comenteditorial->created_at)->format('d/m/Y-H:m')}}</td>
                        <td>
                            <form action="{{route('coment.editorial.destroy',$comenteditorial->id)}}" method="post">
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
        {!! $comenteditorials->withQueryString()->links('pagination::bootstrap-5') !!}
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