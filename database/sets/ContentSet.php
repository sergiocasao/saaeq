<?php

use Illuminate\Console\Command;

use App\Theme;
use App\Content;

class ContentSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "video";

    protected $model_label =  "video";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Content";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){

        return [
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('historia-de-la-tabla-periodica'),
                'default'                       => 1,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('historia-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('historia-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('historia-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('historia-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            // Elementos
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('elementos-de-la-tabla-periodica'),
                'default'                       => 1,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('elementos-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('elementos-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('elementos-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('elementos-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            // importancia-de-los-elementos-quimicos-en-los-seres-vivos
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getRandomVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos'),
                'default'                       => 1,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getRandomVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getRandomVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getRandomVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getRandomVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos'),
                'default'                       => 0,
            ],
            // propiedades-de-los-metales-no-metales-y-metales-de-transición
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición')->id,
                'video'                         => Content::getRandomVideo('propiedades-de-los-metales-no-metales-y-metales-de-transición'),
                'default'                       => 1,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición')->id,
                'video'                         => Content::getRandomVideo('propiedades-de-los-metales-no-metales-y-metales-de-transición'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición')->id,
                'video'                         => Content::getRandomVideo('propiedades-de-los-metales-no-metales-y-metales-de-transición'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición')->id,
                'video'                         => Content::getRandomVideo('propiedades-de-los-metales-no-metales-y-metales-de-transición'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición')->id,
                'video'                         => Content::getRandomVideo('propiedades-de-los-metales-no-metales-y-metales-de-transición'),
                'default'                       => 0,
            ],
            // regularidades-de-la-tabla-periodica
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('regularidades-de-la-tabla-periodica'),
                'default'                       => 1,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('regularidades-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('regularidades-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('regularidades-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getRandomVideo('regularidades-de-la-tabla-periodica'),
                'default'                       => 0,
            ],
            // tabla-periodica-y-su-uso
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getRandomVideo('tabla-periodica-y-su-uso'),
                'default'                       => 1,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getRandomVideo('tabla-periodica-y-su-uso'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getRandomVideo('tabla-periodica-y-su-uso'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getRandomVideo('tabla-periodica-y-su-uso'),
                'default'                       => 0,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::type('Processing')->get()->random(1)->id,
                'perception_learn_type_id'      => App\LearnType::type('Perception')->get()->random(1)->id,
                'representation_learn_type_id'  => App\LearnType::type('Representation')->get()->random(1)->id,
                'comprenhention_learn_type_id'  => App\LearnType::type('Comprenhention')->get()->random(1)->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getRandomVideo('tabla-periodica-y-su-uso'),
                'default'                       => 0,
            ],

        ];
    }

}
