@extends('layouts.app')

@section('content')

<h1>Dashboard - {{Auth::user()->name}}</h1>
<div class="container">
    @if (Auth::user()->admin)

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Admin</h4>
                    </div>
                    <div class="panel-body">
                        <h5>{{$event->title}} | {{count($attendees)}} attendees</h5>
                        <a href='/attendees'>View All</a>
                        <hr>
                        <h5>Scheduling</h5>
                        
                            @foreach($event->timeslots as $timeslot)
                                <div class="list-group">
                                    <a href="/schedule/{{$event->id}}/timeslot/{{$timeslot->id}}" class="list-group-item">
                                        <div class='row'>
                                            <div class='col-sm-4'>
                                                <strong>{{$timeslot->name}}</strong>
                                            </div>
                                            <div class='col-sm-4'>
                                                {{count($timeslot->games)}} Games
                                            </div>
                                            <div class='col-sm-4'>
                                                <?php $totalSeats = 0; ?>
                                                @foreach($timeslot->games as $game)
                                                    <?php 
                                                    
                                                        $gametimeslot = App\GameTimeslot::where('timeslot_id', $timeslot->id)
                                                            ->where('game_id', $game->id)
                                                            ->first();
                                                        $playerCount = count($gametimeslot->attendees);
                                                        $totalSeats += $game->max; 
                                                    ?>
                                                @endforeach
                                                <i class='material-icons' >event_seat</i> {{$playerCount}} / {{$totalSeats}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                   
                            @endforeach
                   
                        <a class='btn btn-large btn-primary pull-right' href="/schedule/manage/{{Config::get('constants.active_con')}}">Manage Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (Auth::user()->admin)
            <div class="panel panel-default">
                <div class="panel-heading"><h4>
                    <span>Your Articles</span>
                    <a href="/articles/create" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                        <i class="material-icons" style="font-size:18px;vertical-align: middle;">add</i>
                    </a>
                </h4></div>

                <div class="panel-body">
                @if(count($articles) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td> <a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
                                <td>{{date('M j, Y', strtotime($article->created_at))}}</td>
                                <td>
                                    <a href="/articles/{{$article->id}}/edit" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                        <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                                    </a>

                                    {!!Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-xs'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $articles->links() }}
                @else
                    <p>You have no articles.</p>
                @endif
            @endif
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Game Proposals</h4>
                </div>
                <div class="panel-body">
                    @if(count($proposals) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Game Title</th>
                                <th>Submitted By</th>
                                <th>Date</th>
                                <th></th>
                            </tr>                        
                            @foreach($proposals as $proposal)
                                <tr>
                                    <td>{{$proposal->title}}</td>
                                    <td>{{$proposal->name}}</td>
                                    <td>{{date('M j, Y', strtotime($proposal->created_at))}}</td>
                                    <td>
                                        <a href="/proposals/{{$proposal->id}}/edit" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                            <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                                        </a>

                                        {!!Form::open(['action' => ['GameProposalsController@destroy', $proposal->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-xs'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                         {{ $proposals->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
