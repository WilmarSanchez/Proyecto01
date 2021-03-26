<?php 
require 'ProgramadorBackend.php';
require 'ProgramadorFrontend.php';
class Programador extends Usuario implements ProgramadorBackend, ProgramadorFrontend {
    private $lenguajes_backend = array();
    private $lenguajes_frontend = array();

    public function agregarLenguajeDeProgramacionBackend($lenguaje)
    {   
        $lenguajes_backend = array();
        foreach($lenguajes_backend as $lenguaje){
            echo $lenguaje." ";
        }

        array_push($lenguajes_backend, $lenguaje);

        foreach($lenguajes_backend as $lenguaje){
            echo $lenguaje." ";
        }

    }
    public function mostrarLenguajesDeProgramacionBackend()
    {   
        
    }
    public function mostrarLenguajesDeProgramacionFrontend()
    {
        
    }

    public function agregarLenguajeDeProgramacionFrontend($lenguaje){
        $lenguajes_backend = array();
        foreach($lenguajes_backend as $lenguaje){
            echo $lenguaje." ";
        }

        array_push($lenguajes_backend, $lenguaje);

        foreach($lenguajes_backend as $lenguaje){
            echo $lenguaje." ";
        }

    }


}