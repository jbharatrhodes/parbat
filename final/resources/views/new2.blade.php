<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="fb:pages" content="554067664928512" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <meta name=”description” content="News of Parbat district as it happens and includes the news about Global parbat and also information about Business of Parbat">
    <meta name="keywords" content="Parbat district, parbat Nepal, Parbat News, News of Parbat, Information about Parbat, Bihadi VDC">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>ParbatNepal.com--->Globalising Parbat</title>
    <link href="{{ asset('assets/css/owl-carousel.css')}}" rel="stylesheet">
    <!-- Bootstrap -->

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

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
<div class="page">


    @include('front.includes.header')

    <main>
        <section class="well well1" style="background:#159eef38">
            <div class="container" >
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="h2Heading" style="color:#0A2E61;font-weight: bold; font-size: 19px;">
                            अन्तराष्ट्रिय पर्वत समाज च्यारिटी कार्यक्रम बिशेष
                        </div>
                            <div class="row offs3 row10">
                                @foreach($charityNews as $charitynews)
                                    <div class="col-md-3 col-sm-12 col-xs-12">

                                        <a href="{{route('news.newsDetail', ['id'=>$charitynews->id])}}">
                                            <img class="" src="{{$charitynews->feature_small}}" alt="{{$charitynews->newsTitle}}">
                                            <span class='thumb_overlay'></span>

                                            <div class="h4Heading">

                                                {{$charitynews->newsTitle}}

                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="well well1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12" style="background:#f5f5f5">
                        <div class="h2Heading">
                            {{$firstHeading[0]->categoryName}}
                        </div>

                        <div class="col-md-7 col-sm-12">
                            <div class="h3Heading">
                                <a href="{{route('news.newsDetail', ['id'=>$mainNews[0]->id])}}">{{$mainNews[0]->newsTitle}}</a>
                            </div>
                            <div class="media-body">
                                <p>
                                    {{ str_limit(strip_tags($mainNews[0]->newsDesc),$limit = 200, $end = '...') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <a href="{{route('news.newsDetail', ['id'=>$mainNews[0]->id])}}">
                                <img src="{{$mainNews[0]->feature_medium}}" alt="{{$mainNews[0]->newsTitle}}">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="row offs3 row10">
                                @foreach($mainNews1 as $mainnews1)
                                    <div class="col-md-4 col-sm-12 col-xs-12">

                                        <a href="{{route('news.newsDetail', ['id'=>$mainnews1->id])}}">
                                            <img class="" src="{{$mainnews1->feature_small}}" alt="{{$mainnews1->newsTitle}}">
                                        <span class='thumb_overlay'></span>

                                    <div class="h4Heading">

                                          {{$mainnews1->newsTitle}}

                                    </div>
                                        </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bxslider">
                        @foreach($firstSlider as $slider)

                            <li> <a href="{{route('news.newsDetail', ['id'=>$slider->id])}}">
                                    <img src="{{$slider->feature}}" title="{{$slider->newsTitle}}" style="height:330px;"/>
                            </a></li>
                        @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <section class="well well2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12" style="background:#f5f5f5">

                        <div class="titleSection">
                            {{$prabashHeading[0]->categoryName}}
                        </div>

                        <div class="col-md-7 col-sm-12">
                            @foreach($prabashMainNews as $prabashnews)
                                <a href="{{route('news.newsDetail', ['id'=>$prabashnews->id])}}">
                                    <img src="{{$prabashnews->feature_medium}}" alt="{{$prabashnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$prabashnews->id])}}">{{$prabashnews->newsTitle}}</a>
                                </div>
                                <div class="media-body">
                                    <p>
                                        {{ str_limit(strip_tags($prabashnews->newsDesc),$limit = 350, $end = '...') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-5 col-sm-12">

                            @foreach($prabashNews as $pnews)
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    <a href="{{route('news.newsDetail', ['id'=>$pnews->id])}}">
                                        <img src="{{$pnews->feature_medium}}" alt="{{$pnews->newsTitle}}">
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="h4Heading">
                                        <a href="{{route('news.newsDetail', ['id'=>$pnews->id])}}">{{$pnews->newsTitle}}</a>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="titleSection">
                            <i class="fa fa-calendar" aria-hidden="true"></i> इभेन्ट्स
                        </div>

                        @foreach($events as $event)
                                <div class="col-md-12 col-sm-12" style="border-bottom: 2px solid #c0c0c0;">

                            <div class="col-md-2 col-sm-12" style="background:#103561;">
                                <div style="color:white; padding:2px 10px;">{{Carbon\Carbon::parse($event->eventDate)->format('M')}}</div>
                                <div style="color:white; padding:2px 10px;font-weight: bold;font-size: 1.5em; margin-top: -0.9em;">{{Carbon\Carbon::parse($event->eventDate)->format('d')}}</div>
                                <div style="color:white; padding:2px 10px; margin-top: -0.9em;">{{Carbon\Carbon::parse($event->eventDate)->format('Y')}}</div>

                            </div>
                            <div class="col-md-10 col-sm-12">
                                @if($event->eventDate < \Carbon\Carbon::now())
                                    <a href="{{route('events.eventDetail', ['id'=>$event->id])}}"><div class="h4Heading" style="text-decoration:line-through">{{$event->eventName}}</div> (समाप्त भयो)</a>
                                @else
                                    <a href="{{route('events.eventDetail', ['id'=>$event->id])}}"><div class="h4Heading">{{$event->eventName}}</div></a>

                                @endif

                                  <div>{{$event->eventLocation}}
                                </div>
                            </div>
                                    </div>
                         @endforeach



                        {{--<div class="col-md-6 col-sm-12">--}}
                            {{--<div class="titleSection">--}}
                                {{--{{$tourismHeading[0]->categoryName}}--}}
                            {{--</div>--}}
                            {{--@foreach($tourismNews as $tnews)--}}
                                {{--<a href="{{route('news.newsDetail', ['id'=>$tnews->id])}}">--}}
                                    {{--<img src="{{$tnews->feature_medium}}" alt="{{$tnews->newsTitle}}">--}}
                                {{--</a>--}}
                                {{--<div class="h3Heading">--}}
                                    {{--<a href="{{route('news.newsDetail', ['id'=>$tnews->id])}}">{{$tnews->newsTitle}}</a>--}}
                                {{--</div>--}}

                            {{--@endforeach--}}

                        {{--</div>--}}
                        {{--<div class="col-md-6 col-sm-12">--}}
                            {{--<div class="titleSection">--}}
                                {{--{{$eduHeading[0]->categoryName}}--}}
                            {{--</div>--}}
                            {{--@foreach($eduNews as $enews)--}}
                                {{--<a href="{{route('news.newsDetail', ['id'=>$enews->id])}}">--}}
                                    {{--<img src="{{$enews->feature_medium}}" alt="{{$enews->newsTitle}}">--}}
                                {{--</a>--}}
                                {{--<div class="h3Heading">--}}
                                    {{--<a href="{{route('news.newsDetail', ['id'=>$enews->id])}}">{{$enews->newsTitle}}</a>--}}
                                {{--</div>--}}

                            {{--@endforeach--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </section>
        <section class="well well6" >
            <div class="container">
                <div class="row" style="background:#f5f5f5">
                    <div class="col-md-8 col-sm-12 col-xs-12" >

                        <div class="titleSection">
                            डाइरेक्टरी
                        </div>

                        @foreach($advertise as $ads)
                            <div class="col-md-4 col-sm-12">
                                <img src="{{$ads->dimage_medium}}" alt="{{$ads->dTitle}}">
                                <div class="h3Heading">
                                    {{$ads->dTitle}}
                                </div>
                                <div class="media-body">
                                    {{$ads->dLocation}}
                                    <br>
                                    <a href="{{route('classified.detail', ['id'=>$ads->id])}}" class="btn btn-primary active" role="button" aria-pressed="true">More Detail</a>
                                </div>

                            </div>
                        @endforeach

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="col-md-7 col-sm-12">
                            <div class="titleSection">
                                वर्गीकृत
                            </div>
                            @foreach($classified as $cfs)
                                <div class="col-md-12 col-sm-12">
                                    {{$cfs->dTitle}}
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="titleSection">
                                श्रेणी अनुसार खोज्नुहोस्
                            </div>
                            @foreach($directoryCategory as $dc)
                                <div class="col-md-12" style="">
                                   <span style="color:#011b2e; font-weight:bold; text-decoration:none;font-size:0.99em;">
                                       {{$dc->name}}({{$dc->total}})
                                   </span>
                                </div>


                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="well well3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12" style="background:#f5f5f5">

                        <div class="titleSection">
                            {{$vdcHeading[0]->categoryName}}
                        </div>

                        <div class="col-md-6 col-sm-12">
                            @foreach($vdcMainNews as $vdcnews)
                                <a href="{{route('news.newsDetail', ['id'=>$vdcnews->id])}}">
                                    <img src="{{$vdcnews->feature_medium}}" alt="{{$vdcnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$vdcnews->id])}}">{{$vdcnews->newsTitle}}</a>
                                </div>
                                <div class="media-body">
                                    <p>
                                        {{ str_limit(strip_tags($vdcnews->newsDesc),$limit = 200, $end = '...') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 col-sm-12">

                            @foreach($vdcNews as $vdcnews)
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    <a href="{{route('news.newsDetail', ['id'=>$vdcnews->id])}}">
                                        <img src="{{$vdcnews->feature_medium}}" alt="{{$vdcnews->newsTitle}}">
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="h4Heading">
                                        <a href="{{route('news.newsDetail', ['id'=>$vdcnews->id])}}">{{$vdcnews->newsTitle}}</a>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$interviewHeading[0]->categoryName}}
                            </div>
                            @foreach($interviewNews as $intnews)
                                <a href="{{route('news.newsDetail', ['id'=>$intnews->id])}}">
                                    <img src="{{$intnews->feature_medium}}" alt="{{$intnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$intnews->id])}}">{{$intnews->newsTitle}}</a>
                                </div>
                                <div class="media-body">
                                    <p>
                                        {{ str_limit(strip_tags($intnews->newsDesc),$limit = 190, $end = '...') }}
                                    </p>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                विचार
                            </div>
                            @foreach($articles as $article)
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    <a href="{{route('article.newsDetail', ['id'=>$article->id])}}">
                                        <img src="{{$article->articlePhoto}}" alt="{{$article->articleTitle}}">
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="h4Heading">
                                        <a href="{{route('article.newsDetail', ['id'=>$article->id])}}">{{$article->articleTitle}}</a>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="well well4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$ecoHeading[0]->categoryName}}
                            </div>
                            @foreach($ecoNews as $econ)
                                <a href="{{route('news.newsDetail', ['id'=>$econ->id])}}">
                                    <img src="{{$econ->feature_medium}}" alt="{{$econ->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$econ->id])}}">{{$econ->newsTitle}}</a>
                                </div>

                            @endforeach

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$polHeading[0]->categoryName}}
                            </div>
                            @foreach($polNews as $pnews)
                                <a href="{{route('news.newsDetail', ['id'=>$pnews->id])}}">
                                    <img src="{{$pnews->feature_medium}}" alt="{{$pnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$pnews->id])}}">{{$pnews->newsTitle}}</a>
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$tourismHeading[0]->categoryName}}
                            </div>
                            @foreach($tourismNews as $tnews)
                                <a href="{{route('news.newsDetail', ['id'=>$tnews->id])}}">
                                    <img src="{{$tnews->feature_medium}}" alt="{{$tnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$tnews->id])}}">{{$tnews->newsTitle}}</a>
                                </div>

                            @endforeach

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$eduHeading[0]->categoryName}}
                            </div>
                            @foreach($eduNews as $enews)
                                <a href="{{route('news.newsDetail', ['id'=>$enews->id])}}">
                                    <img src="{{$enews->feature_medium}}" alt="{{$enews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$enews->id])}}">{{$enews->newsTitle}}</a>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="well well5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12" style="background:#f5f5f5">

                        <div class="titleSection">
                            {{$sportHeading[0]->categoryName}}
                        </div>

                        <div class="col-md-6 col-sm-12">
                            @foreach($sportNews as $sportnews)
                                <a href="{{route('news.newsDetail', ['id'=>$sportnews->id])}}">
                                    <img src="{{$sportnews->feature_medium}}" alt="{{$sportnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$sportnews->id])}}">{{$sportnews->newsTitle}}</a>
                                </div>
                                <div class="media-body">
                                    <p>
                                        {{ str_limit(strip_tags($sportnews->newsDesc),$limit = 350, $end = '...') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 col-sm-12">

                            @foreach($sportNewsMain as $snews)
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    <a href="{{route('news.newsDetail', ['id'=>$snews->id])}}">
                                        <img src="{{$snews->feature_medium}}" alt="{{$snews->newsTitle}}">
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="h4Heading">
                                        <a href="{{route('news.newsDetail', ['id'=>$snews->id])}}">{{$snews->newsTitle}}</a>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$crimeHeading[0]->categoryName}}
                            </div>
                            @foreach($crimeNews as $cnews)
                                <a href="{{route('news.newsDetail', ['id'=>$cnews->id])}}">
                                    <img src="{{$cnews->feature_medium}}" alt="{{$cnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$cnews->id])}}">{{$cnews->newsTitle}}</a>
                                </div>

                            @endforeach

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="titleSection">
                                {{$agriHeading[0]->categoryName}}
                            </div>
                            @foreach($agriNews as $agnews)
                                <a href="{{route('news.newsDetail', ['id'=>$agnews->id])}}">
                                    <img src="{{$agnews->feature_medium}}" alt="{{$agnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$agnews->id])}}">{{$agnews->newsTitle}}</a>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="well well5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="background:#f5f5f5">

                        <div class="titleSection">
                            {{$enterHeading[0]->categoryName}}
                        </div>

                        <div class="col-md-6 col-sm-12">
                            @foreach($enterNews as $entnews)
                                <a href="{{route('news.newsDetail', ['id'=>$entnews->id])}}">
                                    <img src="{{$entnews->feature_medium}}" alt="{{$entnews->newsTitle}}">
                                </a>
                                <div class="h3Heading">
                                    <a href="{{route('news.newsDetail', ['id'=>$entnews->id])}}">{{$entnews->newsTitle}}</a>
                                </div>
                                <div class="media-body">
                                    <p>
                                        {{ str_limit(strip_tags($entnews->newsDesc),$limit = 350, $end = '...') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 col-sm-12">

                            @foreach($enterNewsMain as $enews)
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    <a href="{{route('news.newsDetail', ['id'=>$enews->id])}}">
                                        <img src="{{$enews->feature_medium}}" alt="{{$enews->newsTitle}}">
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="h4Heading">
                                        <a href="{{route('news.newsDetail', ['id'=>$enews->id])}}">{{$enews->newsTitle}}</a>
                                    </div>
                                </div>

                            @endforeach
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
<script src="{{asset('assets/js/jquery.bxslider.js')}}"></script>
<!-- </script> -->
<script>
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        autoControls: true
    });
</script>


</body>
</html>
