{{--<header>--}}
    {{--<div class="small-top">--}}
        {{--<div class="container">--}}
            {{--<div class="col-lg-5 date-sec hidden-sm-down">--}}
                {{--<iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="http://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=333333&aj_time=yes&font_size=12&line_brake=0&api=7000y3g066" width="334" height="22"></iframe>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3 offset-lg-2">--}}
                {{--<div class="social-icon">   <a target="_blank" href="#" class=" fa fa-facebook"></a>--}}
                    {{--<a target="_blank" href="#" class=" fa fa-twitter"></a> </a>--}}
                    {{--<a target="_blank" href="#" class=" fa fa-youtube"></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="top-head left">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-lg-4">--}}
                    {{--<img src="{{asset('images/toplogo.png')}}">--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-5 offset-lg-3 admin-bar hidden-sm-down">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</header>--}}
{{--<nav class="navbar top-nav">--}}
    {{--<div class="container">--}}
        {{--<button class="navbar-toggler hidden-lg-up " type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"> &#9776; </button>--}}
        {{--<div class="collapse navbar-toggleable-md" id="exCollapsingNavbar2"> <a class="navbar-brand" href="#">Responsive navbar</a>--}}
            {{--<ul class="nav navbar-nav ">--}}
                {{--<li class="nav-item active"> <a class="nav-link" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a> </li>--}}
                {{--@foreach($categories as $category)--}}
                {{--<li class="nav-item"> <a class="nav-link" href="/news/category/{{$category->id}}">{{$category->categoryName}}</a> </li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
            {{--<form class="pull-xs-right">--}}
                {{--<div class="search">--}}
                    {{--<input type="text" class="form-control" maxlength="64" placeholder="Search" />--}}
                    {{--<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=161469201122232';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111602607-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-111602607-1');
</script>


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
                                @foreach($categorylist as $categorylist)
                                    <li > <a href="/news/category/{{$categorylist->id}}">{{$categorylist->categoryName}}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1)=='lekh' ? 'active' : '' }}">
                            <a href="{{route('articles')}}">विचार</a>
                        </li>
                        <li class="dropdown {{ Request::segment(1)=='local' ? 'active' : '' }}">
                            <a href="#">स्थानीय तह<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($vdclist as $vdc)
                                    <li > <a href="/local/{{$vdc->id}}">{{$vdc->vdcName}}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1)=='directories' ? 'active' : '' }}">
                            <a href="{{route('directories')}}">डाइरेक्टरी</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">प्रवास<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($overseaslist as $overs)
                                    <li > <a href="/overseas/{{$overs->id}}">{{$overs->ocountry}}</a> </li>
                                @endforeach
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
