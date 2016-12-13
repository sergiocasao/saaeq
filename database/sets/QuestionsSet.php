<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Theme;
use App\Exam;

class QuestionsSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Questions";

    protected $model_label =  "order";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "App\Models\Test\Question";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){

        $historia_tb_id = Theme::getObjectBySlug('historia-de-la-tabla-periodica')->exam->id;
        $tb_y_uso_id    = Theme::getObjectBySlug('tabla-periodica-y-su-uso')->exam->id;
        $reg_tb_id      = Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->exam->id;
        $el_tb_id       = Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->exam->id;
        $per_tb_id      = Theme::getObjectBySlug('bloques-y-periodos-de-la-tabla-periodica')->exam->id;
        $prop_met_id    = Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transición')->exam->id;
        $imp_tb_id      = Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->exam->id;

        return [
            // 1
            [
                "question"          => "¿Quién propuso el arreglo de las tríadas?",
                "exam_id"           => $historia_tb_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "¿Quién propuso una clasificación de los elementos donde se predijo la existencia de 3 elementos aún no descubiertos?",
                "exam_id"           => $historia_tb_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "Propuso una organización de los elementos en orden creciente de sus masas atómicas; observó qie después del septimo elemento, el octavo tenía propiedades semejantes a las del primero.",
                "exam_id"           => $historia_tb_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "Clasificó a los elementos al observar semejanzas en sus propiedades, así que organizó a los elementos en triadas (grupos de tres).",
                "exam_id"           => $historia_tb_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "¿Cómo se denominó al arreglo de los elementos de acuerdo a sus propiedades similares en grupos de 3 donde el promedio de las masas del 1º y el 3º coincidía con la masa atómica del intermedio?",
                "exam_id"           => $historia_tb_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "¿Quién ordenó a los elementos a su número atómico?",
                "exam_id"           => $historia_tb_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "Actualizó la ley periódica estableciendo que las propiedades de los elementos son una función periódica de sus números atomicos.",
                "exam_id"           => $historia_tb_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "Construyeron al mismo tiempo tabla periódicas similares, organizaron los elementos en orden creciente de sus masas atómicas, pero dejaron huecos en la tabla para elementos desconocidos.",
                "exam_id"           => $historia_tb_id,
                "order"             => 8,
            ],
            // 9
            [
                "question"          => "¿Quién estableció la ley de las octavas?",
                "exam_id"           => $historia_tb_id,
                "order"             => 9,
            ],
            /** La tabla periodica y su uso **/
            // 1
            [
                "question"          => "¿La clasificación periódica de los elementos es simplemente una consecuencia de las investigaciones sobre la estructura atómica?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "Su función es servir como una estructura, soporte o esquema de organización, para la amplia información química:",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "¿Qué es la tabla periódica?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "Establece que las propiedades de los elementos químicos son función periódica de su número atómico",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "¿Cómo se clasifican los elementos en la tabla periodica?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "Son tres categorías en las que se clasifican a los elementos:",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "¿En la tabla actual como se encuentran ordenados los elementos?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "¿En la tabla periódica que muestra  cada elemento?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 8,
            ],
            // 9
            [
                "question"          => "Cantidad de grupos que se encuentran en la tabla",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 9,
            ],
            // 10
            [
                "question"          => "¿Cuantos elementos se incluyen el la tabla periódica?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 10,
            ],
            // 11
            [
                "question"          => "¿En cuántos bloques se divide la tabla periódica y cuáles son?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 11,
            ],
            // 12
            [
                "question"          => "¿Cuál es el grupo que no aparecía en la tabla de Mendeleiev?",
                "exam_id"           => $tb_y_uso_id,
                "order"             => 12,
            ],
            /** Regularidades de la tabla periodica **/
            // 1
            [
                "question"          => "Su función es servir como una estructura, soporte o esquema de organización, para la amplia información química:",
                "exam_id"           => $reg_tb_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "¿La clasificación periódica de los elementos es simplemente una consecuencia de las investigaciones sobre la estructura atómica?",
                "exam_id"           => $reg_tb_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "Establece que las propiedades de los elementos químicos son función periódica de su número atómico",
                "exam_id"           => $reg_tb_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "Los __________________ se caracterizan por tener 8 electrones de valencia en su nivel externo",
                "exam_id"           => $reg_tb_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "En la tabla periódica moderna, los elementos han sido ordenados en base a su:",
                "exam_id"           => $reg_tb_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "¿Qué afirmación es correcta?",
                "exam_id"           => $reg_tb_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "¿Quién descubrió el hidrogeno?",
                "exam_id"           => $reg_tb_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "Usualmente un _______________ conduce la corriente eléctrica y posee brillo",
                "exam_id"           => $reg_tb_id,
                "order"             => 8,
            ],
            /** Elementos de la tabla periodica **/
            // 1
            [
                "question"          => "¿Cuáles fueron los primeros elementos de los que se tiene noticia? son los siete metales de la Antigüedad",
                "exam_id"           => $el_tb_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "¿Qué porcentaje aproximado de los elementos de la Tabla Periódica son metales?",
                "exam_id"           => $el_tb_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "Un _______________es una sustancia simple a partir de la cual se constituyen los compuestos.",
                "exam_id"           => $el_tb_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "¿Cuáles los elementos  que se relacionan con el agua y el aire?",
                "exam_id"           => $el_tb_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "El Mercurio es un no metal sólido",
                "exam_id"           => $el_tb_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "¿Cuál de los siguientes elementos pertenece a la familia de los alcalinos térreos?",
                "exam_id"           => $el_tb_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "En la tabla periódica que elementos forman la misma familia:",
                "exam_id"           => $el_tb_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "¿Cuáles son los elementos denominados metaloides?",
                "exam_id"           => $el_tb_id,
                "order"             => 8,
            ],
            // 9
            [
                "question"          => "Completar su capa de valencia (capa electrónica más externa), para lograr una configuración estable?",
                "exam_id"           => $el_tb_id,
                "order"             => 9,
            ],
            // 10
            [
                "question"          => "¿Cuáles son los elementos conocidos como gases inertes?",
                "exam_id"           => $el_tb_id,
                "order"             => 10,
            ],
            // 11
            [
                "question"          => "¿Qué elementos tienen aplicaciones en la industria metalúrgica y en la joyería?",
                "exam_id"           => $el_tb_id,
                "order"             => 11,
            ],
            // 12
            [
                "question"          => "¿Cuáles son los elementos más empleados para anuncios luminosos?",
                "exam_id"           => $el_tb_id,
                "order"             => 12,
            ],
            // 13
            [
                "question"          => "¿Qué elementos radioactivos son más empleados para la producción de energía nuclear?",
                "exam_id"           => $el_tb_id,
                "order"             => 13,
            ],
            // 14
            [
                "question"          => "¿Qué elementos son mas empleados para la prevención de la caries?",
                "exam_id"           => $el_tb_id,
                "order"             => 14,
            ],
            /** Clasificacion **/
            // 1
            [
                "question"          => "¿Qué es lo que determina el numero periodo en que se encuentran los elementos?",
                "exam_id"           => $per_tb_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "Los elementos del bloque 'd' se denominan elementos de transición interna",
                "exam_id"           => $per_tb_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "¿Cuál de los siguientes elementos pertenece a la familia de los alcalinos térreos?",
                "exam_id"           => $per_tb_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "El periodo que ocupa un elemento coincide con:",
                "exam_id"           => $per_tb_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "¿Cómo es la numeración de los periodos?",
                "exam_id"           => $per_tb_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "El periodo 1 solo llena un nivel de energía ¿Cuál es?",
                "exam_id"           => $per_tb_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "¿Con que elemento comienza el periodo 4?",
                "exam_id"           => $per_tb_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "Los metales son buenos conductores de la electricidad",
                "exam_id"           => $per_tb_id,
                "order"             => 8,
            ],
            // 9
            [
                "question"          => "El número de grupos indica los electrones de valencia",
                "exam_id"           => $per_tb_id,
                "order"             => 9,
            ],
            // 10
            [
                "question"          => "En la tabla periódica que elementos forman la misma familia:",
                "exam_id"           => $per_tb_id,
                "order"             => 10,
            ],
            // 11
            [
                "question"          => "¿Quién ordenó a los elementos por orden creciente de sus masas atómicas en columnas de 7 elementos?",
                "exam_id"           => $per_tb_id,
                "order"             => 11,
            ],
            // 12
            [
                "question"          => "¿Quién propuso una clasificación de los elementos donde se predijo la existencia de 3 elementos aún no descubiertos?",
                "exam_id"           => $per_tb_id,
                "order"             => 12,
            ],
            // 13
            [
                "question"          => "¿Quién ordenó a los elementos a su número atómico?",
                "exam_id"           => $per_tb_id,
                "order"             => 13,
            ],
            // 14
            [
                "question"          => "¿Qué es el número atómico?",
                "exam_id"           => $per_tb_id,
                "order"             => 14,
            ],
            /** Propiedades de los metales y no metales **/
            // 1
            [
                "question"          => "La primera clasificación de elementos conocida, fue propuesta por Antoine Lavoisier, quien propuso que los elementos se clasificaran en:",
                "exam_id"           => $prop_met_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "Característica de los elementos químicos llamados metales:",
                "exam_id"           => $prop_met_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "¿Cómo se suelen clasificar a los Metales?",
                "exam_id"           => $prop_met_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "Menciona alguna(s) características de los elementos químicos llamados metales:",
                "exam_id"           => $prop_met_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "Menciona alguna(s) características de los elementos químicos llamados No Metales:",
                "exam_id"           => $prop_met_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "Menciona alguna(s) características de los elementos químicos llamados No Metales:",
                "exam_id"           => $prop_met_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "En donde se localizan los elementos químicos llamados Metaloides i de Transición:",
                "exam_id"           => $prop_met_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "Los elementos que no se pueden clasificar como metales o como no metales; tienen propiedades de los dos grupos y se les llaman:",
                "exam_id"           => $prop_met_id,
                "order"             => 8,
            ],
            /** Importancia de los elementos quimicos en los seres vivos **/
            // 1
            [
                "question"          => "¿Cómo se les llama a los elementos que forman parte de los seres vivos?",
                "exam_id"           => $imp_tb_id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "¿Cuáles son los bioelementos en los seres vivos?",
                "exam_id"           => $imp_tb_id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "El 97.90% de la materia que forma a los seres vivos está compuesta en su mayoría por la combinación de 6 elementos ¿Cuáles son?",
                "exam_id"           => $imp_tb_id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "¿Cuál de los bioelementos forma parte de los ciclos de la tierra, el intercambio atmosférico, y además hace parte de la respiración de los seres vivos?",
                "exam_id"           => $imp_tb_id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "¿Cuál bioelemento forma parte de uno de los componentes del agua?",
                "exam_id"           => $imp_tb_id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "Este bioelemento es de utilidad en el proceso de la respiración:",
                "exam_id"           => $imp_tb_id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "Este bioelemento forma parte de las proteínas, ya que forma parte de todos los aminoácidos:",
                "exam_id"           => $imp_tb_id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "Además de los bioelementos, existen otros elementos que en cantidades extremadamente pequeñas se encuentran en nuestro organismo ¿Cómo se les llama?",
                "exam_id"           => $imp_tb_id,
                "order"             => 8,
            ],


        ];
    }

}
