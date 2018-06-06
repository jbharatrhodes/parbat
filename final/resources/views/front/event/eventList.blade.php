<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Events</title>
    <link href="{{ asset('assets/css/owl-carousel.css')}}" rel="stylesheet">
    <!-- Bootstrap -->

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">


    <!-- Links -->
    <link rel="stylesheet" href="{{asset('assets/css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/google-map.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.bxslider.min.css')}}">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">


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

@include('front.includes.header')

<main>
    <section class="well well2">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12">

                    <div class="detailTitleSection">
                        Upcoming Events
                    </div>
                    @foreach($event as $ev)

                        <div style="clear: both; border-bottom: 2px solid #ccc;">

                                <div class="col-md-4 col-sm-6 col-xs-12" style="background:#103561;">
                                    <div style="color:white; padding:2px 10px;">{{Carbon\Carbon::parse($ev->eventDate)->format('M')}}</div>
                                    <div style="color:white; padding:2px 10px;font-weight: bold;font-size: 1.5em; margin-top: -0.9em;">{{Carbon\Carbon::parse($ev->eventDate)->format('d')}}</div>
                                    <div style="color:white; padding:2px 10px; margin-top: -0.9em;">{{Carbon\Carbon::parse($ev->eventDate)->format('Y')}}</div>

                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                @if($ev->eventDate < \Carbon\Carbon::now())
                                    <a href="{{route('events.eventDetail', ['id'=>$ev->id])}}"><div class="h4Heading" style="text-decoration:line-through">{{$ev->eventName}}</div> (समाप्त भयो)</a>
                                @else
                                    <a href="{{route('events.eventDetail', ['id'=>$ev->id])}}"><div class="h4Heading">{{$ev->eventName}}</div></a>

                                @endif

                                <div>{{$ev->eventLocation}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-12 col-sm-6 col-xs-12">
                        {{ $event->links() }}
                    </div>


                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fb-page" data-href="https://www.facebook.com/parbatnepaldotcom/" data-width="270"  data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/parbatnepaldotcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/parbatnepaldotcom/">ParbatNepal.com</a></blockquote></div>
                </div>
            </div>
        </div>
    </section>

</main>

<!--========================================================
                        FOOTER
=========================================================-->
@include('front.includes.footer')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/tm-scripts.js')}}"></script>

</body>
</html>

