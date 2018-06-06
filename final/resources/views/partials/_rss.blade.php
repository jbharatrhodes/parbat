<!doctype html>
<html lang="en" prefix="op: http://media.facebook.com/op#">
<head>
    <meta charset="utf-8">
    <meta property="op:markup_version" content="v1.0">
    <meta property="fb:article_style" content="default"/>
    <meta property="fb:use_automatic_ad_placement" content="enable=true ad_density=default">
    <meta property="fb:op-First Android app Medium rectangle placement" content="placement_id=180004496120966_180049896116426">

    <link rel="canonical" href="{{ route('news.newsDetail', ['slug' => $blog->id]) }}">
    <title>{{ $blog->newsTitle }}</title>
</head>
<body>
<article>
    <header>
        <h1>{{  $blog->newsTitle  }}</h1>
        <h3 class="op-kicker">
            Latest News <!-- Replace with your category name-->
        </h3>
        <address>
           ParbatNepal<!-- Replace with your author name-->
        </address>
        <figure>
            <img src="http://www.parbatnepal.com/{{$blog->feature_medium}}" />
            <figcaption>
                {{  $blog->newsTitle  }}
            </figcaption>
        </figure>
        <figure class="op-ad">
            <iframe src="https://www.adserver.com/ss;adtype=banner300x250" height="300" width="250"></iframe>
        </figure>
        <time class="op-published" dateTime="$blog->created_at->format('c') }}">{{ $blog->created_at->format('M d Y, h:i a') }}</time>
        <time class="op-modified" dateTime="{{ $blog->updated_at->format('c') }}">{{ $blog->updated_at->format('M d Y, h:i a') }}</time>
    </header>

    <p>{{strip_tags($blog->newsDesc)}} </p>
    <figure class="op-ad">
        <iframe width="300" height="250" style="border:0; margin:0;" src="https://www.facebook.com/adnw_request?placement=188503451767757_188503481767754&adtype=banner300x250"></iframe>
    </figure>
        {{--{{$blog->newsDesc}}</p>--}}
    <footer>
        <aside>
            Thank you for visiting us
        </aside>
        <small>© Copyright {{ date('Y') }}</small>
    </footer>
</article>
</body>
</html>