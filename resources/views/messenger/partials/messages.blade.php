<div class="card ubuntu">

    <div class="card-body">
        <h5 class="card-title ubuntu text-success">{{ $message->user->nickname }}</h5>
        <p class="text-success">{{ $message->body }}</p>
        <div class="text-muted">
            <small>Enviat {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>