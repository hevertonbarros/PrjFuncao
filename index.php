<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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

<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhando com Funções</title>
    </head>
    <body>
        <?php
            echo soma(3, 6) . "<br>";
            $a = 5;
            echo "$a" . "<br>";
            referencia($a);
            echo "$a" . "<br>";
            
            $umCarro = new car();
            $umCarro->mostrarCarro();
            $umCarro->setValor(12.3);
            $umCarro->mostrarCarro();
            
        ?>
    </body>
</html>
