<?php
//esto es para consumir un archivo en php en este caso el conexion que cree anteriormente
include_once 'conexion.php';
//variable para guardar la sentencia en sql
$sql_leer = 'SELECT * FROM colors';
//variable para preparar la sentencia y guardar toda la conexion
$gsent = $pdo->prepare($sql_leer);
//variable para ejecutar todo lo anterior
$gsent->execute();
//variable para devolver un array con toda ejecucion de la consulta sql
$resultado = $gsent->fetchAll();
//funcion para imprimir todo el array de la conexion de mysql
//var_dump($resultado);

//agregar
if($_POST){
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];
    $sql_agregar = 'INSERT INTO colors (color,descripcion) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($color,$descripcion));
    $sentencia_agregar = null;
    $pdo = null;
    header('location:index.php');

}
if ($_GET) {
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM colors WHERE id=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($id));
    $resultado_unico = $gsent_unico->fetch();
    // var_dump($resultado_unico);
    $gsent_unico = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colores</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/fonts-awesome/css/all.css">
    <link rel="stylesheet" href="fonts/fonts-awesome/css/fontawesome.css">
</head>
<body>
    
    <div class="container m-4 p-5 bg-dark">
        <div class="row ">
            <div class="col-md-6 ">
                <!-- aqui podemos ver dentro de nuestro archivo html que hacemos uso de un foreach que sirve para recorrer espacios de un arreglo en php de esta manera con los dos puntos (:) le decimos que el codigo continua mas abajo y de esta manera hacemos que imprima lo que esta mas abajo en este caso imprimira un div con la fila color de nuestra base de datos mientras que adentro del div se coloca el nombre del color y la descripcion de dicho color y luego se finaliza el foreach -->
                <?php foreach($resultado as $dato): ?>

                <div class="alert alert-<?php echo $dato['color'] ?>" role="alert">
                    <p class="text-uppercase">
                        <?php echo $dato['color'] ?>
                        - 
                        <?php echo $dato['descripcion'] ?>
                        <a href="eliminar.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3"><i class="far fa-trash-alt"></i></a>
                        <a href="index.php?id=<?php echo $dato['id'] ?>" class="float-right"><i class="fas fa-pencil-alt"></i></a>

                    </p>
                </div>
                

                <?php endforeach ?>
            </div>
            <div class="col-md-6">
                <?php if(!$_GET): ?>
                <h2 class="text-white">Agregar Elementos</h2>
                <form method="POST">
                    <input type="text" class="form-control" name="color" >
                    <input type="text" class="form-control mt-3" name="descripcion" >
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>
                <?php if($_GET): ?>
                <h2 class="text-white">Editar Elementos</h2>
                <form method="get" action="editar.php">
                    <input type="text" class="form-control" name="color" value="<?php echo $resultado_unico['color'] ?>">
                    <input type="text" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion'] ?>">
                    <input type="hidden" name="id"  value="<?php echo $resultado_unico['id'] ?>">
                    <button class="btn btn-primary mt-3">Editar</button>
                </form>
                <?php endif ?>
            </div>
        </div> 
    </div>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>
<?php

$pdo = null;
$gsent = null;

?>