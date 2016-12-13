@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2 class="text-center">¡Felicidades! haz completado el Test, {{ Auth::user()->name }}</h2>

            <br>

            <h3>Aquí están tus resultados:</h3>

            <div class="info">
				Explicación de los estilos de aprendizaje. <br>
			</div>

            <br><br>

            <div class="text-center">
                <strong>Procesamiento:  </strong>   {{ Auth::user()->processing_learn_type->name }} <br>
                <strong>Procesamiento:  </strong>   {{ Auth::user()->perception_learn_type->name }} <br>
                <strong>Representacion: </strong>   {{ Auth::user()->representation_learn_type->name }} <br>
                <strong>Comprensión:    </strong>   {{ Auth::user()->comprenhention_learn_type->name }} <br>
            </div>

            <br><br><br>

            <div class="col-xs-4 col-xs-offset-4 ">
                <a class="btn btn-primary center-block" href="/" role="button">Ir a los cursos</a>
            </div>

        </div>
    </div>
</div>
@endsection
