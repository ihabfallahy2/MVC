<?php

class Productos {
    
    public $cod;
    public $nombre_corto;
    public $descripcion;
    public $PVP;
    public $familia;

    function __construct($row){
        
        $this->cod = $row['cod'];
        $this->nombre_corto = $row['nombre_corto'];
        $this->descripcion = $row['descripcion'];
        $this->PVP = $row['PVP'];
        $this->familia = $row['familia'];

    }

    function getCod (){
        return $this->cod;
    }

    function getNombre_corto (){
        return $this->nombre_corto;
    }
    
    function getDescripcion (){
        return $this->descripcion;
    }

    function getPVP (){
        return $this->PVP;
    }

    function getFamilia (){
        return $this->familia;
    }

}