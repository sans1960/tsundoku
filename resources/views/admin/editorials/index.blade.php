@extends('layouts.admin')
@section('title')
    Totes les editorials
@endsection
@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('Totes les editorials') }}</div>

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
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('admin.editorials.create') }}" class="btn btn-success mt-5">
                    <i class="bi bi-plus-square"></i>
                </a>

            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Editorial</th>
                            <th>Logo</th>



                            <th colspan="3" class="text-center">Accions</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($editorials as $editorial)
                            <tr>
                                <td>{{ $editorial->editorial_nom }}</td>
                                <td>
                                    @if ($editorial->logo  != null)
                                    <img src="{{ $editorial->logo }}" alt="" width="100">
                                    @else
                                    <img src="{{Storage::url($editorial->image)}}" alt="" class="d-block mx-auto" width="80">
                                    @endif
                                   
                                </td>

                                <td>
                                    <a href="{{ route('admin.editorials.show', $editorial) }}"
                                        class="btn btn-success btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.editorials.edit', $editorial) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.editorials.destroy', $editorial) }}" method="post">
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
