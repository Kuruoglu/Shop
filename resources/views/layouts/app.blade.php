<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/slick/slick.css')}}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css')}}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/slick/slick-theme.css')}}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ 'Home'}}
                </a>

                <a class="navbar-brand" href="{{ url('/admin') }}">
                    {{ 'Admin'}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="d-flex" >
                        <div class="cart">
{{--                            @if(session('cart'))--}}
                            <div class="icon-num">

                            </div>
{{--                            @endif--}}
                            <a class="btn btn-light mr-2"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-shopping-cart " ></i></a>
                        </div>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
    {{--                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
    {{--                                Cart--}}
    {{--                            </button>--}}

                            </li>
                            <!-- Authentication Links -->
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

{{--    <script type="text/javascript" src="{{asset('//code.jquery.com/jquery-1.11.0.min.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('//code.jquery.com/jquery-migrate-1.2.1.min.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('/slick/slick.min.js')}}"></script>--}}

    <script src="{{asset('/js/app.js')}}"></script>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   @include('shop._cart')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/checkout" type="button" class="btn btn-primary">Checkout</a>
                    <a href="/" type="button" class="btn btn-danger btn-clear-cart">Clear Cart</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
