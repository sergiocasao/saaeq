@extends('layouts.app')

@section('content')

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                height: 78vh;
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

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
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
        </div> --}}

            <div style="padding: 3em 0;background-image: url('{{asset('images/dna.jpg')}}'); color: white;background-size: cover;margin-top: -40px;min-height: 350px;">
                <div class="row" style="margin: 0;">
                    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                        <h1>Sistema de Apoyo al Aprendizaje de elementos de la tabla periodica.</h1>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                        @if (!Auth::check())
                        <br><br><br><br><br>
                        <p>
                            <a class="btn btn-primary" href="{{ url('/register') }}" role="button">Regístrate</a>
                            <a class="btn btn-primary" href="{{ url('/login') }}" role="button">Inicia sesión</a>
                        </p>
                        @endif
                    </div>
                </div>
            </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 masonry-container" style="padding: 0;">

                    @foreach ($cursos as $curso)
                        <div class="col-xs-12 col-md-6 col-md-offset-3 item" style="margin-top: 3em;">
                            <div class="curse">
                                <div class="curse__header">
                                    <h3><small style="font-weight: bold; color: white;">Curso de</small> <br> {{ $curso->label }}</h3>
                                </div>
                                <div class="curse__signatures">
                                    @foreach ($curso->signatures as $signature)
                                        <a href="{{ route('client::curse.signature.show', ['curse' => $curso->slug, 'signature' => $signature->slug]) }}" class="curse__signature">
                                            <span>{{ $signature->label }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        @if (!Auth::check())
        <div style="padding: 3em 0;background-color: whitesmoke;margin-top: 80px;margin-bottom: 60px;">
            <div class="row" style="margin: 0;">
                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 text-center">
                    <h2>Regístrate hoy a los cursos y obten contenido personalizado</h2>
                    <br>
                    <p>
                        <a class="btn btn-primary btn-lg" href="{{ url('/register') }}" role="button">Regístrate</a>
                    </p>
                </div>
            </div>
        </div>
        @endif

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
    <script type="text/javascript">
        var $container = $('.masonry-container');
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });
    </script>
@endsection
