<?php
include 'sql_connection.php';

$conn = Conexion();

// Comprobar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // datos del usuario vienen de formulario de inicio de sesión
    $email = $_POST["email"];
    $clave = $_POST["clave"];

    // Consultar la base de datos para verificar si el usuario está registrado
    $sql = "SELECT * FROM usuarios WHERE email = ? AND clave = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $clave);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Iniciar la sesión
        session_start();

        // Establecer una variable de sesión para indicar que el usuario está registrado
        $_SESSION['usuario_registrado'] = $email;

        // Redirigir al menú de usuario registrado
        header("Location: index.php");
    } else {
        // Redirigir a la página principal con un mensaje de error
        header("Location: index_unregistered.php?error=Usuario no registrado");
    }
} else {
    // Redirigir a la página principal si no se ha enviado el formulario
    header("Location: index_unregistered.php");
}

// Cerrar la conexión a la base de datos al final del script
$stmt->close();
$conn->close();
?>