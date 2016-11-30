<!-- total pago lineas 2988 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>¿Olvidaste tu contraseña?</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet">
	<link rel="stylesheet" href="../css/recontra.css">
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
		<form action="" method="POST" class="registro" id="form-container">
			<h2>Recupera tu cuenta</h2>
			<hr>
			<p>Introduce tu email para enviarte un correo con tu contraseña.</p>
			<label for="email">Correo Electrónico</label>
			<input class="inp" type="email" required id="email" name="email"/>
			<span id="errorcorreo">El correo que ingresaste no está registrado.</span>
			<input class="button aux" type="submit" value="Enviar correo" name="enviarcorreo"/>
		</form>
		<div class="confirmacion-container" id="confirmacion-container">
			<div class="confirmacion">
				<h2>¡Tu contraseña fue enviada!</h2>
				<hr>
				<span>
					Tu contraseña fue enviada a tu correo. <br>
					Inicia sesión ahora. <br><br>
				</span>
				<a class="button" href="../index.php">Inicio</a>
				<br><br>
			</div>
		</div>
		<div class="confirmacion-container" id="envio-container">
			<div class="confirmacion">
				<h2>Error al enviar tu contraseña</h2>
				<hr>
				<span>
					El correo no pudo ser enviado por alguna razón. <br> <br>
				</span>
				<a class="button" href="../index.php">Inicio</a>
				<br><br>
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
	<script type="text/javascript" src="../script/recontrascript.js"></script>
	<?php 
		include_once("../../controladores/ControladorUsuario.php");
		use Controladores;
		$controlador = new Controladores\ControladorUsuario();
		if(isset($_POST['enviarcorreo']))
		{
			//echo "entrando a reccontra";
			//echo $_POST['email'];
			$pass = $controlador->recuperarContrasena($_POST['email']);
			//echo "soy pass".$pass;
			if($pass)
			{
				echo "<script> confirmacion(); </script>";
				/*else
				{
					echo "<script> errorEnvio; </script>";
				}*/
			}	
			else
			{
				//correo no registrado
				echo "<script> errorCorreo(); </script>";
			}
		}
 	?>
</body>
</html>