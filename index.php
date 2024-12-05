<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form action="executar.php" method="post">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>
        
        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>
        
        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
