<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>



<div class="card">
    <div class="media alert {{ $class }}">

        <h3 class="ubuntu text-success"><a class="nav-link" href="{{ route('messages.show', $thread->id) }}">{{
                $thread->subject
                }}</a></h3>
        <p>({{ $thread->userUnreadMessagesCount(Auth::id()) }} sense llegir)</p>

        <div>
            {{ $thread->latestMessage->body }}
        </div>


        <p class="text-uppercase">
            Remitent: <span class="ubuntu">{{ $thread->creator()->nickname }}</span>
        </p>
        <div>
            <form action="{{ route('messages.destroy', $thread) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>