<?php 
	namespace Controladores;
	include_once("../../modelos/Tema.php");
	header("Content-Type: text/html;charset=utf-8");
	use Modelos;
	class ControladorTema
	{
		private $tema;
		public function __construct()
		{
			//echo "hola soy controladorTema";
			$this->tema=new Modelos\Tema();
		}
		public function obtenerTemas()
		{
			$datos=$this->tema->obtenerTemas();
			return $datos;
		}
	}
 ?>