
<!-- ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head> 
<body>
<h1>Código para verificação -  Numero Redondo ou não</h1>
<form method="post">
    <label for="nmr">Digite um número:</label><br>
    <input type="nmr" id="nmr" name="nmr" required>
    <button type="submit">Testar</button>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numb = $_POST["nmr"];
        if ($numb % 10 == 0) {
            echo "<p>O número $numb É REDONDO.</p>";
        } else {
            echo "<p>O número $numb NÃO é REDONDO.</p>";
        
        }
    }
    ?>
</body>
</html>