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

// datos del usuario vienen de formulario de inicio de sesión
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];

if (esUsuarioRegistrado($nombre, $contrasena)) {
    // Iniciar la sesión
    session_start();
    
    // Establecer una variable de sesión para indicar que el usuario está registrado
    $_SESSION['usuario_registrado'] = $nombre;
    
    // Comprobar si la checkbox está marcada
    if (isset($_POST['recordar']) && $_POST['recordar'] == 'on') {
        // Establecer cookies para recordar nombre y contraseña durante 90 días
        setcookie('nombre_usuario', $nombre, time() + (86400 * 90), "/");
        setcookie('contrasena_usuario', $contrasena, time() + (86400 * 90), "/");
        $fechaComoCadena = date("Y-m-d H:i:s", time());
        setcookie('ultima_sesion', $fechaComoCadena, time() + (86400 * 90), "/");
        
    }
    
    // Redirigir al menú de usuario registrado
    header("Location: index.php");
} else {
    // Redirigir a la página principal con un mensaje de error
    header("Location: index_unregistered.php?error=Usuario no registrado");
}
?>
