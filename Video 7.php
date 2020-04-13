<?php
//Arreglos
$Animales = ['Perro','Gato','Elefante'];

?>
<!-- Mezcla php con html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- For y Foreach -->
    <?php 
        // ciclo for
        for ($i=0; $i < 2; $i++) { 
            echo '<h1>Mi animal favorito es: '.$animales[$i].'</h1>';
        }
        // ciclo foreach
        foreach ($Animales as $valor) {

            echo '<h1>Mi animal favorito es: '.$valor.'</h1>';
            
        }
    ?>
</body>
</html>