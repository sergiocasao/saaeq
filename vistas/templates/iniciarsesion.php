<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicia sesión</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet">
	<link rel="stylesheet" href="../css/inisestyle.css">

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
		<form class="registro" action="" method="POST">
			<h2>Inicia sesión en SAAEQ</h2>
			<label for="usuario">Usuario/Email</label>
			<input class="inp" type="text" name="login" required id="usuario"/>
			<label for="contrasena">Contraseña</label>
			<input class="inp" type="password" name="contrasena" required id="contrasena"/>
			<span id="mensaje-error">El usuario/email y/o contraseña son incorrectos</span>
			<input class="button" id="button" type="submit" value="Iniciar sesión" name="iniciarsesion"/>
			<a href="recuperarcontra.php">¿Olvidaste tu contraseña?</a>
		</form>
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
		if(isset($_POST['iniciarsesion']))
		{
			//si se oprime el boton enviar se toman los valores
			if(isset($_POST['login']) && isset($_POST['contrasena']))
			{
				$estado=$controlador->iniciarSesion($_POST['login'],$_POST['contrasena']);
				if($estado)
				{
					//inicia sesion y verifica a que pagina vamos a mandar al usuario
					//ya realizo el test se envia a temario
					session_start();
					echo $_SESSION['usuario'];
					$_SESSION['id_usuario']=$controlador->consultarAtributo("id_usuario");
					$_SESSION['usuario']=$controlador->consultarAtributo("usuario");
					if($controlador->testRealizado())
					{
						//limpia form
						echo "<script>restaurar() </script>";
						header("Location: temario.php");
						exit();
					}
					else
					{
						echo "<script>restaurar() </script>";
						header("Location: introtest.php");
						exit();
					}
				}
				else
				{
					//mandar error en datos activar el erro
					echo '<script>errorDatos();</script>';
				}
			}
		}
	?>
</body>
</html>