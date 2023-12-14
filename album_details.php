<?php include 'head.php'; ?>
<title>Detalles del álbum</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Detalles del álbum</h1>
        <section>
            <?php
            include 'sql_connection.php';
            $conexion = Conexion();
            $idAlbum = $_GET['id'];

            // Obtener detalles del álbum
            $consultaAlbum = "SELECT * FROM albumes WHERE idAlbum = $idAlbum";
            $resultadoAlbum = mysqli_query($conexion, $consultaAlbum);
            $album = mysqli_fetch_assoc($resultadoAlbum);

            echo '<h2>Nombre del álbum: ' . $album['titulo'] . '</h2>';
            echo '<p>Descripción: ' . $album['descripcion'] . '</p>';

            // Obtener el número de fotos en el álbum
            $consultaFotos = "SELECT COUNT(*) AS numFotos FROM fotos WHERE album = $idAlbum";
            $resultadoFotos = mysqli_query($conexion, $consultaFotos);
            $numFotos = mysqli_fetch_assoc($resultadoFotos)['numFotos'];
            echo '<p>Número de fotos: ' . $numFotos . '</p>';

            // Obtener todas las imágenes relacionadas con el álbum
            $consultaImagenes = "SELECT * FROM fotos WHERE album = $idAlbum";
            $resultadoImagenes = mysqli_query($conexion, $consultaImagenes);

            // Mostrar todas las imágenes con detalles
            while ($foto = mysqli_fetch_assoc($resultadoImagenes)) {
                echo '<article>';
                echo '<a href="details.php?id=' . $foto['idFoto'] . '">';
                echo '<img src="pictures/' . $foto['fichero'] . '" alt="Foto" width="300" height="300">';
                echo '</a>';
                echo '<p><strong>Título:</strong> ' . $foto['titulo'] . '</p>';
                
                // Obtener el nombre del país
                $idPais = $foto['pais'];
                $consultaPais = "SELECT nomPais FROM paises WHERE idPais = $idPais";
                $resultadoPais = mysqli_query($conexion, $consultaPais);
                $nombrePais = mysqli_fetch_assoc($resultadoPais)['nomPais'];
                
                echo '<p><strong>País:</strong> ' . $nombrePais . '</p>';
                echo '<p><strong>Fecha:</strong> ' . $foto['fecha'] . '</p>';
                echo '</article>';
            }
            ?>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
