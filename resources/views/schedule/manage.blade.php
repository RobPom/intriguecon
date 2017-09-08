@extends('layouts.app')

@section('content')
<h1>{{$event->title}}</h1>

@if(count($event->timeslots) > 0)

    @foreach($event->timeslots as $timeslot)
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-12">
                    <h4>{{$timeslot->name }}</h4>
                </div>
                <div class="col-xs-12 col-sm-6 text-right responsive-align">
                    <h4><small>
                        {{date( "l", strtotime( $timeslot->date ) )}} - 
                        {{date( "g:i", strtotime( $timeslot->start ) )}} to
                        {{date( "g:ia", strtotime( $timeslot->end ) )}}
                    </small></h4>
                </div>
            </div>
        </div> {{-- panel heading end --}}
        @if($timeslot->gameslot)
            <div class="panel-body"><strong>{{count($timeslot->games)}} Scheduled Games</strong>
                    @if(count($timeslot->games) > 0)
                        <div class="list-group">
                            @foreach($timeslot->games as $game)
                                <div class="row">
                                    <div class="col-xs-8">
                                        <a href="/games/{{$game->id}}" class="list-group-item list-group-item-action">{{$game->name}}</strong></a>
                                    </div>
                                    <div class="col-xs-2">
                                    
                                    {!! Form::open(['action' => 'SchedulesController@remove' , 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        {{Form::hidden('event_id',$event->id)}}	
                                        {{Form::hidden('timeslot_id',$timeslot->id)}}
                                        {{Form::hidden('game_id',$game->id)}}

                                        {{Form::button('<i class="material-icons" style="vertical-align: middle;">delete</i>', array('type' => 'submit', 'class' => 'btn btn-danger'))}}						
                                    {{--   {{Form::submit('Remove', ['class' => 'btn btn-primary '])}}  --}}
                                    {!! Form::close() !!}

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                <hr>
                <?php 
                    $timeslot_games = $game_select;       
                    if( count( $timeslot->games ) > 0 ){
                        foreach($timeslot->games as $game){
                            unset($timeslot_games[$game->id]);
                        }
                    }
                ?>

                <div class="row">
                    <div class="col-sm-12 col-12">
                        {!! Form::open(['action' => 'SchedulesController@store' , 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">                                
                                <div class="col-sm-2">
                                        {{Form::Label('game', 'Add a Game')}}
                                </div>                            
                                <div class="col-sm-8">
                                    {{Form::select('game_id', $timeslot_games, null, [  'placeholder' => 'Pick A Game' , 'class' => 'form-control'])}}
                                </div>
                                <div class="col-sm-2">
                                    {{Form::hidden('event_id',$event->id)}}	
                                    {{Form::hidden('timeslot_id',$timeslot->id)}}						
                                    {{Form::submit('Add', ['class' => 'btn btn-primary '])}}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>              
                </div>
            </div> {{--  end panel   --}}
        @else

        @endif
    </div>
    @endforeach
    
@endif


@endsection