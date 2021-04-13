<?php
include_once '../../php/conectarse1.php';

    
    class Productos extends conectarse{
        function get($id){
            $conexion = $this -> conexion();
            $sql="SELECT * from productos where id ='$id'";
            $result=mysqli_query($conexion,$sql);
            $row =mysqli_fetch_array($result);
            return $row;
        }
    
        function getitemsbycategory($categoria){
            $conexion = $this -> conexion();
            $sql="SELECT * from productos where categoria ='$categoria' LIMIT 0,12";
            $result=mysqli_query($conexion,$sql);
    
            $items = [];
    
            while($row = mysqli_fetch_array($result))
            {
    
                $item = ['id' => $row['id'],
                         'nombre' => $row['nombre'],
                         'precio' => $row['precio'],
                         'imagen' => $row['imagen'],
                         'tallas' => $row['tallas'],
                         'descripcion' => $row['descripcion'],
                         'colores' => $row['colores'],
                         'stock' => $row['stock'],
                         'categoria' => $row['categoria'],
                ];
                array_push($items, $item);
            }
    
            return $items;
        }

        function getall(){
            $conexion = $this -> conexion();
            $sql="SELECT * from productos";
            $result=mysqli_query($conexion,$sql);
            $items = [];
    
            while($row = mysqli_fetch_array($result))
            {
    
                $item = ['id' => $row['id'],
                         'nombre' => $row['nombre'],
                         'precio' => $row['precio'],
                         'imagen' => $row['imagen'],
                         'tallas' => $row['tallas'],
                         'descripcion' => $row['descripcion'],
                         'colores' => $row['colores'],
                         'stock' => $row['stock'],
                         'categoria' => $row['categoria'],
                ];
                array_push($items, $item);
            }
    
            return $items;
        }

    }

?>