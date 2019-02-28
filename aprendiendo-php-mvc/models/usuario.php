<?php

class Usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $pasword;
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPasword() {
        return $this->pasword;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPasword($pasword) {
        $this->pasword = $pasword;
    }

    public function conseguirTodos(){
        return  "sacamos todos los usuarios";
    }
}