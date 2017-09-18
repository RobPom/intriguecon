@extends('layouts.app')

@section('content')
<h1>{{$event->title}} - {{$timeslot->name}}</h1>


<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-schedule"><h4>
                {{date( "l", strtotime( $timeslot->date ) )}}
                {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}  
                </h4>
            </div>

            <div class="panel-body">
                <div class="list-group">
                    @if(count($timeslot->games) > 0 )
                    <strong>Games on Schedule</strong>
                        @foreach($timeslot->games as $game)
                            <div class="media">
                            <a href="/games/{{$game->id}}" class="list-group-item list-group-item-action">
                                <div class="media-left media-middle">
                                    <img src="/storage/game_images/{{$game->game_image}}" class=" media-object img-thumbnail" width="50" >
                                </div>
                                <div class="media-body media-middle">
                                    <strong class="media-heading">{{$game->name}}</strong>
                                </div>
                                <?php $gametimeslot = App\GameTimeslot::where('timeslot_id', $timeslot->id)
                                    ->where('game_id', $game->id)
                                    ->first();
                                ?>
                                <div class="media-body media-right text-right">
                                    <span class="badge badge-primary ">
                                        <i class='material-icons' style='vertical-align: middle; font-size: 18px;'>event_seat</i>
                                        <span style='vertical-align: bottom; font-size: 16px;'> {{$game->max - count($gametimeslot->attendees)}}</span> 
                                    </span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    @else
                        <div class="col-xs-12 bg-info" style="padding-top:20px;padding-bottom:20px;">
                            <i class="material-icons" style="display:inline-block;vertical-align: middle;margin-right:20px;">error_outline</i><span><strong>No Games Scheduled</strong></span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection