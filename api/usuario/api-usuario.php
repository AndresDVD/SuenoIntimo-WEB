<?php
    
    include_once 'usuario.php';
    
    if(isset($_GET['email'])){
        $email = $_GET['email'];

        if($email == ''){
            echo json_encode(['statuscode' => 400, 'response' => 'No hay valor para email']);
        }else{
            $usuario = new Usuarios();
            $perfil = $usuario->get($email);

            echo json_encode(['statuscode' => 200, 'perfil' => $perfil]);
        }
    }else if(isset($_GET['todo'])){
            if($_GET['todo'] == 'todo'){
                $usuarios = new Usuarios();
                $perfiles = $usuarios->getallusers();
                echo json_encode(['statuscode' => 200, 'perfiles' => $perfiles]); 
            }else{
                echo json_encode(['statuscode' => 500, 'response' => 'N/D']);
            }
        }else{
        echo json_encode(['statuscode' => 400, 'response' => 'No hay accion']);
    }

?>