
<!-- ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Par ou impar</title>
</head> 
<body>
    <!-- titulo -->
<h1>Código para verificação -  Par ou Impar</h1>
    <!-- Caixa de pergunta para o usuario e botão -->
    <form method="post">
    <label for="nmr">Digite um número:</label><br>
    <input type="number" id="nmr" name="nmr" required>
    <button type="submit">Testar</button>
</form>
<!-- PHP -->
<?php
// puxa a informação colocada no metodo "POST" no HTML para ser usada no PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numb = $_POST["nmr"];
        // Pega o numero informado e divide por dois, se não sobrar nada vai ser par caso contrario impar.
        if ($numb % 2 == 0) {
            echo "<p>O número $numb é PAR.</p>";
        } else {
            echo "<p>O número $numb é ÍMPAR.</p>";
        
    }
}
?>
   
</body>
</html>