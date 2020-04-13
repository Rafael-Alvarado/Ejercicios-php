<?php
//Arreglos Asociativos
$ciudad[0]=['nombre'=>'Valencia','poblacion'=>100];
$ciudad[1]=['nombre'=>'Caracas','poblacion'=>35];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciudades</h1>
    <hr>
    <?php
    //Recorridos de Arreglos Asociativos con ciclo for
    for ($i=0; $i < 1; $i++) { 
        echo '<h2> Nombre: '.$ciudad[$i]['nombre'].'</h2>';
        echo '<h2> Poblacion: '.$ciudad[$i]['poblacion'].'</h2>';
        echo '<hr>';
    }
    //Recorridos de Arreglos Asociativos con ciclo foreach
    foreach ($ciudad as $valor) { 
        echo '<h2> Nombre: '.$valor['nombre'].'</h2>';
        echo '<h2> Poblacion: '.$valor['poblacion'].'</h2>';
        echo '<hr>';
    }
    ?>
</body>
</html>