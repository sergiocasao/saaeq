<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Introducción</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet">
	<link rel="stylesheet" href="../css/introtestyle.css">
</head>
<body>
	<heder class="header">
		<a href="Bienvenida.html">
			<img src="../images/logo.png" alt="logo.png" height="50"/>
		</a>
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
	</heder>
	<div class="main-container">
		<section class="intro">
			<div class="intro-title">
				¡¡¡Bienvenido <?php session_start(); echo $_SESSION['usuario']; ?>!!!
			</div>
			<hr>
			<div class="intro-mensaje">
				Ahora que te has registrado en SAAEQ tienes la oportunidad de que el sistema te brinde contenido personalizado, es decir, realizarás un Test en el cual se identificará el estilo de aprendizaje que predomina en ti. <br>Una vez que hemos identificado tu estilo de aprendizaje el sistema te mostrará contenido específico para que puedas aprender de una forma más eficiente. El contenido ha sido desarrollado pensando en los estilos de aprendizaje que detecto Richard Felder y sus colaboradores.
			</div>
			<div class="intro-btn">
				<span>¡Empieza ahora a resolver tu test <strong><?php session_start(); echo $_SESSION['usuario']; ?></strong>!</span>
				<a class="button" href="test.php">
					Resolver TEST
				</a>
			</div>
		</section>
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