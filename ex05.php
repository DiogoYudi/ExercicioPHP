<?php
    echo "Exercício 5 <br>";
    echo "Faça um programa em PHP, que dado o valor de um produto vendido por um estabelecimento comercial, aplique um desconto de 35% sobre o valor do produto. Por fim, informe como resultado o valor do produto com esse desconto. <br>";
    $produto = 50;
    $desconto = $produto * 35/100;
    $produtofinal = $produto - $desconto;
    echo "Valor do produto com desconto = {$produtofinal}";
?>
