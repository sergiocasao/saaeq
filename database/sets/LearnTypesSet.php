<?php

use Illuminate\Console\Command;

class LearnTypesSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Learn Types";

    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $model_label =  "name";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\LearnType";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){
        return [
            [
                "name"          => "Activo",
                "slug"          => str_slug("Activo"),
                "description"   => "Tendencia hacia lo activo",
                "type"          => "Processing",
            ],
            [
                "name"          => "Reflexivo",
                "slug"          => str_slug("Reflexivo"),
                "description"   => "Tendencia hacia lo reflexivo",
                "type"          => "Processing",
            ],
            [
                "name"          => "Sensorial",
                "slug"          => str_slug("Sensorial"),
                "description"   => "Tendencia hacia lo sensorial",
                "type"          => "Perception",
            ],
            [
                "name"          => "Intuitivo",
                "slug"          => str_slug("Intuitivo"),
                "description"   => "Tendencia hacia lo intuitivo",
                "type"          => "Perception",
            ],
            [
                "name"          => "Visual",
                "slug"          => str_slug("Visual"),
                "description"   => "Tendencia hacia lo visual",
                "type"          => "Representation",
            ],
            [
                "name"          => "Verbal",
                "slug"          => str_slug("Verbal"),
                "description"   => "Tendencia hacia lo verbal",
                "type"          => "Representation",
            ],
            [
                "name"          => "Secuencial",
                "slug"          => str_slug("Secuencial"),
                "description"   => "Tendencia hacia lo secuencial",
                "type"          => "Comprenhention",
            ],
            [
                "name"          => "Global",
                "slug"          => str_slug("Global"),
                "description"   => "Tendencia hacia lo global",
                "type"          => "Comprenhention",
            ],
        ];
    }

}
