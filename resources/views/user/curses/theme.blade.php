@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

                <video class="" id="myVideo" preload style="width: 100%;" controls>
                    @if ( $content->video['mp4'] || $content->video['ogg'] || $content->video['webm'] )
                        @if ( $content->video['mp4']  ) { <source src="{{ $content->video['mp4'] }}"  type="video/mp4"> @endif
                        @if ( $content->video['ogg']  ) { <source src="{{ $content->video['ogg'] }}"  type="video/ogg"> @endif
                        @if ( $content->video['webm'] ) { <source src="{{ $content->video['webm']}}"  type="video/webm"> @endif
                    @endif
                    <source src="{{ asset('videos/Ultimo_Export_Color.mp4') }}"  type="video/mp4">
                    <source src="{{ asset('videos/Ultimo_Export_Color.ogg') }}"  type="video/ogg">
                    <source src="{{ asset('videos/Ultimo_Export_Color.webm')}}"  type="video/webm">
                </video>
                <script type="text/javascript">
                    var vid = document.getElementById("myVideo");
                    vid.volume = 0.2;
                </script>


            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="page-header">
                        <h1>{{ $theme->label or '' }}</h1>
                        {{-- <p>{{ $theme->description or '' }}</p> --}}
                    </div>

                    {!! $content->content !!}

                    <a class="btn btn-primary pull-right" href="{{ route('client::curse.signature.theme.exam.show', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme->slug ]) }}" role="button">Realizar evaluación ></a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
