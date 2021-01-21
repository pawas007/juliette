<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img') }}/favicon.png">
    <title>
        {{--        {{ config('app.name', '') }}--}}


        Juliette - Blog
    </title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy&amp;display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>

</head>
<body>
<div id="app">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward bg-white">
            <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
                <ul class="list-inline small mb-0 text-dark d-none d-lg-block">
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
                <a class="navbar-brand" href="/"><img src="{{ asset('img')}}/logo.svg" alt="..." width="150"></a>

                <ul class="navbar-nav  align-items-center user_bar">
                    <!-- Authentication Links -->
                    @auth
                        <div class="user_avatar">
                            <img src="{{ asset('images/avatars')}}/{{ Auth::user()->avatar }}" alt="ava">

                        </div>

                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    {{ __('My Account') }}
                                </a>


                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom border-light">
            <div class="container">
                <ul class="list-inline small mb-0 text-dark d-block d-lg-none">
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}"
                               href="{{ route('home') }}">Home</a>
                        </li>
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }} " href="{{ route('contact') }}">Users</a>--}}
                        {{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-item nav-link {{ Request::routeIs('blog') ? 'active' : '' }} "
                               href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }} "
                               href="{{ route('about') }}">About </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }} "
                               href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>




                    <ul class="navbar-nav mt-2 mobile_menu">
                        <!-- Authentication Links -->
                        <hr>
                        @auth
                            <li class="ava_wrap d-flex align-items-center">
                                <div class="user_avatar">
                                    <img src="{{ asset('images/avatars')}}/{{ Auth::user()->avatar }}" alt="ava">
                                </div>
                                <p class="name pl-2 pt-2">   {{ Auth::user()->name }}</p>


                            </li>


                        @endauth

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">
                                    {{ __('My Account') }}
                                </a></li>

                            <li class="nav-item"><a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>












                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-4 main_content">
        @yield('content')
    </main>
    <footer class="py-4" style="background: #111">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-4 text-lg-left"><img src=" {{ asset('img')}}/logo-footer.svg" alt="..." width="120">
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center flex-wrap justify-content-center">
                        <h6 class="text-muted mb-0 py-2 mr-3">Follow me<span class="ml-3">-</span></h6>
                        <ul class="list-inline small mb-0 text-white">
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-lg-right">
                    <p class="mb-0 text-muted text-small text-heading">Template create by <a href="/"
                                                                                             class="text-reset">
                            Ostap</a>. </p>
                </div>
            </div>
        </div>
    </footer>

</div>
</body>
</html>
