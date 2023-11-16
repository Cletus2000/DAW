<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
// Iniciar la sesión
session_start();

// Comprueba si el usuario está registrado
if(!isset($_SESSION['usuario_registrado'])){
    // Comprueba si el usuario ya está en la página index_unregistered.php
    if(basename($_SERVER['PHP_SELF']) != 'index_unregistered.php'){
        // Si no está en la página index_unregistered.php, redirige al usuario
        header('Location: index_unregistered.php');
        exit();
    }
}

// Usar la cookie para determinar qué tema cargar
$theme = $_COOKIE['theme'] ?? 'style.css';
echo "<link href='$theme' rel='stylesheet' />";
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Sometype+Mono&display=swap');
</style>
