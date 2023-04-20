<?php
    echo "Exercício 12 <br>";
    echo "Faça uma função em PHP que dado uma temperatura em graus Fahrenheit, calcule e retorne a temperatura em graus Celsius. <br>";
    echo "Celsius = (Fahrenheit - 32.0) * (5.0 / 9.0)<br>";
    $far = 280;
    function temp($far)
    {
        $cel = ($far - 32) * 5/9;
        echo "Temperatura Fahrenheit({$far}) para Celsius = {$cel}";
    }
    temp($far);
?>