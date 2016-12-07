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
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quasi mollitia facere perferendis perspiciatis dolores numquam est accusamus saepe placeat, eum dolore quibusdam! Architecto commodi repellendus velit quia nemo fuga! <br>
			</div>

            <br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="text-align:center;">Pregunta</th>
                        <th style="text-align:center;">Activo</th>
                        <th style="text-align:center;">Reflexivo</th>
                        <th style="text-align:center;">Sensorial</th>
                        <th style="text-align:center;">Intuitivo</th>
                        <th style="text-align:center;">Secuencial</th>
                        <th style="text-align:center;">Global</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td colspan="2" style="text-align:center;">Activo</td>
                        <td colspan="2" style="text-align:center;">Hello</td>
                        <td colspan="2" style="text-align:center;">Hello</td>
                        <td colspan="2" style="text-align:center;">Hello</td>
                    </tr> --}}
                    @for ($i=1; $i < 45 ; $i++)
                        <tr>
                            <td style="text-align:center;">{{ $i }}</td>
                            <td>Hello</td>
                            <td>Hello</td>
                            <td>Hello</td>
                            <td>Hello</td>
                            <td>Hello</td>
                            <td>Hello</td>
                        </tr>
                    @endfor
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
