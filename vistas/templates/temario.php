<?php 
	include_once("../../controladores/ControladorTema.php");
	include_once("../../controladores/ControladorTest.php");
	use Controladores;
	$controladorTema=new Controladores\ControladorTema();
	$controladorTest= new Controladores\ControladorTest();
	$restest=$controladorTest->visualizaResultado();
	$datos=$controladorTema->obtenerTemas();
	//$row=mysqli_fetch_assoc($datos);
	//echo $row['id_tema'];
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<title>Resultados del Test ILS</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet" rel="stylesheet">
	<link rel="stylesheet" href="../css/temariostyles.css">
</head>
<body>
	<heder class="header">
		<img src="../images/logo.png" alt="logo.png" height="50"/>
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
		<a href="perfil.php"><img src="../images/perfil.png" alt="perfil.png" width="50"></a>
	</heder>
	<div class="main-container">
		<span class="title">
			Temario
		</span>
		<section class="temas-container">
			<?php while($row = mysqli_fetch_array($datos)): ?>
				<section class="tema">
					<a href="index.php">
						<div>
							<img class="tema-img" src="../images/h1.png" alt="logo.png" height="100">
						</div>
						<span>
							<?php echo $row['nombre']; ?>
						</span>
					</a>
				</section>
			<?php endwhile; ?>
			
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