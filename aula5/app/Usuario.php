<?php

namespace App;
class Usuario{
    private $nome;

    public function verificaNome($valor){
        $this->nome = strlen($valor);// strlen conta a quantidade de letras de uma palavra 
        if($this->nome >=10){
            return $this->nome;
        }
        else{
            return false;
        }
    }
}