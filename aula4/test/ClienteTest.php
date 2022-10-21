<?php
use PHPUnit\Framework\TestCase;
use App\Cliente;

class ClientTest extends TestCase{
    
    public function testVerificarCamposVazio(){
        $meuCliente = new Cliente("Zilda", "zilda@email.com");
        
        $this->assertFalse($meuCliente->validaCampos());
    }

    public function testContarItensPreferencia(){
        $meuCliente = new Cliente("Laele","laele@laele.com",456);
        $meuCliente->setPreferencias(["Promoção", "Roupa Barata","Comida Baiana"]);

        $this->assertCount(3,$meuCliente->getPreferencias());// Esse teste irá contar quantos itens existem dentro do vetor
    }

    public function testVerificarTotalCompras(){
        $meuCliente = new Cliente("Junior", "junior@email.com",123456);
        $meuCliente->setTotalCompras(450);

        $this->assertGreaterThan(400, $meuCliente->getTotalCompras());
    }
}