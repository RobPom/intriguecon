@extends('layouts.app')

@section('content')
<style>
.carousel img {
  margin: auto;
}
.item {
    height: 200px;
}

.item img {
    max-height: 100%;  
    max-width: 100%; 
    position: absolute;  
    top: 0;  
    bottom: 0;  
    left: 0;  
    right: 0;  
    margin: auto;
}
</style>
<h2>IntrigueCon 2017 Recap</h2><br>
<div class='col-md-4'>
    <div class='col-sm-6 col-md-12'>
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="recap-images" class="carousel slide" data-ride="carousel">
                    <!-- Indicators 
                    <ol class="carousel-indicators">
                        @foreach($images as $image)
                            @if ($loop->first)
                                <li data-target="#recap-images" data-slide-to="{{$loop->index}}" class="active"></li>
                            @else
                                <li data-target="#recap-images" data-slide-to="{{$loop->index}}"></li>
                            @endif
                        @endforeach
                    </ol>-->
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style=" height: 200px !important;">
                        @foreach($images as $image)
                            @if ($loop->first)
                                <div class="item active">
                            @else 
                                <div class="item center-block">
                            @endif
                                    <a href="/2017-gallery">
                                        <img src="{{$image['dirname']}}\{{$image['basename']}}" alt="Table Top Game">
                                    </a>
                                </div>
                        @endforeach
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#recap-images" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#recap-images" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class='col-sm-6 col-md-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>An Intriguing Fiasco</h5>
            </div>
            <div class="panel-body">
            <p>A Fiasco playset created by the attendees of IntrigueCon 2017</p>
                <a class='btn btn-primary' href='/articles/3'>Read the Article</a>
                <a class='btn btn-primary' href='/dls/An-Intriguing-Fiasco.pdf'>Download</a>
            </div>
        </div>
    </div>
</div>
<div class='col-sm-12 col-md-8'>   
    <div class='row'>
        <div class="col-md-12">
            <p class="lead">Well, we did it!</p>
            <p class="lead">Thanks to all the roleplayers from Edmonton, and beyond, that came out to support roleplaying at IntrigueCon 2017.</p> 
           <p>We’d also like to extend a big thank you to those folks like Kay, Jason, Bryan, Tess, Chris, Lucas, Debbie, Phil, Thomas, Taylor and Sanford 
            who weren’t able to attend the con but supported it anyway.</p>
            <p>Everyone’s support and willingness to pitch in is what gives us the impetus to keep putting the convention together. Thank you. Thank you. Thank you.</p>
            <p>Now that that sentimental unpleasantness is behind us, let’s get to the purely objective things that came out of the con: a “by the numbers”, if you will.</p>
            <br>
        </div>
    </div>
    <div class='row'>
        <div class="col-md-6">
            <table class="table table-condensed">
                <tr><th colspan='2'>IntrigueCon 2017 by the numbers</th></tr>
                <tr><td>Attendance</td><td>73</td></tr>
                <tr><td>5 year-ers</td><td>12</td></tr>
                <tr><td>3 year-ers</td><td>29</td></tr>
                <tr><td>1st-timers</td><td>32</td></tr>
                <tr><td>Games Ran</td><td>36</td></tr>
                <tr><td>Systems played</td><td>21</td></tr>
                <tr><td>Games Played</td><td>147</td></tr>
                <tr><td>Hours Gamed	</td><td>588</td></tr>
                <tr><td>Growth</td><td>20%</td></tr>
            </table>
        </div>

        <div class="col-md-12">		
            <p>Those are some impressive numbers on the whole, but what do they really mean? Before digging into that question it’s worthwhile revisiting the goals we set out 
            for a sustainable IntrigueCon back in 2013.  The following goals can then be used as some kind of yardstick against which to measure how successful this year was.</p>

            <ul>
                <li>We will not lose a lot of money</li>
                <li>We will grow by 10-15% each year</li>
                <li>We will be explicitly inclusive</li>
                <li>We will encourage new roleplayers</li>
                <li>We will encourage the widest range of gaming systems possible</li>
                <li>We will encourage diversity in the gaming experiences offered</li>
            </ul>
        </div>
    </div>
    <br>
    <h4>We will not lose any money</h4>
    <p>This year we did not lose any money, in fact, we made some. Part of the financial reality of running the con is that on top of the hours that we put into 
    organising it we can’t then get a bill for our troubles.</p>

    <p>We’ve largely been successful with this by unapologetically operating under a particular assumption: GMs enjoy running games at cons. 
    The first year we ran IntrigueCon we made it free to attend for GMs.The GMs certainly appreciated that but it cost us a lot of money.
    In order to make the next year feasible we had two choices: keep it free for GMs and make it twice as expensive for players or, level 
    the field and have everyone attending contribute. We went with the latter and IntrigueCon has survived as a result.</p>

    <p>The surplus money, such as it is, has been earmarked for improving the atmosphere of the con. I’m sure some of you noticed that as far as 
    ambience went, the hall was, visually... not very exciting. Our plan is to buy some durable, reuseable, banners and decorations as well as 
    some other signage and table dressing. Basically, we plan to gussy the place up.</p>

    <br>
    <h4>We Will Grow By 10-15% Each Year</h4>
    <p>Using business-speak, the action items generated by this goal largely centre around tirelessly hunting for Facebook groups, visiting tabletop cafes,
    and answering ads in kijiji and other locations. It also centres around word of mouth which, thankfully, attendees have done a great job of.</p>

    <p>Ultimately we wanted to reach out into every basement around Edmonton and let roleplayers know there was an annual event geared to them. The fact 
    that we experienced 20% growth this year means that we’re still not quite there. Pockets of roleplayers are still waiting to be discovered.</p>

    <br>
    <h4>We Will Be Explicitly Inclusive</h4>
    <p>Our code of conduct makes it clear that we want people of all backgrounds to feel welcome at the con. They’re fine words but unless we actually 
    see the diversity have we been successful? Obviously there’s no way to really quantify how inclusive the con is but by just looking around it 
    would appear that we have some work to do in this area.</p>

    <p>Going forward, perhaps engaging cultural groups and support networks would be a way to achieve this.</p>

    <br>
    <h4>We Will Encourage New Roleplayers</h4>
    <p>Unlike many pastimes where you can get a taste of what it has to offer in a relatively short period of time, it’s a challenge to get someone to 
    commit to four hours with a group of strangers. While we really try to make newcomers feel welcome, finding ways to encourage people to come through 
    the door in the first place is an another ongoing challenge.</p>

    <p>We have some ideas in this regard so stand by if you like the idea of helping out.</p>

    <br>
    <h4>We Will Encourage The Widest Range Of Roleplaying Systems Possible</h4>
    <p>Part of attending a con is to meet new people and try new games. Looking at our schedule over the years we’ve done a great job of this. Looking at this year alone, 
    the number of repeated systems from session to session was very small. In fact, in 2017, of the 36 sessions we had there were only 4 duplicate systems and 1 duplicate game.</p>

    <p>We’re going to chalk that up as achieved.</p>

    <br>
    <h4>We Will Encourage Diversity In The Gaming Experiences Offered</h4>
    <p>This year we had a wide variety of systems but, perhaps, not as wide a variety of experiences as in previous years. Sword and Sorcery made up about 30% of the schedule 
    and Call of Cthulhu 15%.</p>

    <p>For 2018 we intend to encourage a wider variety of experiences by first looking at 2017 schedules for areas where we had little or no representation e.g Star Wars, and 
    actively recruiting GMs for those games who have run similar sessions in the past. We will have to work on our persuading skills.</p>

    <p>So, all things considered, 2017 was a success. There are some obvious areas to work on and a few clear things we can do to address those deficiencies.</p>

    <p>Looking forward to 2018, and recognising the improved platform the web page offers us, we have several ideas in the works that we hope will bring us closer to meeting 
    all of the goals we laid out five years ago.</p>

    <p>Our priority is that, after the eye-opening discovery that fewer than half of attendees are Facebook users, we have resolved to look at a more accessible central hub for 
    the latest news about the con. While we’ve not settled on the exact form that will take, we’re certain that going forward more attendees will be able to stay up-to-date more easily.</p>

    <p>I know, it’s all a little cryptic, but bear with us, all of this stuff gets done alongside full time jobs. So unless there’s a generous benefactor out there somewhere, 
    we’ll be making changes slowly and with our eyes firmly on sustainability for the future.</p>
    <br><br>
</div>

@endsection