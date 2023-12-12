<?php include 'head.php'; ?>
<?php include 'sql_connection.php'; ?>
<title>Resultados de busqueda</title>
</head>


<body>
<?php include 'nav_bar1.php'; ?>
    
    <main>
        <h1>Búsqueda</h1>
        <section>
            <h2>Resultados de tu búsqueda</h2>
            <p>Título de la publicación: <?php echo $_POST['tituloPubli']; ?></p>
            <p>Fecha de la publicación: <?php echo $_POST['fechaPubli']; ?></p>
            <p>País: <?php echo $_POST['paisPubli']; ?></p>
            <div class="grid-container">
                <?php 
                    $conexion = Conexion();
                    // Obtener valores del formulario
                    $tituloPubli = isset($_POST['tituloPubli']) ? $_POST['tituloPubli'] : '';
                    $fechaPubli = isset($_POST['fechaPubli']) ? $_POST['fechaPubli'] : '';
                    $paisPubli = isset($_POST['paisPubli']) ? $_POST['paisPubli'] : '';

                    // Construir la consulta SQL en función de los campos proporcionados
                    $consulta = "SELECT * FROM fotos WHERE 1";

                    if (!empty($tituloPubli)) {
                        $consulta .= " AND titulo LIKE '%$tituloPubli%'";
                    }
                    
                    if (!empty($fechaPubli)) {
                        $consulta .= " AND fRegistro = '$fechaPubli'";
                    }
                    
                    if (!empty($paisPubli)) {
                        $consulta .= " AND pais = '$paisPubli'";
                    }
                    
                    $consulta .= " ORDER BY fRegistro DESC";
                    $resultado = mysqli_query($conexion, $consulta);

                    // Inicializar la variable
                    $numFotosEncontradas = 0;
                
                    if($resultado){
                        // Mostrar resultados solo si hay algún resultado
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            $numFotosEncontradas++; // Incrementar el contador
                            echo '<article>';
                            echo '<a href="details.php?id=' . $fila['idFoto'] . '">';
                            echo '<img src="pictures/' . $fila['fichero'] . '" alt="Foto" width="300" height="300">';
                            echo '</a>';
                            echo '<br>';
                            echo '<label>' . $fila['titulo'] . '</label>';
                            echo '<br>';
                            echo '<time datetime="' . $fila['fRegistro'] . '">' . $fila['fRegistro'] . '</time>';
                            $pais = mysqli_fetch_assoc(mysqli_query($conexion, "SELECT * FROM paises WHERE idPais = " . $fila['pais']));
                            echo '<address>Pais: ' . $pais['nomPais'] . '</address>';
                            echo '</article>';
                        }
                    } else {
                        echo "Error en la consulta: " . mysqli_error($conexion);
                    }

                    // Muestra el número de fotos encontradas
                    echo "<p>Número de fotos encontradas: $numFotosEncontradas</p>";
                ?>
            </div>
        </section>
    </main>
        
<?php include 'footer.php'; ?>