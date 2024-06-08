
<!-- ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Porcentagem</title>
</head>
<body>
<h2>Calculadora de Porcentagem</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="parte">Valor da Parte (por exemplo, nota obtida):</label><br>
        <input type="number" step="any" name="parte" id="parte" required><br>

        <label for="total">Valor Total (por exemplo, nota máxima):</label><br>
        <input type="number" step="any" name="total" id="total" required><br>

        <button type="submit">Calcular Porcentagem</button>
    </form> <br>

    <?php
    function calcularPorcentagem($parte, $total) {
        if ($total == 0) {
            return "O total não pode ser zero.";
        }
        return ($parte / $total) * 100;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os números fornecidos pelo usuário
        $parte = $_POST["parte"];
        $total = $_POST["total"];

        // Calcula a porcentagem
        $resu = calcularPorcentagem($parte, $total);

        // Exibe o resultado
        echo "<p>A porcentagem é: $resu%</p>";
    }
    ?>
</body>
</html>
