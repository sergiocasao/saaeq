<?php

use Illuminate\Console\Command;
use Carbon\Carbon;

class CurseSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Curses";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Curse";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){
        return [
            [
                "label"         => "Química",
                "slug"          => "quimica",
                "description"   => "La química es una de las ramas básicas de la ciencia que se ocupa de estudiar la estructura, composición y propiedades de la materia así como los cambios energéticos e internos que experimenta",
                "publish_id"    => 1,
                "publish_at"    => Carbon::now(),
            ],
        ];
    }

}
