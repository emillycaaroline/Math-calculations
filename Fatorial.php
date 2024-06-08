
<!-- ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <h2>Calculadora de Fatorial</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Digite um número:</label><BR>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Função para calcular o fatorial de um número
    function calcularFatorial($numero) {
        // Se o número for 0 ou 1, o fatorial é sempre 1
        if ($numero == 0 || $numero == 1) {
            return 1;
        } else {
            // Inicializa o fatorial como 1
            $fatorial = 1;
            
            // Loop para multiplicar todos os números de 2 até o número fornecido
            for ($i = 2; $i <= $numero; $i++) {
                $fatorial *= $i;
            }
            
            return $fatorial;
        }
    }
    
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número fornecido pelo usuário
        $numero = $_POST["numero"];
    
        // Calcula o fatorial do número fornecido
        $resultado = calcularFatorial($numero);
    }
    
    // Exibe o resultado se estiver disponível
    if (isset($resultado)) {
        echo "<p>O fatorial de $numero é: $resultado</p>";
    }

    ?>
</body>
</html>