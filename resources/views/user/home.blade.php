@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Tu cuenta</div>

                <div class="panel-body">
                    <h4>Información personal:</h4>

                    <strong>Nombre:</strong> <span style="text-transform: capitalize;">{{ Auth::user()->name }}</span><br>
                    <strong>Email: </strong> {{ Auth::user()->email }} <br>
                    <strong>Contraseña:</strong> {{ '*****************' }} <br>

                    <br>

                    <a href="{{ route('user::edit', Auth::user()->slug ) }}">Editar perfil</a>

                    <hr>

                    <h4>Sobre tu aprendizaje:</h4>

                    <strong>Tipos de aprendizaje</strong> <br><br>

                    @if (!Auth::user()->test_finished)
                        Aún no has realizado el test para obtener tus tipos de aprendizaje, realizalo <a href="{{ route('user::test.index', Auth::user()->slug ) }}">aquí</a>.
                    @else
                        <strong>Procesamiento:  </strong>   {{ Auth::user()->processing_learn_type->name }} <br>
                        <strong>Procesamiento:  </strong>   {{ Auth::user()->perception_learn_type->name }} <br>
                        <strong>Representacion: </strong>   {{ Auth::user()->representation_learn_type->name }} <br>
                        <strong>Comprensión:    </strong>   {{ Auth::user()->comprenhention_learn_type->name }} <br>
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
