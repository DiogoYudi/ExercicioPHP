<?php
    echo "Exercício 1 <br>";
    echo "a) Considere o texto 'Ads é mais legal'. Modifique o texto para que ele seja apresentado somente com letras maiúsculas. <br>";
    $frase = "Ads é mais legal";
    $maiuscula = mb_strtoupper($frase);
    echo "Frase com letras maiúsculas: {$maiuscula} <br> <br>";

    echo "b) Considere o texto 'Gosto de cachorros mas não gosto tanto de gatos', verifique se existe o texto 'não gosto'. <br>";
    $frase = "Gosto de cachorros mas não gosto tanto de gatos";
    $verify = strpos($frase, "não gosto");
    if ($verify != null)
        echo "Frase localizada na posição: {$verify} <br> <br>";
    else
        echo "Não localizado! <br> <br>";
    
    echo "c) Considere o texto 'Algoritmo é um conjunto de instruções lógicas para resolver um problema'. Modifique o texto para que ele seja apresentado somente com letras minúsculas. <br>";
    $frase = "Algoritmo é um conjunto de instruções lógicas para resolver um problema";
    $minuscula = mb_strtolower($frase);
    echo "Frase com letras minúsculas: {$minuscula} <br> <br>";

    echo "d) Considere o texto 'Os heróis da DC são melhores que os heróis da Marvel.'. Modifique o texto para que o texto 'são melhores' seja substituido por 'não são melhores'. <br> ";
    $frase = "Os heróis da DC são melhores que os heróis da Marvel.";
    $replace = str_replace("são melhores", "não são melhores", $frase);
    echo "A frase final com as frases citadas modificadas ficou: {$replace} <br> <br>";
?>
