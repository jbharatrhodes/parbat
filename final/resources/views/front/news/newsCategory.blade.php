{{--<!DOCTYPE html>--}}
{{--<html lang="eng">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta name="description" content="">--}}
    {{--<meta name="author" content="">--}}
    {{--<title>{{$categoryName[0]->categoryName}}</title>--}}
    {{--<!--Bootstrap core CSS-->--}}
    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}

    {{--<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
    {{--<!-- Custom styles for this template -->--}}
    {{--<link href="{{ asset('css/custom.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/responsive-style.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/weather-icons.min.css') }}" rel="stylesheet">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />--}}
    {{--<link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/loaders.css') }}"/>--}}
    {{--<style></style>--}}
{{--</head>--}}
{{--<body>--}}

{{--@include('front.includes.header')--}}
{{--<section class="section-01">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 col-md-12" >--}}
                {{--<div class="catTitle">{{$categoryName[0]->categoryName}}</div>--}}
                {{--@foreach($mainNews1 as $mainnews)--}}
                {{--<div class="col-lg-12" style="padding: 5px 0px 10px 0px; margin-bottom: 5px; border-bottom: 2px solid #5e5e5e;">--}}

                        {{--<div class="col-lg-4">--}}
                            {{--<img class="img-fluid" src="{{asset($mainnews->feature)}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-8">--}}
                            {{--<div class="card-block">--}}
                                {{--<div class="news-title"><a href="{{route('news.newsDetail', ['id'=>$mainnews->id])}}">--}}
                                        {{--<h2 class=" title-small">{{$mainnews->newsTitle}}</h2>--}}
                                    {{--</a></div>--}}
                                {{--<div>{{ str_limit(strip_tags($mainnews->newsDesc),$limit = 250, $end = '...') }}</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}




                {{--</div>--}}

                {{--@endforeach--}}
                    {{--{{ $mainNews1->links() }}--}}
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

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="fb:pages" content="554067664928512" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>{{$categoryName[0]->categoryName}}</title>
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
                <div class="col-md-7 col-sm-12 col-xs-12">

                    <div class="detailTitleSection">
                        {{$categoryName[0]->categoryName}}
                    </div>
                    @foreach($mainNews1 as $mainnews)

                            <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="h4Heading">
                                <a href="{{route('news.newsDetail', ['id'=>$mainnews->id])}}">{{$mainnews->newsTitle}}</a>
                            </div>
                            <div class="media-body">
                                <p>
                                    {{ str_limit(strip_tags($mainnews->newsDesc),$limit = 250, $end = '...') }}
                                </p>
                            </div>

                        </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                            <a href="{{route('news.newsDetail', ['id'=>$mainnews->id])}}">
                                <img src="../../{{$mainnews->feature_small}}" alt="{{$mainnews->newsTitle}}">
                            </a>
                        </div>
                    @endforeach
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        {{ $mainNews1->links() }}
                    </div>


                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                Upcoming Events
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

