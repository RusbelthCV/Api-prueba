<?php

    include_once 'miembrosData.php';

    class ApiMiembros{

        function getAll(){
            $miembro = new Miembros();
            $miembros = array();
            $miembros['items'] = array();

            $response = $miembro->getAll();
            if($response->fetchColumn()){
                while($row = $response->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'genero' => $row['genero'],
                        'correo' => $row['correo'],
                        'telefono' => $row['telefono'],
                        'nacimiento' => $row['nacimiento'],
                        'inscripcion' => $row['inscripcion']
                    );
                    array_push($miembros['items'],$item);
                }
            }
            else{
                echo json_encode(array('mensaje' => 'No hay datos en esta api'));
            }
            return $miembros;
        }
        public function getMemeberById($id){
            $miembro = new Miembros();
            $miembros = array();
            $miembros['items'] = array();
            $response = $miembro->getMemberId($id);
            $data = $response->fetch(PDO::FETCH_ASSOC);
            if($data){
                $item = array(
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'genero' => $data['genero'],
                    'correo' => $data['correo'],
                    'telefono' => $data['telefono'],
                    'nacimiento' => $data['nacimiento'],
                    'inscripcion' => $data['inscripcion']
                );
                array_push($miembros['items'],$item);  
            }
            else{
                echo json_encode(array('mensaje' => "No hay datos que mostrar"));
            }
           return $miembros;
        }
    }
?>