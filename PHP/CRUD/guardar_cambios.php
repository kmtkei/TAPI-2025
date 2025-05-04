<?php
// Incluye el archivo de conexión a la base de datos (conexion.php), que establece la conexión MySQL usando mysqli
require_once "./conexion.php";

// Obtiene el ID del usuario a editar desde el parámetro GET de la URL (por ejemplo, ?id=1)
$id = $_GET['id'];

// Obtiene el valor del campo 'user' (nombre) enviado desde el formulario vía POST
$usuario = $_POST['user'];

// Obtiene el valor del campo 'pass' (contraseña) enviado desde el formulario vía POST
$pass = $_POST['pass'];

// Obtiene el valor del campo 'email' enviado desde el formulario vía POST
$email = $_POST['email'];

// Construye la consulta SQL para actualizar el registro en la tabla 'usuarios', concatenando directamente las variables
// Nota: Esta práctica es insegura porque permite inyecciones SQL si los datos no están sanitizados
$consulta = "UPDATE usuarios SET nombre = '".$usuario."', email = '".$email."', password = '".$pass."' WHERE usuarios.id =".$id." ;";

// Muestra la consulta SQL generada (útil para depuración, pero no debe usarse en producción por seguridad)
echo $consulta;

// Ejecuta la consulta SQL usando mysqli_query, que envía la consulta a la base de datos
// $conexion es el objeto de conexión definido en conexion.php
if (mysqli_query($conexion, $consulta)) {
    // Si la consulta se ejecuta correctamente, muestra un mensaje de éxito
    echo "editado correctamente";
} else {
    // Si la consulta falla, intenta mostrar un mensaje de error
    // Error 1: Usa $sql, pero la variable es $consulta (esto causa un error PHP)
    // Error 2: Usa $conn, pero la variable de conexión es $conexion (esto causa un error PHP)
    echo "Error al editar: " . $sql . "<br>" . mysqli_error($conn);
}

// Cierra la conexión a la base de datos para liberar recursos
mysqli_close($conexion);

// Muestra un enlace HTML para volver a la página de administración (tabla_editar_eliminar.php)
// Nota: Falta un punto y coma al final de la línea, lo que causa un error de sintaxis
echo "<a href='./listarusuarios.php'>volver a administracion</a>"

?>