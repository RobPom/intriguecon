@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Dashboard - {{Auth::user()->name}}</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->admin)
                        <h4>
                            <span>Your Articles</span>
                            <a href="/articles/create" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">add</i>
                            </a>
                        </h4>
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
                                        <td>{{$article->created_at}}</td>
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
</div>
@endsection
