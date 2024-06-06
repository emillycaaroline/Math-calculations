<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title> Positivo, negativo ou neutro </title>
</head> 
<body>
<h1>Código para verificação - Positivo, negativo ou neutro  </h1>
<form method="post">
    <label for="nmr">Digite um número:</label><br>
    <input type="nmr" id="nmr" name="nmr" required>
    <button type="submit">Testar</button>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numb = $_POST["nmr"];
        if ($numb > 0) {
            echo "<p>O número $numb é positivo.</p>";
        } elseif($numb < 0) {
            echo "<p>O número $numb não é positivo.</p>";
        }else{
            echo "<P>O número $numb é neutro<P>";
        }
    }
    ?>
</body>
</html>