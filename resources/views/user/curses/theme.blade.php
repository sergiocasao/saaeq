@extends('layouts.app')

@section('content')

<div style="padding: 100px 0;background-image: url('{{ $theme->photo }}'); color: white;background-size: cover;position: relative;background-position: center;min-height: 350px;margin-top: -40px;">
    <div class="row" style="margin: 0;">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1" style="z-index: 2;">
            <h1>{{ $theme->label }}</h1>
            <p>{{ $theme->description }}</p>
        </div>
    </div>
    <div style="height: 100%;width: 100%;background-color: rgba(0,0,0,0.6);position: absolute;top: 0;"></div>
</div>

<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <br><br><br>


            @if ( $content->video )
            <video class="" id="myVideo" preload style="width: 100%;" controls>
                    <source src="{{ $content->video }}"  type="video/mp4">
                    {{--
                    @if ( $content->video['mp4']  ) { <source src="{{ $content->video['mp4'] }}"  type="video/mp4"> @endif
                    @if ( $content->video['ogg']  ) { <source src="{{ $content->video['ogg'] }}"  type="video/ogg"> @endif
                    @if ( $content->video['webm'] ) { <source src="{{ $content->video['webm']}}"  type="video/webm"> @endif
                    --}}
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
            @endif

            <br>

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
                        <h3>Cuestionario</h3>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    <a class="btn btn-primary center-block" href="{{ route('client::curse.signature.theme.exam.show', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme->slug ]) }}" role="button">Realizar cuestionario ></a>

                    <br><br>

                </div>
            </div>

            @if (Auth::check())

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="page-header">
                            <h3>Tu historial</h3>
                        </div>

                    </div>
                </div>

                @if (Auth::user()->exams()->where('theme_id', $theme->id )->take(10)->get()->count() > 0)

                    <div id="graph"></div>

                @else

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            No haz realizado ningun cuestionario para este tema. <br>
                            Haz click <a href="{{ route('client::curse.signature.theme.exam.show', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme->slug ]) }}" role="button">aquí</a> para realizar el cuestionario. <br><br><br>

                        </div>
                    </div>


                @endif

            @endif

            <br><br>

            @if (Auth::check())

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="page-header">
                            <h3>Comentarios</h3>
                        </div>

                    </div>
                </div>

                <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//saaeq.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            @endif


        </div>
    </div>
</div>
@endsection

@section('scripts')
    @if (Auth::user()->exams()->where('theme_id', $theme->id )->take(10)->get()->count() > 0)
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
        <script src="/js/morris.js"></script>
        <script type="text/javascript">
            Morris.Line({
                element: 'graph',
                data: [
                    @foreach (Auth::user()->exams()->where('theme_id', $theme->id )->take(10)->get() as $exam)
                    { date: '{{ $exam->pivot->created_at }}', qualification: {{ $exam->pivot->qualification }} },
                    @endforeach
                ],
                xkey: 'date',
                ykeys: ['qualification'],
                labels: ['Calificación'],
            });
        </script>
    @endif
@endsection
