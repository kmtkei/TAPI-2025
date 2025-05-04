<?php
// Incluye el archivo de conexión a la base de datos (conexion.php), que define la variable $conexion
// Este archivo establece la conexión MySQL usando mysqli
require_once "./conexion.php";

// Obtiene el ID del usuario a eliminar desde el parámetro GET de la URL (por ejemplo, ?id=1)
// Nota: No valida si $_GET['id'] está definido o es numérico, lo que puede causar errores
$id = $_GET['id'];

// Construye la consulta SQL para eliminar el registro de la tabla 'usuarios' con el ID especificado
// Nota: Concatenar $id directamente es inseguro y permite inyecciones SQL
$consulta = "DELETE FROM usuarios WHERE usuarios.id = ".$id;

// Ejecuta la consulta SQL usando mysqli_query, que envía la instrucción a la base de datos
// $conexion es el objeto de conexión definido en conexion.php
if (mysqli_query($conexion, $consulta)) {
    // Si la consulta se ejecuta correctamente, muestra un mensaje de éxito
    echo "Eliminado Correctamente";
} else {
    // Si la consulta falla, intenta mostrar un mensaje de error
    // Error 1: Usa $sql, pero la variable es $consulta, lo que causa un error PHP
    // Error 2: Usa $conn, pero la variable de conexión es $conexion, lo que causa un error PHP
    echo "Error al Eliminar: " . $sql . "<br>" . mysqli_error($conn);
}

// Cierra la conexión a la base de datos para liberar recursos
mysqli_close($conexion);

// Muestra un enlace HTML para volver a la página de administración (tabla_editar_eliminar.php)
// Nota: Falta un punto y coma al final, lo que causa un error de sintaxis
echo "<a href='./listarusuarios.php'>volver a administracion</a>"

?>