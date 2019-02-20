<?php

class car{
    private $marca;
    private $valor;
    
    public function __construct() {
        $this->marca = "Fiat";
        $this->valor = 123000;
    }
    
    function mostrarCarro() {
        echo 'Marca:' . $this->marca . '<br>';
        echo 'Valor:' . $this->valor . '<br>';
    }
    
    function setMarca($marca) {
        $this->marca = $marca;
    }
    
    function getMarca() {
        return $this->marca;
    }
  
    function getValor() {
        return $this->valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }    
}

function soma($a, $b) {
    return $a + $b;
}

function referencia(&$a) {
    $a=10;
}
?>