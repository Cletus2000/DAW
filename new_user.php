<?php include 'head.php'; ?>
<!--
<!?php
// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombreUsuario = $_GET["nombreUsuario"];
    $contrasena = $_GET["contrasena"];
    $rep_contrasena = $_GET["rep_contrasena"];

    // Comprobar que se ha escrito algo en el nombre de usuario, en la contraseña y en repetir contraseña
    if (empty($nombreUsuario)) {
        header("Location: error_empty.php?error=" . urlencode("Por favor, completa todos los campos."));
    }
    // Comprobar que contraseña y repetir contraseña coinciden
    else if ($contrasena != $rep_contrasena) {
        header("Location: error_same.php?error=" . urlencode("Las contraseñas no coinciden."));
    }
    else {
        // Redirigir a la página de bienvenida con la información del formulario en la URL
        header("Location: new_user.php?nombreUsuario=" . urlencode($nombreUsuario) . "&genero=" . urlencode($_GET["genero"]));
    }
}
?>
-->
<?php
// Iniciar la sesión
session_start();

// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["nombreUsuario"];
    $contrasena = $_POST["contrasena"];
    $rep_contrasena = $_POST["rep_contrasena"];

    // Comprobar que se ha escrito algo en el nombre de usuario, en la contraseña y en repetir contraseña
    if (empty($nombreUsuario) || empty($contrasena) || empty($rep_contrasena)) {
        $_SESSION["error"] = "Por favor, completa todos los campos.";
        header("Location: error_empty.php");
    }
    // Comprobar que contraseña y repetir contraseña coinciden
    else if ($contrasena != $rep_contrasena) {
        $_SESSION["error"] = "Las contraseñas no coinciden.";
        header("Location: error_same.php");
    }
    else {
        // Guardar la información del formulario en una variable de sesión
        $_SESSION["nombreUsuario"] = $nombreUsuario;
        $_SESSION["contrasena"] = $contrasena;
        $_SESSION["genero"] = $_POST["genero"];

        // Redirigir a la página de bienvenida
        header("Location: new_user.php");
    }
}
?>

<title>Registro completo</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>

    <main>
        <h1>Datos de registro</h1>
        <section>
                <table>
                    <caption>Confirma que estos datos, son los tuyos.</caption>
                    <tr>
                        <td>
                            <label for="nombreUsuario">Nombre de usuario:</label>
                        </td>
                        <td>
                            <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?php echo isset($_GET['nombreUsuario']) ? htmlspecialchars($_GET['nombreUsuario']) : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genero">Género:</label>
                        </td>                            
                        <td>
                            <input type="text" id="genero" name="genero" value="<?php echo isset($_GET['genero']) ? $_GET['genero'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        </td>
                        <td>
                            <input type="text" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo isset($_GET['fechaNacimiento']) ? $_GET['fechaNacimiento'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ciudad">Ciudad de residencia:</label>
                        </td>
                        <td>
                        <input type="text" id="ciudad" name="ciudad" value="<?php echo isset($_GET['ciudad']) ? $_GET['ciudad'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pais">País:</label>
                        </td>
                        <td>
                            <input type="text" id="pais" name="pais" value="<?php echo isset($_GET['pais']) ? $_GET['pais'] : '' ?>">
                        </td>
                    </tr>
                    <!--
                    <tr>
                        <td>
                            <label for="imagen">Seleccionar una imagen:</label>
                        </td>
                        <td>
                            <input type="file" id="imagen" accept="image/*">
                        </td>
                    </tr>
                    -->
                </table>
                <a class="boton" href="index.php">Ir al inicio</a>
        </section>
    </main>

<?php include 'footer.php'; ?>
