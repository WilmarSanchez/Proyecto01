<?php


class Car
{


    public $empresa;
    public $color = "rojo";
    public $tieneCapota = true;
    public $contenidoTanque;
    protected $modelo = "Sin definir";
    private $modelos_permitidos = array("audi", "mazda", "mercedes", "lamborgini");


    public function __construct($mod="Sin definir")
    {
        if($mod != "Sin definir"){
            $this->modelo = $mod;
        }    
    }


    public function pitar()
    {
        return "beep su carro de modelo ". $this ->modelo;
    }

    public function pedirRevision()
    {
        echo "Soy un carro de marca " . $this->empresa . " necesito una revisión
                <br/> necesito repintar mi carro " . $this->color . " " . $this->pitar();
    }

    public function levantarCapota()
    {
        if ($this->tieneCapota) echo "Levantando la capota";
        else echo "No tengo capota para levantar";
    }

    public function llenar($cantidad)
    {
        $this->contenidoTanque += $cantidad;
        return $this;
    }

    public function correr($kilometros)
    {
        $galonesConsumidos = $kilometros / 50;
        $this->contenidoTanque -= $galonesConsumidos;

        return $this;
    }

    public function  getModelo(){
        return "El<b>".__CLASS__. "</b> tiene el modelo; ".$this->modelo;
    }

    public function setModelo($mod){
        If(in_array($mod, $this->modelos_permitidos)) $this->modelo =$mod;
        else $this->modelo= "Sin definir";

    }


}
