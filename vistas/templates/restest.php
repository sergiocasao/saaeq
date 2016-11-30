<?php 
	include_once("../../controladores/ControladorTest.php");
	use Controladores;
	$controlador = new Controladores\ControladorTest();
	$restest=$controlador->visualizaResultado($id_usuario);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados del Test ILS</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet" rel="stylesheet">
	<link rel="stylesheet" href="../css/restest.css">
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
		<div class="resultados-container">
			<h2>
				¡Felicidades por haber completado el Test 
				<?php 
					session_start();
					echo $_SESSION['usuario'];
				 ?>!
			</h2>
			<h3>
				Aquí tienes tus resultados:
			</h3>
			<h4>
				<?php echo $restest; ?>
			</h4>
			<section class="info">
				Explicación de los estilos de aprendizaje.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quasi mollitia facere perferendis perspiciatis dolores numquam est accusamus saepe placeat, eum dolore quibusdam! Architecto commodi repellendus velit quia nemo fuga!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis deleniti recusandae ex distinctio nulla, esse doloribus illo architecto maiores omnis accusamus blanditiis cum minus, iure dolore quod consequuntur placeat animi.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe fuga esse nam nostrum tempora, error rerum, porro amet et libero doloribus deserunt unde, cumque facere exercitationem eum eaque rem dolorem?

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum debitis, tempore magnam optio blanditiis repellat omnis quaerat nemo, saepe nesciunt inventore vel velit reprehenderit dolorem facilis provident nisi quasi unde!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem numquam, maxime facilis beatae autem. Tenetur nostrum iusto in officiis commodi, sequi praesentium accusamus ab earum fugit sunt sit quaerat doloremque?
			</section>
			<a class="button situar" href="temario.php">
				Acceder al temario
			</a>
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