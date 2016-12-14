@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="row" style="margin-top: -20px;">
                <div class="col-md-10 col-md-offset-1">

                    <div class="page-header">
                        <h1>{{ $theme->label or '' }}</h1>
                        {{-- <p>{{ $theme->description or '' }}</p> --}}
                    </div>

                </div>
            </div>

            <video class="" id="myVideo" preload style="width: 100%;" controls>
                @if ( $content->video )
                    <source src="{{ $content->video }}"  type="video/mp4">
                    {{--
                    @if ( $content->video['mp4']  ) { <source src="{{ $content->video['mp4'] }}"  type="video/mp4"> @endif
                    @if ( $content->video['ogg']  ) { <source src="{{ $content->video['ogg'] }}"  type="video/ogg"> @endif
                    @if ( $content->video['webm'] ) { <source src="{{ $content->video['webm']}}"  type="video/webm"> @endif
                    --}}
                @endif
                {{--
                <source src="{{ asset('videos/Ultimo_Export_Color.mp4') }}"  type="video/mp4">
                <source src="{{ asset('videos/Ultimo_Export_Color.ogg') }}"  type="video/ogg">
                <source src="{{ asset('videos/Ultimo_Export_Color.webm')}}"  type="video/webm">
                --}}
            </video>
            <script type="text/javascript">
                var vid = document.getElementById("myVideo");
                vid.volume = 0.2;
            </script>


            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    {!! $content->content !!}

                </div>
            </div>

            <div class="row" style="margin-top: -20px;">
                <div class="col-md-10 col-md-offset-1">

                    <div class="page-header">
                        <h3>Actividades</h3>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-2">

                    <a class="btn btn-default center-block" href="{{ route('client::curse.signature.theme.ahorcado.show', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme->slug ]) }}" role="button">El juego del ahorcado</a>

                </div>
                <div class="col-md-4 col-md-offset-1">

                    <a class="btn btn-default center-block" href="{{ route('client::curse.signature.theme.sopa.show', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme->slug ]) }}" role="button">Sopa de letras</a>

                </div>
            </div>

            <br><br>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="page-header">
                        <h3>Evaluación</h3>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    <a class="btn btn-primary center-block" href="{{ route('client::curse.signature.theme.exam.show', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme->slug ]) }}" role="button">Realizar evaluación ></a>

                </div>
            </div>


        </div>
    </div>
</div>
@endsection
