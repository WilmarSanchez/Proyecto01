<?php 

class Deportivo extends Car {

private $estilo = " Rapido y furioso ";


public function conducirConEstilo(){

    return "Conducir un " . $this -> modelo . "<i>" . $this -> estilo . "</i>";
}

    
}
