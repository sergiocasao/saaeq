<?php 
    namespace Modelos;
	//se hace registro, modificacion, eliminado.
    include_once("Conexion.php");
    use Conex as con;
	class Usuario
	{
        //atributos de modelo
		private $id_usuario;
		private $usuario;
		private $email;
		private $contrasena;
        private $login;
        //variable de conexion
		private $conex;

		public function __construct()
		{
            //echo "Se crea claseUsuario";
			$this->conex= new con\Conexion();
		}
		public function setAtributo($atributo,$contenido)
        {
            $this->$atributo=$contenido;
        }
        public function getAtributo($atributo)
        {
            return $this->$atributo;
        }
        //para crear se tiene que mandar emaio y usuario
        public function crear()
        {
        	$sql = "SELECT * FROM usuario WHERE email='{$this->email}' OR usuario='{$this->usuario}'";
        	$res= $this->conex->consultaAvanzada($sql);
        	$conteo = mysqli_num_rows($res);
        	if($conteo != 0)
        	{
        		return false;
        	}
        	else
        	{
        		$sqlin = "INSERT INTO usuario (usuario,email,contrasena) VALUES('{$this->usuario}','{$this->email}','{$this->contrasena}')";
        		$this->conex->consultaSimple($sqlin);
        		return true;
        	}
        }
        public function iniciarSesion()
        {
            $sql="SELECT * FROM usuario WHERE usuario='{$this->login}' OR email='{$this->login}'";
            $res=$this->conex->consultaAvanzada($sql);
            //contar cuantos registros tiene
            $existe=mysqli_num_rows($res);
            if($existe != 0)
            {
                $row = mysqli_fetch_assoc($res);
                //echo "yo soy inises ".$row['usuario'];
                $this->id_usuario = $row['id_usuario'];
                $this->usuario = $row['usuario'];
                $this->email = $row['email'];
                $this->contrasena = $row['contrasena'];
                return true;
            }
            else
            {
                return false;
            }
        }

        public function eliminar()
        {
        	$sql="DELETE FROM usuario WHERE usuario='{$this->usuario}'";
        	$this->conex->consultaSimple($sql);
        }
        //para hacer la actualizacion primero tenemos que verificar que el usuario o el email no estèn registrados anteriormente
        public function visualizar()
        {
        	$sql = "SELECT * FROM usuario WHERE usuario='{$this->usuario}'";
        	$res= $this->conex->consultaAvanzada($sql);
        	$row = mysqli_fetch_assoc($res);
        	$this->id= $row['id_usuario'];
        	$this->usuario = $row['usuario'];
        	$this->email = $row['email'];
        	$this->contrasena = $row['contrasena'];
        	return $row;
        }
        public function actualizar($usuario)
        {
        	//busca un email o un usuario repetido
        	$sql = "SELECT id_usuario FROM usuario WHERE email='{$this->email}' OR usuario='{$this->usuario}'";
        	$res= $this->conex->consultaAvanzada($sql);
        	$conteo = mysqli_num_rows($res);
        	//si no existe el registro se realiza la actualizacion
        	if($conteo == 0)
        	{
                $sql= "UPDATE usuario SET usuario='{$this->usuario}',email='{$this->email}',contrasena='{$this->contrasena}' WHERE usuario='{$usuario}'";
                $this->conex->consultaSimple($sql);
                return true;
            }
            else
            {
        		return false;
        		//se realiza la actualizacion
        	}
        }
        //verifica que este usuario no haya realizado el test
        public function testRealizado()
        {
            $sql="SELECT * FROM test WHERE id_usuario='{$this->id_usuario}'";
            $res= $this->conex->consultaAvanzada($sql);
            $conteo = mysqli_num_rows($res);
            //si existe el registro se realiza la actualizacion
            return $conteo;
        }
        //para hacer la actualizacion primero tenemos que verificar que el usuario o el email no estèn registrados anteriormente
        public function visualizaResultado()
        {
            $sql = "SELECT * FROM test WHERE id_usuario='{$this->id_usuario}'";
            $consulta=$this->conex->consultaAvanzada($sql);
            $row=mysqli_fetch_assoc($consulta);
            $resultado=$row['resultado'];
            //echo "Soy el resultado: ".$resultado;
            return $resultado;
        }
        //realizar busqueda en las tablas de tema para visualizar las califiaciones
        public function existeEmail()
        {
            $sql = "SELECT * FROM usuario WHERE email='{$this->email}'";
            $res = $this->conex->consultaAvanzada($sql);
            $existe = mysqli_num_rows($res);
            if($existe != 0)
            {
                $row = mysqli_fetch_assoc($res);
                $this->usuario = $row['usuario'];
                $this->email = $row['email'];
                $this->contrasena = $row['contrasena'];
                return true;
            }
            else
            {
                return false;
            }
        }
	}
?>