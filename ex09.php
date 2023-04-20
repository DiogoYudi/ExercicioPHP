<?php
    echo "Exercício 9 <br>";
    echo "Construa um algoritmo em PHP, que mostre todos os números pares de 1 a 1000. <br>";
    $num = 1;
    while ($num <= 1000)
    {
        if ($num % 2 == 0)
            echo "{$num}<br>";
        $num -= 1;
    }
?>
