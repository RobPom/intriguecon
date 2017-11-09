@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1 class="display-3">Intrigue<span style="color:yellow">Con 2017</span> Recap</h1>
    <div class="row">
        <div class="col-sm-8 col-md-10 col-lg-10">
            <hr class="hidden-xs">
            <p class="header-p" style="font-weight: medium;">Reflecting on the 2017 Convention, our plans going forward, some doodles and <em>An Intriguing Fiasco...</em>

            </p>
            <p class="lead ">
                <a class="btn btn-primary btn-md" href="/2017-recap" role="button">Read More</a>
            </p>
        </div>
    </div>
</div>

    <div class="row" style="margin-top:20px;">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body vertical-center">
                    <div class="col-sm-5 hidden-xs">
                        <div id="con-attendees" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#con-attendees" data-slide-to="0" class="active"></li>
                                <li data-target="#con-attendees" data-slide-to="1"></li>
                                <li data-target="#con-attendees" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                <img src="/img/con_table_02.jpg" alt="Table Top Game">
                                </div>

                                <div class="item">
                                <img src="/img/con_table_01.jpg" alt="Table Top Game">
                                </div>

                                <div class="item">
                                <img src="/img/con_table_03.jpg" alt="Table Top Game">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#con-attendees" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#con-attendees" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7" >
                        <h3 class="shadowed">Tabletop Roleplaying Convention<h3>
                        <p class="lead">IntrigueCon is an annual tabletop roleplaying game convention that takes place in Edmonton, Alberta.</p>
                        <p class="lead">Playing host to dozens of game sessions over three days, IntrigueCon is a great opportunity to meet new people, 
                        reconnect with old friends, or try something new.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-eq-height hidden-xs"  style="margin-bottom:100px; margin-top:50px;">
        <div class="col-sm-4 col-xs-12 text-center">     
            <img src='/img/block-img-article.png' height="80px">
            <br>                                    
            <h3 class="shadowed" style="padding:10px;">Articles</h3> 
            <div class="row">
                <div class="col-sm-12" >
                    <p>Here are some things we wrote about some other things.</p>
                </div>
            </div>
            <div class="row force-to-bottom text-center">
                <div class="col-sm-12">
                    <a href="articles/" class="btn btn-md btn-primary ">All Articles</a>
                </div>         
            </div>
        </div>

        <div class="col-sm-4 col-xs-12 text-center">     
            <img src='/img/block-img-games.png' height="80px">
            <br>                                    
            <h3 class="shadowed" style="padding:10px;">Games</h3> 
            <div class="row">
                <div class="col-sm-12" >
                
                 <p>All of the games in one place, {{count($games)}} in total!</p>
                   
                </div>
            </div>
            <div class="row force-to-bottom text-center">
                <div class="col-sm-12">
                    <a href="games/" class="btn btn-md btn-primary ">All Games</a>
                </div>         
            </div>
        </div>

        <div class="col-sm-4 col-xs-12 text-center">     
            <img src='/img/block-img-volunteer.png' height="80px">
            <br>                                    
            <h3 class="shadowed" style="padding:10px;">Volunteer</h3> 
            <div class="row">
                <div class="col-sm-12" >
                    <p>Want to help out or become a Gamemaster?</p>
                </div>
            </div>
            <div class="row force-to-bottom text-center">
                <div class="col-sm-12">
                    <a href="volunteer/" class="btn btn-md btn-primary ">Find Out More</a>
                </div>         
            </div>
        </div>

    </div>
    <div class="row visible-xs">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="media">
                                <div class="media-left">                                   
                                    <img src='/img/block-img-article.png' height="60px">                                    
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" style="margin-top:8px;">Articles</h4>
                                    <p>Here are some things we wrote about some other things.</p>                
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <a href="articles/" class="btn btn-md btn-primary ">Archive</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="media">
                                <div class="media-left">
                                    <a href="/ahref">
                                    <img src='/img/block-img-games.png' height="60px">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" style="margin-top:8px;">Games</h4>
                                    <p>All of the games in one place, {{count($games)}} in total!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <a href="games/" class="btn btn-md btn-primary ">All Games</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="media">
                                <div class="media-left">
                                    <a href="volunteer">
                                    <img src='/img/block-img-volunteer.png' height="60px">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" style="margin-top:8px;">Volunteer</h4>
                                    <p>Want to help out or become a Gamemaster?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <a href="volunteer/" class="btn btn-md btn-primary ">More Info</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
       

    </div>

    <hr class="hidden-xs">
    <div class="row" style="margin-bottom:60px;">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-12">
                        <h3 class="shadowed">Sponsors<h3>
                        <p class="lead">We would like to thank our sponsors for making this event possible</p>
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <a href="http://hazardgaming.com/" 
                            title="HAZARD GAMING | Talking the Walk"
                            style="font-family: 'Fjalla One', sans-serif;font-size:32px;">HAZARD GAMING
                        </a>
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <a href="https://www.evilhat.com/home/" 
                            title="Evil Hat Productions | Turning Passion into Great Games!">
                            <img class="img-responsive" src="img/evilhat-logo.gif" alt="Evil Hat Productions">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


<style>

.home-block {
    margin-bottom: 80px; 
}


.row-eq-height {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display:         flex;
}

.force-to-bottom {
  position:absolute;
  bottom: -40px;
  width: 100%;
}

.vertical-center {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>