<?php 
	include_once("../../controladores/ControladorTest.php");
	use Controladores;
	$controlador=new Controladores\ControladorTest();
	$aux=0;
	$res = array("d1" => array("A"=>0) , "d2" => array("A"=>0), "d3" => array("A"=>0), "d4" => array("A"=>0));
	function conteo($x,$i)
	{
		global $res;
		$aux=$_POST['p'.$i];
		if ($aux=='A') 
		{
			++$res["d".$x][A];
		}
	}
	if(isset($_POST['enviarTest']))
	{
		for ($i=1; $i <= 44 ; $i++) 
		{ 
			if($i%4==1)
			{
				//dimension Activo-Reflexivo
				conteo(1,$i);
			}
			else if($i%4==2)
			{
				conteo(2,$i);
			}
			else if($i%4==3)
			{
				conteo(3,$i);
			}
			else if($i%4==0)
			{
				conteo(4,$i);
			}
		}
		$res=$controlador->guardaResultado($res);
		if($res)
		{
			header("Location: restest.php");
			exit();
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test ILS</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet" rel="stylesheet">
	<link rel="stylesheet" href="../css/teststyles.css">
</head>
<body>
	<heder class="header">
		<a href="Bienvenida.html"><img src="../images/logo.png" alt="logo.png" width="60"/></a>
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
	</heder>
	<div class="main-container">
		<div class="test-container">
			<h2>
				Test ILS (Index Learning Styles)
			</h2>
			<hr>
			<form action="" method="post">
				<span>
					1. Entiendo mejor algo después de:
				</span>
				<label for="q11">
					<input type="radio" required id="q11" name="p1" value="A">Intentar hacerlo
				</label>
				<label for="q12">
					<input type="radio" required id="q12" name="p1" value="B">Pensar sobre ello
				</label>

				<span>
					2. Prefiero ser considerado:
				</span>
				<label for="q21">
					<input type="radio" required id="q21" name="p2" value="A">Realista
				</label>
				<label for="q22">
					<input type="radio" required id="q22" name="p2" value="B">Innovador
				</label>

				<span>
					3. Cuando pienso en lo que hice ayer, mi recuerdo es muy posiblemente:
				</span>
				<label for="q31">
					<input type="radio" required id="q31" name="p3" value="A">Una imagen
				</label>
				<label for="q32">
					<input type="radio" required id="q32" name="p3" value="B">Palabras
				</label>

				<span>
					4. Tiendo a:
				</span>
				<label for="q41">
					<input type="radio" required id="q41" name="p4" value="A">Entender los detalles de un tema, pero a confundirme con la estructura global
				</label>
				<label for="q42">
					<input type="radio" required id="q42" name="p4" value="B">Entender la estructura global, pero a confundirme con los detalles
				</label>

				<span>
					5. Cuando estoy aprendiendo algo nuevo, me ayuda:
				</span>
				<label for="q51">
					<input type="radio" required id="q51" name="p5" value="A">Hablar sobre eso
				</label>
				<label for="q52">
					<input type="radio" required id="q52" name="p5" value="B">Pensar sobre eso
				</label>

				<span>
					6. Si fuera un profesor, preferiría enseñar un curso:
				</span>
				<label for="q61">
					<input type="radio" required id="q61" name="p6" value="A">Que trate sobre hechos y situaciones de la vida real
				</label>
				<label for="q62">
					<input type="radio" required id="q62" name="p6" value="B">Que trate sobre ideas y teorías
				</label>
				
				<span>
					7. Prefiero obtener información nueva en:
				</span>
				<label for="q71">
					<input type="radio" required id="q71" name="p7" value="A">Imágenes, diagramas, gráficas o mapas
				</label>
				<label for="q72">
					<input type="radio" required id="q72" name="p7" value="B">Instrucciones escritas o información verbal
				</label>

				<span>
					8. Una vez que entiendo:
				</span>
				<label for="q81">
					<input type="radio" required id="q81" name="p8" value="A">Todas las partes, entiendo el contenido total
				</label>
				<label for="q82">
					<input type="radio" required id="q82" name="p8" value="B">El contenido total, veo como encajan sus partes
				</label>

				<span>
					9. En un grupo de estudio que trabaja con un material difícil, es mas probable que:
				</span>
				<label for="q91">
					<input type="radio" required id="q91" name="p9" value="A">Participe y contribuya con ideas
				</label>
				<label for="q92">
					<input type="radio" required id="q92" name="p9" value="B">Me siente y escuche
				</label>

				<span>
					10. Encuentro más fácil:
				</span>
				<label for="q101">
					<input type="radio" required id="q101" name="p10" value="A">Aprender hechos
				</label>
				<label for="q102">
					<input type="radio" required id="q102" name="p10" value="B">Aprender conceptos
				</label>

				<span>
					11. En un libro con muchas imágenes y gráficas, es más probable que:
				</span>
				<label for="q111">
					<input type="radio" required id="q111" name="p11" value="A">Revise cuidadosamente las imágenes y las gráficas
				</label>
				<label for="q112">
					<input type="radio" required id="q112" name="p11" value="B">Me concentre en el texto escrito
				</label>

				<span>
					12. Cuando soluciono problemas de matemáticas:
				</span>
				<label for="q121">
					<input type="radio" required id="q121" name="p12" value="A">Generalmente trabajo sobre las soluciones, un paso a la vez
				</label>
				<label for="q122">
					<input type="radio" required id="q122" name="p12" value="B">Frecuentemente veo las soluciones, pero luego tengo dificultad para imaginar los pasos para llegar a ellas
				</label>
				
				<span>
					13. En las clases que he tomado:
				</span>
				<label for="q131">
					<input type="radio" required id="q131" name="p13" value="A">Generalmente he llegado a conocer a muchos de los estudiantes
				</label>
				<label for="q132">
					<input type="radio" required id="q132" name="p13" value="B">Pocas veces he llegado conocer a muchos de los estudiantes
				</label>

				<span>
					14. Cuando leo temas que no son de ficción, prefiero:
				</span>
				<label for="q141">
					<input type="radio" required id="q141" name="p14" value="A">Algo que me enseñe hechos nuevos o me diga como hacer algo
				</label>
				<label for="q142">
					<input type="radio" required id="q142" name="p14" value="B">Algo que me dé nuevas ideas en qué pensar
				</label>

				<span>
					15. Me gustan los maestros:
				</span>
				<label for="q151">
					<input type="radio" required id="q151" name="p15" value="A">Que dibujan muchos diagramas en el pizarrón
				</label>
				<label for="q152">
					<input type="radio" required id="q152" name="p15" value="B">Que toman mucho tiempo explicando
				</label>

				<span>
					16. Cuando estoy analizando una historia o una novela:
				</span>
				<label for="q161">
					<input type="radio" required id="q161" name="p16" value="A">Pienso en los incidentes y trato de verlos en conjunto para entender los temas
				</label>
				<label for="q162">
					<input type="radio" required id="q162" name="p16" value="B">Solamente sé cuáles son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran
				</label>

				<span>
					17. Cuando comienzo a resolver un problema de una tarea, es muy probable que:
				</span>
				<label for="q171">
					<input type="radio" required id="q171" name="p17" value="A">Empiece a trabajar en su solución inmediatamente
				</label>
				<label for="q172">
					<input type="radio" required id="q172" name="p17" value="B">Trate de entender completamente el problema primero
				</label>

				<span>
					18. Prefiero la idea de:
				</span>
				<label for="q181">
					<input type="radio" required id="q181" name="p18" value="A">Certeza
				</label>
				<label for="q182">
					<input type="radio" required id="q182" name="p18" value="B">Teoría
				</label>

				<span>
					19. Recuerdo mejor:
				</span>
				<label for="q191">
					<input type="radio" required id="q191" name="p19" value="A">Lo que veo
				</label>
				<label for="q192">
					<input type="radio" required id="q192" name="p19" value="B">Lo que escucho
				</label>

				<span>
					20. Es más importante para mi que un instructor:
				</span>
				<label for="q201">
					<input type="radio" required id="q201" name="p20" value="A">Exponga el material en pasos secuenciales claros
				</label>
				<label for="q202">
					<input type="radio" required id="q202" name="p20" value="B">Me proporcione un panorama general y relacione el material con otros temas
				</label>

				<span>
					21. Prefiero estudiar:
				</span>
				<label for="q211">
					<input type="radio" required id="q211" name="p21" value="A">En un grupo de estudio
				</label>
				<label for="q212">
					<input type="radio" required id="q212" name="p21" value="B">Solo
				</label>

				<span>
					22. Es más probable que me consideren:
				</span>
				<label for="q221">
					<input type="radio" required id="q221" name="p22" value="A">Cuidadoso con los detalles de mi trabajo
				</label>
				<label for="q222">
					<input type="radio" required id="q222" name="p22" value="B">Creativo acerca de cómo hago mi trabajo
				</label>

				<span>
					23. Cuando alguien me da direcciones para llegar a un lugar, prefiero:
				</span>
				<label for="q231">
					<input type="radio" required id="q231" name="p23" value="A">Un mapa
				</label>
				<label for="q232">
					<input type="radio" required id="q232" name="p23" value="B">Instrucciones escritas
				</label>

				<span>
					24. Aprendo:
				</span>
				<label for="q241">
					<input type="radio" required id="q241" name="p24" value="A">A un paso bastante constante. Si estudio arduamente, “lo conseguiré”
				</label>
				<label for="q242">
					<input type="radio" required id="q242" name="p24" value="B">En inicios y pausas. Estaré confundido y súbitamente “todo encaja”
				</label>

				<span>
					25. Preferiría primero:
				</span>
				<label for="q251">
					<input type="radio" required id="q251" name="p25" value="A">Probar cosas
				</label>
				<label for="q252">
					<input type="radio" required id="q252" name="p25" value="B">Pensar en cómo voy a hacer algo
				</label>

				<span>
					26. Cuando leo algo que disfruto, me gustan los escritores que:
				</span>
				<label for="q261">
					<input type="radio" required id="q261" name="p26" value="A">Dicen claramente lo que desean dar a entender
				</label>
				<label for="q262">
					<input type="radio" required id="q262" name="p26" value="B">Dicen las cosas en forma creativa e interesante
				</label>

				<span>
					27. Cuando en clase veo un diagrama o un bosquejo, es más probable que recuerde:
				</span>
				<label for="q271">
					<input type="radio" required id="q271" name="p27" value="A">La imagen
				</label>
				<label for="q272">
					<input type="radio" required id="q272" name="p27" value="B">Lo que el instructor dijo acerca de ellos
				</label>

				<span>
					28. Cuando me enfrento a un cuerpo de información, es más probable que:
				</span>
				<label for="q281">
					<input type="radio" required id="q281" name="p28" value="A">Me concentre en los detalles y pierda de vista el conjunto total
				</label>
				<label for="q282">
					<input type="radio" required id="q282" name="p28" value="B">Trate de entender el conjunto total antes de ir a los detalles
				</label>

				<span>
					29. Recuerdo más fácilmente:
				</span>
				<label for="q291">
					<input type="radio" required id="q291" name="p29" value="A">Algo que he hecho
				</label>
				<label for="q292">
					<input type="radio" required id="q292" name="p29" value="B">Algo en lo que he pensado mucho
				</label>

				<span>
					30. Cuando tengo que realizar una tarea, prefiero:
				</span>
				<label for="q301">
					<input type="radio" required id="q301" name="p30" value="A">Dominar una forma de hacerlo
				</label>
				<label for="q302">
					<input type="radio" required id="q302" name="p30" value="B">Intentar nuevas formas de hacerlo
				</label>

				<span>
					31. Cuando alguien me muestra datos, prefiero:
				</span>
				<label for="q311">
					<input type="radio" required id="q311" name="p31" value="A">Caracteres o gráficas
				</label>
				<label for="q312">
					<input type="radio" required id="q312" name="p31" value="B">Un texto que resuma los resultados
				</label>

				<span>
					32. Cuando escribo un documento, es más probable que:
				</span>
				<label for="q321">
					<input type="radio" required id="q321" name="p32" value="A">Trabaje (piense o escriba) en él desde el principio y avance en él.
				</label>
				<label for="q322">
					<input type="radio" required id="q322" name="p32" value="B">Trabaje (piense o escriba) en diferentes partes del documento y luego las ordene.
				</label>

				<span>
					33. Cuando tengo que trabajar en un proyecto de grupo, primero quiero:
				</span>
				<label for="q331">
					<input type="radio" required id="q331" name="p33" value="A">Realizar una “lluvia de ideas” donde cada quien aporte ideas
				</label>
				<label for="q332">
					<input type="radio" required id="q332" name="p33" value="B">Realizar la “lluvia de ideas” de forma individual y después unirme con el grupo para comparar ideas
				</label>

				<span>
					34. Considero que es un mejor elogio llamar a alguien:
				</span>
				<label for="q341">
					<input type="radio" required id="q341" name="p34" value="A">Sensible
				</label>
				<label for="q342">
					<input type="radio" required id="q342" name="p34" value="B">Imaginativo
				</label>

				<span>
					35. Cuando conozco gente en una fiesta, es más probable que recuerde:
				</span>
				<label for="q351">
					<input type="radio" required id="q351" name="p35" value="A">Como era su apariencia
				</label>
				<label for="q352">
					<input type="radio" required id="q352" name="p35" value="B">Lo que decían de si mismos
				</label>

				<span>
					36. Cuando estoy aprendiendo un tema nuevo, prefiero:
				</span>
				<label for="q361">
					<input type="radio" required id="q361" name="p36" value="A">Permanecer centrado en ese tema, aprendiendo lo más que pueda
				</label>
				<label for="q362">
					<input type="radio" required id="q362" name="p36" value="B">Tratar de hacer conexiones entre el tema y otros temas relacionados
				</label>

				<span>
					37. Es más probable que me consideren:
				</span>
				<label for="q371">
					<input type="radio" required id="q371" name="p37" value="A">Abierto
				</label>
				<label for="q372">
					<input type="radio" required id="q372" name="p37" value="B">Reservado
				</label>

				<span>
					38. Prefiero los cursos que dan más importancia a:
				</span>
				<label for="q381">
					<input type="radio" required id="q381" name="p38" value="A">Material concreto (hechos, datos)
				</label>
				<label for="q382">
					<input type="radio" required id="q382" name="p38" value="B">Material abstracto (conceptos, teorías)
				</label>

				<span>
					39. Para divertirme, preferiría:
				</span>
				<label for="q391">
					<input type="radio" required id="q391" name="p39" value="A">Ver televisión
				</label>
				<label for="q392">
					<input type="radio" required id="q392" name="p39" value="B">Leer un libro
				</label>

				<span>
					40. Algunos profesores inician sus clases haciendo un bosquejo de lo que enseñarán. Estos bosquejos son:
				</span>
				<label for="q401">
					<input type="radio" required id="q401" name="p40" value="A">Poco útiles para mí
				</label>
				<label for="q402">
					<input type="radio" required id="q402" name="p40" value="B">Muy útiles para mí
				</label>

				<span>
					41. La idea de hacer una tarea en grupos, con una sola calificación para el grupo entero:
				</span>
				<label for="q411">
					<input type="radio" required id="q411" name="p41" value="A">Me parece bien
				</label>
				<label for="q412">
					<input type="radio" required id="q412" name="p41" value="B">No me parece bien
				</label>

				<span>
					42. Cuando estoy haciendo muchos cálculos:
				</span>
				<label for="q421">
					<input type="radio" required id="q421" name="p42" value="A">Tiendo a repetir todos mis pasos y revisar cuidadosamente mi trabajo
				</label>
				<label for="q422">
					<input type="radio" required id="q422" name="p42" value="B">Encuentro cansado revisar mi trabajo y tengo que esforzarme para hacerlo
				</label>
				
				<span>
					43. Tiendo a recordar lugares en los que he estado:
				</span>
				<label for="q431">
					<input type="radio" required id="q431" name="p43" value="A">Fácilmente y con bastante exactitud
				</label>
				<label for="q432">
					<input type="radio" required id="q432" name="p43" value="B">Con dificultad y sin mucho detalle
				</label>

				<span>
					44. Cuando resuelvo problemas en grupo, sería más probable que:
				</span>
				<label for="q441">
					<input type="radio" required id="q441" name="p44" value="A">Piense en los pasos del proceso de solución
				</label>
				<label for="q442">
					<input type="radio" required id="q442" name="p44" value="B">Piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de áreas
				</label>
				<input type="submit" class="button colocarbtn" value="Enviar Test" name="enviarTest">
			</form>
		</div>
	</div>
	<footer class="footer">
		<div class="footer-politecnico">
			<img src="../images/ipn.png" alt="ipn.png" width="40">
			<p>Instituto Politécnico Nacional</p>
			<p>"La técnica al servicio de la patria"</p>
		</div>
		<div class="footer-escom">
			<img src="../images/escom.png" alt="escom.png" width="60">
			<p>Escuela Superior de Cómputo</p>
			<p>ESCOM</p>
		</div>
		<div class="footer-creditos">
			Créditos:<span> <br> Ricardo Moreno Martínez <br>Hugo Buendía Moreno</span>
		</div>
	</footer>
</body>
</html>