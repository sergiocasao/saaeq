<?php 
	namespace Modelos;
	header("Content-Type: text/html;charset=utf-8");
	include_once("Conexion.php");
	use Conex as con;
	class Tema
	{
		private $conex;
		public function __construct()
		{
			//echo "hola soy tema";
			$this->conex=new con\Conexion();

		}
		public function obtenerTemas()
		{
			$sql="SELECT id_tema,nombre FROM tema";
			$row=$this->conex->consultaAvanzada($sql);
			return $row;
		}
	}
 ?>