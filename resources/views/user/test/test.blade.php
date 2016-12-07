@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Test ILS (Index Learning Styles)</h1>

            <br>

            <ul>
                <li>Este cuestionario ha sido diseñado para identificar su Estilo preferido de Aprendizaje. No es un test de inteligencia , ni de personalidad</li>
                <li>No hay límite de tiempo para contestar al Cuestionario. No le ocupará más de 15 minutos.</li>
                <li>No hay respuestas correctas o erróneas. Será útil en la medida que sea sincero/a en sus respuestas.</li>
                <li>Si está más de acuerdo que en desacuerdo con el ítem seleccione 'Mas (+)'. Si, por el contrario, está más en desacuerdo que de acuerdo, seleccione 'Menos (-)'.</li>
                <li>Por favor conteste a todos los items.</li>
                <li>El Cuestionario es anónimo.</li>
            </ul>

            <br>

            <div class="col-xs-4 col-xs-offset-4">
                <a class="btn btn-primary center-block" href="{{ route('user::test.show',['user' => Auth::user()->slug, 'question_id' => $first_question->id] ) }}" role="button">Iniciar test</a>
            </div>

        </div>
    </div>
</div>
@endsection
