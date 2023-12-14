<?php include 'head.php'; ?>
<?php include 'sql_connection.php'; ?>
<title>Tus fotos</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Tus fotos</h1>
        <section>
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
            ?>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
