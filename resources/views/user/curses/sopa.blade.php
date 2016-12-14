@extends('layouts.app')

@section('content')

<style type="text/css">
    #sopa table
    {
        border: none;
        border-collapse: collapse;
        width: 100%;
    }

    #sopa table td
    {
        padding: 2px;
        border: none;
    }

    #sopa table th
    {
        padding: 1px 1px;
        text-align: left;
        background-color: #e8eef4;
        border: none;
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
                    <p>Da click sobre la primera letra de la palabra y click nuevamente en la letra final para seleccionarla.</p>
                </div>

                <div class="col-xs-10" style="margin-top: 2em;">
                    <strong>Palabras encontradas: </strong> <span id="found">0</span>/<span id="total">0</span>
                </div>

            </div>

            <br><br>

            <div class="col-xs-12 col-md-8" style="margin-bottom: 70px;">
                <div class="box">
                    <div id="sopa"></div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                @foreach ($questions as $question)
                    <strong>{{ $question->question }}</strong> <br>
                    @foreach ($question->answers as $answer)
                        {{ $answer->answer }}
                        <p>Letras iniciales: {{ $answer->answer[0] }}{{ $answer->answer[1] }}</p>
                    @endforeach
                    <br>
                @endforeach
            </div>



        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/sopaletras.jquery.js" type="text/javascript" language="javascript"></script>
    <script type="text/javascript">
    	$(function(){
    	 var sopaoption = {
                        palabras: {!! json_encode(array_values($answers)) !!},
                        vertical: 'S',
                        onWin: "mostrarTodo"
                    };
    		$("#sopa").SopaLetras(sopaoption);
    		$("#sopa").SopaLetras("enabled");
    	});
    </script>
@endsection
