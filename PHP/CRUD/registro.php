<?php
// Incluye el archivo de conexión a la base de datos (conexion.php), que define la variable $conexion
// Este archivo establece la conexión MySQL usando mysqli
require_once "./conexion.php";

// Obtiene el valor del campo 'user' (nombre) enviado desde el formulario vía POST
// Nota: No valida si $_POST['user'] está definido, lo que puede causar errores
$usuario = $_POST['user'];

// Obtiene el valor del campo 'pass' (contraseña) enviado desde el formulario vía POST
// Nota: No valida ni hashea la contraseña, lo que es inseguro
$pass = $_POST['pass'];

// Obtiene el valor del campo 'email' enviado desde el formulario vía POST
// Nota: No valida si el email es válido o está definido
$email = $_POST['email'];

// Construye la consulta SQL para insertar un nuevo registro en la tabla 'usuarios'
// Usa NULL para el campo 'id' (asumiendo que es auto-incremental)
// Concatena directamente $usuario, $email, y $pass, lo que permite inyecciones SQL
$consulta = "INSERT INTO usuarios VALUES(NULL, '".$usuario."','".$email."','".$pass."') ";

// Ejecuta la consulta SQL usando mysqli_query para insertar el registro
// $conexion es el objeto de conexión definido en conexion.php
if (mysqli_query($conexion, $consulta)) {
    // Si la consulta se ejecuta correctamente, muestra un mensaje de éxito
    echo "Insertado correctamente";
    echo "<a href='./listarusuarios.php'>volver a administracion</a>";

} else {
    // Si la consulta falla, intenta mostrar un mensaje de error
    // Error 1: Usa $sql, pero la variable es $consulta, lo que causa un error PHP
    // Error 2: Usa $conn, pero la variable de conexión es $conexion, lo que causa un error PHP
    echo "Error al ingresar: " . $sql . "<br>" . mysqli_error($conn);
}

// Cierra la conexión a la base de datos para liberar recursos
mysqli_close($conexion);
?>