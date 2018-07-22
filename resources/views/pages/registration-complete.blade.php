@extends('layouts.app')

@section('content')

<div class="container">
        <h2>Registration Complete</h2>
            <div class="row">
                <div class="col-xs-12">

                        <div class=" jumbotron fall-register">
                                <div class='row'>
                                    
                                    <div class='col text-center '>
                                        <div class="logo">
                                            Intrigue<span class='con'>Con</span> Fall 2018
                                        </div>
                                        <div class="date">
                                            Oct 12 - 14th
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        <br>
                        <h3>You are now registered </h3>
        
                    <p>You will receive a confirmation email from our registrar within 24 hours. If you do not receive a confirmation email within 24 hours  please contact us at intrigue@hazardgaming.com.</p>
                    <p>We'll send you an email when the games are on the scheduled, then you'll be ready to sign up for games.</p>
                    <br>
                    <h4>GameMasters</h4>
                    <p>If you are interested in running a game, lets us know by going <a href="/submit-game">here</a> and submitting a game. We'll be in touch with you for scheduling.</p>

                    <div class="text-center">

                            <a href="/submit-game" class=" btn btn-primary btn-sm">Submit A Game</a>
                    </div>
                    
                </div>
            </div>
        
        </div>
        @endsection