<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>{{$articleDetail[0]->articleTitle}}</title>
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

                    <div class="detailTitleSection">
                        {{$articleDetail[0]->articleTitle}}
                    </div>
                    <div class="col-md-12" style="margin-bottom:5px;">

                        <i class="fa fa-pencil" aria-hidden="true"></i> {{$articleDetail[0]->articleWriter}} &nbsp; &nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> {{$articleDetail[0]->created_at ->diffForHumans()}}
                    </div>

                                {{--<img src="../../{{$newsFull[0]->feature}}" alt="{{$newsFull[0]->newsTitle}}">--}}

                            <div class="col-md-3">
                                <img src="../../{{$articleDetail[0]->articlePhoto}}" alt="{{$articleDetail[0]->articleTitle}}">
                            </div>
                            <div class="col-md-9" style="background: #8c8c8c; color:#000; font-weight: bold; padding: 10px;">
                                {{$articleDetail[0]->articleWriterInfo}}
                            </div>

                    <div class="col-md-12" >
                            <div class="media-body" style="padding-top: 20px; margin-bottom:15px;">

                                    {!!$articleDetail[0]->articleDesc!!}
                            </div>
                        </div>
                    {{--<i class="fa fa-external-link-square" aria-hidden="true"></i> {{$newsFull[0]->source}}--}}
                {{--</div><div style="margin-top: 20px;">--}}
                           {{----}}
                    {{--<script>document.write('<div class="fb-comments" data-href="'+location.href+'" data-numposts="5"></div>');</script>--}}

                </div>


                <div class="col-md-4 col-sm-6 col-xs-12" style="background: #f5f5f5;
    padding: 10px;
    margin-bottom: 10px;">




                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="op-ad">
                        <iframe width="300" height="250" style="border:0; margin:0;" src="https://www.facebook.com/adnw_request?placement=188503451767757_188512795100156&adtype=banner300x250"></iframe>
                    </figure>
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
