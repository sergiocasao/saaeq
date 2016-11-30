<?php 
	namespace Controladores;
	include_once("../../modelos/Test.php");
	use Modelos;
	class ControladorTest
	{
		//atributos
		private $test;
		private $resultado;

		public function __construct()
		{
			//echo "Se construye ControladorTest";
			$this->test= new Modelos\Test();
		}
		public function guardaResultado($arreglo)
		{
			$res="";
			//saca resultado del arreglo
			$ar=$arreglo["d1"][A];
			$si=$arreglo["d2"][A];
			$vv=$arreglo["d3"][A];
			$sg=$arreglo["d4"][A];
			$res="AR:".$ar.":SI:".$si.":VV:".$vv.":SG:".$sg;
			//se tiene que guardar a res
			session_start();
			$this->test->setAtributo("resultado",$res);
			$this->test->setAtributo("id_usuario",$_SESSION['id_usuario']);
			//se registra en la bd
			$res=$this->test->crear();
			return $res;
			//echo "El resultado del usuario: ".$_SESSION['usuario']." es: ".$res." y su id es: ".$_SESSION['id_usuario'];
		}
		public function visualizaResultado($id_usuario)
		{
			session_start();
			$this->test->setAtributo("id_usuario",$_SESSION['id_usuario']);
			$res=$this->test->visualizaResultado();
			list($dim1,$dim2,$dim3,$dim4,$dim5,$dim6,$dim7,$dim8)=explode(":", $res);
			$this->clasifica($dim1,$dim2);
			$this->clasifica($dim3,$dim4);
			$this->clasifica($dim5,$dim6);
			$this->clasifica($dim7,$dim8);
			return $this->resultado;
		}
		//a numa's
		public function clasifica($dim,$a)
		{
			if($a==0 || $a==1)
			{
				//REF|INF|VEF|GLF
				switch ($dim) 
				{
					case 'AR':
						$this->resultado=$this->resultado."Tienes una fuerte tendencia hacia lo reflexivo.<br>";
						break;
					case 'SI':
						$this->resultado=$this->resultado."Tienes fuerte tendencia hacia lo intuitivo.<br>";
						break;
					case 'VV':
						$this->resultado=$this->resultado."Tienes fuerte tendencia hacia lo verbal.<br>";
						break;
					case 'SG':
						$this->resultado=$this->resultado."Tienes fuerte tendencia hacia lo global.<br>";
						break;
					default:
						$this->resultado=$this->resultado."No se ha podido evaluar tu Test.<br>";
				}
			}
			else if($a==2 || $a==3)
			{
				//REM|INM|VEM|GLM
				switch ($dim) 
				{
					case 'AR':
						$this->resultado=$this->resultado."Posees una tendencia moderada hacia lo reflexivo.<br>";
						break;
					case 'SI':
						$this->resultado=$this->resultado."Posees una tendencia moderada hacia lo intuitivo.<br>";
						break;
					case 'VV':
						$this->resultado=$this->resultado."Posees una tendencia moderada hacia lo verbal.<br>";
						break;
					case 'SG':
						$this->resultado=$this->resultado."Posees una tendencia moderada hacia lo global.<br>";
						break;
					default:
						$this->resultado=$this->resultado."No se ha podido evaluar tu Test.";
				}
			}
			else if($a==4 || $a==5)
			{
				//REL|INL|VEL|GLL
				switch ($dim) 
				{
					case 'AR':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo reflexivo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SI':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo intuitivo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'VV':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo verbal, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SG':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo global, aunque con un equilibrio en estos aspectos.<br>";
						break;
					default:
						$this->resultado=$this->resultado."No se ha podido evaluar tu Test.";
				}
			}
			else if($a==6 || $a==7)
			{
				//ACL|SNL|VIL|SCL
				switch ($dim) 
				{
					case 'AR':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo activo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SI':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo sensitivo, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'VV':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo visual, aunque con un equilibrio en estos aspectos.<br>";
						break;
					case 'SG':
						$this->resultado=$this->resultado."Con una ligera tendencia hacia lo secuencial, aunque con un equilibrio en estos aspectos.<br>";
						break;
					default:
						$this->resultado=$this->resultado."No se ha podido evaluar tu Test.";
				}
			}
			else if($a==8 || $a==9)
			{
				//ACM|SNM|VIM|SCM
				switch ($dim) 
				{
					case 'AR':
						$this->resultado=$this->resultado."Con una moderada tendencia hacia lo activo.<br>";
						break;
					case 'SI':
						$this->resultado=$this->resultado."Con una moderada tendencia hacia lo sensitivo.<br>";
						break;
					case 'VV':
						$this->resultado=$this->resultado."Con una moderada tendencia hacia lo visual.<br>";
						break;
					case 'SG':
						$this->resultado=$this->resultado."Con una moderada tendencia hacia lo secuencial.<br>";
						break;
					default:
						$this->resultado=$this->resultado."No se ha podido evaluar tu Test.";
				}
			}
			else if($a==10 || $a==11)
			{
				//ACF|SNF|VIF|SCF
				switch ($dim) 
				{
					case 'AR':
						$this->resultado=$this->resultado."Con una fuerte tendencia hacia lo activo.<br>";
						break;
					case 'SI':
						$this->resultado=$this->resultado."Con una fuerte tendencia hacia lo sensitivo.<br>";
						break;
					case 'VV':
						$this->resultado=$this->resultado."Con una fuerte tendencia hacia lo visual.<br>";
						break;
					case 'SG':
						$this->resultado=$this->resultado."Con una fuerte tendencia hacia lo secuencial.<br>";
						break;
					default:
						$this->resultado=$this->resultado."No se ha podido evaluar tu Test.";
				}
			}
		}



	}
	//cierra clase
 ?>