<?php
    echo "Exercício 10 <br>";
    echo "Construa um algoritmo em PHP, que dado um número inteiro positivo, calcule e exiba o fatorial desse número. Utilize laço de repetição! <br>";
    $num = 5;
    $numax = $num;
    $fatorial = 1;
    while ($num >= 1)
    {
        $fatorial = $fatorial * $num;
        $num -= 1;
    }
    echo "Fatorial de {$numax} = {$fatorial}";
?>