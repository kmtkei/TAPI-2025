<?php
// Incluye el archivo de conexión a la base de datos, que define $conexion
require_once "./conexion.php";

// Define la consulta SQL para seleccionar todos los registros de la tabla 'usuarios'
$query = "SELECT * FROM usuarios";

// Ejecuta la consulta usando mysqli_query y almacena el resultado
$result = mysqli_query($conexion, $query);

// Verifica si la consulta falló y maneja el error
if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>
<!DOCTYPE html>
<!-- Declara el tipo de documento como HTML5 -->
<html lang="es">
<!-- Define el elemento raíz con idioma español para accesibilidad -->
<head>
    <!-- Sección de metadatos del documento -->
    <meta charset="UTF-8">
    <!-- Establece la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Asegura que la página sea responsiva en dispositivos móviles -->
    <title>Administración de Usuarios - Cafetería</title>
    <!-- Define el título de la página -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Importa la fuente Poppins desde Google Fonts -->
    <style>
        /* Inicia el bloque de estilos CSS internos */
        * {
            /* Aplica reglas a todos los elementos */
            margin: 0;
            /* Elimina márgenes predeterminados */
            padding: 0;
            /* Elimina padding predeterminado */
            box-sizing: border-box;
            /* Incluye padding y bordes en el ancho y alto */
            font-family: 'Poppins', sans-serif;
            /* Aplica la fuente Poppins */
        }

        body {
            /* Estiliza el elemento body */
            background-color: #f5e9dd;
            /* Fondo beige cálido inspirado en una cafetería */
            display: flex;
            /* Usa el modelo de caja flexible */
            justify-content: center;
            /* Centra horizontalmente */
            align-items: center;
            /* Centra verticalmente */
            min-height: 100vh;
            /* Asegura que ocupe al menos la altura de la ventana */
            padding: 20px;
            /* Añade padding alrededor */
        }

        .container {
            /* Estiliza el contenedor principal */
            margin: 0 auto;
            /* Centra horizontalmente */
            background-color: #fff;
            /* Fondo blanco */
            padding: 32px;
            /* Padding interno */
            border-radius: 15px;
            /* Bordes redondeados */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Sombra suave */
            max-width: 800px;
            /* Ancho máximo más grande para la tabla */
            width: 100%;
            /* Usa el 100% del ancho disponible */
        }

        h1 {
            /* Estiliza el título */
            font-size: 2rem;
            /* Tamaño de fuente */
            font-weight: 600;
            /* Peso semi-negrita */
            text-align: center;
            /* Centra el texto */
            margin-bottom: 1.5rem;
            /* Margen inferior */
            background: linear-gradient(90deg, #9E675F, #371406);
            /* Degradado marrón */
            background-clip: text;
            /* Limita el degradado al texto */
            -webkit-background-clip: text;
            /* Compatibilidad con WebKit */
            -webkit-text-fill-color: transparent;
            /* Texto transparente para el degradado */
        }

        table {
            /* Estiliza la tabla */
            width: 100%;
            /* Ocupa todo el ancho del contenedor */
            border-collapse: collapse;
            /* Une los bordes de las celdas */
            margin-bottom: 1.5rem;
            /* Margen inferior */
        }

        th, td {
            /* Estiliza las celdas de encabezado y datos */
            padding: 12px;
            /* Padding interno */
            text-align: left;
            /* Alinea el texto a la izquierda */
            border-bottom: 1px solid #d3c7a8;
            /* Borde inferior beige */
        }

        th {
            /* Estiliza los encabezados */
            background-color: #9E675F;
            /* Fondo marrón */
            color: #fff;
            /* Texto blanco */
            font-weight: 600;
            /* Peso semi-negrita */
        }

        tr:hover {
            /* Añade un efecto hover a las filas */
            background-color: #f5e9dd;
            /* Fondo beige claro */
        }

        .action-btn {
            /* Estiliza los botones de acción (Editar, Eliminar) */
            display: inline-block;
            /* Permite márgenes y padding */
            padding: 8px 12px;
            /* Padding interno */
            margin-right: 5px;
            /* Margen entre botones */
            background-color: #9E675F;
            /* Fondo marrón */
            color: #fff;
            /* Texto blanco */
            text-decoration: none;
            /* Sin subrayado */
            border-radius: 8px;
            /* Bordes redondeados */
            font-size: 0.9rem;
            /* Tamaño de fuente */
            transition: background-color 0.3s;
            /* Transición suave */
        }

        .action-btn:hover {
            /* Estiliza los botones al pasar el ratón */
            background-color: #7a4c44;
            /* Marrón más oscuro */
        }

        .action-btn.delete {
            /* Estiliza el botón de eliminar */
            background-color: #721c24;
            /* Fondo rojo oscuro */
        }

        .action-btn.delete:hover {
            /* Hover para el botón de eliminar */
            background-color: #5a161c;
            /* Rojo más oscuro */
        }

        .no-users {
            /* Estiliza el mensaje cuando no hay usuarios */
            text-align: center;
            /* Centra el texto */
            color: #371406;
            /* Marrón oscuro */
            font-size: 1rem;
            /* Tamaño de fuente */
            margin: 1.5rem 0;
            /* Margen */
        }

        .register-link {
            /* Estiliza el enlace para registrar usuarios */
            display: block;
            /* Ocupa toda la línea */
            text-align: center;
            /* Centra el texto */
            color: #9E675F;
            /* Color marrón */
            text-decoration: none;
            /* Sin subrayado */
            font-size: 1rem;
            /* Tamaño de fuente */
            margin-top: 1rem;
            /* Margen superior */
        }

        .register-link:hover {
            /* Hover para el enlace */
            color: #7a4c44;
            /* Marrón más oscuro */
        }

        @media (max-width: 480px) {
            /* Estilos responsivos para pantallas pequeñas */
            .container {
                padding: 1.5rem;
                /* Reduce el padding */
            }

            h1 {
                font-size: 1.5rem;
                /* Reduce el tamaño del título */
            }

            th, td {
                padding: 8px;
                /* Reduce el padding de las celdas */
                font-size: 0.9rem;
                /* Reduce el tamaño de fuente */
            }
        }
    </style>
</head>
<body>
    <!-- Inicia el contenido visible de la página -->
    <div class="container">
        <!-- Contenedor principal que centra y estiliza la tabla -->
        <h1>Administración de Usuarios</h1>
        <!-- Título con degradado de color -->
        <?php
        // Verifica si hay usuarios en el resultado de la consulta
        if (mysqli_num_rows($result) > 0) {
            // Si hay usuarios, muestra la tabla
        ?>
            <table>
                <!-- Inicia la tabla para listar usuarios -->
                <thead>
                    <!-- Encabezados de la tabla -->
                    <tr>
                        <th>Nombre</th>
                        <!-- Columna para el nombre -->
                        <th>Email</th>
                        <!-- Columna para el email -->
                        <th>Contraseña</th>
                        <!-- Columna para la contraseña -->
                        <th>Acciones</th>
                        <!-- Columna para acciones (editar/eliminar) -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Cuerpo de la tabla con los datos -->
                    <?php
                    // Itera sobre los resultados de la consulta
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Cada fila representa un usuario
                    ?>
                        <tr>
                            <!-- Fila de la tabla -->
                            <td><?= htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') ?></td>
                            <!-- Celda con el nombre, protegida contra XSS -->
                            <td><?= htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') ?></td>
                            <!-- Celda con el email, protegida contra XSS -->
                            <td><?= htmlspecialchars($row['password'], ENT_QUOTES, 'UTF-8') ?></td>
                            <!-- Celda con la contraseña, protegida contra XSS -->
                            <td>
                                <!-- Celda con botones de acción -->
                                <a href="editar.php?id=<?= $row['id'] ?>" class="action-btn">Editar</a>
                                <!-- Enlace para editar el usuario -->
                                <a href="eliminar.php?id=<?= $row['id'] ?>" class="action-btn delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                                <!-- Enlace para eliminar el usuario con confirmación -->
                            </td>
                        </tr>
                    <?php
                    }
                    // Libera el resultado de la consulta
                    mysqli_free_result($result);
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            // Si no hay usuarios, muestra un mensaje
            echo '<p class="no-users">No hay usuarios registrados.</p>';
        }
        // Cierra la conexión a la base de datos
        mysqli_close($conexion);
        ?>
        <a href="index.php" class="register-link">Registrar Nuevo Usuario</a>
        <!-- Enlace para ir al formulario de registro -->
    </div>
</body>
</html>