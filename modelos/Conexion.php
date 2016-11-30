<?php
    namespace Conex;
    class Conexion
    {
        //atributos
        private $host="localhost";
        private $user="ricks";
        private $password="RICKS";
        private $bd="usuariosv1";
        public $con;

        public function __construct()
        {
            //echo "se construye la conexion";
        }
        public function consultaSimple($sql)
        {
            $con = mysqli_connect($this->host,$this->user,$this->password,$this->bd);
            if(!$con)
            {
                echo "Error: No se pudo conectar a MySQL".PHP_EOL;
                echo "Errno de depuracion:".mysqli_connect_errno().PHP_EOL;
                echo "Error de depuracion:".mysqli_connect_error().PHP_EOL;
            }
            mysqli_set_charset($con,'utf8');
            mysqli_query($con,$sql);
        }
        public function consultaAvanzada($sql)
        {
            $con = mysqli_connect($this->host,$this->user,$this->password,$this->bd);
            if(!$con)
            {
                echo "Error: No se pudo conectar a MySQL".PHP_EOL;
                echo "Errno de depuracion:".mysqli_connect_errno().PHP_EOL;
                echo "Error de depuracion:".mysqli_connect_error().PHP_EOL;
            }
            mysqli_set_charset($con,'utf8');
            $consulta = mysqli_query($con,$sql);
            return $consulta;
        }
    }
?>