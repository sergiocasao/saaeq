<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Test\Question;
use App\Models\Test\Answer;
use App\Theme;
use App\LearnType;

class AnswersTBRegSet extends CltvoSet
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
                    "answer"            => "Tabla períodica",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 1)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Ley Periódica",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Química",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Si",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "No",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 2)->id,
                "correct"           => true,
            ],
                [
                    "answer"            => "La Tabla Periódica",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "La Ley Periódica",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 3)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Las Propiedades periódicas",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Gases nobles",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 4)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Metales de transición",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Alquínos",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "No metales",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Peso molecular",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Número de Avogadro",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Número atómico",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 5)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Número de neutrones",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Los gases nobles tienen configuración electrónica estaable",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 6)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "El flúor es elemento menos electronegativo",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Newlands enunció las triadas de los elementos",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Mendeleiev clasificó los elementos en orden creciente de su número atómico",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Sir Alex Ferguson",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Sir Henry Cavendish",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 7)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Sir Mendeleiev",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Sir Peter Hummels",
                    "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "No metal",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 8)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Metal",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 8)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Gas noble",
                "question_id"       => Theme::getQuestion('regularidades-de-la-tabla-periodica', 8)->id,
                "correct"           => false,
            ],

        ];
    }

}
