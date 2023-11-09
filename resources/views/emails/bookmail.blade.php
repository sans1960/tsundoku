<x-mail::message>
    L'usuari {{$book->user->nickname}},ha pujat el llibre {{$book->titol}}

    {{-- <x-mail::button :url="'https://tsundoku.cat/'">
        Web page
    </x-mail::button> --}}


    {{ config('app.name') }}
</x-mail::message>