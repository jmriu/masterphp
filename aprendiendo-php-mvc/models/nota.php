<?php
require_once 'ModeloBase.php';

class Nota extends ModeloBase{
    public $usuario_id;
    public $titulo;
    public $descripcion;
    
    public function __construct() {
        parent::__construct();
    }
    
    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function guardar(){
        $sql="INSERT INTO notas (usuario_id, titulo, descripcion, fecha) VALUES ({$this->getUsuario_id()}, '{$this->getTitulo()}', '{$this->getDescripcion()}', CURDATE());";
        $guardado = $this->db->query($sql);
        return $guardado;
    }
    
//    public function conseguirTodos(){
//        return  "sacamos todos los usuarios";
//    }

}