<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Parbat Nepal') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @if(Auth::check())

                <div class="col-lg-2">


                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="{{route ('home')}}">Home</a></h3>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="{{route('news.display')}}">News</a></h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('news.create')}}">Add News</a>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('newsCategory.categories')}}">News Type</a>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('newsCategory.create')}}">Add News Type</a>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href="{{route('event.display')}}">Event</a></h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('event.create')}}">Add Event</a>
                        </div>

                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="{{route('vdcs.vdclist')}}">Vdcs</a></h3>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="{{route('overseas')}}">Prabesh</a></h3>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="{{route('article')}}">Articles</a></h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('article.create')}}">Add Articles</a></h3>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="{{route('tags')}}">Tags</a>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="{{route('directory')}}">Directory</a></h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('directory.create')}}">Add Directory</a>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('dCategory.categories')}}">Directory Category</a>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('dCategory.create')}}">Add Category Directory</a>
                        </div>

                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="{{route('cms')}}">Content</a></h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('cms.create')}}">Add Content</a>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('dCategory.categories')}}">Directory Category</a>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('dCategory.create')}}">Add Category Directory</a>
                        </div>

                    </div>


                </div>
                @endif
                <div class="col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>


    </div>

    <!-- Scripts -->
    {{--<script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
    {{--<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    {{--<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>--}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>


    <script>
    @if(Session::has('success'))

            toastr.success('{{Session::get('success')}}}')
    @endif

       @if(Session::has('confirm'))

            toastr.info('{{Session::get('confirm')}}}')
        @endif

    </script>
@yield('script')

</body>
</html>
