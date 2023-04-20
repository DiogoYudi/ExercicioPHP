<?php
    echo "Exercício 16<br>";
    echo "Faça uma função em PHP que, dado a nota da prova 1 (NP1) a nota da prova 2 (NP2) a nota do trabalho<br>
    1 (NT1) e a nota do trabalho 2 (NT2). Calcule a média final (MF), caso o aluno foi Aprovado retorne<br>
    1, caso o aluno foi Reprovado retorne 0, sabendo que:<br><br>";
    echo "MF = (0,8MP + 0,2MT)<br> MP = (NP1 + NP2)/2<br> MT = (NT1 + NT2)/2<br>Se MF >= 5,0 APROVADO, senão REPROVADO<br><br>";
    $NP1 = 2;
    $NP2 = 2;
    $NT1 = 2;
    $NT2 = 3;
    function nota($NP1, $NP2, $NT1, $NT2)
    {
        $MP = ($NP1 + $NP2)/2;
        $MT = ($NT1 + $NT2)/2;
        $MF = (0.8*$MP + 0.2*$MT);
        if ($MF >= 5.0)
            return 1;
        else
            return 0;
    }
    echo nota($NP1, $NP2, $NT1, $NT2);
?>