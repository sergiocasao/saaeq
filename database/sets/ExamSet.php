<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Theme;

class ExamSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Exams";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Exam";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){

        // dd((Theme::getObjectBySlug('bloques-y-periodos-de-la-tabla-periodica'))->id);

        return [
            [
                "label"         => "Test tipo de aprendizaje",
                "theme_id"      => null,
            ],
            [
                "label"         => "Exámen historia de la tabla periodica",
                "theme_id"      => (Theme::getObjectBySlug('historia-de-la-tabla-periodica'))->id,
            ],
            [
                "label"         => "Exámen tabla periódica y su uso",
                "theme_id"      => (Theme::getObjectBySlug('tabla-periodica-y-su-uso'))->id,
            ],
            [
                "label"         => "Exámen regularidades de la tabla periódica",
                "theme_id"      => (Theme::getObjectBySlug('regularidades-de-la-tabla-periodica'))->id,
            ],
            [
                "label"         => "Exámen elementos de la tabla periódica",
                "theme_id"      => (Theme::getObjectBySlug('elementos-de-la-tabla-periodica'))->id,
            ],
            [
                "label"         => "Exámen bloques y periodos de la tabla periódica",
                "theme_id"      => (Theme::getObjectBySlug('bloques-y-periodos-de-la-tabla-periodica'))->id,
            ],
            [
                "label"         => "Exámen importancia de los elementos químicos en los seres vivos",
                "theme_id"      => (Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos'))->id,
            ],
            [
                "label"         => "Exámen propiedades de los metales, no metales y metales de transición",
                "theme_id"      => (Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición'))->id,
            ],
        ];
    }

}
