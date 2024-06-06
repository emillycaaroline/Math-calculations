<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>função</title>
</head>
<body>
    <?php
    //bloco de funções-------------------------------------------------------
    function triplo($numero){
        $x = $numero * 3;
        return $x;
    }

    //chama função
    $valor = 5;
    echo "O triplo de $valor é " . triplo($valor);
    
    ?>
</body>
</html>