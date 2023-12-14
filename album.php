<?php include 'head.php'; ?>
<?php include 'sql_connection.php'; ?>
<title>Tus álbumes</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Tus álbumes</h1>
        <section>
            <?php
            $conexion = Conexion();

            // Asegúrate de tener el ID del usuario
            $idUsuario = obtenerIdUsuario(); // Esto es solo un ejemplo, debes adaptarlo según tu lógica de aplicación

            // Mostrar el ID del usuario
            echo '<p>ID del usuario: ' . $idUsuario . '</p>';

            $consulta = "SELECT idAlbum, titulo, descripcion
                         FROM albumes
                         WHERE usuario = $idUsuario
                         ORDER BY idAlbum DESC";
            $resultado = mysqli_query($conexion, $consulta);
            $totalAlbumes = mysqli_num_rows($resultado);

            // Mostrar el número total de álbumes en un elemento h2
            echo '<h2>Total de álbumes: ' . $totalAlbumes . '</h2>';

            while ($fila = mysqli_fetch_assoc($resultado)) {
                $idAlbum = $fila['idAlbum'];
                $titulo = $fila['titulo'];

                // Obtener el número de fotos en el álbum
                $consultaFotos = "SELECT COUNT(*) AS numFotos FROM fotos WHERE album = $idAlbum";
                $resultadoFotos = mysqli_query($conexion, $consultaFotos);
                $numFotos = mysqli_fetch_assoc($resultadoFotos)['numFotos'];

                // Obtener la última foto subida como portada del álbum
                $consultaPortada = "SELECT fichero FROM fotos WHERE album = $idAlbum ORDER BY idFoto DESC LIMIT 1";
                $resultadoPortada = mysqli_query($conexion, $consultaPortada);
                $filaPortada = mysqli_fetch_assoc($resultadoPortada);
                $portada = isset($filaPortada['fichero']) ? $filaPortada['fichero'] : 'nullphoto.webp';                
                $portada = $portada ? $portada : 'nullphoto.webp';

                echo '<article>';
                echo '<a href="album_details.php?id=' . $idAlbum . '">';
                echo '<img src="pictures/' . $portada . '" alt="Portada del álbum" width="300" height="300">';
                echo '</a>';
                echo '<br>';
                echo '<label>' . $titulo . '</label>';
                echo '<br>';
                echo '<p>Número de fotos: ' . $numFotos . '</p>';
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
