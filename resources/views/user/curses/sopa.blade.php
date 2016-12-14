@extends('layouts.app')

@section('content')

<style type="text/css">
    #sopa table
    {
        margin-left: 8%;
        border: none;
        border-collapse: collapse;
        width: 60%;

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

            <strong>Instrucciones:</strong>
            <p>Da click sobre la primera letra de la palabra y click nuevamente en la letra final para seleccionarla.</p>

            <br><br>

            <div class="col-xs-12">
                <div class="box">
                    <div id="sopa">
                        <br><br><br><br><br><br><br><br><br><br>
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
            var url = 'hello.html';
            var words = {!! json_encode( array_values($answers) ) !!};
            console.log( "ready!" );
            ahorcado(url, words);
        });
    </script>
@endsection