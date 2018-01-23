@extends('layouts.app')

@section('content')


<div class="container">
<h2>Register Now!</h2>
    <div class="row">
        <div class="col-xs-12">

                <h1 class="display-3" >Intrigue <span style="color:yellow">Spring Mini Con</span>
                </h1>

            <p>Only $20 for both days!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>Payment Instructions</h3>
            <ul class="list-unstyled">
                <li style="padding:10px;"><strong>1. Click the Pay Pal button below.</strong>
                <p>This takes you to our PayPal shopping cart.</p>
                <li style="padding:10px;"><strong>2. Select the number of registrations.</strong>
                <li style="padding:10px;"><strong>3. Wait for confirmation.</strong>
                <p>You will receive a confirmation email from our registrar within 24 hours. 
                The confirmation email will have additional instructions on how to sign up for games.</p>
              <p>If you do not receive a confirmation email within 24 hours  please contact us at  intrigue@hazardgaming.com.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
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
                    <br>
            <!-- <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="T2D6W8S2BJ4R6">
                <input type="image" src="img/paypal.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
            </form> -->
        </div>
    </div>
</div>
@endsection







  


  