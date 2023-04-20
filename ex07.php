<?php
    echo "Exercício 7 <br>";
    echo "Faça um programa em PHP, que dado um código de um produto mostre sua respectiva classificação. Utilize a tabela abaixo como referência: <br> <br>";
    echo "
        <table border='1'>
            <tr>
                <th>Código</th>
                <th>Classificação</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Alimento não-perecivel</td>
            </tr>
            <tr>
                <td>2 ou 3</td>
                <td>Alimento perecivel</td>
            </tr>
            <tr>
                <td>4, 5 ou 6</td>
                <td>Vestuário</td>
            </tr>
            <tr>
                <td>7, 8 ou 9</td>
                <td>Limpeza</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Utensílios doméstivos</td>
            </tr>
            <tr>
                <td>11 ou 12</td>
                <td>Eletrônicos</td>
            </tr>
            <tr>
                <td>Qualquer outro código</td>
                <td>Código inválido</td>
            </tr>
        </table>
    <br>";

    $codigo = 4;
    switch ($codigo)
    {
        case 1:
            echo "Alimento não-perecível";
            break;
        case 2:
        case 3:
            echo "Alimento perecível";
            break;
        case 4:
        case 5:
        case 6:
            echo "Vestuário";
            break;
        case 7:
        case 8:
        case 9:
            echo "Limpeza";
            break;
        case 10:
            echo "Utensílios domésticos";
            break;
        case 11:
        case 12:
            echo "Eletrônicos";
            break;
        default:
            echo "Código inválido";
            break;
    }
?>
