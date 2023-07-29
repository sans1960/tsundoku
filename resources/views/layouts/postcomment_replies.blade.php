@foreach($comments as $comment)
<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <div class="d-flex justify-content-between">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{\Carbon\Carbon::parse($comment->created_at)->format('d/m/Y H:i:s');}}</p>
    </div>

    <div class="d-flex justify-content-between align-items-center p-2">
        <p>{{ $comment->body }}</p>
        @if (Auth::check())
        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#modal.{{$comment->id}}">Denuncia</button>
        <div class="modal fade" id="modal.{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Denuncia el Comentari</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('admin.denuncia.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <textarea name="motiu" placeholder="Escriu aqui el motiu..." class="form-control"
                                    required id="" cols="30" rows="10"></textarea>
                            </div>
                            <input type="hidden" name="objecte_comentari" value="{{$post->titol}}" id="">
                            <input type="hidden" name="comment_id" value="{{$comment->id}}" id="">
                            <input type="hidden" name="nickname_comentari" value="{{$comment->user->nickname}}" id="">
                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}" id="">
                            <input type="hidden" name="data_comentari"
                                value="{{\Carbon\Carbon::parse($comment->created_at)->format('Y-m-d');}}" id="">
                            <textarea name="comentari" hidden id="" cols="30" rows="10">
                                        {{$comment->body}}
                                    </textarea>
                            <input type="date" required name="data" id="" class="form-control">

                            <div class="mb-3 mt-3">
                                <input type="submit" value="envia" class="btn btn-outline-success">
                            </div>

                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>
        @endif
    </div>
    @if (Auth::check())
    <a href="" id="reply"></a>

    <form method="post" action="{{route('reply.post')}}">
        @csrf
        <div class="form-group">
            <input type="text" name="body" required class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning btn-sm mt-2 mb-2" value="Reply" />
        </div>
    </form>
    @endif
    @include('layouts.postcomment_replies', ['comments' => $comment->replies])
</div>
@endforeach