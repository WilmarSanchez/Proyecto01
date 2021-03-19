<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Proyecto Heroku</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel = "stylesheet" constant= "text/css" href="css/normalize.css"/>
        <link rel = "stylesheet" constant= "text/css" href="css/estilos.css"/>
    </head>
    <body>
        <?php
            require 'Usuario.php';
        ?>

        <?php

            $usuario1 = new Usuario("Juan", "Poli");

            $usuario1->nombre = "Juan";
            $usuario1->apellido = "Poli";
            
            
            echo $usuario1->nombre;
            echo " ".$usuario1->apellido;

            echo "<br/>";
            $usuario1->saludo();

            $usuario2 = new Usuario("Jina", "Poli");

            $usuario2->nombre = "Jina";
            $usuario2->apellido = "Poli";

            echo "<br/>";
            $usuario2->saludo();
            echo "<br/>";

            $usuario1->registrar();
            echo "<br/>";

            $usuario2->registrar();
            echo "<br/>";

            $usuario2->enviarEmail();
            echo "<br/>";

            $usuario3 = new Usuario("Jhonny", "Ruiz");

            $usuario3->nombre = "Jhonny";
            $usuario3->apellido = "Ruiz";
            
            $usuario3->registrar()->enviarEmail();
            echo "<br/>";

            $usuario4 = new Usuario("", "");

            echo "<br/>";
            $usuario4->setNombre("Pedro");
            echo $usuario4->getNombre();
            echo "<br/>";
            
            $usuario5 = new Usuario("Mateo", "Ortiz");

            echo "<br/>";
            echo $usuario5->getNombreCompleto();

        ?>



    </body>


</html>