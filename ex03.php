<?php
    echo "Exercício 3 <br>";
    echo "Construa um programa em PHP, que considerando um triângulo retângulo, leia os catetos (cat1 e cat2) do triângulo, calcule e mostre para o usuário o valor da hipotenusa (hip), sabendo que: <br> hip = cat1² + cat2² <br>";
    $cat1 = 5;
    $cat2 = 6;
    $hip = ($cat1 * $cat1) + ($cat2 * $cat2);
    echo "Hipotenusa do triângulo com os lados cat1 = {$cat1} e cat2 = {$cat2}; hip = {$hip}";
?>
