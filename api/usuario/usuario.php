<?php
include_once '../../php/conectarse1.php';

    
    class Usuarios extends conectarse{
        function get($correo){
            $conexion = $this -> conexion();
            $sql="SELECT * from usuario where email ='$correo'";
            $result=mysqli_query($conexion,$sql);
            $row =mysqli_fetch_array($result);
            return $row;
        }

        function getallusers(){
            $conexion = $this -> conexion();
            $sql="SELECT * from usuario";
            $result=mysqli_query($conexion,$sql);
            $items = [];
    
            while($row = mysqli_fetch_array($result))
            {
    
                $item = ['email' => $row['email'],
                         'contrasena' => $row['contrasena'],
                         'nombre' => $row['nombre'],
                         'direccion' => $row['direccion'],
                         'ciudad' => $row['ciudad'],
                         'telefono' => $row['telefono'],
                         'tipo' => $row['tipo'],
                         'activo' => $row['activo'],
                         'imagen' => $row['imagen'],
                ];
                array_push($items, $item);
            }
    
            return $items;
        }

    }

?>