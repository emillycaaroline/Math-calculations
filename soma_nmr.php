<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratique 21/05</title>
</head>
<body>
    <?php
//função
    function soma_valores($valor1, $valor2, $valor3){
        $soma = $valor1 + $valor2 + $valor3;
        echo "A soma dos valores $valor1, $valor2 e $valor3 é: ";
        echo $soma;
    }
 //------------------------------------------------------------------------

 //Variaveis com valores para aplicação----------------
 $n1 = 10;
 $n2 = 22;
 $n3 = 35;

 // executa a função
 soma_valores($n1, $n2, $n3);
    ?>
</body>
</html>