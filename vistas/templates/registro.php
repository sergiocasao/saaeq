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
		<a href="../index.php"><img src="../images/logo.png" alt="logo.png" height="50"/></a>
		<!-- <img src="../images/logo.png" alt="logo.png" width="60"> -->
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
	</heder>
	<div class="main-container">
		<div class="form-container" id="form-container">
			<form class="registro" action="" method="post">
				<h2>Regístrate ahora</h2>
				
				<label for="usuario">
					Usuario
					<img class="apro" id="palusuario" src="../images/paloma.png" alt="conf.png" height="20">
				</label>
				<input class="inp" type="text" name="username" placeholder="Debe contener mínimo 5 caracteres" required id="usuario"/>
				
				<label for="email">E-mail</label>
				<input class="inp" type="email" name="email" placeholder="Ingresa un correo válido" required id="email"/>
				
				<label for="contrasena">
					Contraseña 
					<img class="apro" id="palpass1" src="../images/paloma.png" alt="conf.png" height="20">
				</label>
				<!-- <input class="inp" id="pass1" type="password" name="pass1" placeholder="Contraseña" required id="contrasena"> </input> -->
				<input class="inp" id="pass1" type="password" name="pass1" placeholder="Contraseña" required> </input>
				
				<label for="contrasenaconf">
					Confirmar contraseña 
					<img class="apro" id="palpass2" src="../images/paloma.png" alt="conf.png" height="20">
				</label>
				<input class="inp coinc" id="pass2" type="password" name="pass2" placeholder="Confirma tu contraseña" required/>
				<span class="coinciden" id="coinciden">
					¡Las contraseñas coinciden!
				</span>
				
				<input id="enviar" class="button" type="submit" value="Enviar" name="enviar"/>
			</form>
			<div class="pswd_info" id="pswd_info">
				<h4>La contaseña debe cumplir los siguientes requisitos:
				</h4>
				<ul>
					<li id="letter" class="invalid">Debe tener al menos <strong>una letra</strong>.
					</li>
					<li id="capital" class="invalid">Debe tener al menos <strong>una letra mayúscula</strong>.
					</li>
					<li id="number" class="invalid">Debe tener al menos <strong>un número</strong>.
					</li>
					<li id="length" class="invalid">Debe tener al menos <strong>8 caracteres</strong> y máximo<strong>15 caracteres.</strong>
					</li>
					<li id="white" class="invalid">
						<strong>No se permiten espacios en blanco.</strong>
					</li>
				</ul>
			</div>	
		</div>
		<div class="mensaje-container" id="mensaje-container">
			<div class="registro-exitoso" id="mensajeregex">
				<span>
					¡Te has registrado exitosamente!
					¿Por qué no inicias sesión?
				</span>
				<a class="button" href="../index.php">Bienvenida</a>
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