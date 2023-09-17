@foreach ($comentbooks as $comentbook)
<div @if($comentbook->parent_id != null) style="margin-left:40px;" @endif>
    <strong>{{ $comentbook->user->name }}</strong>
    <p>{{ $comentbook->body }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('coment.book') }}">
        @csrf
        <div class="form-group mb-3 p-2">
            <input type="text" name="body" class="form-control" required />
            <input type="hidden" name="book_id" value="{{ $book->id }}" />
            <input type="hidden" name="parent_id" value="{{ $comentbook->id }}" />
        </div>
        <div class="form-group mt-3 mb-3">
            <button type="submit" class="btn btn-outline-success">
                Respon
            </button>
        </div>
    </form>
    @include('front.partials.comentbookDisplay', ['comentbooks' => $comentbook->replies])
</div>
@endforeach