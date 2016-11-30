<?php
	session_start();
	$_SESSION['id_usuario']=0;
	$_SESSION['usuario']="";
	$_SESSION['email']= "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido a SAAEQ</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet">
	<link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
	<heder class="header">
		<img src="images/logo.png" alt="logo.png" height="50">
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
		<a class="button" href="templates/iniciarsesion.php">
			Inicia sesión
		</a>
	</heder>
	<div class="main-container">
		<section class="menbi">
			<span>
				Bienvenido al Sistema de Apoyo al Aprendizaje de los Elementos Químicos.
			</span>
			<hr>
			<p>
				Te damos la bienvenida al Sistema de Apoyo al Aprendizaje para Elementos Químicos. Este sistema es capaz de identificar tu estilo de aprendizaje por medio de un test que resolverás luego de registrarte. Este test ha sido aplicado en diferentes instituciones, con diferentes estudiantes, demostrando excelentes resultados. 
				<br><br>Una vez identificada tu forma de aprendizaje podremos mostrarte contenido acorde a tu estilo de aprendizaje, con la finalidad de que tu aprendizaje sea de forma más eficaz. Sabemos que disfrutarás esta nueva experiencia de aprendizaje. 
				<br><br> 
			</p>
			<strong>!Empieza ahora y aprende de forma personalizada!</strong>
		</section>
		<section class="registro">
			<div class="registro-seccion">
				<span>
					¿Eres nuevo en SAAEQ?
				</span>
				<p>
					¡Registrarte te permitirá accesar a contenido especialmente diseñado para ti, aplicando estilos de aprendizaje para que
					puedas entender las cosas de una forma más simple!
				</p>

				<a class="button" href="templates/registro.php">
					Regístrate
				</a>
			</div>
			<div class="registro-temario">
				<span>
					También existe la posibilidad de visualizar contenido sin registrarse, aunque no se evaluará tu forma de aprendizaje. 
				</span>
				<a class="button" href="templates/temario.php">
					Temario
				</a>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="footer-politecnico">
			<img src="images/ipn.png" alt="ipn.png" width="40">
			<p>Instituto Politécnico Nacional</p>
			<p>"La técnica al servicio de la patria"</p>
		</div>
		<div class="footer-escom">
			<img src="images/escom.png" alt="escom.png" width="60">
			<p>Escuela Superior de Cómputo</p>
			<p>ESCOM</p>
		</div>
		<div class="footer-creditos">
			Créditos:<span> <br> Ricardo Moreno Martínez <br>Hugo Buendía Moreno</span>
		</div>
	</footer>
</body>
</html>