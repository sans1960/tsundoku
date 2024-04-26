@foreach ($comentbooks as $comentbook)
<div @if($comentbook->parent_id != null) style="margin-left:40px;" @endif>
    <div class="mt-2 d-flex justify-content-between">
        <strong>{{ $comentbook->user->nickname }}</strong>
        <p>{{\Carbon\Carbon::parse($comentbook->created_at)->format('d/m/Y-h:m');}}</p>
    </div>
    <div class="d-flex justify-content-start align-items-start p-2 flex-column">
        <p>{{ $comentbook->body }}</p>
        <!-- Button trigger modal -->
        @if (Auth::check() and Auth::user()->email_verified_at !=null)
        <button type="button" class="btn btn-outline-danger btn-sm mt-2" data-bs-toggle="modal"
            data-bs-target="#modal.{{$comentbook->id}}">
            Denuncia
        </button>

        <!-- Modal -->

        <div class="modal fade" id="modal.{{$comentbook->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal.{{$comentbook->id}}">Denuncia el comentari fet per
                            {{$comentbook->user->nickname}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('denunciacoment.book.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <textarea name="motiu" placeholder="Escriu aqui el motiu..." class="form-control"
                                    required id="" cols="30" rows="10"></textarea>
                            </div>

                            <input type="hidden" name="coment_book_id" value="{{$comentbook->id}}" id="">

                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}" id="">



                            <div class="mb-3 mt-3">
                                <input type="submit" value="envia" class="btn btn-outline-success">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <a href="" id="reply"></a>
    @if (Auth::check() and Auth::user()->email_verified_at !=null)
    <form method="post" action="{{ route('coment.book.store') }}">
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
    @endif
    @include('front.partials.comentbookDisplay', ['comentbooks' => $comentbook->replies])
</div>
@endforeach