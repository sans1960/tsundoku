@extends('layouts.front')
@section('title')
Actes
@endsection
@section('css')

<link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}">
{{--
<link rel="stylesheet" href="{{asset('css/fullcalendar.print.min.css')}}"> --}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div id='calendar'></div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/ca.js')}}"></script>

<script>
    $(document).ready(function() {
        var initialLocaleCode = 'ca';
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
           
            header: {
                left: 'prev,next ',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
                },
           locale: initialLocaleCode,
        //    navLinks: true,
           eventRender: function(eventObj, $el) {
            $el.popover({
            title: eventObj.title,
            content: eventObj.lloc,
            trigger: 'hover',
            placement: 'top',
            container: 'body'
            });
            },
            events : [
                @foreach($actes as $acte)
                {
                    title : '{{ $acte->slug }}',
                    start : '{{ $acte->data }}',
                    url : '{{ route('acte', $acte) }}',
                    lloc :'{{$acte->lloc}}'
                },
                @endforeach
            ]
        })
    });
</script>
@endsection