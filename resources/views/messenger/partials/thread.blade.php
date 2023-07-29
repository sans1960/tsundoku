<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>



<div class="card">
    <div class="media alert {{ $class }}">

        <h5><a class="nav-link" href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a></h5>
        <p>({{ $thread->userUnreadMessagesCount(Auth::id()) }} sense llegir)</p>

        <div>
            {{ $thread->latestMessage->body }}
        </div>


        <p>
            Remitent: {{ $thread->creator()->nickname }}
        </p>
        <div>
            <form action="{{ route('messages.destroy', $thread) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>