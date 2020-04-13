<?php 
// funciones
function Operaciones($n1,$n2){
    $suma=$n1+$n2;
    $dividir=$n1/$n2;
    $restar=$n1-$n2;
    $multiplicar=$n1*$n2;

    echo "El resultado de la suma es de $suma <br>";
    echo "El resultado de la suma es de $dividir <br>";
    echo "El resultado de la suma es de $restar <br>";
    echo "El resultado de la suma es de $multiplicar <br>";

    


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
        Operaciones(50,40);
    ?></h1>
</body>
</html>