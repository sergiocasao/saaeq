@extends('layouts.app')

@section('content')

<style media="screen">
    .btn {
        margin: 1em 10px;
        min-width: 36px;
        min-height: 36px;
    }
</style>

<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <br>
            <div class="col-xs-12 col-md-12" style="margin-bottom: 40px;">

                <div class="col-xs-2">
                    <a class="btn btn-default " href="{{ route('client::curse.signature.theme.show', ['curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme_slug ]) }}" role="button" style="margin-right: 2em;margin-top: 5px;">< Regresar</a>
                </div>

                <div class="col-xs-10">
                    <strong>Instrucciones:</strong>
                    <p>Da click sobre una letra y si se encuentra en la palabra que búscas se mostrará, de lo contrario obtendrás un error. Solo tienes un máximo de 5 errores antes de que el ahorcado muera.</p>
                </div>

                <div class="col-xs-10" style="margin-top: 2em;">
                    <strong>Palabras encontradas: </strong> <span id="found">0</span>/<span id="total">0</span>
                </div>

            </div>

            <br><br>

            <div class="col-xs-12 col-sm-6">
                <div class="box">
                    <div class="info">

                        <h4 class="text-center"><img src="/images/ahorcado/a1.jpg" id="imagen"></h4>

                        <p id="pregunta"></p>

                        <br>

                        <div>
                            <pre><h3 id="secreto"></h3></pre>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5  col-sm-offset-1">
                <div class="box">

    				<div class="title">

                        <h5><strong>Frase a buscar: </strong></h5>

                        <p>{{ $question->question }}</p>

                    </div>

                    <br>

                    <div class="info">

                        <h4 class="text-center">LETRAS</h4>

                        <div id="letras"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/ahorcado.jquery.js" charset="utf-8"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            var url = "{{ route('client::curse.signature.theme.activity.store', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme_slug ] ) }}";
            var words = {!! json_encode( array_values($answers) ) !!};
            console.log( "ready!" );
            ahorcado(url, words);
        });
    </script>
@endsection
