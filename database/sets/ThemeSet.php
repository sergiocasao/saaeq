<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Signature;

class ThemeSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Themes";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Theme";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){
        return [
            [
                "label"         => "Historia de la tabla periodica",
                "slug"          => "historia-de-la-tabla-periodica",
                "description"   => "La historia de la tabla periódica está íntimamente relacionada con varios aspectos del desarrollo de la química y la física",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'https://lh6.ggpht.com/H7eJfaIg0ekZHjKJC7ymJFIi6JjhyhYac3mHppEvxkiRIExV7SJE0MkFEL-fqcG-ce4=h900',
            ],
            [
                "label"         => "Tabla periódica y su uso",
                "slug"          => "tabla-periodica-y-su-uso",
                "description"   => "El uso de la materia por parte de la humanidad es una labor muy antigua que se pierde en la lejanía de nuestra historia.",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'http://4.bp.blogspot.com/-8EyMhEhoknY/ViVjY4-3gMI/AAAAAAAABdU/E9V4xwPa8Ck/s1600/Ununpentium-a-la-Tabla-Periodica_1.jpg',
            ],
            [
                "label"         => "Regularidades de la tabla periódica",
                "slug"          => "regularidades-de-la-tabla-periodica",
                "description"   => "La tabla periódica es aquella en la que se encuentran agrupados los elementos que tienen propiedades químicas y físicas semejantes.",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'https://biochemistry3rst.files.wordpress.com/2014/04/chnops.png',
            ],
            [
                "label"         => "Elementos de la tabla periódica",
                "slug"          => "elementos-de-la-tabla-periodica",
                "description"   => "Conozca los elementos químicos que existen en el planeta y aprende a indetificarlos.",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'http://previews.123rf.com/images/eyematrix/eyematrix1401/eyematrix140100013/25471335-Periodic-table-of-the-elements-Background-illustration-Stock-Vector.jpg',
            ],
            [
                "label"         => "Bloques y periodos de la tabla periódica",
                "slug"          => "bloques-y-periodos-de-la-tabla-periodica",
                "description"   => "Aprende sobre el número de niveles energéticos de los elemntos identificando su periodo.",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'https://i.ytimg.com/vi/3I3hoC4lOPM/maxresdefault.jpg',
            ],
            [
                "label"         => "Importancia de los elementos químicos en los seres vivos",
                "slug"          => "importancia-de-los-elementos-quimicos-en-los-seres-vivos",
                "description"   => "Aprende aquí de que esta formado tu cuerpo y tu mascota y porque es tan importante esto en la vida del planeta.",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'https://biochemistry3rst.files.wordpress.com/2014/04/chnops.png',
            ],
            [
                "label"         => "Propiedades de los metales, no metales y metales de transición",
                "slug"          => "propiedades-de-los-metales-no-metales-y-metales-de-transicion",
                "description"   => "Oro, plata, bronce... No, no son medallas son metales de la tabla periodica aunque existen algunos mas preciosos, conócelos aquí.",
                "signature_id"  => (Signature::getObjectBySlug('tabla-periodica'))->id,
                "photo"         => 'http://hiciencias.wikispaces.com/file/view/Tabla_Periodica_3%C2%BAESO.jpg/306123322/320x209/Tabla_Periodica_3%C2%BAESO.jpg',
            ],
        ];
    }

}
