@extends('layouts.app')

@section('content')
<h1>{{$event->title}} - {{$timeslot->name}}</h1>

<div class="panel panel-default">
    <div class="panel-heading"><h4>
        {{date( "l", strtotime( $timeslot->start ) )}}
        {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}  
        </h4>
    </div>

    <div class="panel-body">
        <div class="list-group">
            @if(count($timeslot->games) > 0 )
                @foreach($timeslot->games as $game)
                    <div class="media">
                    <a href="/games/{{$game->id}}" class="list-group-item list-group-item-action">
                        <div class="media-left media-middle">
                            <img src="/storage/game_images/{{$game->game_image}}" class=" media-object img-thumbnail" width="50" >
                        </div>
                        <div class="media-body media-middle">
                            <h4 class="media-heading">{{$game->name}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            @else
            No Games Scheduled :(
            @endif
        </div>
    </div>
</div>
@endsection