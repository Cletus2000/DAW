<?php
include 'head.php';
include 'sql_connection.php';


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
    <title>Mi perfil</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Mi perfil</h1>
        <section>
            <h2>Información básica</h2>
            <!-- Mostrar información básica del usuario -->
            <p>Nombre de usuario: <?php echo $datosUsuario['nomUsuario']; ?></p>
            <p>Email: <?php echo $datosUsuario['email']; ?></p>
            <p>Género: <?php echo $datosUsuario['sexo']; ?></p>
            <p>Fecha de Nacimiento: <?php echo $datosUsuario['fNacimiento']; ?></p>
            <p>Ciudad: <?php echo $datosUsuario['ciudad']; ?></p>
            <p>País: <?php echo obtenerNombrePais($datosUsuario['pais']); ?></p>
        </section>

        <section>
            <h2>Mis fotos</h2>
            <?php
            $conexion = Conexion();

            // Asegúrate de tener el ID del usuario
            $idUsuario = obtenerIdUsuario(); // Esto es solo un ejemplo, debes adaptarlo según tu lógica de aplicación

            // Mostrar el ID del usuario
            echo '<p>ID del usuario: ' . $idUsuario . '</p>';

            $consultaFotos = "SELECT f.idFoto, f.titulo, f.descripcion, f.fichero
            FROM fotos AS f
            JOIN albumes AS a ON f.album = a.idAlbum
            WHERE a.usuario = $idUsuario
            ORDER BY f.idFoto DESC";

            $resultadoFotos = mysqli_query($conexion, $consultaFotos);
            $totalFotos = mysqli_num_rows($resultadoFotos);

            // Mostrar el número total de fotos en un elemento h2
            echo '<h2>Total de fotos: ' . $totalFotos . '</h2>';

            while ($filaFoto = mysqli_fetch_assoc($resultadoFotos)) {
                $idFoto = $filaFoto['idFoto'];
                $tituloFoto = $filaFoto['titulo'];

                // Obtener la descripción y la última fecha de la foto
                $descripcion = $filaFoto['descripcion'];
                $fechaConsulta = "SELECT MAX(fecha) AS ultimaFecha FROM fotos WHERE idFoto = $idFoto";
                $resultadoFecha = mysqli_query($conexion, $fechaConsulta);
                $ultimaFecha = mysqli_fetch_assoc($resultadoFecha)['ultimaFecha'];

                // Mostrar la foto
                echo '<article>';
                echo '<a href="details.php?id=' . $idFoto . '">';
                echo '<img src="pictures/' . $filaFoto['fichero'] . '" alt="Foto" width="300" height="300">';
                echo '</a>';
                echo '<br>';
                echo '<label>' . $tituloFoto . '</label>';
                echo '<br>';
                echo '<p>' . $descripcion . '</p>';
                echo '<time datetime="' . $ultimaFecha . '">' . $ultimaFecha . '</time>';
                echo '</article>';
            }

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

            // Función para obtener el nombre del país a partir de su ID
            function obtenerNombrePais($idPais) {
                $conexion = Conexion();
                $consulta = "SELECT nomPais FROM paises WHERE idPais = $idPais";
                $resultado = mysqli_query($conexion, $consulta);
                $nombrePais = mysqli_fetch_assoc($resultado)['nomPais'];
                return $nombrePais;
            }
            ?>
        </section>
    </main>

    <?php include 'footer.php'; ?>
