@extends('layouts.front')
@section('title')
Qui som ?
@endsection
@section('meta_title')
Qui som ?
@endsection
@section('meta_url')
{{url('quisom')}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <h1 class="ubuntu fw-bold ">Qui som?</h1>
        <div class="col-md-6 mb-4 ">
            <img src="{{asset('img/nevera-web-2.png')}}" class="img-fluid w-100" alt="">
        </div>
        <div class="col-md-6">
            <h4 class="ubuntu fw-bold lila">Tsundoku.cat és una plataforma digital de suport a la
                literatura
                catalana i
                aranesa
                i a
                l'obra publicada en aquestes
                dues llengües als PP.CC.</h4>

            <h4 class="ubuntu mt-3 fw-bold lila">Com funciona?</h4>
            <p>Un cop registrat amb el tipus de perfil que desitgi (lector, escriptor, editorial o llibreria) l'usuari
                pot ressenyar i
                puntuar els llibres que ja es trobin en aquell moment en la nostra base de dades o pujar-ne de nous.</p>
            <h4 class="ubuntu mt-3 fw-bold lila">Quins avantatges ofereix als seus usuaris?</h4>
            <p><span class="fw-bold">Els lectors</span> poden cercar ressenyes ja fetes abans de llegir un llibre per a
                tenir-ne una idea prèvia, compartir impressions sobre
                les seves obres preferides i puntuar-les.</p>
            <p><span class="fw-bold">Els autors</span> poden donar visibilitat a les seves obres i activitats, així com
                tenir una fitxa personal en la nostra base de dades
                consultable per a la resta d'usuaris. Nogensmenys, poden ressenyar i valorar qualsevol altra obra de
                qualsevol altre
                autor.</p>
            <p><span class="fw-bold">Les editorials i llibreries</span> poden donar a conèixer les seves empreses i els
                seus fons bibliogràfics. També poden promocionar les seves activitats a
                través de l'agenda de la plataforma i del seu canal de vídeo (Tsundoku TV).</p>
            <h4 class="ubuntu mt-3 fw-bold lila">Què més pots trobar a Tsundoku.cat?</h4>
            <p>Tsundoku.cat fa recomanacions periòdiques, reculls temàtics i dona a conèixer autors novells i
                autopublicats. Disposa, a
                més a més, d'un canal de missatgeria interna.</p>
            <p>En definitiva, Tsundoku.cat és un projecte d'agitació i propaganda literàries en favor de la cultura
                catalana.
                Participa-hi!</p>



        </div>
    </div>
</div>
@endsection
@section('js')

@endsection