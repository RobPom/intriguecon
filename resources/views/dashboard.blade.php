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
