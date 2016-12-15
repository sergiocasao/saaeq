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

        $bingo = '<h1>Bingo Quimico</h1>
    		<p>
    		Una forma divertida de jugar con los elementos y de que se familiaricen con los símbolos químicos y su ubicación dentro de la tabla periodica es la construcción de un “Bingo químico”. </p>
    		<p> Previamente se te pedira que realices una investigacion de las propiedades de los elementos.</p>
    		<p>La realización de los cartones con los diferentes elementos y las fichas que saldrán al azar es un proceso sencillo y que nos llevara poco tiempo.</p>
    		</p>
    		<p>
    		Instrucciones</p>
    		<p> Empezar a cortar tres pedazos de cartón del tamaño que desees hacer las loterías y hacerle una margen de un centímetro de ancho y de largo.</p>
    		<p> Hacerle una margen de medio centímetro de largo y ancho por dentro de la anterior margen y empezar a dividir las tablas, cada cuadro de ocho centímetros y medio dejando de espacio medio centímetro que separan cada cuadro.
    		</p>
    		<p>
    		Vamos a colocar el nombre o simbolo del color que guste cada cuadro de la tabla.</p>
    		<p>Las tablas las podemos llenar por grupos, periodos y bloques para que los alumnos vallan identificando la posicion del elemento en la tabla.</p>
    		<p> Vamos a realizar unos cuadros de carton de 10 cm para que nos sirvan como cartas de nuestro bingo.</p>
    		<p>A cada uno de estos cuadros hay que colocar el nombre del elemento, su simbolo, grupo, bloque y periodo al que pertenecen.</p>
    		<p>Una vez realizado nuestro material comencemos a jugar</p>
    		<img src="/images/Bingo.jpg">
    		<p>Reglas del juego</p>
    		<p>Se repartiran las tablas de nuestro bingo a cada jugador, ya sea individual o por un pequeño grupo.</p>
    		<p>Cada jugador tendra alguna semilla, o bolitas de papel para ir llenando nuestra tabla.</p>
    		</p>
    		<p>
    		Una persona tendra las cartas de 10 cm de todos los elementos, la cual sera la encargada de ir mencionando las propiedades cada elemento al azar y por ultimo su nombre para que se vallan familiarizando con el elemento.</p>
     		<p>Listo es hora de aprender jugando.</p>
    		</p>';

        $tabla3D = '<h1>Tabla en 3D</h1>
                    <p>
                    El proyecto consiste en realizar entre toda la clase una tabla periódica en tres dimensiones a
                    modo de rompecabezas, en donde cada casilla es un cubo y en cada cara se representan
                    distintas características de cada elemento:</p>
                    <p>1.Nombre</p>
                    <p>2. Símbolo</p>
                    <p>3. Numero atómico</p>
                    <p>4. Fotografía del elemento</p>
                    <p>5.Representación de alimentos en que abunde dicho elemento, medicamentos en cuya
                    composición se encuentre dicho elemento, materiales de dicho elemento, etc….en la
                    vida cotidiana.</p>
                    <p>Grupo y periodo</p>
                    <p>Se diferenciará con cartulinas de distintos colores los metales (amarillo), los metaloides
                    (naranja), los no metales (rojo) y los gases nobles (verde). El blanco para los cubos que no
                    tienen elementos asignados.
                    </p>
                    <p>El trabajo se realizará en 4 sesiones a lo largo de la segunda evaluación.</p>
                    <p>	Material y recursos necesarios:</p>
                    <p> Cartulinas de tamaño A4, de distintos colores: blanco, amarillo, naranja, rojo y
                    verde.</p>
                    <p>Pegamento y tijeras</p>
                    <P> Plantillas de un cubo:</P>
                    <img src="/images/plantilla_dado.jpg">
                    <p>Repartir entre los alumnos de la clase las plantilla de un cubo en un folio A4, y las cartulinas de colores./p>
                    <p>Se asigna a cada alumno dos o tres elementos químicos (grupos 1 al 18 y
                    periodos del 1 al 7.</p>
                    <p> Se explica el significado de los colores de las cartulinas y lo que deben representar
                    en cada cara del cubo. Por ejemplo metales, no metales, gases nobles, etc.</p>
                    <p>Se inicia la elaboración del cubo (deben calcar la plantilla en cada cartulina).</p>
                    <p>Deben buscar información de los elementos y plasmarlos en cada una de las caras</p>
                    <p>En estas fotografías se puede ver a los alumnos realizando los cubos:</p>
                    <img src="/images/cuadros.jpg">
                    <p>Reglas del juego</p>
                    <p>Los participantes tendran una cantidad X de cubos según requiera.</p>
                    <p>El encargado de la actividad, ira mencionando los elemetos de la tabla periodica</p>
                    <p>Pero los ira mencionando de manera descendente comenzando por el elemento 118</p>
                    <p>Donde el participante que tenga ese elemento, tendra que ir mencionando las propidades de las caras del cubo</p>
                    <p>De esta manera una vez que se esten mencionando se ira acomodando en el piso recargado a la pared, con la cara del simbolo hacia adelante</p>
                    <p>asi sera sucesivamente hasta que la tabla periodica este armada completamente</p>
                    <img src="/images/tabla_armada.jpg">
                    <p>Listo es hora de aprender jugando.</p>';

        return [
            // Historia de la tabla periodica
            [
                'processing_learn_type_id'      => App\LearnType::slug('reflexivo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('historia-de-la-tabla-periodica','antecedentes-de-la-tabla-periodica' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('historia-de-la-tabla-periodica','aportadores-de-la-tabla' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('historia-de-la-tabla-periodica','historia-de-la-tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('historia-de-la-tabla-periodica','historia-de-la-tabla' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('historia-de-la-tabla-periodica','historia-de-mendeleiev' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('historia-de-la-tabla-periodica','introduccion-a-la-tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('historia-de-la-tabla-periodica')->id,
                'video'                         => null,
                'default'                       => 0,
                'content'                       => '
                    <h1>Historia de la tabla periódica</h1>
            		<p>Desde la antigüedad, los hombres se han preguntado de qué están hechas las cosas. El primero del que tenemos noticias fue un pensador griego, Tales de Mileto, quien en el siglo VII antes de Cristo, afirmó que todo estaba constituido a partir de agua, que enrareciéndose o solidificándose formaba todas las sustancias conocidas. Con posterioridad, otros pensadores griegos supusieron que la sustancia primigenia era otra. Así, Anaxímenes, en al siglo VI a. C. creía que era el aire y Heráclito el fuego.</p>
            		<p>En el siglo V, Empédocles reunió las teorías de sus predecesores y propuso no una, sino cuatro sustancias primordiales, los cuatro elementos: Aire, agua, tierra y fuego. La unión de estos cuatro elementos, en distinta proporción, daba lugar a la vasta variedad de sustancias distintas que se presentan en la naturaleza. </p>
            		<p>Aristóteles, añadió a estos cuatro elementos un quinto: el quinto elemento, el éter o quintaesencia, que formaba las estrellas, mientras que los otros cuatro formaban las sustancias terrestres. Tras la muerte de Aristóteles, gracias a las conquistas de Alejandro Magno, sus ideas se propagaron por todo el mundo conocido, desde España, en occidente, hasta la India, en el oriente. La mezcla de las teorías de Aristóteles con los conocimientos prácticos de los pueblos conquistados hicieron surgir una nueva idea: La alquimia. </p>
            		<p>Cuando se fundían ciertas piedras con carbón, las piedras se convertían en metales, al calentar arena y caliza se formaba vidrio y similarmente muchas sustancias se transformaban en otras. Los alquimistas suponían que puesto que todas las sustancias estaban formadas por los cuatro elementos de Empédocles, se podría, a partir de cualquier sustancia, cambiar su composición y convertirla en oro, el más valioso de los metales de la antigüedad. Durante siglos, los alquimistas intentaron encontrar, evidentemente en vano, una sustancia, la piedra filosofal, que transformaba las sustancias que tocaba en oro, y a la que atribuían propiedades maravillosas y mágicas. </p>
            		<p>Las conquistas árabes del siglo VII y VIII pusieron en contacto a éste pueblo con las ideas alquimistas, que adoptaron y expandieron por el mundo, y cuando Europa, tras la caída del imperio romano cayó en la incultura, fueron los árabes, gracias a sus conquistas en España e Italia, los que difundieron en ella la cultura clásica. El más importante alquimista árabe fue Yabir (también conocido como Geber) funcionario de Harún al-Raschid (el califa de Las mil y una noches) y de su visir Jafar (el conocido malvado de la película de Disney). Geber añadió dos nuevos elementos a la lista: el mercurio y el azufre. La mezcla de ambos, en distintas proporciones, originaba todos los metales. Fueron los árabes los que llamaron a la piedra filosofal al-iksir y de ahí deriva la palabra elixir. </p>
            		<p>Aunque los esfuerzos de los alquimistas eran vanos, su trabajo no lo fue. Descubrieron el antimonio, el bismuto, el zinc, los, ácidos fuertes, las bases o álcalis (palabra que también deriva del árabe), y cientos de compuestos químicos. El último gran alquimista, en el siglo XVI, Theophrastus Bombastus von Hohenheim, más conocido como Paracelso, natural de suiza, introdujo un nuevo elemento, la sal. </p>
            		<p>Robert Boyle, en el siglo XVII, desechó todas las ideas de los elementos alquímicos y definió los elementos químicos como aquellas sustancias que no podían ser descompuestas en otras más simples. Fue la primera definición moderna y válida de elemento y el nacimiento de una nueva ciencia: La Química. Durante los siglos siguientes, los químicos, olvidados ya de las ideas alquimistas y aplicando el método científico, descubrieron nuevos e importantes principios químicos, las leyes que gobiernan las transformaciones químicos y sus principios fundamentales. Al mismo tiempo, se descubrían nuevos elementos químicos.</p>
            		<p>Apenas iniciado el siglo XIX, Dalton, recordando las ideas de un filósofo griego, Demócrito, propuso la teoría atómica, según la cual, cada elemento estaba formado un tipo especial de átomo, de forma que todos los átomos de un elemento eran iguales entre sí, en tamaño, forma y peso, y distinto de los átomos de los distintos elementos. Fue el comienzo de la formulación y nomenclatura Química, que ya había avanzado a finales del siglo XVIII Lavoisier.</p>
            		<p>Conocer las propiedades de los átomos, y en especial su peso, se transformó en la tarea fundamental de la química y, gracias a las ideas de Avogadro y Cannizaro, durante la primera mitad del siglo XIX, gran parte de la labor química consistió en determinar los pesos de los átomos y las formulas químicas de muchos compuestos. </p>
            		<p>Al mismo tiempo, se iban descubriendo más y más elementos. En la década de 1860 se conocían más de 60 elementos, y saber las propiedades de todos ellos, era imposible para cualquier químico, pero muy importante para poder realizar su trabajo. Ya en 1829, un químico alemán, Döbereiner, se percató que algunos elementos debían guardar cierto orden. Así, el calcio, estroncio y bario formaban compuestos de composición similar y con propiedades similares, de forma que las propiedades del estroncio eran intermedias entre las del calcio y las del bario. Otro tanto ocurría con el azufre, selenio y teluro (las propiedades del selenio eran intermedias entre las del azufre y el teluro) y con el cloro, bromo y iodo (en este caso, el elemento intermedio era el bromo). Es lo que se conoce como tríadas de Döbereiner. Las ideas de Döbereiner cayeron en el olvido, aunque muchos químicos intentaron buscar una relación entre las propiedades de los elementos. </p>
            		<p>En 1864, un químico ingles, Newlands, descubrió que al ordenar los elementos según su peso atómico, el octavo elemento tenía propiedades similares al primero, el noveno al segundo y así sucesivamente, cada ocho elementos, las propiedades se repetían, lo denominó ley de las octavas, recordando los periodos musicales. Pero las octavas de Newlands no se cumplían siempre, tras las primeras octavas la ley dejaba de cumplirse.</p>
            		<p>En 1864, un químico ingles, Newlands, descubrió que al ordenar los elementos según su peso atómico, el octavo elemento tenía propiedades similares al primero, el noveno al segundo y así sucesivamente, cada ocho elementos, las propiedades se repetían, lo denominó ley de las octavas, recordando los periodos musicales. Pero las octavas de Newlands no se cumplían siempre, tras las primeras octavas la ley dejaba de cumplirse.</p>
            		<p>En tres de los huecos, predijo las propiedades de los elementos que habrían de descubrirse (denominándolos ekaboro, ekaaluminio y ekasilicio), cuando años más tarde se descubrieron el escandio, el galio y el germanio, cuyas propiedades se correspondían con las predichas por Mendeleyev, y se descubrió un nuevo grupo de elementos (los gases nobles) que encontró acomodo en la tabla de Mendeleyev, se puso de manifiesto no sólo la veracidad de la ley periódica, sino la importancia y utilidad de la tabla periódica.</p>
             		<p>La tabla periódica era útil y permitía predecir las propiedades de los elementos, pero no seguía el orden de los pesos atómicos. Hasta los comienzos de este siglo, cuando físicos como Rutherford, Borh y Heisemberg pusieron de manifiesto la estructura interna del átomo, no se comprendió la naturaleza del orden periódico. Pero eso, eso es otra historia.... </p>
                ',
            ],
            // Tabla periodica y su uso.
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getVideo('tabla-periodica-y-su-uso','la-tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('reflexivo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getVideo('tabla-periodica-y-su-uso','la-tabla-periodica-y-su-uso' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getVideo('tabla-periodica-y-su-uso','tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('tabla-periodica-y-su-uso')->id,
                'video'                         => Content::getVideo('tabla-periodica-y-su-uso','regularidades-de-la-tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            // Regularidades
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('regularidades-de-la-tabla-periodica','partes-de-la-tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('regularidades-de-la-tabla-periodica','regularidades-de-la-tabla' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('regularidades-de-la-tabla-periodica','regularidades' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('regularidades-de-la-tabla-periodica','regularidades-de-la-tabla-periodica' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('reflexivo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('regularidades-de-la-tabla-periodica','regularidades-de-la-tabla-periodica-1' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => null,
                'default'                       => 0,
                'content'                       => $bingo,
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('regularidades-de-la-tabla-periodica')->id,
                'video'                         => null,
                'default'                       => 0,
                'content'                       => $tabla3D,
            ],
            //  bloques-y-periodos-de-la-tabla-periodica
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('bloques-y-periodos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('bloques-y-periodos-de-la-tabla-periodica','grupo-2' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            // Elemnetos de la tabla periodica
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','descubrimiento-de-los-elementos' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','grupo-1' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','grupo-2' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','grupo-3' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','grupo-4' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','grupo-5' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('elementos-de-la-tabla-periodica')->id,
                'video'                         => Content::getVideo('elementos-de-la-tabla-periodica','grupo-6' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            // importancia-de-los-elementos-quimicos-en-los-seres-vivos
            [
                'processing_learn_type_id'      => App\LearnType::slug('reflexivo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos','imp-en-los-seres-vivos-2' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos','imp-en-los-seres-vivos' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('reflexivo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('global')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos','importancia-de-los-elementos-en-los-seres' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('importancia-de-los-elementos-quimicos-en-los-seres-vivos')->id,
                'video'                         => Content::getVideo('importancia-de-los-elementos-quimicos-en-los-seres-vivos','importancia-de-los-elementos-quimicos-para-los-seres-vivos' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            // Propiedades los metales
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transicion')->id,
                'video'                         => Content::getVideo('propiedades-de-los-metales-no-metales-y-metales-de-transicion','metales-no-metales-y-metaloides' ),
                'default'                       => 1,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('reflexivo')->get()->first()->id,
                'representation_learn_type_id'  => null,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transicion')->id,
                'video'                         => Content::getVideo('propiedades-de-los-metales-no-metales-y-metales-de-transicion','prop-de-los-metales' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => App\LearnType::slug('activo')->get()->first()->id,
                'representation_learn_type_id'  => App\LearnType::slug('visual')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => App\LearnType::slug('secuencial')->get()->first()->id,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transicion')->id,
                'video'                         => Content::getVideo('propiedades-de-los-metales-no-metales-y-metales-de-transicion','metaloides' ),
                'default'                       => 0,
                'content'                       => '',
            ],
            [
                'processing_learn_type_id'      => null,
                'representation_learn_type_id'  => App\LearnType::slug('verbal')->get()->first()->id,
                'perception_learn_type_id'      => null,
                'comprenhention_learn_type_id'  => null,
                'theme_id'                      => Theme::getObjectBySlug('propiedades-de-los-metales-no-metales-y-metales-de-transicion')->id,
                'video'                         => Content::getVideo('propiedades-de-los-metales-no-metales-y-metales-de-transicion','propiedades-de-los-metales' ),
                'default'                       => 0,
                'content'                       => '',
            ],

        ];
    }

}
