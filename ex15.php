<?php
    echo "Exercício 15<br>";
    echo "Faça uma função em PHP que, dado dois números a e b, retorne 1 se a > b, retorne -1 se b > a, retorne
    0 se a == b.<br>";
    function ab()
    {
        $a = 5;
        $b = 5;
        if ($a > $b)
            return 1;
        else if ($a < $b)
            return -1;
        else if ($a == $b)
            return 0;
    }
    echo ab();
?>