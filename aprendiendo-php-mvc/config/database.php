<?php

class database{
    public static function conectar(){
        $conexion = new mysqli("localhost", "root", "yii", "notas_master");
        $conexion->query("SET NAMES 'utf8'"); 
        
        return $conexion;
    }
}