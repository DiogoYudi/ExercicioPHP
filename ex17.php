<?php
    echo "Exercício 17<br>";
    echo "Faça uma função em PHP que dado um número real 'a' e um número inteiro 'b', calcule e retorne o valor<br>
    de 'a' elevado a 'b', a^b.<br> Obs: Não utilize a função pow(), faça você mesmo utilizando um laço de repetição.<br>";
    $a = 2;
    $b = 8;
    function pot($a, $b)
    {
        $aux = $a;
        while ($b-1 != 0)
        {
            $a = $a * $aux;
            $b--;
        }
        return $a;
    }
    echo pot($a, $b);
?>