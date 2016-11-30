<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicia sesión</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet">
	<link rel="stylesheet" href="../css/elimcustyles.css">

</head>
<body>
	<heder class="header">
		<a href="../index.php">
			<img src="../images/logo.png" alt="logo.png" height="50"/>
		</a>
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
	</heder>
	<div class="main-container">
		<div class="mensaje-container">
			<div class="info-container">
				<h3>Tu cuenta fue eliminada</h3>
				<hr>
				<span>
					Tu cuenta fue <strong>dada de baja</strong>, esperamos que vuelvas pronto para que sigas aprendiendo de forma eficaz.
				</span>
				<a class="button" href="../index.php">Volver a Inicio</a>
			</div>
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
	<script src="../script/jquery.js"></script>
	<script type="text/javascript" src="../script/iniciarscript.js"></script>
	<?php 
		include_once("../../controladores/ControladorUsuario.php");
		use Controladores;
		$controlador = new Controladores\ControladorUsuario();
		session_start();
		$controlador->eliminar($_SESSION['usuario']);
	?>
</body>
</html>