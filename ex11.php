<?php
    echo "Exercício 11 <br>";
    echo "Um matemático italiano da idade média conseguiu modelar o ritmo de crescimento da população de<br>
coelhos através de uma sequência de números naturais que passou a ser conhecida como Sequência de<br>
Fibonacci. Seja 𝐹𝑛 o n-ésimo termo da sequência. O primeiro número da sequência 𝐹1= 1, o segundo<br>
𝐹2 = 1. Enquanto o n-ésimo termo da sequência Fn é dado pela soma dos dois anteriores, ou seja, 𝐹𝑛 =<br>
𝐹𝑛−1 + 𝐹𝑛−2 , ∀n > 2. A fórmula de recorrência abaixo define tal sequência é: <br>";
    echo "Fn = {1            se n=1,<br>
               {1            se n=2,<br>
               {Fn-2 + Fn-1  se n=>3.<br>";
    echo "Construa um algoritmo em PHP que a partir de um dado n, seja capaz de obter o n-ésimo termo da<br>
Sequência de Fibonacci. Abaixo estão os primeiros termos dessa sequência. {1,1,2,3,5,8,13,21,34,55,<br>
...}.<br>";
    $n = 5;
    $F1 = 1;
    $F2 = 0;
    if ($n == 1 || $n == 2)
        echo "1";
    else if ($n == 0)
        echo "Não há";
    else
    {
        while ($n-1 > 0)
        {
            $F1 = $F1 + $F2;
            $F2 = $F1 - $F2;
            $n--;
        }
        echo $F1;
    }
?>