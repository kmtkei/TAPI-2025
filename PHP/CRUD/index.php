<!DOCTYPE html>
<!-- Declara el tipo de documento como HTML5 -->
<html lang="es">
<!-- Define el elemento raíz con idioma español para accesibilidad -->
<head>
    <!-- Sección de metadatos del documento -->
    <meta charset="UTF-8">
    <!-- Establece la codificación de caracteres a UTF-8 para soportar caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Asegura que la página sea responsiva en dispositivos móviles -->
    <title>Registro de Usuarios - Cafetería</title>
    <!-- Define el título de la página que aparece en la pestaña del navegador -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Importa la fuente Poppins desde Google Fonts para un diseño consistente -->
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
            /* Aplica la fuente Poppins a todos los elementos */
        }

        body {
            /* Estiliza el elemento body */
            background-color: #f5e9dd;
            /* Fondo beige cálido inspirado en una cafetería */
            display: flex;
            /* Usa el modelo de caja flexible para centrar contenido */
            justify-content: center;
            /* Centra horizontalmente */
            align-items: center;
            /* Centra verticalmente */
            min-height: 100vh;
            /* Asegura que el body ocupe al menos la altura de la ventana */
            padding: 20px;
            /* Añade padding alrededor del contenido */
        }

        .container {
            /* Estiliza el contenedor del formulario */
            margin: 0 auto;
            /* Centra el contenedor horizontalmente */
            background-color: #fff;
            /* Fondo blanco para contraste */
            padding: 32px;
            /* Padding interno de 32px */
            border-radius: 15px;
            /* Bordes redondeados para un diseño suave */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Sombra suave para profundidad */
            max-width: 400px;
            /* Limita el ancho máximo a 400px */
            width: 100%;
            /* Usa el 100% del ancho disponible hasta el máximo */
        }

        h1 {
            /* Estiliza el título del formulario */
            font-size: 2rem;
            /* Tamaño de fuente de 2rem (32px) */
            font-weight: 600;
            /* Peso de fuente semi-negrita */
            text-align: center;
            /* Centra el texto */
            margin-bottom: 1.5rem;
            /* Margen inferior de 1.5rem */
            background: linear-gradient(90deg, #9E675F, #371406);
            /* Degradado marrón de claro a oscuro */
            background-clip: text;
            /* Limita el degradado al texto */
            -webkit-background-clip: text;
            /* Versión con prefijo para compatibilidad con WebKit */
            -webkit-text-fill-color: transparent;
            /* Hace el texto transparente para mostrar el degradado */
        }

        .form-group {
            /* Estiliza cada grupo de formulario (label + input) */
            margin-bottom: 1.2rem;
            /* Margen inferior para separar los grupos */
        }

        label {
            /* Estiliza las etiquetas de los campos */
            display: block;
            /* Ocupa toda la línea */
            font-size: 0.9rem;
            /* Tamaño de fuente pequeño (14.4px) */
            color: #371406;
            /* Color marrón oscuro */
            margin-bottom: 0.3rem;
            /* Margen inferior pequeño */
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            /* Estiliza los campos de texto, contraseña y email */
            width: 100%;
            /* Ocupa el 100% del ancho del contenedor */
            padding: 0.8rem;
            /* Padding interno de 0.8rem */
            border: 1px solid #d3c7a8;
            /* Borde beige claro */
            border-radius: 8px;
            /* Bordes redondeados */
            font-size: 1rem;
            /* Tamaño de fuente de 1rem (16px) */
            transition: border-color 0.3s;
            /* Transición suave para el borde */
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            /* Estiliza los campos cuando están enfocados */
            border-color: #9E675F;
            /* Borde marrón al enfocar */
            outline: none;
            /* Elimina el contorno predeterminado del navegador */
        }

        input[type="submit"] {
            /* Estiliza el botón de enviar */
            width: 100%;
            /* Ocupa el 100% del ancho */
            padding: 0.8rem;
            /* Padding interno */
            background-color: #9E675F;
            /* Fondo marrón claro */
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
            /* Cursor de mano al pasar por encima */
            transition: background-color 0.3s;
            /* Transición suave para el fondo */
        }

        input[type="submit"]:hover {
            /* Estiliza el botón al pasar el ratón */
            background-color: #7a4c44;
            /* Fondo marrón más oscuro */
        }

        .error, .success {
            /* Estiliza los mensajes de error y éxito */
            text-align: center;
            /* Centra el texto */
            margin-bottom: 1rem;
            /* Margen inferior */
            padding: 0.5rem;
            /* Padding interno */
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
            /* Estilos responsivos para pantallas menores a 480px */
            .container {
                padding: 1.5rem;
                /* Reduce el padding del contenedor */
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
        <h1>Registrar Usuario</h1>
        <!-- Título del formulario con degradado de color -->
        <?php
        // Inicia un bloque de código PHP para manejar mensajes de retroalimentación
        // Comprueba si hay un parámetro 'error' en la URL (por ejemplo, ?error=1)
        if (isset($_GET['error'])) {
            // Muestra un mensaje de error si el registro falló
            echo '<p class="error">Error al registrar el usuario. Inténtalo de nuevo.</p>';
        } elseif (isset($_GET['success'])) {
            // Muestra un mensaje de éxito si el registro fue exitoso
            echo '<p class="success">Usuario registrado exitosamente.</p>';
        }

        // Define valores por defecto para los campos en caso de que se recargue el formulario
        $user = isset($_POST['user']) ? $_POST['user'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        ?>
        <!-- Formulario para registrar un nuevo usuario -->
        <form action="./registro.php" method="POST">
            <!-- Define la acción del formulario (enviar datos a registro.php) -->
            <!-- Método POST asegura que los datos se envíen de forma segura -->
            <div class="form-group">
                <!-- Grupo de formulario para el campo de nombre -->
                <label for="user">Nombre de Usuario</label>
                <!-- Etiqueta asociada al campo de nombre -->
                <input type="text" name="user" id="user" value="<?= htmlspecialchars($user, ENT_QUOTES, 'UTF-8') ?>" required>
                <!-- Campo de texto para el nombre, con htmlspecialchars para prevenir XSS -->
                <!-- Atributo required asegura que el campo no esté vacío -->
            </div>
            <div class="form-group">
                <!-- Grupo de formulario para la contraseña -->
                <label for="pass">Contraseña</label>
                <!-- Etiqueta asociada al campo de contraseña -->
                <input type="password" name="pass" id="pass" required>
                <!-- Campo de contraseña que oculta el texto -->
                <!-- No usa value para evitar mostrar contraseñas por seguridad -->
            </div>
            <div class="form-group">
                <!-- Grupo de formulario para el email -->
                <label for="email">Correo Electrónico</label>
                <!-- Etiqueta asociada al campo de email -->
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required>
                <!-- Campo de email con validación HTML5 -->
                <!-- Usa htmlspecialchars para prevenir XSS -->
            </div>
            <input type="submit" name="submit" value="Registrar">
            <!-- Botón de envío del formulario con texto "Registrar" -->
            <a href="listarusuarios.php" class="back-link">Volver a Administración</a>
            <!-- Enlace para regresar a la página de administración -->
        </form>
    </div>
</body>
</html>