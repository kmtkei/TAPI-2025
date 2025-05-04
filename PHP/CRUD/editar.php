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
    <title>Editar Perfil - Cafetería</title>
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
            /* Estiliza el contenedor principal del formulario */
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
            max-width: 400px;
            /* Limita el ancho máximo */
            width: 100%;
            /* Usa el 100% del ancho disponible */
        }

        h1 {
            /* Estiliza el título del formulario */
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

        .form-group {
            /* Estiliza cada grupo de formulario (label + input) */
            margin-bottom: 1.2rem;
            /* Margen inferior */
        }

        label {
            /* Estiliza las etiquetas de los campos */
            display: block;
            /* Ocupa toda la línea */
            font-size: 0.9rem;
            /* Tamaño de fuente pequeño */
            color: #371406;
            /* Marrón oscuro */
            margin-bottom: 0.3rem;
            /* Margen inferior */
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            /* Estiliza los campos de texto, contraseña y email */
            width: 100%;
            /* Ocupa el ancho del contenedor */
            padding: 0.8rem;
            /* Padding interno */
            border: 1px solid #d3c7a8;
            /* Borde beige */
            border-radius: 8px;
            /* Bordes redondeados */
            font-size: 1rem;
            /* Tamaño de fuente */
            transition: border-color 0.3s;
            /* Transición suave para el borde */
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            /* Estiliza los campos al enfocar */
            border-color: #9E675F;
            /* Borde marrón */
            outline: none;
            /* Elimina el contorno predeterminado */
        }

        input[type="submit"] {
            /* Estiliza el botón de enviar */
            width: 100%;
            /* Ocupa el ancho */
            padding: 0.8rem;
            /* Padding */
            background-color: #9E675F;
            /* Fondo marrón */
            color: #fff;
            /* Texto blanco */
            border: none;
            /* Sin borde */
            border-radius: 8px;
            /* Bordes redondeados */
            font-size: 1rem;
            /* Tamaño de fuente */
            font-weight: 600;
            /* Texto semi-negrita */
            cursor: pointer;
            /* Cursor de mano */
            transition: background-color 0.3s;
            /* Transición suave */
        }

        input[type="submit"]:hover {
            /* Estiliza el botón al pasar el ratón */
            background-color: #7a4c44;
            /* Marrón más oscuro */
        }

        .error, .success {
            /* Estiliza los mensajes de error y éxito */
            text-align: center;
            /* Centra el texto */
            margin-bottom: 1rem;
            /* Margen inferior */
            padding: 0.5rem;
            /* Padding */
            border-radius: 5px;
            /* Bordes redondeados */
        }

        .error {
            /* Estiliza los mensajes de error */
            background-color: #f8d7da;
            /* Fondo rojo claro */
            color: #721c24;
            /* Texto rojo oscuro */
        }

        .success {
            /* Estiliza los mensajes de éxito */
            background-color: #d4edda;
            /* Fondo verde claro */
            color: #155724;
            /* Texto verde oscuro */
        }

        .back-link {
            /* Estiliza el enlace de volver */
            display: block;
            /* Ocupa toda la línea */
            text-align: center;
            /* Centra el texto */
            color: #9E675F;
            /* Marrón */
            text-decoration: none;
            /* Sin subrayado */
            margin-top: 1rem;
            /* Margen superior */
        }

        .back-link:hover {
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
        }
    </style>
</head>
<body>
    <!-- Inicia el contenido visible de la página -->
    <div class="container">
        <!-- Contenedor principal que centra y estiliza el formulario -->
        <h1>Editar Usuario</h1>
        <!-- Título del formulario con degradado -->
        <?php
        // Inicia un bloque de código PHP
        // Incluye el archivo de conexión a la base de datos
        require_once "./conexion.php";

        // Valida que el parámetro 'id' esté definido y sea numérico
        $id = isset($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : 0;

        // Verifica si el ID es válido
        if ($id <= 0) {
            // Si el ID no es válido, muestra un mensaje de error
            echo '<p class="error">ID de usuario inválido.</p>';
            echo '<a href="tabla_editar_eliminar.php" class="back-link">Volver a Administración</a>';
            exit;
        }

        // Usa una consulta preparada para seleccionar el usuario por ID
        $stmt = mysqli_prepare($conexion, "SELECT nombre, email, password FROM usuarios WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Verifica si se encontró el usuario
        if ($row = mysqli_fetch_assoc($result)) {
            // Si se encontró, almacena los datos
            $nombre = $row['nombre'];
            $email = $row['email'];
            $password = $row['password'];
        } else {
            // Si no se encontró, muestra un mensaje de error
            echo '<p class="error">Usuario no encontrado.</p>';
            echo '<a href="tabla_editar_eliminar.php" class="back-link">Volver a Administración</a>';
            mysqli_stmt_close($stmt);
            mysqli_close($conexion);
            exit;
        }

        // Cierra la declaración preparada
        mysqli_stmt_close($stmt);

        // Muestra mensajes de retroalimentación basados en parámetros GET
        if (isset($_GET['error'])) {
            echo '<p class="error">Error al guardar los cambios. Inténtalo de nuevo.</p>';
        } elseif (isset($_GET['success'])) {
            echo '<p class="success">Cambios guardados exitosamente.</p>';
        }
        ?>
        <!-- Formulario para editar los datos del usuario -->
        <form action="./guardar_cambios.php?id=<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>" method="POST">
            <!-- Define la acción del formulario con el ID en la URL -->
            <!-- Usa htmlspecialchars para prevenir XSS -->
            <!-- Método POST para enviar datos de forma segura -->
            <div class="form-group">
                <!-- Grupo de formulario para el nombre -->
                <label for="user">Nombre de Usuario</label>
                <!-- Etiqueta asociada al campo -->
                <input type="text" name="user" id="user" value="<?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>" required>
                <!-- Campo de texto para el nombre, protegido contra XSS -->
            </div>
            <div class="form-group">
                <!-- Grupo de formulario para la contraseña -->
                <label for="pass">Contraseña</label>
                <!-- Etiqueta asociada al campo -->
                <input type="password" name="pass" id="pass" value="<?= htmlspecialchars($password, ENT_QUOTES, 'UTF-8') ?>" required>
                <!-- Campo de contraseña, protegido contra XSS -->
            </div>
            <div class="form-group">
                <!-- Grupo de formulario para el email -->
                <label for="email">Correo Electrónico</label>
                <!-- Etiqueta asociada al campo -->
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required>
                <!-- Campo de email con validación HTML5, protegido contra XSS -->
            </div>
            <input type="submit" name="submit" value="Guardar Cambios">
            <!-- Botón de envío del formulario -->
        </form>
        <a href="listarusuarios.php" class="back-link">Volver a Administración</a>
        <!-- Enlace para regresar a la página de administración -->
        <?php
        // Cierra la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>