@extends('layouts.admin')
@section('title')
Carrusels
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">{{ __('Tots els carrusels') }}</div>

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
        <h5 class="mt-3 mb-3">Primer,Segon,Tercer,Cuart,Cinque,Sise,Sete,Vuite</h5>
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{ route('admin.carrusels.create') }}" class="btn btn-success mt-5">
                <i class="bi bi-plus-square"></i>
            </a>


        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Titol</th>
                        <th>Subtitol</th>
                        <th>Tema</th>
                        <th>Posició</th>
                        <th>Actiu</th>


                        <th colspan="3" class="text-center">Accions</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($carrusels as $carrusel)
                    <tr>
                        <td>{{$carrusel->titol}}</td>
                        <td>{{$carrusel->subtitol}}</td>
                        <td>{{$carrusel->tema}}</td>
                        <td>{{$carrusel->posicio}}</td>
                        @if ($carrusel->actiu == 0)
                        <td>No Actiu</td>
                        @else
                        <td>Actiu</td>
                        @endif
                        <td>
                            <a href="{{route('admin.carrusels.show',$carrusel)}}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin.carrusels.edit',$carrusel)}}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('admin.carrusels.destroy',$carrusel)}}" method="post">
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