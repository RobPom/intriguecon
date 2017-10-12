<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IntrigueCon | Schedule Display</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <style>
        .day {
            height:400px;
            background-color:rgba(135,206,250,0.6);
        }
        .session {
            padding-left: 5px;
            padding-right: 5px;
            height:80px;
        }
        html { 
            background: url(/img/billboard-schedule-background.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        h1 {
            color: white;
            text-shadow: black 0.02em 0.02em 0.1em;
        }
        .card .card-content {
            padding: 10px;
        }
         .card .card-title {
            font-size:2em;
        }
        .session-info {
            font-size:1.2em;
        }
        span.badge.new {
            font-size:1rem;
            font-weight:500;
        }
        span.badge {
            line-height:60px;
            height:60px;
        }

    </style>
</head>
<body>
<div class="container">

<h1>Intrigue<span style="color:yellow">Con 2017</span> Game Schedule</h1>
<div class="section">
    <div class="row">                 
        @foreach($event->days as $day)
            <div class="col s12 m6 l4">
                <div class="card day  ">
                    <div class="card-content">
                        <span class="card-title"><strong>{{date( "l ", strtotime( $day->date ) )}}</strong></span>
                        <div class="collection">
                            @foreach($event->timeslots as $timeslot)
                                    @if($timeslot->date === $day->date)
                                        @if($timeslot->gameslot)
                                            <div class='collection-item session light-blue lighten-5'>
                                                <div class='row'>
                                                    <div class="col s8 m7 center-align">
                                                        <div class='session-info'>
                                                            <strong>{{$timeslot->name}}</strong><br>
                                                            {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}  
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col s4 m5">
                                                        <div class="valign-wrapper">
                                                            <span class="new badge games" data-badge-caption="Games">{{count($timeslot->games)}}</span>
                                                        </div>                                                        
                                                    </div>
                                                </div>                                                                                               
                                            </div>
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
 <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>