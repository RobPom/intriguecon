@extends('billboard.layout')

@section('content')

<h1 onclick="openNav()">Intrigue<span style="color:yellow">Con 2017</span> Game Schedule</h1>
<div class="section">
    <div class="row">                 
        @foreach($event->days as $day)
            <div class="col s12 m6 l4">
                <div class="card day">
                    <div class="card-content">
                        <span class="card-title"><strong>{{date( "l ", strtotime( $day->date ) )}}</strong></span>
                        <div class="collection">
                            @foreach($event->timeslots as $timeslot)
                                @if($timeslot->date === $day->date)
                                    @if($timeslot->gameslot)
                                        <a href="/billboard/{{$timeslot->id}}" class="collection-item timeslot">
                                            <strong>{{$timeslot->name}}</strong>
                                            {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}  
                                            <span class="new badge games" data-badge-caption="Games">{{count($timeslot->games)}}</span>  
                                        </a>
                                    @endif   
                                @endif                     
                            @endforeach 
                        </div>   
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection