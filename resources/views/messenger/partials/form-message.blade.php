<h5 class="mt-3 mb-3">Respon</h5>
<div class="card">
    <form action="{{ route('messages.update', $thread->id) }}" method="post">
        {{ method_field('put') }}
        {{ csrf_field() }}

        <!-- Message Form Input -->
        <div class="mb-3 mt-3">
            <textarea name="message" class="form-control"></textarea>
        </div>



        <!-- Submit Form Input -->
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-outline-success">Respon</button>
        </div>
    </form>
</div>