<!DOCTYPE html>
<html lang="es" style="min-height: 100% !important;height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    @include('general.favicon')

    <!-- Scripts -->
    <script>
        window.Laravel = @php echo json_encode([ 'csrfToken' => csrf_token(), ]); @endphp
    </script>

    <style media="screen">
        .curse {
            display: block;
            margin: 0 auto;
            width: 90%;
            /*background-color: red;*/
            /*border: 1px solid #eee;*/
        }
        .curse__header {
            padding: 15px 10px 30px 15px;
            border-radius: 15px 15px 0 0;
            /*background-image: url('http://placehold.it/350x350');*/
            background-color: #3097D1;
            color: white;
        }
        .curse__signatures {
            background-color: white;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-left: 1px solid #ccc;
            border-radius: 0 0 15px 15px;
        }
        .curse__signature {
            /*background-color: blue;*/
            padding: 1em;
            border-top: 1px solid #ccc;
            display: block;
        }
        .curse__signature:last-child {
            border-radius: 0 0 15px 15px;
        }
        .curse__signature:hover {
            background-color: #eee;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: white;min-height: 100% !important;height: 100%;padding-top: 50px;">

    <div id="app" style="min-height:100%;position:relative;">

        <nav class="navbar navbar-default navbar-fixed-top">
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
                    {{-- <ul class="nav navbar-nav">
                        &nbsp;
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
                            <li><a href="{{ url('/register') }}">Regístrate</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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

        <section style="padding-bottom: 80px;">
            @yield('content')
        </section>

        @include('general._alerts')

        <footer class="footer" style="position: absolute;bottom: 0;left: 0;width: 100%;">
            <hr>
            <div class="container" style="padding-bottom: 10px;">
                <p class="text-muted">© {{ date('Y') }} <a href="#">{{ config('app.name') }}</a>. All rights reserved</p>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
    <script type="text/javascript">
        var $container = $('.masonry-container');
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });
    </script>

</body>
</html>
