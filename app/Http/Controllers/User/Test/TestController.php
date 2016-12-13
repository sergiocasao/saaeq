<?php

namespace App\Http\Controllers\User\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Test\Answer;
use App\Models\Test\Question;
use App\Exam;
use App\User;
use App\LearnType;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('testmaked', ['except' => 'thanks']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $exam = Exam::testExam()->get()->first();

        $data = [
            'first_question'    => $exam->questions()->orderBy('id')->first(),
            'total_questions'   => Question::all()->count(),
        ];

        return view('user.test.test', $data);
    }

    public function show(User $user, Question $question_id)
    {
        /////// Redirecciona si no hay respondido alguna pregunta anterior.

        $answered_questions = $user->answers()->orderBy('question_id')->get();
        $total_questions = Question::orderBy('id')->get();

        if ($answered_questions->count() != $total_questions->count()) {
            $i = 0;
            foreach ($total_questions as $question) {
                if( empty($answered_questions) ){
                    // dump('No ha contestado ninguna pregunta del test.');
                    // dump($question->id);
                    // dump($question_id->id);
                    if ($question->id != $question_id->id) {
                        // dd('Redireccionamos a: '.$question->id);
                        return redirect()->route('user::test.show', ['user' => Auth::user()->slug, 'question_id' => $question->id ]);
                    }else {
                        break;
                    }
                }
                // dump($question->id);
                // dump(!empty($answered_questions[$i]) ? $answered_questions[$i]->question_id : '');
                if ( empty($answered_questions[$i]->question_id) || $question->id != $answered_questions[$i]->question_id) {
                    // dump('Esta mal el orden de como has respondido');
                    // dump('$question->id: '.$question->id);
                    // dump('$question_id->id: '.$question_id->id);
                    if ($question->id < $question_id->id) {
                        // dd('Redireccionamos a: '.$question->id);
                        return redirect()->route('user::test.show', ['user' => Auth::user()->slug, 'question_id' => $question->id ]);
                    }else {
                        break;
                    }
                }
                // dump('----------');
                $i++;
            }
        }

        /////// -------

        $data = [
            'question'          => $question_id,
            'next_question'     => $question_id->next(),
            'prev_question'     => $question_id->previous(),
            'total_questions'   => Question::all()->count(),
            'user_selected'     => $user->answers->where('question_id', $question_id->id )->first(),
        ];

        return view('user.test.question', $data);
    }

    public function update(Request $request, User $user, Question $question_id)
    {
        $input = $request->all();

        $answer_for_this_question = $user->answers->where('question_id', $question_id->id)->first();

        if ($answer_for_this_question) {
            $user->answers()->detach($answer_for_this_question->id);
        }

        $answer = isset($input['answer']) ? $input['answer'] : Answer::all()->random(1);

        $user->answers()->attach($answer);
        $user->save();

        if (empty($question_id->next())) {
            $this->assignStyle($user);
            return redirect()->route('user::test.thanks', ['user' => Auth::user()->slug]);
        }

        return redirect()->route('user::test.show', ['user' => Auth::user()->slug, 'question_id' => ($question_id->next())->id ]);
    }

    public function thanks(User $user)
    {
        if (!$user->test_finished) {
            abort(404);
        }

        return view('user.test.thanks');
    }

    protected function assignStyle(User $user){

        $activo     = $user->answers()->learnType('activo')->get()->count();
        $reflexivo  = $user->answers()->learnType('reflexivo')->get()->count();

        $sensorial  = $user->answers()->learnType('sensorial')->get()->count();
        $intuitivo  = $user->answers()->learnType('intuitivo')->get()->count();

        $visual     = $user->answers()->learnType('visual')->get()->count();
        $verbal     = $user->answers()->learnType('verbal')->get()->count();

        $secuencial = $user->answers()->learnType('secuencial')->get()->count();
        $global     = $user->answers()->learnType('global')->get()->count();

        $processing_learn_type      = null;
        $perception_learn_type      = null;
        $representation_learn_type  = null;
        $comprenhention_learn_type  = null;

        if ($activo > $reflexivo) {
            $processing_learn_type = LearnType::getModelBySlug('activo')->get()->first();
        }elseif ($activo < $reflexivo) {
            $processing_learn_type = LearnType::getModelBySlug('reflexivo')->get()->first();
        }

        if ($sensorial > $intuitivo) {
            $perception_learn_type = LearnType::getModelBySlug('sensorial')->get()->first();
        }elseif ($sensorial < $intuitivo) {
            $perception_learn_type = LearnType::getModelBySlug('intuitivo')->get()->first();
        }

        if ($visual > $verbal) {
            $representation_learn_type = LearnType::getModelBySlug('visual')->get()->first();
        }elseif ($visual < $verbal) {
            $representation_learn_type = LearnType::getModelBySlug('verbal')->get()->first();
        }

        if ($secuencial > $global) {
            $comprenhention_learn_type = LearnType::getModelBySlug('secuencial')->get()->first();
        }elseif ($secuencial < $global) {
            $comprenhention_learn_type = LearnType::getModelBySlug('global')->get()->first();
        }

        // dump($activo);
        // dump($reflexivo);
        // dump($sensorial);
        // dump($intuitivo);
        // dump($visual);
        // dump($verbal);
        // dump($secuencial);
        // dump($global);
        //
        // dump($processing_learn_type->name);
        // dump($perception_learn_type->name);
        // dump($representation_learn_type->name);
        // dump($comprenhention_learn_type->name);

        $user->processing_learn_type_id = $processing_learn_type ? $processing_learn_type->id : null;
        $user->perception_learn_type_id = $perception_learn_type ? $perception_learn_type->id : null;
        $user->representation_learn_type_id = $representation_learn_type ? $representation_learn_type->id : null;
        $user->comprenhention_learn_type_id = $comprenhention_learn_type ? $comprenhention_learn_type->id : null;

        $user->test_finished = true;

        return $user->save();
    }
}
