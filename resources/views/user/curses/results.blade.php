@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="page-header">
                <h1>
                    {{ $qualification }}
                    <small>Calificación {{ $exam->label }}:</small> <br>
                </h1>
            </div>

            <div class="alert alert-info" role="alert">
                @if (Auth::check())
                    <span style="text-transform: capitalize;">{{ Auth::user()->name }}</span>,
                @endif
                @if ($qualification < 5)
                    Whoops, parece que alguien tiene que estudiar un poco más.
                @elseif ($qualification > 5 && $qualification < 7.5)
                    Muy bien, sigue estudiando y seguro mejorarás esa calificación
                @else
                    ¡Muchas felicidades! veamos que tan bien te va en los próximos temas.
                @endif
            </div>

            <h2>
                <strong>{{ $correctas->count() }}</strong> respuestas correctas. <br>
                <strong>{{ $incorrectas->count() }}</strong> respuestas incorrectas. <br>
                <small>Total de preguntas: <strong>{{ $questions->count() }}</strong> </small>
            </h2>

            <div class="page-header">
                <h2>

                </h2>
            </div>

            <div class="col-xs-12">

                <h3>Aquí el resúmen de tu exámen...</h3> <br>

                @php
                    $i = 1
                @endphp
                @foreach ($questions as $question)
                    <h5>{{ $i }}. {{ $question->question }}</h5>
                    <p><strong>Respuesta correcta:</strong> {{ $question->answers()->correct()->get()->first()->answer }}</p>
                    <p><strong>Tu respuesta:</strong> {{ $ur_answers[$i-1]->answer }}</p> <br>

                @php
                    $i++
                @endphp
                @endforeach
            </div>

            <a class="btn btn-primary pull-right" href="{{ route('client::curse.signature.show', ['curse' => $curse_slug, 'signature' => $signature_slug ]) }}" role="button">Ir al temario ></a>

        </div>
    </div>
</div>
@endsection
