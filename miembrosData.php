<?php 

    
    
    class Miembros{
        function __construct(){}

        public function getAll(){
            include_once 'conexion.php';
            $consulta = "SELECT * FROM miembros"; 
            $ejecutar = $pdo->prepare($consulta);
            $ejecutar->execute();

            return $ejecutar;
        }

        public function getMemberId($id){
            require 'conexion.php';
            $consulta = "SELECT * FROM miembros WHERE id =".$id; 
            $ejecutar = $pdo->prepare($consulta);
            $ejecutar->execute();

            return $ejecutar;
        }
    }

?>