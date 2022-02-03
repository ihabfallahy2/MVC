<?php

include "../modelo/Productos.php";

class Controlador{

    static function conexion(){
        try {
            $bd = new PDO("mysql:host=localhost;dbname=dwes", "root", "");
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
        return $bd;
    }

    static function select(){
        
        $productos = array();
        
        //aqui me daba problema al mandar un objeto al constructor de la clase , ya que al final de la consulta esta el , PDO::FETCH_OBJ.

        $resultado = self::conexion()->query("SELECT * FROM producto");

        while ($row = $resultado->fetch()) {
            $productos[] = new Productos($row);
        }
        
        return $productos;

    }

}


    
    