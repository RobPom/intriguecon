@extends('layouts.app')

@section('content')
<h1>{{$event->title}}</h1>
<hr>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-3 text-center">
        <img style="max-height:400px; max-width:100%;"src="/storage/event_images/{{$event->event_image}}">
    </div>
    <div class="col-lg-9 col-md-8 col-sm-9">

        <p>{!! $event->description !!}</p>
    </div>
</div>
    
@if(!Auth::guest())
    @if(Auth::user()->admin)
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <div class="pull-right">
                        <a href="/events/{{$event->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                        </a>
                        {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
        </div>
    @endif
@endif
<hr>
<div class="row">
    <div class="col-sm-6">
        <div class="panel-default panel">
            <div class="panel-body">
                <h4><i class="material-icons" style="padding-bottom:7px;">date_range</i> Calendar
                @if(count($event->days) > 0) {{-- there are days created--}}
                    @if(!Auth::guest())
                        @if(Auth::user()->admin)
                            <a href="/calendar/manage/{{$event->id}}" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">edit</i>
                            </a>
                        @endif
                    @endif
                        <div class="pull-right"><a href="/schedule/show/{{$event->id}}" class="btn btn-primary"> View Schedule</a></div>
                    </h4><hr>
                    <table class="table table-striped">
                        @foreach($event->days as $day) 
                            <tr>
                                <td>{{date( "l F jS Y", strtotime( $day->date ) )}}</td>
                                <td>{{date( "g:ia", strtotime( $day->start ) )}} to {{date( "g:ia", strtotime( $day->end ) )}}</td>
                            </tr>
                        @endforeach
                    </table>
                    
                @else {{-- no days created--}}
                    @if(!Auth::guest())
                        @if(Auth::user()->admin)
                            <a href="/calendar/manage/{{$event->id}}" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">add</i>
                            </a>
                        @endif
                    @endif
                    </h4><hr>
                    <p><em>stay tuned</em></p>
                   
                    
                @endif  
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel-default panel">
            <div class="panel-body">
                <h4><i class="material-icons" style="padding-bottom:5px;">list</i> The Games
                @if($event->calendar === 0)
                    @if(!Auth::guest())
                        @if(Auth::user()->admin)
                            <a href="/schedule/manage/{{$event->id}}" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">add</i>
                            </a>                          
                        @endif
                    @endif
                    <div class="pull-right"><a href="/games" class="btn btn-primary">Games List</a></div>
                    </h4><hr>
                     @if($event->status['active'])
                         <h5>Featured</h5>                                                             
                        <div class="media">
                            <a href="/games/{{$featuredgame->id}}" class="list-group-item list-group-item-action">
                                <div class="media-left media-middle">
                                    <img src="/storage/game_images/{{$featuredgame->game_image}}" class=" media-object img-thumbnail" alt="Cinque Terre" width="50" >
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">{{$featuredgame->name}}</h4>
                                </div>
                            </a>
                    </div>

                    @else
                        <em>stay tuned</em>
                    @endif
                    
                @endif  
            </div>
        </div>
    </div> 
</div>
</div>
@endsection