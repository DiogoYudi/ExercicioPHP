<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamento.php">
            <label> Valor de medida: </label>
            <input type="text" name="inputMed" placeholder="Digite um valor em medida de comprimento">
            <select name="selectOperacoes">
                <option value="centimetro"> Centímetros para Metros </option>
                <option value="metro"> Metros para Centímetros </option>
                <option value="metroq"> Metros para Quilômetros </option>
                <option value="quilometro"> Quilômetros para Metros </option>
            </select>
            <input id="botao" type="submit" value="Converter">
        </form>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistema</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>