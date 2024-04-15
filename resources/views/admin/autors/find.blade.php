@extends('layouts.admin')
@section('title')
Buscador autors
@endsection
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="{{route('admin.searchautors')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Escriu paraula a cercar" name="search"
                        aria-describedby="basic-addon1">

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-search"></i>
                    </button>


                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>

                        <th>Nom</th>
                        <th>Accions</th>


                    </tr>
                </thead>
                <tbody>
                    @if (isset($autors))
                    @foreach ($autors as $autor)
                    <tr>
                        <td>{{$autor->id}}</td>

                        <td>{{$autor->autor_nom}}</td>
                        <td>

                            <a href="{{ route('admin.autors.show', $autor) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>

                        </td>
                        <td>
                            <a href="{{ route('admin.autors.edit', $autor) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        {{-- <td>
                            <form action="{{ route('admin.books.destroy', $book) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td> --}}
                    </tr>

                    @endforeach

                    @endif
                </tbody>
            </table>


        </div>
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