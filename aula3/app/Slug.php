<?php
namespace App;

class Slug{
    private $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }

    public function converter(){
        $resultado = str_replace(" ", "-",$this->texto);// o str_replace irá  substituir um determinado valor que está sendo procurado (1º parâmetro), por outro (2º parâmetro) em uma determinada string (3º parâmetro)
        return strtolower($resultado);
    }
}

