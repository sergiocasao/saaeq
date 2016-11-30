<?php 
	include_once("../../controladores/ControladorUsuario.php");
	use Controladores;
	$controlador=new Controladores\ControladorUsuario();
	session_start();
	$resultado=$controlador->visualizaResultado($_SESSION['id_usuario']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet" rel="stylesheet">
	<link rel="stylesheet" href="../css/perfilstyle.css">
	<link rel="stylesheet" href="../css/jquery-ui.min.css">
</head>
<body>
	<heder class="header">
		<a href="../index.html"><img src="../images/logo.png" alt="logo.png" width="60"/></a>
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
		<a class="button" href="temario.php">
			Temario
		</a>
	</heder>
	<div class="main-container">
		<div class="datos-container">
			<a class="button logout" id="btnlogout">Cerrar Sesión</a>
			<h2>
				Datos de perfil
			</h2>
			<div class="perfil-container">
				<img class="aux" src="../images/perfil.png" alt="logo.png" height="70">
				<span class="aux">
					Usuario: <?php session_start(); echo $_SESSION['usuario'];?>
				</span>
				<a class="button" href="editaperfil.php">
				Actualizar datos
				</a>
			</div>
			<section class="apartado" >
				<h3>
					Resultados del Test ILS (Estilos de aprendizaje): <br>
				</h3>
				<div class="testres-container">
					Dimension Activo-Reflexivo: <br>
					<span>
						<?php echo $resultado[0]; ?><br>
					</span>
					Dimension Sensitivo-Intuitivo: <br>
					<span>
						<?php echo $resultado[1]; ?><br>
					</span>
					Dimension Visual-Verbal: <br>
					<span>
						<?php echo $resultado[2]; ?><br>
					</span>
					Dimension Secuencial-Global: <br>
					<span>
						<?php echo $resultado[3]; ?>
					</span>
				</div>
			</section>
			<section class="apartado">
				<h3>
					Las calificaciones que has obtenido: 
				</h3>
				<table>
					<caption>Calificaciones</caption>
					<thead>
						<tr>
							<th>Tema</th>
							<th>Calificación</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Historia</td>
							<td>10</td>
						</tr>
						<tr>
							<td>Historia</td>
							<td>10</td>
						</tr>
						<tr>
							<td>Historia</td>
							<td>10</td>
						</tr>
					</tbody>
				</table>
			</section>
		</div>
		<div style="display:none" id="modal-logout" title="Cerrar Sesión">
			¿Estás seguro que deseas cerrar sesión?
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
	<script src="../script/jquery-ui.js"></script>
	<script type="text/javascript" src="../script/cerrarsesion.js"></script>
</body>
</html>