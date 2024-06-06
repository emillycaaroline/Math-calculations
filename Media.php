<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
</head>
<body>
<h2>Calculadora de Média</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero1">Digite um número:</label><br>
        <input type="number" name="numero1" id="numero1" required><br>

        <label for="numero2">Digite um número:</label><br>
        <input type="number" name="numero2" id="numero2" required><br>

        <label for="numero3">Digite um número:</label><br>
        <input type="number" name="numero3" id="numero3" required><br>

        <button type="submit">Calcular</button>
    </form> <br>

    <?php
    function calcularMedia($nmr1, $nmr2, $nmr3) {
        return ($nmr1 + $nmr2 + $nmr3) / 3;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os números fornecidos pelo usuário
        $nmr1 = $_POST["numero1"];
        $nmr2 = $_POST["numero2"];
        $nmr3 = $_POST["numero3"];

        // Calcula a média
        $resu = calcularMedia($nmr1, $nmr2, $nmr3);

        // Exibe o resultado
        echo "<p> A média é: $resu</p>";
    }
    ?>
</body>
</html>
