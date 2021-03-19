<?php

class Usuario
{

    public $nombre = "";
    public $apellido = "";



    public function __construct($nombre, $apellido){
            $this->nombre = $nombre;
           $this->apellido = $apellido;
            
    }

    public function saludo(){
        echo "Hola ".$this->nombre." ".$this->apellido;
    }

    public function registrar(){
        echo $this->nombre." ".$this->apellido." registrado ";

        return $this;
    }

    public function enviarEmail(){
        echo "Email enviado";

        return $this;
    }

    public function getNombre(){
        return "El nombre del usuario es ".$this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return "El nombre del usuario es ".$this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellido;
    }

}