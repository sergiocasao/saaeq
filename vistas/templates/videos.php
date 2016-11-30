<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Regístrate</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet">
	<link rel="stylesheet" href="../css/registrostyle.css">
</head>
<body>
	<heder class="header">
		<a href="../index.html"><img src="../images/logo.png" alt="logo.png" height="50"/></a>
		<!-- <img src="../images/logo.png" alt="logo.png" width="60"> -->
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
	</heder>
	<div class="main-container">
		<video controls>
			<source src="../media/videos/stressed.mp4">
		</video>
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
	<script type="text/javascript" src="../script/registroscript.js"></script>

<?php 
	include_once("../../controladores/ControladorUsuario.php");
	//include_once("../../controladores/ControladorTest.php");
	use Controladores as ctrls;
	$controlador=new ctrls\ControladorUsuario();
	//$test = new ctrls\ControladorTest();
	if(isset($_POST['enviar']))
	{
		$creado=$controlador->crear($_POST['username'],$_POST['email'],$_POST['pass1']);
		if($creado)
		{
			echo '<script>registroExitoso();</script>';
		}
		else
		{
			echo '<script> errorDatos();</script>';
		}
	}
?>
</body>
</html>