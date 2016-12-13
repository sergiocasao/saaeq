<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Test\Question;
use App\Models\Test\Answer;
use App\LearnType;

class TestAnswersSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Test Answers";

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
            // 1
            [
                "answer"            => "Si lo practico.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(1)->id,
            ],
            [
                "answer"            => "Si pienso en ello.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(1)->id,
            ],
            // 2
            [
                "answer"            => "Realista.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(2)->id,
            ],
            [
                "answer"            => "Innovador.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(2)->id,
            ],
            // 3
            [
                "answer"            => "Una imagen.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(3)->id,
            ],
            [
                "answer"            => "Palabras.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(3)->id,
            ],
            // 4
            [
                "answer"            => "Entender los detalles de un tema pero no ver claramente su estructura completa.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(4)->id,
            ],
            [
                "answer"            => "Entender la estructura completa pero no ver claramente los detalles.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(4)->id,
            ],
            // 5
            [
                "answer"            => "Hablar de ello.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(5)->id,
            ],
            [
                "answer"            => "Pensar en ello.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(5)->id,
            ],
            // 6
            [
                "answer"            => "Que trate sobre hechos y situaciones reales de la vida.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(6)->id,
            ],
            [
                "answer"            => "Que trate con ideas y teorías.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(6)->id,
            ],
            // 7
            [
                "answer"            => "Imágenes, diagramas, gráficas o mapas.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(7)->id,
            ],
            [
                "answer"            => "Instrucciones escritas o información verbal.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(7)->id,
            ],
            // 8
            [
                "answer"            => "Todas las partes, entiendo el total.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(8)->id,
            ],
            [
                "answer"            => "El total de algo, entiendo como encajan sus partes.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(8)->id,
            ],
            // 9
            [
                "answer"            => "Participe y contribuya con ideas.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(9)->id,
            ],
            [
                "answer"            => "No participe y solo escuche.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(9)->id,
            ],
            // 10
            [
                "answer"            => "Aprender hechos.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(10)->id,
            ],
            [
                "answer"            => "Aprender conceptos.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(10)->id,
            ],
            // 11
            [
                "answer"            => "Revise cuidadosamente las imágenes y las gráficas.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(11)->id,
            ],
            [
                "answer"            => "Me concentre en el texto escrito",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(11)->id,
            ],
            // 12
            [
                "answer"            => "Generalmente trabajo sobre las soluciones con un paso a la vez.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(12)->id,
            ],
            [
                "answer"            => "Frecuentemente sé cuales son las soluciones, pero luego tengo dificultad  para imaginarme los pasos para llegar a ellas.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(12)->id,
            ],
            // 13
            [
                "answer"            => "He llegado a saber como son muchos de los estudiantes. ",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(13)->id,
            ],
            [
                "answer"            => "Raramente he llegado a saber como son muchos estudiantes.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(13)->id,
            ],
            // 14
            [
                "answer"            => "Algo que me enseñe nuevos hechos o me diga como hacer algo.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(14)->id,
            ],
            [
                "answer"            => "Algo que me de nuevas ideas en que pensar.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(14)->id,
            ],
            // 15
            [
                "answer"            => "Que utilizan muchos esquemas en el pizarrón.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(15)->id,
            ],
            [
                "answer"            => "Que toman mucho tiempo para explicar.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(15)->id,
            ],
            // 16
            [
                "answer"            => "Pienso en los incidentes y trato de acomodarlos para configurar los temas.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(16)->id,
            ],
            [
                "answer"            => "Me doy cuenta de cuales son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(16)->id,
            ],
            // 17
            [
                "answer"            => "Comience a trabajar en su solución inmediatamente.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(17)->id,
            ],
            [
                "answer"            => "Primero trate de entender completamente el problema.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(17)->id,
            ],
            // 18
            [
                "answer"            => "Certeza.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(18)->id,
            ],
            [
                "answer"            => "Teoría.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(18)->id,
            ],
            // 19
            [
                "answer"            => "Lo que veo.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(19)->id,
            ],
            [
                "answer"            => "Lo que oigo.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(19)->id,
            ],
            // 20
            [
                "answer"            => "Exponga el material en pasos secuenciales claros.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(20)->id,
            ],
            [
                "answer"            => "Me dé un panorama general y relacione el material con otros temas.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(20)->id,
            ],
            // 21
            [
                "answer"            => "En un grupo de estudio.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(21)->id,
            ],
            [
                "answer"            => "Solo.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(21)->id,
            ],
            // 22
            [
                "answer"            => "Cuidadoso en los detalles de mi trabajo.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(22)->id,
            ],
            [
                "answer"            => "Creativo en la forma en la que hago mi trabajo.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(22)->id,
            ],
            // 23
            [
                "answer"            => "Un mapa.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(23)->id,
            ],
            [
                "answer"            => "Instrucciones escritas.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(23)->id,
            ],
            // 24
            [
                "answer"            => "A un paso constante. Si estudio con ahínco consigo lo que deseo.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(24)->id,
            ],
            [
                "answer"            => "En inicios y pausas. Me llego a confundir y súbitamente lo entiendo.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(24)->id,
            ],
            // 25
            [
                "answer"            => "Hacer algo y ver que sucede.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(25)->id,
            ],
            [
                "answer"            => "Pensar como voy a hacer algo.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(25)->id,
            ],
            // 26
            [
                "answer"            => "Dicen claramente los que desean dar a entender.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(26)->id,
            ],
            [
                "answer"            => "Dicen las cosas en forma creativa e interesante.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(26)->id,
            ],
            // 27
            [
                "answer"            => "La imagen.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(27)->id,
            ],
            [
                "answer"            => "Cuando me enfrento a un cuerpo de información",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(27)->id,
            ],
            // 28
            [
                "answer"            => "Me concentro en los detalles y pierdo de vista el total de la misma.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(28)->id,
            ],
            [
                "answer"            => "Trato de entender el todo antes de ir a los detalles.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(28)->id,
            ],
            // 29
            [
                "answer"            => "Algo que he hecho.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(29)->id,
            ],
            [
                "answer"            => "Algo en lo que he pensado mucho.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(29)->id,
            ],
            // 30
            [
                "answer"            => "Dominar una forma de hacerlo.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(30)->id,
            ],
            [
                "answer"            => "Intentar nuevas formas de hacerlo.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(30)->id,
            ],
            // 31
            [
                "answer"            => "Gráficas.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(31)->id,
            ],
            [
                "answer"            => "Resúmenes con texto.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(31)->id,
            ],
            // 32
            [
                "answer"            => "Lo haga ( piense o escriba) desde el principio y avance.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(32)->id,
            ],
            [
                "answer"            => "Lo haga (piense o escriba) en diferentes partes y luego las ordene.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(32)->id,
            ],
            // 33
            [
                "answer"            => "Realizar una 'tormenta de ideas' donde cada uno contribuye con ideas.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(33)->id,
            ],
            [
                "answer"            => "Realizar la 'tormenta de ideas' en forma personal y luego juntarme con el grupo para comparar las ideas.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(33)->id,
            ],
            // 34
            [
                "answer"            => "Sensible.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(34)->id,
            ],
            [
                "answer"            => "Imaginativo.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(34)->id,
            ],
            // 35
            [
                "answer"            => "Cómo es su apariencia.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(35)->id,
            ],
            [
                "answer"            => "Lo que dicen de sí mismos.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(35)->id,
            ],
            // 36
            [
                "answer"            => "Mantenerme concentrado en ese tema, aprendiendo lo más que pueda de él.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(36)->id,
            ],
            [
                "answer"            => "Hacer conexiones entre ese tema y temas relacionados.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(36)->id,
            ],
            // 37
            [
                "answer"            => "Abierto.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(37)->id,
            ],
            [
                "answer"            => "Reservado.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(37)->id,
            ],
            // 38
            [
                "answer"            => "Material concreto (hechos, datos).",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(38)->id,
            ],
            [
                "answer"            => "Material abstracto (conceptos, teorías).",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(38)->id,
            ],
            // 39
            [
                "answer"            => "Ver televisión.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(39)->id,
            ],
            [
                "answer"            => "Leer un libro.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(39)->id,
            ],
            // 40
            [
                "answer"            => "Algo útiles para mí.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(40)->id,
            ],
            [
                "answer"            => "Muy útiles para mí.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(40)->id,
            ],
            // 41
            [
                "answer"            => "Me parece bien.",
                "learn_type_id"     => LearnType::getObjectBySlug('activo')->id,
                "question_id"       => Question::find(41)->id,
            ],
            [
                "answer"            => "No me parece bien.",
                "learn_type_id"     => LearnType::getObjectBySlug('reflexivo')->id,
                "question_id"       => Question::find(41)->id,
            ],
            // 42
            [
                "answer"            => "Tiendo a repetir todos mis pasos y revisar cuidadosamente mi trabajo.",
                "learn_type_id"     => LearnType::getObjectBySlug('sensorial')->id,
                "question_id"       => Question::find(42)->id,
            ],
            [
                "answer"            => "Me cansa hacer su revisión y tengo que esforzarme para hacerlo.",
                "learn_type_id"     => LearnType::getObjectBySlug('intuitivo')->id,
                "question_id"       => Question::find(42)->id,
            ],
            // 43
            [
                "answer"            => "Fácilmente y con bastante exactitud.",
                "learn_type_id"     => LearnType::getObjectBySlug('visual')->id,
                "question_id"       => Question::find(43)->id,
            ],
            [
                "answer"            => "Con dificultad y sin mucho detalle.",
                "learn_type_id"     => LearnType::getObjectBySlug('verbal')->id,
                "question_id"       => Question::find(43)->id,
            ],
            // 44
            [
                "answer"            => "Piense en los pasos para la solución de los problemas.",
                "learn_type_id"     => LearnType::getObjectBySlug('secuencial')->id,
                "question_id"       => Question::find(44)->id,
            ],
            [
                "answer"            => "Piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de campos.",
                "learn_type_id"     => LearnType::getObjectBySlug('global')->id,
                "question_id"       => Question::find(44)->id,
            ],

        ];
    }

}
