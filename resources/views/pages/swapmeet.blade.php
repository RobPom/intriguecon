@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>Swapmeet</h1>
    <div class='row'>
        <div class='col-xs-12'>
            <p class="lead">IntrigueCon is hosting a Swap Meet this year.</p>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-4'>

                <img src="img/swapmeet-optimized.jpg" class="img-responsive rounded" alt="Swapmeet">

        </div>
        <div class='col-md-4'>
            <h4 class='display-4'>Info </h4>
            <p>The swapmeet  will take place after Game Session 2 on Saturday, at 2pm or shortly thereafter.
            <p> The intent of the swap meet is to give folks a chance to swap or sell games, books, and other tabletop roleplaying items like miniatures and dice. 
            </p>
            <br>
        </div>
        <div class='col-md-4'>
           <div class='panel '>
                <div class='panel-heading bg-info text-white'>
                   <h4 class='display-4' style='margin: 0px;'><i class="material-icons md-24">info_outline</i> Note </h4>
                </div>
                <div class='panel-body bg-info text-white' style='padding-top: 0px;'>
                    <p>
                    When buying and selling items at the swapmeet all transactions must fall within the law e.g. no selling dwarven ale to minors. 
                    We also suggest you carefully research the value of any items you’re selling/swapping.</p>
                    <p>Additionally it’d be great if you’d check that any games are complete or that you say “I don’t know” when asked.</P>
                    <p> As a purchaser be sure to check you’re buying what you think you’re buying: a seller can’t read your mind.
                    
                    </p> 
                    <p><em>IntrigueCon does not endorse nor will be involved directly with any transactions.</em></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection