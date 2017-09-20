@extends('layouts.app')

@section('content')


    <!-- container -->
	<div class="container">
    <h1>An Intriguing Fiasco</h1>
    <p>A new addition to the convention is the creation of a Fiasco playset based around time travel.  
        On the days of the convention, we will have poster paper up on the walls for IConners to jot 
        down their ideas.  Once the playset has been compiled, it will be made available for play on 
        Sunday, and as a PDF on the website for posterity.</p>
      
      <p>Fiasco playsets are organised around lists of Relationships, Needs, Objects, and Locations. 
         These four categories are further divided into six groups of six items. The items within each 
         group give meat to the bare bones of Fiasco’s rules and together they generate a dramatic 
         situation around which the game is based. </p>
      
      <p>Because of a combination of the randomness of a dice roll and by choosing different 
        combinations of these items, the playset can be used multiple times to create completely 
        new stories with completely different tones. </p>
      
      <p>Good news! I’ve already started on our Intriguing Fiasco playset:</p>
        <br>

      <!--  categories  -->
	  <div class="panel-group" id="playset">

        <!-- relationships -->
		<div class="panel panel-default">
			<div class="panel-heading playset-heading">
				<a class='accordion-toggle' data-toggle="collapse" data-parent="#playset" href="#relationships">
					<span style='display: inline-block; width:100%'>
                        <h4 class="panel-title">
                            <strong>Relationships</strong>
                        </h4>
                    <span>
				</a>
			</div>
		  
			<div id="relationships" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class='row'>

						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default ">
								<div class="panel-body">
									<ul class="list-unstyled">
										<li class='bottom-margin'><img src="img/dice/dice1w.png" height="20" width="20"><span class='dice-text'><strong>Romance</strong></span></li>
										<li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>Time-crossed lovers</span></li>
										<li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>Bitter ex’s</span></li>
										<li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default">
								<div class="panel-body">
									<ul class="list-unstyled">
										 <li class='bottom-margin'><img src="img/dice/dice2w.png" height="20" width="20"><span class='dice-text'><strong>The Agency</strong></span></li>
										 <li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>Boss and underling</span></li>
										 <li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>Odd-couple partners</span></li>
										 <li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
		
		<!--  needs  -->
		<div class="panel panel-default">
			<div class="panel-heading playset-heading">
				<a data-toggle="collapse" data-parent="#playset" href="#needs">
					<h4 class="panel-title">
						<strong>Needs</strong>
					</h4>
				</a>
			</div>
		  
			<div id="needs" class="panel-collapse collapse">
				<div class="panel-body">
					<div class='row'>

						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default ">
								<div class="panel-body">
									<ul class="list-unstyled">
										<li class='bottom-margin'><img src="img/dice/dice1w.png" height="20" width="20"><span class='dice-text'><strong>To Get Rich</strong></span></li>
										<li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>By stealing Da Vinci’s notebooks</span></li>
										<li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>By betting on the 2045 Stanley Cup Finals</span></li>
										<li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default">
								<div class="panel-body">
									<ul class="list-unstyled">
										 <li class='bottom-margin'><img src="img/dice/dice2w.png" height="20" width="20"><span class='dice-text'><strong>To restore the timeline</strong></span></li>
										 <li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>By helping Napoleon win the Battle of Austerlitz</span></li>
										 <li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>By stealing the Holy Grail</span></li>
										 <li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
		
		<!--  locations  -->
		<div class="panel panel-default">
			<div class="panel-heading playset-heading">
				<a data-toggle="collapse" data-parent="#playset" href="#locations">
					<h4 class="panel-title">
						<strong>Locations</strong>
					</h4>
				</a>
			</div>
		  
			<div id="locations" class="panel-collapse collapse">
				<div class="panel-body">
					<div class='row'>

						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default ">
								<div class="panel-body">
									<ul class="list-unstyled">
										<li class='bottom-margin'><img src="img/dice/dice1w.png" height="20" width="20"><span class='dice-text'><strong>Agency HQ</strong></span></li>
										<li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>The Gadget Lab</span></li>
										<li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>The Breakroom</span></li>
										<li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default">
								<div class="panel-body">
									<ul class="list-unstyled">
										 <li class='bottom-margin'><img src="img/dice/dice2w.png" height="20" width="20"><span class='dice-text'><strong>The Ancient Past</strong></span></li>
										 <li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>Pompey’s theatre, Rome in 44 BCE</span></li>
										 <li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>The White Horse Temple, Luoyong in 190 CE</span></li>
										 <li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
		
        <!--  objects  -->
		<div class="panel panel-default">
			<div class="panel-heading playset-heading">
				<a data-toggle="collapse" data-parent="#playset" href="#objects">
					<h4 class="panel-title">
						<strong>Objects</strong>
					</h4>
				</a>
			</div>
		  
			<div id="objects" class="panel-collapse collapse">
				<div class="panel-body">
					<div class='row'>

						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default ">
								<div class="panel-body">
									<ul class="list-unstyled">
										<li class='bottom-margin'><img src="img/dice/dice1w.png" height="20" width="20"><span class='dice-text'><strong>Secrets</strong></span></li>
										<li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>Who killed JFK</span></li>
										<li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>What happened to John Cabot</span></li>
										<li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default">
								<div class="panel-body">
									<ul class="list-unstyled">
										 <li class='bottom-margin'><img src="img/dice/dice2w.png" height="20" width="20"><span class='dice-text'><strong>Valuables</strong></span></li>
										 <li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>The Declaration of Independence</span></li>
										 <li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>The synthaphone of Felipa de la Wong</span></li>
										 <li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
		
		

      </div>
	  <!-- end of categories  -->
	  
	<p>In addition to the usual Fiasco groups as shown above, our playset will have a unique list - TIME MACHINES.  Normally during a Fiasco game, all the players will roll 4 dice, assemble them in the centre of the table, and the player from the smallest home town goes first.  For our game, to start, the oldest and youngest player will roll one die each and use these two to select the game’s time machine.  The younger player will select the group while the older player selects the item from that group.</p>
	
	 <!--  categories  -->
	<div class="panel-group" id="tardis">

        <!-- vehicles -->
		<div class="panel panel-default">
			<div class="panel-heading playset-heading">
				<a data-toggle="collapse" data-parent="#tardis" href="#timemachines">
					<h4 class="panel-title">
						<strong>Time Machines</strong>
					</h4>
				</a>
			</div>
		  
			<div id="timemachines" class="panel-collapse collapse">
				<div class="panel-body">
					<div class='row'>

						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default ">
								<div class="panel-body">
									<ul class="list-unstyled">
										<li class='bottom-margin'><img src="img/dice/dice1w.png" height="20" width="20"><span class='dice-text'><strong>Vehicles</strong></span></li>
										<li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>A 1974 Bricklin SV-1</span></li>
										<li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>A Starship</span></li>
										<li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										<li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class='col-sm-6 col-md-4 bottom-margin'>
							<div class="panel panel-default">
								<div class="panel-body">
									<ul class="list-unstyled">
										 <li class='bottom-margin'><img src="img/dice/dice2w.png" height="20" width="20"><span class='dice-text'><strong>Objects</strong></span></li>
										 <li class='left-margin'><img src="img/dice/dice1.png" height="20" width="20"><span class='dice-text'>A phone box</span></li>
										 <li class='left-margin'><img src="img/dice/dice2.png" height="20" width="20"><span class='dice-text'>A washing machine</span></li>
										 <li class='left-margin'><img src="img/dice/dice3.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice4.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice5.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
										 <li class='left-margin'><img src="img/dice/dice6.png" height="20" width="20"><span class='dice-text'><em>To be determined</em></span></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
		
	</div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>




@endsection