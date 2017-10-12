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
.center-cropped {
  object-fit: none; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
  height: 100px;
  width: 100%;
}
.card {
    width:300px;

}

.card.small {
    height:270px;
}

.card-title {
    padding:10px !important;
    height: 100px;
    width: 100%;
    box-shadow: inset 0px 0px 600px rgba(0, 0, 0, 0.80);
}

.card .card-action {
    padding: 8px;
}

/* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color:rgba(0,0,0,0.4);
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>
<div class="container">


<div id="sidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    @foreach($event->timeslots as $session)
        <a href='/billboard/schedule/{{$session->id}}'>{{$session->name}}</a>
    @endforeach
</div>

<!-- Use any element to open the sidenav -->



<h1>
<span onclick="openNav()">{{$timeslot->name}}</span>
<small>{{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}</small>
</h1>

    <div class="section">
        <div class="row">
        @foreach($timeslot->games as $game)
            <div class="col s12 m6 l3">
                <div class="card small">
                    <div class="card-image">
                        <img class="center-cropped" src="/storage/game_images/{{$game->game_image}}">
                        <span class="card-title absolute-center">{!!$game->name !!}</span>
                    </div>
                    <div class="card-content">
                        <p>
                        {!!$game->short_description !!}
                        </p>
                    </div>
                    <?php $gametimeslot = App\GameTimeslot::where('timeslot_id', $timeslot->id)
                        ->where('game_id', $game->id)
                        ->first();
                    ?>
                    <div class="card-action right-align">

                        <?php 
                            $remaining = $game->max - count($gametimeslot->attendees);
                            switch ($remaining) {
                                case 0:
                                    $msg = "No open seats";
                                    break;
                                case 1:
                                    $msg = "Only 1 seat left!";
                                    break;
                                default:
                                    $msg = $remaining.' seats remaining';
                                    break;
                            }
                        ?>
                        <strong>{{$msg}}</strong>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>

</div>


 <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
    /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("sidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
        }
  </script>
</body>
</html>