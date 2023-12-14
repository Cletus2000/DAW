<?php
include 'head.php';
include 'sql_connection.php';


// Función para obtener el ID del usuario a partir del nombre de usuario
function obtenerIdUsuario() {
    $conexion = Conexion();
    // Ajusta esta lógica según tu esquema de base de datos
    $nombreUsuario = isset($_SESSION['usuario_registrado']) ? $_SESSION['usuario_registrado'] : '';

    // Evita la inyección SQL utilizando sentencias preparadas
    $consulta = "SELECT idUsuario FROM usuarios WHERE nomUsuario = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("s", $nombreUsuario);
    $stmt->execute();
    $stmt->bind_result($idUsuario);
    $stmt->fetch();
    $stmt->close();

    return $idUsuario;
}

// Función para obtener los datos del usuario (debes adaptar según tu lógica de aplicación)
function obtenerDatosUsuario() {
    $conexion = Conexion();
    // Ajusta esta lógica según tu esquema de base de datos y lógica de aplicación
    $idUsuario = obtenerIdUsuario();

    $consulta = "SELECT * FROM usuarios WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($conexion, $consulta);

    return mysqli_fetch_assoc($resultado);
}

// Obtener los datos del usuario para prellenar el formulario (debes adaptar según tu lógica de aplicación)
$datosUsuario = obtenerDatosUsuario();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis datos</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Mis datos</h1>
        <section>
            <h2>Modificar datos</h2>
            <form id="modificarDatosForm" action="modificar_usuario.php" method="POST">
                <table>
                    <caption>Modifica tus datos a continuación:</caption>
                    <tr>
                        <td>
                            <label for="nombreUsuario">Nombre de usuario:</label>
                        </td>
                        <td>
                            <input type="text" id="nombreUsuario" name="nombreUsuario" value="<?php echo $datosUsuario['nomUsuario']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="contrasena">Contraseña:</label>
                        </td>
                        <td>
                            <input type="password" id="contrasena" name="contrasena">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="new_contrasena">Nueva contraseña</label>
                        </td>
                        <td>
                            <input type="password" id="new_contrasena" name="new_contrasena">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email" value="<?php echo $datosUsuario['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genero">Género:</label>
                        </td>
                        <td>
                            <select id="genero" name="genero">
                                <option value="Masculino" <?php echo $datosUsuario['sexo'] === 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
                                <option value="Femenino" <?php echo $datosUsuario['sexo'] === 'Femenino' ? 'selected' : ''; ?>>Femenino</option>
                                <option value="Otro" <?php echo $datosUsuario['sexo'] === 'Otro' ? 'selected' : ''; ?>>Otro</option>
                                <option value="Prefiero no decirlo" <?php echo $datosUsuario['sexo'] === 'Prefiero no decirlo' ? 'selected' : ''; ?>>Prefiero no decirlo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        </td>
                        <td>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $datosUsuario['fNacimiento']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ciudad">Ciudad de residencia:</label>
                        </td>
                        <td>
                            <input type="text" id="ciudad" name="ciudad" value="<?php echo $datosUsuario['ciudad']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pais">País:</label>
                        </td>
                        <td>
                        <?php
                            $conexion = Conexion();
                            $consultaPaises = "SELECT * FROM paises";
                            $resultadoPaises = mysqli_query($conexion, $consultaPaises);
                            ?>
                            <select id="pais" name="pais">
                                <?php if ($resultadoPaises && mysqli_num_rows($resultadoPaises) > 0): ?>
                                    <?php while ($pais = mysqli_fetch_assoc($resultadoPaises)): ?>
                                        <option value="<?= $pais['idPais']; ?>" <?php echo $datosUsuario['pais'] == $pais['idPais'] ? 'selected' : ''; ?>>
                                            <?= $pais['nomPais']; ?>
                                        </option>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <option value="">No hay países disponibles</option>
                                <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Guardar cambios">
            </form>
        </section>
    </main>

<?php include 'footer.php'; ?>



