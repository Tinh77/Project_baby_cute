<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ 'https://fonts.googleapis.com/css?family=Raleway:100,600' }}" rel="stylesheet" type="text/css">
        <link href="/css/app.css" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link href="{{ asset("css/style.css") }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <!-- #Left Sidebar ==================== -->
    <div class="sidebar">
        <div class="sidebar-inner">
            <!-- ### $Sidebar Header ### -->
            <div class="sidebar-logo">
                <div class="peers ai-c fxw-nw">
                    <div class="peer peer-greed">
                        <a class="sidebar-link td-n" href="index.html">
                            <div class="peers ai-c fxw-nw">
                                <div class="peer">
                                    <div class="logo">
                                        <img src="assets/static/images/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="peer peer-greed">
                                    <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="peer">
                        <div class="mobile-toggle sidebar-toggle">
                            <a href="" class="td-n">
                                <i class="ti-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ### $Sidebar Menu ### -->
            <ul class="sidebar-menu scrollable pos-r">
                <li class="nav-item mT-30 active">
                    <a class="sidebar-link" href="index.html">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="email.html">
                <span class="icon-holder">
                  <i class="c-brown-500 ti-email"></i>
                </span>
                        <span class="title">Email</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="compose.html">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-share"></i>
                </span>
                        <span class="title">Compose</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="calendar.html">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                        <span class="title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="chat.html">
                <span class="icon-holder">
                  <i class="c-deep-purple-500 ti-comment-alt"></i>
                </span>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="charts.html">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                        <span class="title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="forms.html">
                <span class="icon-holder">
                  <i class="c-light-blue-500 ti-pencil"></i>
                </span>
                        <span class="title">Forms</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="sidebar-link" href="ui.html">
                <span class="icon-holder">
                    <i class="c-pink-500 ti-palette"></i>
                  </span>
                        <span class="title">UI Elements</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-orange-500 ti-layout-list-thumb"></i>
                </span>
                        <span class="title">Tables</span>
                        <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class='sidebar-link' href="basic-table.html">Basic Table</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="datatable.html">Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-purple-500 ti-map"></i>
                  </span>
                        <span class="title">Maps</span>
                        <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="google-maps.html">Google Map</a>
                        </li>
                        <li>
                            <a href="vector-maps.html">Vector Map</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="c-red-500 ti-files"></i>
                  </span>
                        <span class="title">Pages</span>
                        <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class='sidebar-link' href="blank.html">Blank</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="404.html">404</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="500.html">500</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="signin.html">Sign In</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="signup.html">Sign Up</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-teal-500 ti-view-list-alt"></i>
                </span>
                        <span class="title">Multiple Levels</span>
                        <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                                <span class="arrow">
                      <i class="ti-angle-right"></i>
                    </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:void(0);">Menu Item</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Menu Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
