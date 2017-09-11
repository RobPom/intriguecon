<footer class="footer">
    <div class="container">
      <div class="row">
            <div class="col-sm-4">
                <ul class="list-inline">
                    <li><a href="https://www.facebook.com/groups/663587420414716/" class="social-facebook"></a></li>
                    <li><a href="#" class="social-google"></a></li>
                    <li><a href="https://twitter.com/intriguecon" class="social-twitter"></a></li>
                </ul>
              
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <ul class="list-unstyled ">                    
                    <li class="footer-menu"><a href="/about">About Us</a><br></li>
                    <li class="footer-menu"><a href="/code-of-conduct">Code of Conduct</a></li>
                    @if (Auth::guest())
                        <li class="footer-menu"><a href="{{ route('login') }}">Login</a></li>
                    {{--   <li><a href="{{ route('register') }}">Register</a></li>  --}}
                    @else
                        <li class="footer-menu"><a href="/dashboard">Dashboard</a></li>
                        <li class="footer-menu"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </ul>
            </div>
        </div>
    </div>


     
</footer>