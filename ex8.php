<?php
    echo "Exercício 8 <br>";
    echo "Faça um programa em PHP, que dado um peso e uma altura de uma pessoa adulta, calcule o Índice de Massa Corporal (IMC) e informe a condição da pessoa. IMC = peso/altura². Utilize a tabela abaixo como referência: <br>";

    $peso = 80;
    $altura = 1.8;
    $imc = $peso/($altura*$altura);
    if ($imc < 18.5)
        echo "Abaixo do peso";
    else if ($imc >= 18.5 && $imc <= 25)
        echo "Peso normal";
    else if ($imc > 25 && $imc <= 30)
        echo "Acima do peso";
    else
        echo "Obeso";
?>