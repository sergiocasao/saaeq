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

class ActivityController extends Controller
{

    public $unwanted_array = [
        'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'
    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ahorcado(Curse $curse, Signature $signature, Theme $theme)
    {
        $question = $theme->exam->questions->load('answers')->random(1);

        $anwers = $question->answers()->correct()->get()->map(function($item){
            return strtr( $item->answer, $this->unwanted_array );
        })->toArray();

        $data = [
            'question'          => $question,
            'answers'           => $anwers,
            'theme_slug'        => $theme->slug,
            'signature_slug'    => $signature->slug,
            'curse_slug'        => $curse->slug,
        ];

        return view('user.curses.ahorcado', $data);
    }

    public function sopa(Curse $curse, Signature $signature, Theme $theme)
    {
        $questions = $theme->exam->questions->load('answers');

        // $anwers = $questions->map(function($question){
        //     return $question->answers()->correct()->get()->map(function($item){
        //         return strtr( $item->answer, $this->unwanted_array );
        //     });
        // });

        // $anwers = $questions->map(function($question){
        //     return $question->answers()->correct()->get()->map(function($item){
        //         return $item;
        //     });
        // });

        $answers = $questions->where('answer.correct', true);

        dd($anwers);

        $data = [
            'questions'         => $questions,
            'answers'           => $anwers,
            'theme_slug'        => $theme->slug,
            'signature_slug'    => $signature->slug,
            'curse_slug'        => $curse->slug,
        ];

        return view('user.curses.sopa', $data);
    }

    public function store(Request $request, Curse $curse, Signature $signature, Theme $theme)
    {
        $input = $request->all();

        if ( isset($input['m']) ) {
            $message = $input['m'];
        }elseif ( isset($input['e']) ) {
            $message = $input['e'];
        }

        $route_name = 'client::curse.signature.theme.show';
        $route_params = [
            'curse'     => $curse->slug,
            'signature' => $signature->slug,
            'theme'     => $theme->slug
        ];

        if (!isset($message)) {
            return redirect()->route($route_name, $route_params);
        }elseif (isset($input['m'])) {
            return redirect()->route($route_name, $route_params)->with('status', $message );
        }elseif (isset($input['e'] )) {
            return redirect()->route($route_name, $route_params)->withErrors([$message]);
        }

        abort(404);

    }


}
