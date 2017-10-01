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
                    <p>The exact nature of the transactions is between you and the vendor but must fall within the confines of Canadian and Alberta law.</p>
                    <p>Additionally the principles of <abbr title="Buyer Beware" class="initialism">Caveat Emptor</abbr> and <abbr title="Seller Take Care" class="initialism">Caveat Venditor</abbr> apply.</p> 
                    <p><em>IntrigueCon does not endorse nor will be involved directly with any transactions.</em></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection