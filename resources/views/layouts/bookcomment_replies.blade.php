@foreach($comments as $comment)
<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <div class="d-flex justify-content-between">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{\Carbon\Carbon::parse($comment->created_at)->format('d/m/Y H:i:s');}}</p>
    </div>

    <p>{{ $comment->body }}</p>
    @if (Auth::check())
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.book') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="body" required class="form-control" />
            <input type="hidden" name="book_id" value="{{ $book->id }}" />
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning btn-sm mt-2 mb-2" value="Reply" />
        </div>
    </form> 
    @endif

    @include('layouts.bookcomment_replies', ['comments' => $comment->replies])
</div>
@endforeach