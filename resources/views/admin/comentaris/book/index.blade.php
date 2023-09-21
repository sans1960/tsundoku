@extends('layouts.admin')
@section('title')
Tots els comentaris
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Tots els comentaris de llibres') }}</div>

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

                        <th>Llibre</th>
                        <th>Comentari</th>
                        <th>Replica id</th>
                        <th>Data</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comentbooks as $comentbook)
                    <tr>
                        <td>{{$comentbook->id}}</td>
                        <td>{{$comentbook->user->nickname}}</td>
                        <td>{{$comentbook->book->titol}}</td>
                        <td>{{$comentbook->body}}</td>
                        <td>{{$comentbook->parent_id}}</td>
                        <td>{{\Carbon\Carbon::parse($comentbook->created_at)->format('d/m/Y-H:m')}}</td>
                        <td>
                            <form action="{{route('coment.book.destroy',$comentbook->id)}}" method="post">
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
        {!! $comentbooks->withQueryString()->links('pagination::bootstrap-5') !!}
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