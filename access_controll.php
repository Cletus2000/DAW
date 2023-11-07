<?php
// Datos de los usuarios permitidos
$usuarios_permitidos = array(
    array("nombre" => "admin", "contrasena" => "admin"),
    array("nombre" => "usuario1", "contrasena" => "contrasena1"),
    array("nombre" => "usuario2", "contrasena" => "contrasena2"),
    array("nombre" => "usuario3", "contrasena" => "contrasena3")
);

// Comprobar si el usuario está registrado
function esUsuarioRegistrado($nombre, $contraseña) {
    global $usuarios_permitidos;
    foreach ($usuarios_permitidos as $usuario) {
        if ($usuario["nombre"] == $nombre && $usuario["contrasena"] == $contrasena) {
            return true;
        }
    }
    return false;
}

// Supongamos que los datos del usuario vienen de un formulario de inicio de sesión
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];

if (esUsuarioRegistrado($nombre, $contrasena)) {
    // Redirigir al menú de usuario registrado
    header("Location: index.php");
} else {
    // Redirigir a la página principal con un mensaje de error
    header("Location: index.php?error=Usuario no registrado");
}
?>
