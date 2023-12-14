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

function obtenerAlbumesUsuario() {
    // Lógica para obtener la lista de álbumes del usuario (por ejemplo, desde la base de datos)
    // Retorna un array asociativo con idAlbum como clave y título como valor
    // Debes adaptar esta función según tu esquema de base de datos y lógica de aplicación

    $conexion = Conexion();
    $idUsuario = obtenerIdUsuario();

    $consulta = "SELECT idAlbum, titulo FROM albumes WHERE usuario = $idUsuario";
    $resultado = mysqli_query($conexion, $consulta);

    $albumes = array();

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $albumes[$fila['idAlbum']] = $fila['titulo'];
    }

    return $albumes;
}

// Obtener la lista de álbumes del usuario (debes adaptar esta función según tu lógica de aplicación)
$albumes = obtenerAlbumesUsuario();

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $pais = $_POST['pais'];
    $album = $_POST['album'];

    echo '<p>Foto añadida correctamente al álbum.</p>';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir foto a un álbum</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Añadir foto a un álbum</h1>
        <section>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label for="titulo">Título:</label>
                        </td>
                        <td>
                            <input type="text" name="titulo" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="descripcion">Descripción:</label>
                        </td>
                        <td>
                            <textarea name="descripcion" rows="4" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fecha">Fecha:</label>
                        </td>
                        <td>
                            <input type="date" name="fecha" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pais">País:</label>
                        </td>
                        <td>
                            <input type="text" name="pais" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="album">Álbum:</label>
                        </td>
                        <td>
                            <select name="album">
                                <?php
                                // Mostrar la lista de álbumes en la lista desplegable
                                foreach ($albumes as $id => $titulo) {
                                    echo '<option value="' . $id . '">' . $titulo . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Añadir Foto">
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>
