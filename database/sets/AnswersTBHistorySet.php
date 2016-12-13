<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Test\Question;
use App\Models\Test\Answer;
use App\Theme;
use App\LearnType;

class AnswersTBHistorySet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Answers";

    protected $model_label =  "answer";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Models\Test\Answer";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){

        return [
            /** Historia tabla periodica */
            // 1
                [
                    "answer"            => "John Newlands",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Dimitri Mendeleiev",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Jhon Meyer",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Johan Döbereiner",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 1)->id,
                    "correct"           => true,
                ],
            // 2
            [
                "answer"            => "Dimitri Mendeleiev",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 2)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Jhon Newlands",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Jhon Meyer",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Johan Döbereiner",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Berzelius",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Moseley",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Meyer",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Newlands",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 3)->id,
                    "correct"           => true,
                ],
            [
                "answer"            => "Moseley",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Meyer",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Dobereiner",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 4)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Newlands",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Triadas de Meyer",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Triadas de Mendeleiev",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Tríadas de Döbereiner",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 5)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Triadas de Newlands",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Meyer",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Newlands",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Döbereiner",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Henry Moseley",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 6)->id,
                "correct"           => true,
            ],
                [
                    "answer"            => "Reina Newland",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Moseley",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 7)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Dobereiner",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Chancourtois y Meyer",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Newland y Meyer",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 8)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Meyer y Mendeleiev",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 8)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Moseley y Mendeleiv",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 8)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Chancourtois y Meyer",
                "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 8)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Berzelius",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Moseley",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Meyer",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Newlands",
                    "question_id"       => Theme::getQuestion('historia-de-la-tabla-periodica', 9)->id,
                    "correct"           => true,
                ],

        ];
    }

}
