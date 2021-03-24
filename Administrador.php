<?php

  abstract class Administrador extends Usuario
{
    protected $salario;

    public function mostrarSuCargo()
    {

        return "Administrador";
    }


     public function saludar(){

            echo "Hola Administrador" . $this-> nombre . $this->apellido ;
    
            }



   abstract public function definirArea();

    public function getSalario(){
        $this-> salario;

    }

    public function setSalario($salario){

        $this->salario = $salario;
    }
}
