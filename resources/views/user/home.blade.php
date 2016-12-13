@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if (!Auth::user()->test_finished)
                <div class="col-md-5 col-sm-7 col-xs-12" style="position: fixed; top: 67px;right: 0;z-index: 2;">

                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Vemos que no has hecho tu test para obtener contenido personalizado, da click <a href="{{ route('user::test.index', Auth::user()->slug ) }}">aquí</a> y realizalo!
                    </div>

                </div>
            @endif

            <div class="panel panel-default">

                <div class="panel-heading">Tu cuenta</div>

                <div class="panel-body">
                    <h4>Información personal:</h4>

                    <strong>Nombre:</strong> <span style="text-transform: capitalize;">{{ Auth::user()->name }}</span><br>
                    <strong>Email: </strong> {{ Auth::user()->email }} <br>
                    <strong>Contraseña:</strong> {{ '*****************' }} <br>

                    <hr>

                    <h4>Sobre tu aprendizaje:</h4>

                    <strong>Tipos de aprendizaje</strong> <br><br>

                    @if (!Auth::user()->test_finished)
                        Aún no has realizado el test para obtener tus tipos de aprendizaje, realizalo <a href="{{ route('user::test.index', Auth::user()->slug ) }}">aquí</a>.
                    @else
                        <strong>Procesamiento:  </strong>   {{ LearnType::find(Auth::user()->processing_learn_type_id) }}
                        <strong>Procesamiento:  </strong>   {{ LearnType::find(Auth::user()->perception_learn_type_id) }}
                        <strong>Representacion: </strong>   {{ LearnType::find(Auth::user()->representation_learn_type_id) }}
                        <strong>Comprensión:    </strong>   {{ LearnType::find(Auth::user()->comprenhention_learn_type_id) }}
                    @endif

                    <hr>

                    <h4>Tus últimos exámenes:</h4>

                    <strong>Exámenes</strong> <br><br>

                    @if (Auth::user()->exams->count() > 0)
                        @foreach (Auth::user()->exams as $exam)
                            <p class="pull-right">Calificación: <strong>{{ $exam->pivot->qualification }}</strong></p>
                            <p>{{ $exam->label }} - {{ $exam->pivot->created_at->format('H:m @ d/m/Y ') }}</p>
                        @endforeach
                    @else
                        <p>Aún no has realizado ningún exámen</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
