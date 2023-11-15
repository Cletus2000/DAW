<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se desea, también destruir la sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
if(basename($_SERVER['PHP_SELF']) != 'index_unregistered.php'){
    // Si no está en la página index_unregistered.php, redirige al usuario
    header('Location: index_unregistered.php');
    exit();
}

?>
