<?php 

    

    class Miembros{
        function __construct(){}

        public function getAll(){
            require_once 'conexion.php';
            $consulta = "SELECT * FROM miembros"; 
            $ejecutar = $pdo->prepare($consulta);
            $ejecutar ->execute();

            return $ejecutar;
        }
    }

?>