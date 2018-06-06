<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="fb:pages" content="554067664928512" />
    <meta property="fb:use_automatic_ad_placement" content="enable=true ad_density=default">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>{{$newsFull[0]->newsTitle}}</title>
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
{{--<section class="section-01">--}}
    {{--<div class="container">--}}
        {{--<div class="col-lg-8 col-md-12">--}}
        {{--<div class="row">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-block">--}}

                                            {{--<h2 class=" title-small">{{$newsFull[0]->newsTitle}}</h2>--}}

                                    {{--<img class="img-fluid" src="../../{{$newsFull[0]->feature}}" alt="{{$newsFull[0]->newsTitle}}">--}}
                                    {{--<div>{!! $newsFull[0]->newsDesc!!}</div>--}}
                                        {{--</div>--}}
                                {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<aside class="col-lg-4 side-bar col-md-12">--}}

            {{--</aside>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}


{{--@include('front.includes.footer')--}}


        {{--<!-- Bootstrap core JavaScript--}}
    {{--================================================== -->--}}
{{--<!-- Placed at the end of the document so the pages load faster -->--}}
{{--<script src="{{ asset('js/library/jquery.min.js')}}"></script>--}}
{{--<script src="{{ asset('js/library/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{ asset('js/library/core.js')}}"></script>--}}
{{--<script src="{{ asset('js/library/lightbox-plus-jquery.min.js')}}"></script>--}}

{{--</body>--}}
{{--</html>--}}

<main>
    <section class="well well2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12" style="margin-top:0px; padding:10px;">

                    <div class="detailTitleSection">
                        {{$newsFull[0]->newsTitle}}
                    </div>
                    <div class="col-md-12" style="margin-bottom:5px;">

                        <i class="fa fa-pencil" aria-hidden="true"></i> {{$newsFull[0]->newsBy}} &nbsp; &nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> {{$newsFull[0]->created_at ->diffForHumans()}} &nbsp; &nbsp; <i class="fa fa-eye" aria-hidden="true"></i> {{$newsFull[0]->views}}
                    </div>

                                <img src="../../{{$newsFull[0]->feature}}" alt="{{$newsFull[0]->newsTitle}}">

                            <div class="media-body" style="padding-top: 20px; margin-bottom:15px;">

                                    {!! $newsFull[0]->newsDesc!!}
                            </div>
                           <div style="margin-top: 20px;">
                               <i class="fa fa-external-link-square" aria-hidden="true"></i> {{$newsFull[0]->source}}
                           </div>
                    <script>document.write('<div class="fb-comments" data-href="'+location.href+'" data-numposts="5"></div>');</script>

                </div>

                @if($newsVdc)
                <div class="col-md-4 col-sm-6 col-xs-12" style="background: #f5f5f5;
    padding: 10px;
    margin-bottom: 10px;">


                        <div class="detailRightSide">
                            <div class="detailh3"> सम्बन्धित समाचार ({{$vdcname[0]->vdcName}} )</div>
                        </div>
                        @foreach($newsVdc as $article)

                            <div>
                                <div class="h4Heading">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    <a style="color: #2964a0" href="{{route('news.newsDetail', ['id'=>$article->id])}}">{{$article->newsTitle}}</a> &nbsp;
                                    <i class="fa fa-eye" aria-hidden="true"></i> {{$article->views}}
                                </div>
                            </div>

                        @endforeach
                </div>
                    @elseif($newsOverseas )
                    <div class="col-md-4 col-sm-6 col-xs-12" style="background: #f5f5f5;
    padding: 10px;
    margin-bottom: 10px;">


                        <div class="detailRightSide">
                            <div class="detailh3"> सम्बन्धित समाचार  ( {{$countryname[0]->ocountry}} )</div>
                        </div>
                        @foreach($newsOverseas as $article1)

                            <div>
                                <div class="h4Heading">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    <a style="color: #2964a0" href="{{route('news.newsDetail', ['id'=>$article1->id])}}">{{$article1->newsTitle}}</a>
                                    &nbsp; <i class="fa fa-eye" aria-hidden="true"></i> {{$article1->views}}
                                </div>
                            </div>

                        @endforeach
                    </div>

                    @endif
                <div class="col-md-4 col-sm-6 col-xs-12" style="background: #f5f5f5;
    padding: 10px;
    margin-bottom: 10px;">


                    <div class="detailRightSide">
                        <div class="detailh3"> सम्बन्धित समाचार ( {{$categoryname[0]->categoryName}})</div>
                    </div>
                    @foreach($newsCategory as $catnews)

                        <div>
                            <div class="h4Heading">
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                <a style="color: #2964a0" href="{{route('news.newsDetail', ['id'=>$catnews->id])}}">{{$catnews->newsTitle}}</a>
                                &nbsp; <i class="fa fa-eye" aria-hidden="true"></i> {{$catnews->views}}
                            </div>
                        </div>

                    @endforeach
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
