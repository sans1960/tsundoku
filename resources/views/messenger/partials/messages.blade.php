<div class="card">

    <div class="card-body">
        <h5 class="card-title">{{ $message->user->nickname }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Enviat {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>