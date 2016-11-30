<?php
	namespace Controladores;
	include_once("../../modelos/Usuario.php");
	use Modelos;
	class ControladorUsuario
	{
		private $usuario;
		private $resultado=array();

		public function __construct()
		{
			//echo "Se construye ControladorUsuario";
			$this->usuario=new Modelos\Usuario();
		}
		//hacer un nuevo registro en BD de usuario
		public function crear($usuario,$email,$contrasena)
		{
			//echo "Soy crear en el controladro";
			$this->usuario->setAtributo("usuario",$usuario);
			$this->usuario->setAtributo("email",$email);
			$this->usuario->setAtributo("contrasena",$contrasena);
			$resultado=$this->usuario->crear();
			return $resultado;
		}
		// hacer un nuevo inicio de sesion
		public function iniciarSesion($login,$contrasena)
		{
			//primero se busca el usuario o el email
			$this->usuario->setAtributo("login",$login);
			$existe=$this->usuario->iniciarSesion();
			if($existe)
			{
				//comparamos las contrasenas
				if($this->usuario->getAtributo("contrasena") == $contrasena)
				{
					//inicia sesion poner las variables de sesion
					//echo "El usuario inicia sesion";
					return true;
				}
				else
				{
					//error en los datos
					//echo "La contraseña es incorrecta";
					return false;
				}
			}
			else
			{
				//echo "El usuario/email es incorrecto";
				return false;
			}
		}
		public function consultarAtributo($atr)
		{
			$valor=$this->usuario->getAtributo($atr);
			return $valor;
		}

		public function recuperarContrasena($email)
		{
			//echo "hola soy recuperarcontra";
			$this->usuario->setAtributo("email",$email);
			//echo "saliendo de exemail";
			if($this->usuario->existeEmail())
            {
            	//echo "hola soy existe email";
            	$pass=$this->usuario->getAtributo("contrasena");
            	$mensaje = "Has solicitado tu contraseña del sitio SAAEQ y aquí te la enviamos. Esperamos verte pronto. \n\nContraseña de ".$this->usuario->getAtributo("usuario").": ".$pass;
				//Titulo
				$titulo = "Recupera tu contraseña";
				//cabecera
				$headers = "MIME-Version: 1.0\r\n"; 
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
				//dirección del remitente 
				$headers .= "From: SAAEQ \r\n";
				//Enviamos el mensaje a tu_dirección_email 
				$enviado = mail($this->usuario->getAtributo("email"),$titulo,$mensaje,$headers);
				//return $enviado;
				return true;
	        }
            else
            {
                return false;
            }
		}

		public function eliminar($usuario)
		{
			$this->usuario->setAtributo("usuario",$usuario);
			$this->usuario->eliminar();
		}

		public function visualizar()
		{
			session_start();
			$this->usuario->setAtributo("usuario",$_SESSION['usuario']);
			//visualizar regresa la columna completa con assoc
			$datos= $this->usuario->visualizar();
			return $datos;
		}
		public function actualizar($usuario,$email,$contrasena)
		{
			$this->usuario->setAtributo("usuario",$usuario);
			$this->usuario->setAtributo("email",$email);
			$this->usuario->setAtributo("contrasena",$contrasena);
			session_start();
			$res=$this->usuario->actualizar($_SESSION['usuario']);
			if($res)
			{
				session_start();
				$_SESSION['usuario']=$usuario;
				return true;
			}
			else
			{
				return false;
			}
		}

		public function testRealizado()
		{
			if($this->usuario->testRealizado() == 0)
			{
				//no ha realizado el test
				return false;
			}
			else
			{
				return true;
			}
		}
		public function visualizaResultado($id_usuario)
		{
			$this->usuario->setAtributo("id_usuario",$id_usuario);
			$res=$this->usuario->visualizaResultado();
			list($dim1,$dim2,$dim3,$dim4,$dim5,$dim6,$dim7,$dim8)=explode(":", $res);
			$this->clasifica($dim1,$dim2);
			$this->clasifica($dim3,$dim4);
			$this->clasifica($dim5,$dim6);
			$this->clasifica($dim7,$dim8);
			return $this->resultado;
		}


		public function clasifica($dim,$a)
		{
			if($a==0 || $a==1)
			{
				//REF|INF|VEF|GLF
				switch ($dim) 
				{
					case 'AR':
						$this->resultado[]="Tienes una fuerte tendencia hacia lo reflexivo.<br>";
						break;
					case 'SI':
						$this->resultado[]="Tienes fuerte tendencia hacia lo intuitivo.<br>";
						break;
					case 'VV':
						$this->resultado[]="Tienes fuerte tendencia hacia lo verbal.<br>";
						break;
					case 'SG':
						$this->resultado[]="Tienes fuerte tendencia hacia lo global.<br>";
						break;
					default:
						$this->resultado[]="No se ha podido evaluar tu Test.<br>";
				}
			}
			else if($a==2 || $a==3)
			{
				//REM|INM|VEM|GLM
				switch ($dim) 
				{
					case 'AR':
						$this->resultado[]="Posees una tendencia moderada hacia lo reflexivo.<br>";
						break;
					case 'SI':
						$this->resultado[]="Posees una tendencia moderada hacia lo intuitivo.<br>";
						break;
					case 'VV':
						$this->resultado[]="Posees una tendencia moderada hacia lo verbal.<br>";
						break;
					case 'SG':
						$this->resultado[]="Posees una tendencia moderada hacia lo global.<br>";
						break;
					default:
						$this->resultado[]="No se ha podido evaluar tu Test.";
				}
			}
			else if($a==4 || $a==5)
			{
				//REL|INL|VEL|GLL
				switch ($dim) 
				{
					case 'AR':
						$this->resultado[]="Con una ligera tendencia hacia lo reflexivo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SI':
						$this->resultado[]="Con una ligera tendencia hacia lo intuitivo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'VV':
						$this->resultado[]="Con una ligera tendencia hacia lo verbal, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SG':
						$this->resultado[]="Con una ligera tendencia hacia lo global, aunque con un equilibrio en estos aspectos.<br>";
						break;
					default:
						$this->resultado[]="No se ha podido evaluar tu Test.";
				}
			}
			else if($a==6 || $a==7)
			{
				//ACL|SNL|VIL|SCL
				switch ($dim) 
				{
					case 'AR':
						$this->resultado[]="Con una ligera tendencia hacia lo activo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SI':
						$this->resultado[]="Con una ligera tendencia hacia lo sensitivo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'VV':
						$this->resultado[]="Con una ligera tendencia hacia lo visual, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SG':
						$this->resultado[]="Con una ligera tendencia hacia lo secuencial, aunque con un equilibrio en estos aspectos.<br>";
						break;
					default:
						$this->resultado[]="No se ha podido evaluar tu Test.";
				}
			}
			else if($a==8 || $a==9)
			{
				//ACM|SNM|VIM|SCM
				switch ($dim) 
				{
					case 'AR':
						$this->resultado[]="Con una moderada tendencia hacia lo activo.<br>";
						break;
					case 'SI':
						$this->resultado[]="Con una moderada tendencia hacia lo sensitivo.<br>";
						break;
					case 'VV':
						$this->resultado[]="Con una moderada tendencia hacia lo visual.<br>";
						break;
					case 'SG':
						$this->resultado[]="Con una moderada tendencia hacia lo secuencial.<br>";
						break;
					default:
						$this->resultado[]="No se ha podido evaluar tu Test.";
				}
			}
			else if($a==10 || $a==11)
			{
				//ACF|SNF|VIF|SCF
				switch ($dim) 
				{
					case 'AR':
						$this->resultado[]="Con una fuerte tendencia hacia lo activo.<br>";
						break;
					case 'SI':
						$this->resultado[]="Con una fuerte tendencia hacia lo sensitivo.<br>";
						break;
					case 'VV':
						$this->resultado[]="Con una fuerte tendencia hacia lo visual.<br>";
						break;
					case 'SG':
						$this->resultado[]="Con una fuerte tendencia hacia lo secuencial.<br>";
						break;
					default:
						$this->resultado[]="No se ha podido evaluar tu Test.";
				}
			}
		}

	}
?>