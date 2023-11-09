<x-mail::message>

    Benvolgut {{$book->user->nickname}},ell llibre {{$book->titol}} ja está disponible.
    Moltes grácies.



    {{ config('app.name') }}
</x-mail::message>