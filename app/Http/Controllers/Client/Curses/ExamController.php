<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Signature;
use App\Curse;
use App\Theme;
use App\Models\Test\Question;
use App\Models\Test\Answer;

use App\Http\Requests\DoExamRequest;

use Auth;

class ExamController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Curse $curse, Signature $signature, Theme $theme)
    {
        $data = [
            'exam'              => $theme->exam->load('questions', 'questions.answers'),
            'theme_slug'        => $theme->slug,
            'signature_slug'    => $signature->slug,
            'curse_slug'        => $curse->slug,
        ];

        return view('user.curses.exam', $data);
    }

    public function store(DoExamRequest $request, Curse $curse, Signature $signature, Theme $theme)
    {
        $examen     = $request->only('exam');
        $examen     = $examen['exam'];
        $correctas  = collect([]);
        $error      = collect([]);
        $qualification = 0;
        $questions = collect([]);
        $exam = collect([]);

        foreach ($examen as $question => $answer) {
            $answer = Answer::find($answer);
            $correct_answer = Question::getCorrectAnswer($question);
            $exam->push($answer);
            $questions->push(Question::find($question));
            if ( $answer == $correct_answer) {
                $correctas->push($answer);
            }else {
                $error->push($answer);
            }
        }

        $qualification = number_format( ($correctas->count()*10 )/count($examen), 2);

        if (!Auth::guest()) {

            $args = [
                'qualification' => $qualification,
            ];

            Auth::user()->exams()->attach($theme->exam->id, $args);
        }

        $data = [
            'exam'          => $theme->exam->load('questions', 'questions.answers'),
            'theme_slug'    => $theme->slug,
            'signature_slug'=> $signature->slug,
            'curse_slug'    => $curse->slug,
            'correctas'     => $correctas,
            'incorrectas'   => $error,
            'qualification' => $qualification,
            'questions'     => $questions,
            'ur_answers'    => $exam,
        ];

        return view('user.curses.results', $data);
    }


}
