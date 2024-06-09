<x-mail::message>
    Benvingut
    {{$user->name}}
    @if ($user->condicio == "lector")
    Benvingut/a a Tsundoku.cat, la plataforma digital en suport de la literatura catalana i l'obra traduïda al català!
    #Què pots fer a tsundoku.cat?
    ►Si encara no ho has fet posa una foto xula al teu perfil d'usuari/ària.
    ►Tria i remena entre els llibres de la nostra base de dades per a ressenyar-ne els preferits, puntuar-los i
    intercanviar-ne opinions amb la resta de tsundukaires, o puja els que hi trobis a faltar.
    ►Si ho desitges, pots entrar en contacte amb la resta d'usuaris a través del nostre programa de missatgeria interna.
    ►Si mai escrius un llibre, pots inscriure’t amb un perfil d’escriptor i pujar la teva obra.
    O si obres una llibreria o muntes una editorial,
    pots registrar el teu negoci per donar-li visibilitat.
    Gràcies per contribuir a fer més gran aquest projecte i recorda, #elsllibrenoocupenlloc! ☺
    @elseif ($user->condicio == "autor")
    Benvingut/a a Tsundoku.cat, la plataforma digital en suport de la literatura catalana i l'obra traduïda al català!
    #Per on pots començar?
    ►Si no ho has fet ja posa una foto xula al teu perfil d'usuari/ària.
    ►Omple la teva fitxa d'autor/a amb el teu biopic i tot allò que consideris rellevant de la teva carrera.
    ►Comença a pujar els teus llibres.
    ►A l'apartat TsundokuTV pots pujar-hi vídeos de les teves presentacions o actes públics.
    ►A l'agenda pots programar les teves pròximes presentacions i/o saraus diversos.
    ►A l'apartat Ens ha agradat pots pujar-hi notícies que facin referència a la teva obra (citant-ne sempre
    la font i incloent l'enllaç a la notícia).
    ►Si ho desitges també pots pujar, ressenyar i valorar les teves obres preferides d'altres autors.
    Gràcies per contribuir a fer més gran aquest projecte i recorda, #elsllibrenoocupenlloc! ☺
    @elseif ($user->condicio == "editorial")
    Benvingut/a a Tsundoku.cat, la plataforma digital en suport de la literatura catalana i obra traduïda al català!
    Per on pots començar?
    ►Si no ho has fet ja posa una foto xula al teu perfil d'usuari/ària.
    ►Omple la teva fitxa d'editorial amb totes les dades necessàries.
    ►Comença a pujar el teu fons editorial.
    ►Si ho desitges, pots omplir també les fitxes d'autors que publiquen a la teva editorial.
    ►A l'apartat TsundokuTV pots pujar-hi els vídeos de les vostres presentacions o actes públics.
    ►A l'agenda pots programar les vostres pròximes presentacions i/o saraus diversos.
    ►A l'apartat Ens ha agradat pots pujar-hi notícies que facin referència a la teva editorial o autors (citant-ne
    sempre la font i incloent l'enllaç a la notícia).
    ►Si ho desitges, també pots pujar, ressenyar i valorar les teves obres preferides d'altres editorials.
    Gràcies per contribuir a fer més gran aquest projecte i recorda,
    #elsllibrenoocupenlloc! ☺
    @elseif ($user->condicio == "llibreria")
    Benvingut/a a Tsundoku.cat, la plataforma digital en suport de la literatura catalana i obra traduïda al català!
    Per on pots començar?
    ►Si no ho has fet ja posa una foto xula al teu perfil d'usuari/ària.
    ►Omple la teva fitxa de llibreria amb totes les dades necessàries.
    ►Comença a pujar els llibres que més us agradin o vulgueu destacar de la vostra llibreria.
    ►Si ho desitges, pots omplir també les fitxes dels autors que més t'agradin.
    ►A l'apartat TsundokuTV pots pujar-hi els vídeos de les vostres presentacions o actes públics.
    ►A l'agenda pots programar les vostres pròximes presentacions i/o saraus diversos.
    ►A l'apartat Ens ha agradat pots pujar-hi notícies que facin referència a la teva llibreria (citant-ne sempre la
    font i incloent l'enllaç a la notícia).
    ►Si ho desitges, també pots pujar, ressenyar i valorar les teves obres preferides d'altres editorials.
    Gràcies per contribuir a fer més gran aquest projecte i recorda, #elsllibrenoocupenlloc! ☺
    @endif

    Grácies,
    {{ config('app.name') }}
</x-mail::message>