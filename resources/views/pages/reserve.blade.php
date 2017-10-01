@extends('layouts.app')

@section('content')


<div class="container">
<h2>Register Now!</h2>
    <div class="row">
        <div class="col-xs-12">
            <p>Convention passes available for $30</p>
            
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
    <div class="row">
        <div class="col-xs-12">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="T965A2MF7PXNW">
                <input type="image" src="img/paypal.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
            </form>
        </div>
    </div>
</div>
@endsection







  


  