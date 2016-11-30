<?php 
    namespace Modelos;
	//conexion
	include_once("Conexion.php");
    use Conex as con;
	class Test
	{
		//atributos
		private $id_test;
		private $resultado;
		private $id_usuario;		
		//variable de conex
		private $con;

		public function __construct()
		{
			//echo "se construye claseTest";
			$this->con = new con\Conexion();
		}
		public function setAtributo($atributo,$contenido)
        {
            $this->$atributo=$contenido;
        }
        public function getAtributo($atributo)
        {
            return $this->$atributo;
        }
        public function crear()
        {
        	$sql="INSERT INTO test(resultado,id_usuario) VALUES('{$this->resultado}',
        		'{$this->id_usuario}')";
        	$this->con->consultaSimple($sql);
        	return true;
        }
        public function visualizaResultado()
        {
        	$sql = "SELECT * FROM test WHERE id_usuario='{$this->id_usuario}'";
        	$consulta=$this->con->consultaAvanzada($sql);
        	$row=mysqli_fetch_assoc($consulta);
        	$resultado=$row['resultado'];
        	//echo "Soy el resultado: ".$resultado;
        	return $resultado;
        }
	}

 ?>