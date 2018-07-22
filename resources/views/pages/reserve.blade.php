@extends('layouts.app')

@section('content')


<div class="container">
<h2>Register Now!</h2>

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
                
                <h3>Early Bird Registration</h3>
                <p>Early bird registration is now open. Get your three day pass and save $5 by registering early. Once the games are scheduled, you'll be among the first to reserve your seat at the tables.</p>
                <br>
                <h3>Looking to host a game?</h3>
                <p>If you are interested in running a game, after registering, we'll send you instructions on how to submit and schedule a game for the con.</p>

                <hr>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="UQUE4TAZLFLFE">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Number of Attendees">Number of Attendees</td></tr><tr><td><select name="os0">
                        <option value="One person">One person $30.00 CAD</option>
                        <option value="Two people">Two people $60.00 CAD</option>
                        <option value="Three people">Three people $90.00 CAD</option>
                    </select> </td></tr>
                    </table>
                    <br>
                    <input type="hidden" name="currency_code" value="CAD">
                    <input type="image" src="img/paypal.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
                    </form>
 
        </div>
    </div>
   <!--   <div class="row">
        <div class="col-xs-12">
            <br>
            <h3>Early Bird Registration</h3>

            <p>A few spots are still open and <em>may</em> be available for purchase at the door!</p>
               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="X8M7M5HNKNFKY">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Number of Attendees">Number of Attendees</td></tr><tr><td><select name="os0">
                        <option value="One person">One person $20.00 CAD</option>
                        <option value="Two people">Two people $40.00 CAD</option>
                        <option value="Three people">Three people $60.00 CAD</option>
                    </select> </td></tr>
                    </table>
                    <br>
                    <input type="hidden" name="currency_code" value="CAD">
                    <input type="image" src="img/paypal.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
                    </form>
 
        </div>
    </div>-->
    <!-- <hr>
    <div class="row">
        <div class="col-xs-12">
            <h3>Children's Session</h3>
            <p>We are hosting a Children's open game session running all day Saturday! </p>
            <p>For $15 This registration option entitles one child to play at a continuous (join in any time) D&D table running from 10am until 7pm on Saturday</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="JETT3SP6C6R9E">
                <input type="image" src="img/paypal.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <p>You will receive a confirmation email from our registrar within 24 hours after registering. 
            The confirmation email will have additional instructions on how to sign up for games.</p>
            <p>If you do not receive a confirmation email within 24 hours please contact us at intrigue@hazardgaming.com.</p>
        </div>
    </div>
    <br><br> -->
</div>
@endsection







  


  