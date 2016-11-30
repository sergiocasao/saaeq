<?php 
		include_once("../../controladores/ControladorUsuario.php");
		use Controladores;
		$controlador=new Controladores\ControladorUsuario();
		$row= $controlador->visualizar();
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar perfil</title>
	<link href="https://fonts.googleapis.com/css?family=Bitter|Cabin|Crimson+Text|David+Libre|Old+Standard+TT|Oxygen|Quicksand|Shadows+Into+Light|Vollkorn|EB+Garamond|Kaushan+Script|Montez|Rochester" rel="stylesheet" rel="stylesheet">
	<link rel="stylesheet" href="../css/editperfstyles.css">
	<link rel="stylesheet" href="../css/jquery-ui.min.css">
</head>
<body>
	<heder class="header">
		<a href="Bienvenida.html"><img src="../images/logo.png" alt="logo.png" width="60"/></a>
		<div class="header-text">
			<h1>
				Sistema de Apoyo al Aprendizaje para Estudiantes de Química.
			</h1>
		</div>
		<a class="button" href="perfil.php">
			Perfil
		</a>
	</heder>
	<div class="main-container">
		<div class="datos-container" id="datos-container">
			<h3>
				Editar perfil
			</h3>
			<img class="aux" src="../images/perfil.png" alt="logo.png" height="70">
			<form class="form-container" action="" method="POST">
				<label for="usuario">
					Usuario
					<img class="apro" id="palusuario" src="../images/paloma.png" alt="conf.png" height="20">
				</label>
				<input class="inp" type="text" name="username" placeholder="<?php echo $row['usuario']; ?>" required id="usuario" />

				<label for="email">
					Email
				</label>
				<input class="inp" type="email" placeholder="<?php echo $row['email']; ?>" required id="email" name="email"/>

				<label for="contrasena">
					Nueva contraseña
					<img class="apro" id="palpass1" src="../images/paloma.png" alt="conf.png" height="20">
				</label>
				<input class="inp" id="pass1" type="password" name="pass1" placeholder="Ingresa tu nueva contraseña" required />

				<label for="contrasenaconf">
					Confirma tu nueva contraseña
					<img class="apro" id="palpass2" src="../images/paloma.png" alt="conf.png" height="20">
				</label>
				<input class="inp coinc" id="pass2" type="password" name="pass2" placeholder="Confirma tu nueva contraseña" required/>
				<span class="coinciden" id="coinciden">
					¡Las contraseñas coinciden!
				</span>
				<input id="enviar" class="button auxbtn" type="submit" value="Actualiza perfil" name="enviar"/>
			</form>
			<a class="button eliminar" id="elimcuenta" href="#">Eliminar Cuenta</a>
		</div>
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
		<div class="actualizacion-container" id="actualizacion-conf">
			<div class="mensaje-container">
				<h3>Datos actualizados</h3>
				<hr>
				<p>Los datos se actualizaron de forma correcta</p>
			</div>
		</div>
		<!-- crear modal para eliminar la cuenta -->
		<div style="display:none" id="modal-confirmation" title="Eliminar Cuenta">
			¿Estás seguro que deseas eliminar tu cuenta?
		</div>
		<!-- <div style="display:none" id="modal-confirmation" title="Delete?">Are you sure you want to delete?</div> -->
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
	<script type="text/javascript" src="../script/editaperfscript.js"></script>
		
	<?php
		if(isset($_POST['enviar']))
		{
			//si se oprime el boton enviar se toman los valores
			$creado=$controlador->actualizar($_POST['username'],$_POST['email'],$_POST['pass1']);
			if($creado)
			{
				echo '<script>mensajeExito();</script>';
			}
			else
			{
				echo "los datos no fueron actualizados";
			}
		} 
	?>
	
</body>
</html>