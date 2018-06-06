<!DOCTYPE html>
<html lang="np">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="fb:pages" content="554067664928512" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ParbatNepal.com.. Connecting Parbat globally</title>
        <!--Bootstrap core CSS-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive-style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/weather-icons.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/loaders.css') }}"/>
        <style></style>
        </head>
<body>

@include('front.includes.header')
<section class="banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @foreach($latestNews as $topnews)
                <div class="card"><img class="img-fluid" src="{{$topnews->feature}}" alt="">
                    <div class="card-img-overlay"> <span class="tag tag-pill tag-info">{{$topnews->categoryName}}</span> </div>
                    <div class="card-block">
                        <div class="news-title">
                            <h2 class=" title-small"><a href="{{route('news.newsDetail', ['id'=>$topnews->id])}}">{{$topnews->newsTitle}}</a></h2>
                        </div>
                        <p class="card-text"><small class="text-time"><em>{{$topnews->created_at->diffForHumans()}}</em></small></p>
                    </div>
                </div>
                @endforeach
            </div>

                    <div class="col-md-3">
                        @foreach($latestNews1 as $topnews1)
                        <div class="card"><img class="img-fluid" src="{{$topnews1->feature}}" alt="">
                            <div class="card-img-overlay"> <span class="tag tag-pill tag-info">{{$topnews1->categoryName}}</span> </div>
                            <div class="card-block">
                                <div class="news-title">
                                    <h2 class=" title-small"><a href="{{route('news.newsDetail', ['id'=>$topnews1->id])}}">{{$topnews1->newsTitle}}</a></h2>
                                </div>
                                <p class="card-text"><small class="text-time"><em>{{$topnews1->created_at->diffForHumans()}}</em></small></p>
                            </div>
                        </div>
                        @endforeach
                    </div>


            <div class="col-md-6 top-slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="news-block">
                                <div class="news-media"><img class="img-fluid" src="{{$firstSlider[0]->feature}}" alt=""></div>
                                <div class="news-title">
                                    <h2 class=" title-large"><a href="{{route('news.newsDetail', ['id'=>$firstSlider[0]->id])}}">{{$firstSlider[0]->newsTitle}}</a></h2>
                                </div>
                                <div class="news-des"> {{ str_limit(strip_tags($firstSlider[0]->newsDesc),$limit = 100, $end = '...') }}</div>
                                <div class="time-text"></div>
                                <div></div>
                            </div>
                        </div>
                        @foreach($secondSlider as $ss)
                        <div class="carousel-item">
                            <div class="news-block">
                                <div class="news-media"><img class="img-fluid" src="{{$ss->feature}}" alt=""></div>
                                <div class="news-title">
                                    <h2 class=" title-large"><a href="{{route('news.newsDetail', ['id'=>$ss->id])}}">{{$ss->newsTitle}}</a></h2>
                                </div>
                                <div class="news-des">{{ str_limit(strip_tags($ss->newsDesc),$limit = 100, $end = '...') }} </div>
                                <div class="time-text"></div>
                                <div></div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h3 class="heading-large">{{$firstHeading[0]->categoryName}}</h3>
                    <div class="col-lg-12" style="background:#e3e3e3; padding:2px; margin-bottom: 4px;">
                        <div class="col-lg-6">
                            <img class="img-fluid" src="{{$mainNews[0]->feature}}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-block">
                                <div class="news-title"><a href="{{route('news.newsDetail', ['id'=>$mainNews[0]->id])}}">
                                        <h2 class=" title-small">{{$mainNews[0]->newsTitle}}</h2>
                                    </a></div>
                                <div>{{ str_limit(strip_tags($mainNews[0]->newsDesc),$limit = 150, $end = '...') }}</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        @foreach($mainNews1 as $mainnews1)
                            <div class="col-lg-4">
                                <img class="img-fluid" src="{{$mainnews1->feature}}" alt="">
                                <h2 class=" title-small">{{$mainnews1->newsTitle}}</h2>
                            </div>

                        @endforeach

                    </div>
            </div>
            <aside class="col-lg-6 side-bar col-md-12">
                <div class="col-lg-6">
                    <h3 class="heading-large">{{$interviewHeading[0]->categoryName}}</h3>
                    @foreach($interviewNews as $intnews)
                        <div class="col-lg-12">  <img class="img-fluid" src="{{$intnews->feature}}" alt=""> </div>
                        <div class="col-lg-12">
                        <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="{{route('news.newsDetail', ['id'=>$intnews->id])}}">{{$intnews->newsTitle}}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="tab-pane" id="profile" role="tabpanel">
                    <h3 class="heading-large">विचार</h3>

                    @foreach($articles as $article)

                    <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$article->articlePhoto}}" alt=""> </a>
                        <div class="media-body">
                            <div class="news-title">
                                <h2 class="title-small"><a href="#">{{$article->articleTitle}}</a></h2>
                                <span class="author">{{$article->articleWriter}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    </div>

            </aside>
        </div>
    </div>
</section>
<section class="section-02">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12" style="background: #EEEEEE;padding:2px;">
                <h3 class="heading-large">{{$vdcHeading[0]->categoryName}}</h3>
                <div class="row">
                    @foreach($vdcMainNews as $vdcnews)
                        <div class="col-lg-7">
                            <div class="card"> <img class="img-fluid" src="{{$vdcnews->feature}}" alt="">
                                <div class="card-block">
                                    <div class="news-title"><a href="#">
                                            <h2 class=" title-small">{{$vdcnews->newsTitle}}</h2>
                                        </a></div>
                                        <div>{{ str_limit(strip_tags($vdcnews->newsDesc),$limit = 250, $end = '...') }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-5">
                        @foreach($vdcNews as $vdcnews)
                            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$vdcnews->feature}}" alt=""> </a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a href="#">{{$vdcnews->newsTitle}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <aside class="col-lg-4 side-bar col-md-12">
                <h3 class="heading-large">{{$sportHeading[0]->categoryName}}</h3>
                <div class="row">
                    @foreach($sportNews as $sportnews)
                        <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$sportnews->feature}}" alt=""> </a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">{{$sportnews->newsTitle}}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </aside>
        </div>
    </div>
</section>
<section class="section-03">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12" style="background: #EEEEEE;padding:2px;">
                <h3 class="heading-large">{{$prabashHeading[0]->categoryName}}</h3>
                <div class="row">
                    @foreach($prabashMainNews as $prabashnews)
                        <div class="col-lg-7">
                            <div class="card"> <img class="img-fluid" src="{{$prabashnews->feature}}" alt="">
                                <div class="card-block">
                                    <div class="news-title"><a href="{{route('news.newsDetail', ['id'=>$prabashnews->id])}}">
                                            <h2 class=" title-small">{{$prabashnews->newsTitle}}</h2>
                                        </a></div>
                                    <div>{{ str_limit(strip_tags($prabashnews->newsDesc),$limit = 250, $end = '...') }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-5">
                        @foreach($prabashNews as $pnews)
                            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$pnews->feature}}" alt=""> </a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a href="{{route('news.newsDetail', ['id'=>$pnews->id])}}">{{$pnews->newsTitle}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <aside class="col-lg-4 side-bar col-md-12">
                <h3 class="heading-large">{{$agriHeading[0]->categoryName}}</h3>
                <div class="row">
                    @foreach($agriNews as $anews)
                        <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$anews->feature}}" alt=""> </a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="{{route('news.newsDetail', ['id'=>$anews->id])}}">{{$anews->newsTitle}}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </aside>
        </div>
    </div>
</section>
<section class="section-04">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12" style="background: #EEEEEE;padding:2px;">
                <h3 class="heading-large">{{$tourismHeading[0]->categoryName}}</h3>
                <div class="row">
                    @foreach($tourismMainNews as $tournews)
                        <div class="col-lg-7">
                            <div class="card"> <img class="img-fluid" src="{{$tournews->feature}}" alt="">
                                <div class="card-block">
                                    <div class="news-title"><a href="{{route('news.newsDetail', ['id'=>$tournews->id])}}">
                                            <h2 class=" title-small">{{$tournews->newsTitle}}</h2>
                                        </a></div>
                                    <div>{{ str_limit(strip_tags($tournews->newsDesc),$limit = 250, $end = '...') }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-5">
                        @foreach($tourismNews as $tonews)
                            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$tonews->feature}}" alt=""> </a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a href="{{route('news.newsDetail', ['id'=>$tonews->id])}}">{{$tonews->newsTitle}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <aside class="col-lg-4 side-bar col-md-12">
                <h3 class="heading-large">{{$eduHeading[0]->categoryName}}</h3>
                <div class="row">
                    @foreach($eduNews as $ednews)
                        <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="{{$ednews->feature}}" alt=""> </a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="{{route('news.newsDetail', ['id'=>$ednews->id])}}">{{$ednews->newsTitle}}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </aside>
        </div>
    </div>
</section>

@include('front.includes.footer')


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/library/jquery.min.js')}}"></script>
<script src="{{ asset('js/library/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/library/core.js')}}"></script>
<script src="{{ asset('js/library/lightbox-plus-jquery.min.js')}}"></script>

</body>
</html>
