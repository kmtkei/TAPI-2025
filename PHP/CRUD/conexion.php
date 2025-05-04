<?php
// Desactiva la notificación de todos los errores y advertencias en el entorno de ejecución
// Nota: Esto no es recomendado en desarrollo, ya que oculta errores útiles para depuración
error_reporting(0);

// Define el nombre del host de la base de datos (generalmente 'localhost' para un servidor local)
$host = 'localhost';

// Define el nombre de la base de datos a la que se conectará (en este caso, 'php1')
$dbname = 'php1';

// Define el nombre de usuario para acceder a la base de datos (en este caso, 'root')
$username = 'root';

// Define la contraseña para el usuario de la base de datos (en este caso, 'root')
// Nota: Usar 'root' con contraseña conocida es inseguro en producción
$password = 'root';

// Crea una nueva instancia de la clase MySQLi para establecer la conexión
// Pasa el host, usuario, contraseña y nombre de la base de datos como parámetros
$conexion = new MySQLi($host, $username, $password, $dbname);

// Verifica si hubo un error al intentar conectar a la base de datos
if ($conexion->connect_errno) {
    // Si hay un error, muestra un mensaje con el código y descripción del error
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

// Muestra un mensaje confirmando que la conexión fue exitosa y el nombre de la base de datos
// Nota: Este mensaje puede no ser necesario en producción, ya que expone información
// echo "Conectado a la base de datos: " . $dbname;
?>