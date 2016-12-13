<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Curse;

class SignatureSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Signatures";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Signature";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){
        return [
            [
                "label"         => "Tabla periódica",
                "slug"          => "tabla-periodica",
                "description"   => "La tabla periódica de los elementos es una disposición de los elementos químicos en forma de tabla, ordenados por su número atómico (número de protones), por su configuración de electrones y sus propiedades químicas. Este ordenamiento muestra tendencias periódicas, como elementos con comportamiento similar en la misma columna.",
                "curse_id"      => (Curse::getObjectBySlug('quimica'))->id,
            ],
        ];
    }

}
