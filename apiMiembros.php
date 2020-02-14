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

                echo json_encode($miembros);
            }
            else{
                echo json_encode(array('mensaje' => 'No hay datos en esta api'));
            }
        }
    }
?>