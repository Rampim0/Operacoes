<?php
include('Operacao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    $operacaoObj = new Operacao($valor1, $valor2);

    switch ($operacao) {
        case 'somar':
            $resultado = $operacaoObj->somar();
            break;
        case 'subtrair':
            $resultado = $operacaoObj->subtrair();
            break;
        case 'multiplicar':
            $resultado = $operacaoObj->multiplicar();
            break;
        case 'dividir':
            $resultado = $operacaoObj->dividir();
            break;
        default:
            $resultado = "Operação inválida!";
            break;
    }

    echo "<h1>Resultado:</h1>";
    echo "<p>Valor 1: $valor1</p>";
    echo "<p>Valor 2: $valor2</p>";
    echo "<p>Operação: $operacao</p>";
    echo "<p><strong>Resultado: $resultado</strong></p>";
}
?>
