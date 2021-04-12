<?php
    
    include_once 'productos.php';
    
    if(isset($_GET['categoria'])){
        $categoria = $_GET['categoria'];

        if($categoria == ''){
            echo json_encode(['statuscode' => 400, 'response' => 'No existe esa categoria']);
        }else{
            $productos = new Productos();
            $items = $productos->getitemsbycategory($categoria);

            echo json_encode(['statuscode' => 200, 'items' => $items]);
        }
    }else if(isset($_GET['get-item'])){
        $id = $_GET['get-item'];
    
        if($id == ''){
            echo json_encode(['statuscode' => 400, 
                                'response' => 'No hay valor para id']);    
        }else{
            $productos = new Productos();
            $item = $productos->get($id);
            echo json_encode(['statuscode' => 200, 'items' => $item]);
        }
    }else if(isset($_GET['items'])){
            if($_GET['items'] == 'todo'){
                $productos = new Productos();
                $items = $productos->getall();
                echo json_encode(['statuscode' => 200, 'items' => $items]); 
            }else{
                echo json_encode(['statuscode' => 500, 'response' => 'N/D']);
            }
        }else{
        echo json_encode(['statuscode' => 400, 'response' => 'No hay accion']);
    }

?>