<?php
    echo "Exercício 19<br>";
    echo "Dizemos que um número com pelo menos dois algarismos é palíndromo se:<br>
    ✓ O 1° algarismo de n é igual ao seu último algarismo,<br>
    ✓ O 2° algarismo de n é igual ao penúltimo algarismo,<br>
    ✓ E assim sucessivamente...<br>
    Ou seja, um número palíndromo é o mesmo número lido da esquerda para direita e da direita para<br>
a esquerda, o número é igual ao seu reverso. Exemplos: 567765 e 32423 são palíndromos, enquanto<br>
567675 não é palíndromo.<br>
Faça uma função em PHP que dado um número inteiro, verifique se esse número é palíndromo.<br>
Se o número é palíndromo retorne 1, se o número não é palíndromo retorne 0.<br><br>";

    function palin()
    {
        $n = 123456654321;
        $naux = strrev($n);
        if ($n == $naux)
            return 1;
        else
            return 0;
    }
    echo palin();
?>