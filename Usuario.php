<?php

 abstract class Usuario
{

    public $nombre = "";
    public $apellido = "";



    public function __construct($nombre, $apellido){
            $this->nombre = $nombre;
           $this->apellido = $apellido;
            
    }



/*
  Cuando se realiza el cambio con el Final 

final public function saludar(){
        echo "Hola ".$this->nombre." ".$this->apellido;
    }
este no lo puede usar la clase hija ya que solo se puede usar desde la clase padre
*/
 public function saludar(){
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