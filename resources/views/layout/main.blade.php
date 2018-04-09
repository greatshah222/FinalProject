<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','Read Application')
    </title>
    <link rel="stylesheet" type="text/css"
          href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css">
    <script type='text/javascript'
            src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

</head>
<body>

<div  class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">




            <a href="{{ url('/') }}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                READ-LIBRARY
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{url('books')}}">
                    Books
                </a>
            </li>
            <li>
                <a href="#">
                    News & Magazine
                </a>
            </li>

            <li><a href="{{url('aboutus')}}"></i> Services</a></li>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    MY COLLECTION
                    <span class="alert badge">
                                4
                            </span>
                </a>
            </li>
            @if (Route::has('login'))
                    @auth
                      <li>  <a href="{{ url('/home') }}">{{Auth::user()->name}}</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                </div>
            @endif






        </ol>
    </div>
</div>


@yield('content')


<!-- Footer -->
<br>

<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <h5>About us</h5>
            <ul class ="footer-links">
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Reviews</a></li>
            </ul>            </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <h5>Read Application</h5>
            <ul class ="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sign up</a></li>
                <li><a href="#">Login</a></li>
            </ul>            </div>

        <div class="small-12 medium-4 large-4 columns">
            <i class="fas fa-eye"></i>
            <h5>Follow  Us</h5>
            <ul class="footer-links">
                <li><a href="https://github.com/greatshah222/FinalProject">GitHub</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="https://twitter.com/Bishals04777429">Twitter</a></li>
                <ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>



</body>
</html>


