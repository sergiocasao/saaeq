<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Test\Question;
use App\Models\Test\Answer;
use App\Theme;
use App\LearnType;

class AnswersTBElSet extends CltvoSet
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
                    "answer"            => "Plomo, Titanio, Selenio, Niquel, Hierro, Manganeso y Niquel.",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Oro, Plata, Cobre, Hierro, Plomo, Estaño y Mercurio.",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 1)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Zinc, Tecnecio, Estaño, Radio, Actinio, Potasio, Plomo.",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Cobre, Erbio, Tulio, Osmio, Polonio, Germanio, Platimio.",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 1)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "60%",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "50%",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "100%",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 2)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "80% ",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 2)->id,
                "correct"           => true,
            ],
                [
                    "answer"            => "Elemento",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 3)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Compuesto",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Alquino",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Metal",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 3)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Cloro, Mercurio, Neón",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Hidrógeno, Oxígeno y Nitrógeno",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 4)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Hierro, Estaño, Mercurio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Manganeso, Oro, Plata",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 4)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "VERDADERO",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 5)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "FALSO",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 5)->id,
                    "correct"           => true,
                ],
            [
                "answer"            => "Ba",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 6)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Fe",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "S",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Na",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 6)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "P, AS,Sb,K",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Fe,Co,Ni, Mg",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Na, K, Rb, Cs",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 7)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "He, Ne, Ar,Na",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 7)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Titanio, Circonio, Hafnio, Rutherfordio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 8)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Boro, Silicio, Germanio, Arsénico, Antimonio, Telurio y Polonio.	",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 8)->id,
                "correct"           => true,
            ],
                [
                    "answer"            => "Metales",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Metales de transición",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Gases Nobles",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 9)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "No Metales",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 9)->id,
                    "correct"           => true,
                ],
            [
                "answer"            => "Rubidio, Francio, Estaño, Cromo, Magnesio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 10)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Litio, Sodio, Potasio, Rubidio, Cesio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 10)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Escandio, Itrio, Lantano, Escandio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 10)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Helio, Neón, Argón, Kriptón, Xenón y Radón",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 10)->id,
                "correct"           => true,
            ],
                [
                    "answer"            => "Neón, Helio, Mercurio ",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 11)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Oro, Plata, Hierro",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 11)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Calcio, Carbono, Fósforo",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 11)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Argón, Estaño, Rutherfordio",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 11)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Neón y Argón.",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 12)->id,
                "correct"           => true,
            ],
            [
                "answer"            => "Rubidio, Mercurio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 12)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Cobre, Aluminio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 12)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Cesio, Francio",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 12)->id,
                "correct"           => false,
            ],
                [
                    "answer"            => "Boro, Calcio, Argón ",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 13)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Uranio,  Radio, Torio.",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 13)->id,
                    "correct"           => true,
                ],
                [
                    "answer"            => "Polonio, Volframio, Arsenico",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 13)->id,
                    "correct"           => false,
                ],
                [
                    "answer"            => "Zinc, Hierro, Potasio, ",
                    "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 13)->id,
                    "correct"           => false,
                ],
            [
                "answer"            => "Oxígeno",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 14)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Fósforo",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 14)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Carbono",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 14)->id,
                "correct"           => false,
            ],
            [
                "answer"            => "Flúor",
                "question_id"       => Theme::getQuestion('elementos-de-la-tabla-periodica', 14)->id,
                "correct"           => true,
            ],

        ];
    }

}
