<?php
    echo "Exercício 13 <br>";
    echo "Faça uma função em PHP que, receba as coordenadas de dois pontos (x1, y1) e (x2, y2). Calcule e retorne a distância entre os dois pontos. Todos os valores utilizados na função são do tipo número real.<br>";
    echo "Distancia = √((x2-x1)² + (y2 - y1)²)<br>";
    $x1 = 6;
    $y1 = 6;
    $x2 = 2;
    $y2 = 6;
    function cord($x1, $x2, $y1, $y2)
    {
        $a = ($x2 - $x1);
        $a = pow($a, 2);
        $b = ($y2 - $y1);
        $b = pow($b, 2);
        $s = $a + $b; 
        $distancia = sqrt($s);
        echo "Distancia entre os pontos({$x1}, {$y1}) e ({$x2}, {$y2}) = {$distancia}";
    }
    cord($x1, $x2, $y1, $y2);
?>