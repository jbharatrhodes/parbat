<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Page Not Found</title>
    <link href="{{ asset('assets/css/owl-carousel.css')}}" rel="stylesheet">
    <!-- Bootstrap -->

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="{{asset('assets/css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/google-map.css')}}">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">


    <!--JS-->
    <!--JS-->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    {{--<script src="{{asset('assets/js/rd-smoothscroll.min.js')}}"></script>--}}


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="{{asset('assets/js/html5shiv.js')}}"></script>
    <![endif]-->
    <script src="{{asset('assets/js/device.min.js')}}"></script>
</head>
<body>
<header>
    <div class="container top-sect">
        <div class="navbar-header">
            <img src="{{asset('images/toplogo.png')}}">
        </div>
        <div class="help-box text-right">
            <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="http://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=333333&aj_time=yes&font_size=12&line_brake=0&api=7000y3g066" width="334" height="22"></iframe>
        </div>
    </div>
    <div id="stuck_container" class="stuck_container">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top pull-left">

                <div class="">
                    <ul class="nav navbar-nav sf-menu" data-type="navbar">
                        <li class="{{ Request::segment(1)=='' ? 'active' : '' }}">
                            <a href="{{route('main')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        <li class="{{ Request::segment(1)=='news/category/7' ? 'active' : '' }}">
                            <a href="{{route('mainnews')}}">मुख्य खबर</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">समाचार<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>
                        <li class="{{ Request::segment(1)=='lekh' ? 'active' : '' }}">
                            <a href="{{route('articles')}}">विचार</a>
                        </li>
                        <li class="dropdown {{ Request::segment(1)=='local' ? 'active' : '' }}">
                            <a href="#">स्थानीय तह<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>
                        <li class="{{ Request::segment(1)=='directories' ? 'active' : '' }}">
                            <a href="{{route('directories')}}">डाइरेक्टरी</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">प्रवास<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>
                        <li class="{{ Request::segment(1)=='events' ? 'active' : '' }}">
                            <a href="{{route('events')}}">इभेन्ट्स</a>
                        </li>
                        <li class="{{ Request::segment(1)=='classified' ?  'active' : '' }}">
                            <a href="{{route('classified')}}">वर्गीकृत </a>
                        </li>
                        <li class="{{ Request::segment(1)=='contact' ? 'active' : '' }}">
                            <a href="{{route('contact')}}">सम्पर्क</a>
                        </li>


                    </ul>
                </div>
            </nav>
            <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                <label class="search-form_label">
                    <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
                    <span class="search-form_liveout"></span>
                </label>
                <button class="search-form_submit fa-search" type="submit"></button>
            </form>

        </div>

    </div>

</header>

<main>
    <section class="well well2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12" style="margin:30px; padding:10px;">
                    Sorry Page not found
                   </div>
            </div>
        </div>
    </section>
</main>

<!--========================================================
                        FOOTER
=========================================================-->
<footer class="top-border" >
    <section class="well1" style="background-color: #01568c; padding:20px;color:#fff;">
        <div class="container">

        </div>
    </section>
    <p class="rights">
        Parbat Nepal  &#169; <span id="copyright-year"></span>
    </p>
</footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/tm-scripts.js')}}"></script>

</body>
</html>
