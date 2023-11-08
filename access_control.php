<?php
// Datos de los usuarios permitidos
$usuarios_permitidos = array(
    array("nombre" => "admin", "contrasena" => "admin"),
    array("nombre" => "raul", "contrasena" => "raul"),
    array("nombre" => "carlos", "contrasena" => "carlos"),
    array("nombre" => "pepe", "contrasena" => "pepe")
);

// Comprobar si el usuario está registrado
function esUsuarioRegistrado($nombre, $contrasena) {
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
    header("Location: index_unregistered.php?error=Usuario no registrado");
}
?>
