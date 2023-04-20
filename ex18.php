<?php
    echo "Exercício 18<br>";
    echo "Faça uma função em PHP que dado um número inteiro, verifique se esse número é primo ou não. Se<br>
    o número é primo retorne 1, se o número não é primo retorne 0.<br> Obs: Um número é chamado de primo
    se ele é divisível apenas por 1 e por ele mesmo.<br>";
    $n = 11;
    function primo($n)
    {
        $naux = $n -1;
        while ($naux != 1)
        {
            if ($n%$naux == 0)
                return 0;
            else
                $naux--;
        }
        return 1;
    }
    echo primo($n);
?>