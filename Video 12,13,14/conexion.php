<?php
//cuando un codigo en php contiene unicamente php no es necesario cerrar las etiquetas de php
// este es un codigo en php para establecer una conexion a la base de dato con Mysql esta usa el metodo pdo tengo que buscar otros metodos para establecer conexion con la base de datos ahora explicare que son cada una de estas cosas

$link = 'mysql:host=localhost;dbname=colores';
//este codigo de arriba guarda en una variable la direccion de la base de datos de mysql en el cual dice que esta en el local host y su nombre es colores
$usuario = 'root';
//este codigo de arriba guarda en una variable el nombre de el usuario root que en este caso es root tengo que buscar como cambiar el usuario y la contraseña en xampp
$pass = '' ;
//este codigo de arriba guarda en una variable la contraseña del usuario root que en este caso no tiene por lo tanto se deja e espacio en blanco
//para establecer a conexion a la base de datos es obligatorio si o si tener estas tres variables las cuales serviran para hacer la ejecucion de el metodo pdo que veremos a continuacion

//esto que se ve aqui es el metodo try cach el cual es semejante al if else en el cual intentara realizar una accion en este caso establecer la conexion con la base de datos y en caso de que este falle se hara la segunda opcion en este caso lanzara un mensaje de error al conectar con la base de datos
try {
    // aqui se puede ver que esta guardando en una variable pdo el metodo PDO y toma los tres parametros que en este caso son las tres variables realizadas anteriormente(link,usuario,pass) y en caso de que este funcione imprimira en pantalla el mensaje de que se ha conectado
    $pdo = new PDO($link,$usuario,$pass);
    echo 'Conectado <br>';
    // foreach($pdo->query('SELECT * FROM `colors`') as $fila) {
    //     print_r($fila);
    // }

} catch (PDOException $e) {
    // en caso contrario y que el metodo pdo falle y halla un error este error lo guardara en una variable en este caso e para luego a continuacion imprimir un mensaje de error e imprimir especificamente cual fue el error para luego usar la sentencia die() y asi matar la conexion
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}