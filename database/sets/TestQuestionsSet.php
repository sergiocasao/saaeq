<?php

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Exam;

class TestQuestionsSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Test Questions";

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

        $test_exam = Exam::testExam()->get()->first();

        return [
            // 1
            [
                "question"          => "Entiendo mejor algo",
                "exam_id"           => $test_exam->id,
                "order"             => 1,
            ],
            // 2
            [
                "question"          => "Me considero",
                "exam_id"           => $test_exam->id,
                "order"             => 2,
            ],
            // 3
            [
                "question"          => "Cuando pienso acerca de lo que hice ayer, es más probable que lo haga sobre la base de",
                "exam_id"           => $test_exam->id,
                "order"             => 3,
            ],
            // 4
            [
                "question"          => "Tengo tendencia a",
                "exam_id"           => $test_exam->id,
                "order"             => 4,
            ],
            // 5
            [
                "question"          => "Cuando estoy aprendiendo algo nuevo, me ayuda",
                "exam_id"           => $test_exam->id,
                "order"             => 5,
            ],
            // 6
            [
                "question"          => "Si yo fuera profesor, yo preferiría dar un curso",
                "exam_id"           => $test_exam->id,
                "order"             => 6,
            ],
            // 7
            [
                "question"          => "Prefiero obtener información nueva de",
                "exam_id"           => $test_exam->id,
                "order"             => 7,
            ],
            // 8
            [
                "question"          => "Una vez que entiendo",
                "exam_id"           => $test_exam->id,
                "order"             => 8,
            ],
            // 9
            [
                "question"          => "En un grupo de estudio que trabaja con un material difícil, es más probable que",
                "exam_id"           => $test_exam->id,
                "order"             => 9,
            ],
            // 10
            [
                "question"          => "Es más fácil para mí",
                "exam_id"           => $test_exam->id,
                "order"             => 10,
            ],
            // 11
            [
                "question"          => "En un libro con muchas imágenes y gráficas es más probable que",
                "exam_id"           => $test_exam->id,
                "order"             => 11,
            ],
            // 12
            [
                "question"          => "Cuando resuelvo problemas de matemáticas",
                "exam_id"           => $test_exam->id,
                "order"             => 12,
            ],
            // 13
            [
                "question"          => "En las clases a las que he asistido",
                "exam_id"           => $test_exam->id,
                "order"             => 13,
            ],
            // 14
            [
                "question"          => "Cuando leo temas que no son de ficción, prefiero",
                "exam_id"           => $test_exam->id,
                "order"             => 14,
            ],
            // 15
            [
                "question"          => "Me gustan los maestros",
                "exam_id"           => $test_exam->id,
                "order"             => 15,
            ],
            // 16
            [
                "question"          => "Cuando estoy analizando un cuento o una novela",
                "exam_id"           => $test_exam->id,
                "order"             => 16,
            ],
            // 17
            [
                "question"          => "Cuando comienzo a resolver un problema de tarea, es más probable que",
                "exam_id"           => $test_exam->id,
                "order"             => 17,
            ],
            // 18
            [
                "question"          => "Prefiero la idea de",
                "exam_id"           => $test_exam->id,
                "order"             => 18,
            ],
            // 19
            [
                "question"          => "Recuerdo mejor",
                "exam_id"           => $test_exam->id,
                "order"             => 19,
            ],
            // 20
            [
                "question"          => "Es más importante para mí que un profesor",
                "exam_id"           => $test_exam->id,
                "order"             => 20,
            ],
            // 21
            [
                "question"          => "Prefiero estudiar",
                "exam_id"           => $test_exam->id,
                "order"             => 21,
            ],
            // 22
            [
                "question"          => "Me considero",
                "exam_id"           => $test_exam->id,
                "order"             => 22,
            ],
            // 23
            [
                "question"          => "Cuando alguien me da direcciones de nuevos lugares, prefiero",
                "exam_id"           => $test_exam->id,
                "order"             => 23,
            ],
            // 24
            [
                "question"          => "Aprendo",
                "exam_id"           => $test_exam->id,
                "order"             => 24,
            ],
            // 25
            [
                "question"          => "Prefiero primero",
                "exam_id"           => $test_exam->id,
                "order"             => 25,
            ],
            // 26
            [
                "question"          => "Cuando leo por diversión, me gustan los escritores que",
                "exam_id"           => $test_exam->id,
                "order"             => 26,
            ],
            // 27
            [
                "question"          => "Cuando veo un esquema o bosquejo en clase, es más probable que recuerde",
                "exam_id"           => $test_exam->id,
                "order"             => 27,
            ],
            // 28
            [
                "question"          => "Cuando me enfrento a un cuerpo de información",
                "exam_id"           => $test_exam->id,
                "order"             => 28,
            ],
            // 29
            [
                "question"          => "Recuerdo más fácilmente",
                "exam_id"           => $test_exam->id,
                "order"             => 29,
            ],
            // 30
            [
                "question"          => "Cuando tengo que hacer un trabajo, prefiero",
                "exam_id"           => $test_exam->id,
                "order"             => 30,
            ],
            // 31
            [
                "question"          => "Cuando alguien me enseña datos, prefiero",
                "exam_id"           => $test_exam->id,
                "order"             => 31,
            ],
            // 32
            [
                "question"          => "Cuando escribo un trabajo, es más probable que ",
                "exam_id"           => $test_exam->id,
                "order"             => 32,
            ],
            // 33
            [
                "question"          => "Cuando tengo que trabajar en un proyecto de grupo, primero quiero",
                "exam_id"           => $test_exam->id,
                "order"             => 33,
            ],
            // 34
            [
                "question"          => "Considero que es mejor elogio llamar a alguien",
                "exam_id"           => $test_exam->id,
                "order"             => 34,
            ],
            // 35
            [
                "question"          => "Cuando conozco gente en una fiesta, es más probable que recuerde",
                "exam_id"           => $test_exam->id,
                "order"             => 35,
            ],
            // 36
            [
                "question"          => "Cuando estoy aprendiendo un tema, prefiero",
                "exam_id"           => $test_exam->id,
                "order"             => 36,
            ],
            // 37
            [
                "question"          => "Me considero",
                "exam_id"           => $test_exam->id,
                "order"             => 37,
            ],
            // 38
            [
                "question"          => "Prefiero cursos que dan más importancia a",
                "exam_id"           => $test_exam->id,
                "order"             => 38,
            ],
            // 39
            [
                "question"          => "Para divertirme, prefiero",
                "exam_id"           => $test_exam->id,
                "order"             => 39,
            ],
            // 40
            [
                "question"          => "Algunos profesores inician sus clases haciendo un bosquejo de lo que enseñarán. Esos bosquejos son",
                "exam_id"           => $test_exam->id,
                "order"             => 40,
            ],
            // 41
            [
                "question"          => "La idea de hacer una tarea en grupo con una sola calificación para todos",
                "exam_id"           => $test_exam->id,
                "order"             => 41,
            ],
            // 42
            [
                "question"          => "Cuando hago grandes cálculos",
                "exam_id"           => $test_exam->id,
                "order"             => 42,
            ],
            // 43
            [
                "question"          => "Tiendo a recordar lugares en los que he estado",
                "exam_id"           => $test_exam->id,
                "order"             => 43,
            ],
            // 44
            [
                "question"          => "Cuando resuelvo problemas en grupo, es más probable que yo",
                "exam_id"           => $test_exam->id,
                "order"             => 44,
            ],
        ];
    }

}
