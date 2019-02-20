<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once "funcoesDeTeste.php";
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
