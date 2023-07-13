@extends('layouts.admin')
@section('title')
    Tots els comentaris
@endsection
@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('Tots els comentaris') }}</div>

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
              @foreach ($comments as $comment)
                  <div class="card mb-2">
                    <div class="row">
                        <div class="col">{{$comment->user->name}}</div>
                        <div class="col">{{$comment->commentable_type}}</div>
                        <div class="col">{{$comment->commentable_id}}</div>
                        <div class="col">{{$comment->id}}</div>
                        <div class="col">{{$comment->parent_id}}</div>
                        <div class="col">
                            <form action="{{route('admin.comments.destroy',$comment)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <p>{{$comment->body}}</p>
                  
                  </div>
              @endforeach


            </div>
        </div>
        {{$comments->links()}}
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