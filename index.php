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
            require 'Car.php';
            require 'Usuario.php';
            require 'Deportivo.php';
            require 'Administrador.php';
            require 'RecursosHumanos.php';
            require 'Financiero.php';
            require 'Programador.php';
        ?>


        <?php
            $bmw = new Car("BMW-10000");
            $mercedes = new Car("2");
            $audi = new Car();

            echo "Color del bmw: $bmw->color";
            echo "<br/>";
            echo "Color del mercedes: $mercedes->color";

            $bmw -> color = "blue";
            $bmw -> empresa = "BMW";

            $mercedes -> color = "negro";
            $mercedes -> empresa = "MERCEDES";
            echo "<br/>";
            echo "Color del bmw: $bmw->color, compañia $bmw->empresa";
            echo "<br/>";
            echo "Color del mercedes: $mercedes->color, compañia $mercedes->empresa";
            echo "<br/>";
            echo "BMW pitando: " .$bmw->pitar();
            echo "<br/>";
            echo "Mercedes pitando: " .$mercedes->pitar();
            echo "<br/>";

            echo "<br/><br/> Probando el uso del this";
            $carro1 = new Car("4");
            $carro2 = new Car("5");

            $carro1->tieneCapota = false;
            $carro1->empresa = "Toyota";
            $carro1->color = "Verde";

            $carro2->empresa = "Renault";
            $carro2->color = "Blanco";
            echo "<br/>";
            $carro1->pedirRevision();
            echo "<br/>";
            $carro1->levantarCapota();
            echo "<br/>";
            $carro2->pedirRevision();
            echo "<br/>";
            $carro2->levantarCapota();

            echo "<br/> Usando el encadenamiento:";

            $carro3 = new Car("6");

            $gasolina = $carro3->llenar(10)->correr(40) -> contenidoTanque;
            echo "<br/> El numero de galones que quedan en el tanque son: ".$gasolina. "galones";

            echo "<br/> Accediendo a un atributo público:";

            $carro3->setModelo("audi");
            echo "<br/>";

            echo $carro3->getModelo();

            echo "<br/><br/>Imprmiendo modelos:  <br/>".$bmw ->getModelo()."<br/>".
            $mercedes->getModelo()."<br/>".$audi->getModelo()."<br/>".
            $carro1->getModelo()."<br/>".$carro2->getModelo()."<br/>".$carro3->getModelo()."<br/>";

       $deportivo1 = new Deportivo();
       $deportivo1-> getModelo("lamborgini");

       echo "<br />". $deportivo1->pitar();
       
       echo "<br />". $deportivo1-> conducirConEstilo();

      /* $carro  = new Car("Mazda");
       echo "<br />". $carro -> pitar();
      */ 

     //$Admin1 = new Administrador();

     $financiero = new Financiero("Juan", "Perez");
     echo "<br />";
     $financiero->saludar();

     $financiero->setSalario(55);
     echo "<br />";
    echo $financiero->definirArea();
     
    $RecursosHumanos = new RecursosHumanos("Juana", "De Arco");
     echo "<br />";
     $RecursosHumanos->saludar();
     echo "<br />";
     $RecursosHumanos->setSalario(1000);
     echo "<br />";
    echo $RecursosHumanos->definirArea();
    echo "<br />";
    $usuario1 = new Programador("Felipe" , "Lopez");
    $usuario1 ->getNombreCompleto();
    $usuario1->agregarLenguajeDeProgramacionBackend("Python");
    $usuario1->agregarLenguajeDeProgramacionBackend("C#");
    $usuario1->agregarLenguajeDeProgramacionBackend("Java");
    echo "<br />";
    $usuario1->agregarLenguajeDeProgramacionFrontend("JavaScript");
    $usuario1->agregarLenguajeDeProgramacionFrontend("Jquery");
    $usuario1->agregarLenguajeDeProgramacionFrontend("Angular");
    $usuario1->agregarLenguajeDeProgramacionFrontend("hahaha");
    echo "<br />";

       ?>
        

    </body>


</html>