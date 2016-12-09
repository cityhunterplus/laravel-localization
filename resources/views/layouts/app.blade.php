<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" style="background-color: #fcf8e3">
    <div style="width: 1280px; margin: 0 auto; background-color: white">
        <div>
            <img src="{{ asset('img/header.png') }}" />
        </div>
        <nav class="navbar navbar-blue">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarEexample">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">このサイトについて</a></li>
                        <li><a href="#">講師紹介</a></li>
                        <li><a href="#">課程費用</a></li>
                        <li><a href="#">レッスンの流れ</a></li>
                        <li><a href="#">Skype使用方法</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-default navbar-static-top" style="display: none">
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
                        Laravel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">{{ trans('nabvar.home') }}</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            @if (!Request::is('login'))
                                <li><a href="{{ url('/login') }}">{{ trans('nabvar.login') }}</a></li>
                            @endif
                            @if (!Request::is('register'))
                                <li><a href="{{ url('/register') }}">{{ trans('nabvar.register') }}</a></li>
                            @endif
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ trans('nabvar.lang_menu') }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('lang.switch', 'ja') }}">
                                        @if (App::getLocale() == "ja")
                                            <i class="fa fa-btn fa-check"></i>
                                        @else
                                            <i class="fa fa-btn" style="width: 14px"></i>
                                        @endif
                                        {{ trans('nabvar.lang_menu_japanese') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('lang.switch', 'en') }}">
                                        @if (App::getLocale() == "en")
                                            <i class="fa fa-btn fa-check"></i>
                                        @else
                                            <i class="fa fa-btn" style="width: 14px"></i>
                                        @endif
                                        {{ trans('nabvar.lang_menu_english') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div>
            <img src="{{ asset('img/footer.png') }}" />
        </div>

    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
