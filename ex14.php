<?php
    echo "Exercício 14<br>";
    echo "Faça uma função em PHP que, dado o Salário de um funcionário e um Percentual de Reajuste salarial.<br>
    Calcule e retorne o novo Salário do funcionário com base no Percentual de Reajuste.<br><br>";
    echo "Reajuste = (Salario * Percentual)/100<br> Salario = Salario + Reajuste <br><br>";
    $salario = 1282;
    $percentual = 10;
    function rea($salario, $percentual)
    {  
        $salarioaux = $salario;
        $reajuste = ($salario * $percentual)/100;
        $salario = $salario + $reajuste;
        echo "Reajuste salarial: <br>Salário = {$salarioaux}<br>Percentual = {$percentual}<br> Novo salário = {$salario}"; 
    }
    rea($salario, $percentual);
?>