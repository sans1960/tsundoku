@extends('layouts.front')
@section('title')
Calendari
@endsection
@section('css')
<style>
    .tooltip-inner {
        background-color: green;
        color: white;
    }
</style>
@endsection
@section('content')
<div class="container vh-100">

    <h4>Calendari</h4>


    <hr>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="row">

                <div class="col bg-danger d-flex justify-content-between align-items-center">
                    <a href="{{ asset('/calendari') }}/<?= $data['last']; ?>" style="margin:10px;">
                        <i class="bi bi-chevron-left" style="font-size:1.5em;color:white;"></i>
                    </a>
                    <h4 class="text-white">
                        <?= $mescatala; ?> <small>
                            <?= $data['year']; ?>
                        </small>
                    </h4>
                    <a href="{{ asset('/calendari') }}/<?= $data['next']; ?>" style="margin:10px;">
                        <i class="bi bi-chevron-right" style="font-size:1.5em;color:white;"></i>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col border border-success-subtle">Dl</div>
                <div class="col  border border-success-subtle">Dt</div>
                <div class="col  border border-success-subtle">Dc</div>
                <div class="col  border border-success-subtle">Dj</div>
                <div class="col  border border-success-subtle">Dv</div>
                <div class="col border border-success-subtle">Ds</div>
                <div class="col  border border-success-subtle">Dg</div>
            </div>
            <!-- inicio de semana -->
            @foreach ($data['calendar'] as $weekdata)
            <div class="row">
                <!-- ciclo de dia por semana -->
                @foreach ($weekdata['datos'] as $dayweek)

                @if ($dayweek['mes']==$mes)
                <div class="col border border-success-subtle  ">
                    {{ $dayweek['dia'] }}
                    @foreach ($dayweek['evento'] as $acte)
                    <a class="mt-5" href=" {{route('acte',$acte)}}" data-bs-toggle="tooltip"
                        data-bs-title="{{$acte->titol}}">
                        <i class="bi bi-eye-fill" style="color: green;"></i>

                    </a>
                    @endforeach
                </div>
                @else
                <div class=" col bg-secondary border border-success-subtle">
                </div>
                @endif


                @endforeach
            </div>
            @endforeach
        </div>
    </div>



</div> <!-- /container -->
@endsection
@section('js')
<script>
    var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>
@endsection