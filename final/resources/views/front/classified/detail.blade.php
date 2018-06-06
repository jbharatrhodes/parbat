<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <meta name=”description” content=”{{ str_limit(strip_tags($classifiedDetail[0]->dInfo),$limit = 150, $end = '...') }}”>
    <meta name="keywords" content="{{$classifiedDetail[0]->dTitle}}">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>{{$classifiedDetail[0]->dTitle}}</title>
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
@include('front.includes.header')

<main>
    <section class="well well2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12" style="margin-top:0px; padding:10px;">

                    <div class="detailTitleSection" style="background:#01568c; color:#fff; width: 50%; padding:2px 10px;">
                        {{$classifiedDetail[0]->dTitle}}
                    </div>
                    <div class="col-md-4">
                        <img src="../../{{$classifiedDetail[0]->dImage}}" alt="{{$classifiedDetail[0]->dTitle}}">
                        <div style="background: rgba(231, 231, 255, 0.98); padding:10px;">
                            {{$classifiedDetail[0]->dLocation}}
                            <hr>
                            <i class="fa fa-phone fa-2x"></i> : {{$classifiedDetail[0]->dPhone}}
                              <hr>
                            <i class="fa fa-envelope fa-2x"></i> : {{$classifiedDetail[0]->dEmail}}
                            <hr>
                            <i class="fa fa-globe fa-2x"></i> : {{$classifiedDetail[0]->dWebsite}}
                            <hr>
                            <a href="http://{{$classifiedDetail[0]->dFacebook}}" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>



                        </div>

                    </div>
                    <div class="col-md-8" style="padding:5px;">
                        {!!$classifiedDetail[0]->dInfo!!}
                    </div>

                </div>


                <div class="col-md-4 col-sm-12" style="background: #f5f5f5;
    padding: 10px;
    margin-bottom: 10px;">

                    <div class="col-md-6">

                            <div class="detailRightSide">
                                <div class="detailh3"> Related </div>
                            </div>
                        @if(empty($similarCat))
                            Not found
                        @elseif(!empty($similarCat))
                            @foreach($similarCat as $sc)
                                <div class="h4Heading">
                                    <a href="{{route('classified.detail', ['id'=>$sc->id])}}"> {{$sc->dTitle}}</a>
                                </div>
                            @endforeach
                        @endif

                    </div>

                    <div class="col-md-6">
                        <div class="fb-page" data-href="https://www.facebook.com/parbatnepaldotcom/" data-width="270"  data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/parbatnepaldotcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/parbatnepaldotcom/">ParbatNepal.com</a></blockquote></div>
                    </div>

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
