@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">

            <div class="col-xs-12 text-right" style="padding: 20px 1em 20px 1em;">
                {{ $question->id }}/{{ $total_questions }}
            </div>

            <div class="col-xs-12" style="padding-bottom: 20px;">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $question->id }}" aria-valuemin="0" aria-valuemax="{{ $total_questions }}" style="width: {{ ($question->id/$total_questions)*100 }}%">
                        <span class="sr-only">{{ ($question->id/$total_questions)*100 }}% Complete</span>
                    </div>
                </div>
            </div>

            <h2 class="text-center">{{ $question->question }}</h2>

            <br>

            <div class="col-xs-12">
                <form method="post" role="form" action="{{ route('user::test.update',['user' => Auth::user()->slug, 'question_id' => $question->id ]) }}">

                    {{ csrf_field() }}

                    @foreach ($question->answers as $answer)
                        <div class="radio">
                            <label>
                                <input type="radio" name="answer" id="optionsRadios{{$answer->id}}" value="{{$answer->id}}" {{ $loop->first || (!empty($user_selected) && $user_selected->id == $answer->id) ? 'checked' : ''}}>
                                {{ $answer->answer }}
                            </label>
                        </div>
                    @endforeach


                    <br>

                    <div class="row" style="margin-top: 50px;margin-bottom: 50px;">

                        <div class="col-xs-12 text-center" style="margin-top: 10px;">

                            @if (!empty($prev_question))
                                <a class="btn btn-primary" href="{{ route('user::test.show',['user' => Auth::user()->slug, 'question_id' => $prev_question->id] ) }}" role="button" style="margin: 1em;width: 120px;">< Anterior</a>
                            @endif

                            <button class="btn btn-primary" type="submit" style="margin: 1em;width: 120px;">{{ !empty($next_question) ? 'Siguiente >' : 'Finalizar' }}</button>

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
