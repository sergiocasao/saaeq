@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="page-header">
                <h1>{{ $exam->label or '' }}</h1>
            </div>

            <form class="form-horizontal text-center" method="POST" action="{{ route('client::curse.signature.theme.exam.store', [ 'curse' => $curse_slug, 'signature' => $signature_slug, 'theme' => $theme_slug ]) }}">

                {{ csrf_field() }}

                @php
                    $i = 1;
                @endphp
                @foreach ($exam->questions->random(7) as $question)
                    <div class="form-group">
                        <h5 style="line-height: 1.5em;" class="text-left">{{ $i }}. {{ $question->question }}</h5>

                        @foreach ($question->answers as $answer)
                            <label class="radio-inline">
                                <input type="radio" name="exam[{{ $question->id }}]" id="inlineRadio{{ $answer->id }}" value="{{ $answer->id }}" required> {{ $answer->answer }}
                            </label>
                        @endforeach

                        <br><br>
                    </div>
                @php
                    $i++;
                @endphp
                @endforeach


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-primary">Enviar resultados</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
