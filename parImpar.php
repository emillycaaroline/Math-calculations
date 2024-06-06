<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou impar</title>
    <script>
        var nome = prompt('informe um numero');
    </script>
</head>
<body>
    <h1>Código para verificação -  Par ou Impar</h1>
    <?php
     $num= "<script>document.write(nome)</script>";

     if($num % 2 == 0){
        echo "O número informado é PAR";
     } else{
        echo "O número informado é ÍMPAR";
     }
    ?>
</body>
</html>