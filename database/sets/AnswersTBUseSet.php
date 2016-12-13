<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Test\Question;
use App\Models\Test\Answer;
use App\Theme;
use App\LearnType;

class AnswersTBUseSet extends CltvoSet
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
                    "answer"            => "Si",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "No",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 1)->id,
                    "correct"           => true,
                ],
            [
                "answer"            => "Tabla períodica",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 2)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Ley Periódica",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Química",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 2)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Es una tabla ordenada aleatoriamente",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Es una disposición de los elementos químicos en forma de tabla ordenados por su número atómico ",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 3)->id,
                    "correct"           => true,
                ],
            [
                "answer"            => "La Tabla Periódica",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "La Ley Periódica",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 4)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Las Propiedades periódicas",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 4)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Por su nombre",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Por su número atómico",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 5)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Por su punto de ebullición",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Por su valencia",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 5)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Raros, Similares y sintéticos",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Metaloides o de transición, Alcalinos y Halógenos ",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 6)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Naturales, De la antigüedad y Sintéticos",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 6)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Por su número atómico creciente, en filas y columnas (periodos y grupos)",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 7)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Por su punto de ebullición,  en filas y columnas (periodos y grupos)",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Por el año de descubrimiento,  en filas y columnas (periodos y grupos)",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 7)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Símbolo, Descubridor, Año de aparición en la tabla, Valencia y electrones",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 8)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Numero atómico, Punto de fusión, Punto de ebullición,  Símbolo, Nombre",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 8)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Nombre, Año de descubrimiento, Descubridor, Masa atómica",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 8)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "11",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "15",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "18",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 9)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "20",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 9)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "98",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 10)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "118",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 10)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "100",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 10)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "128",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 10)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "4, q, r, t, w",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 11)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "4, s, p, d, f",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 11)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "3, s, p ,d",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 11)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "3, q, r, t",
                    "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 11)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Alcalinos",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 12)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Gases Nobles",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 12)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Halógenos",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 12)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Metaloides",
                "question_id"       => Theme::getQuestion('tabla-periodica-y-su-uso', 12)->id,
                "correct"           => false,
            ],

        ];
    }

}
