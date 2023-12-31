<?php include 'head.php'; ?>
<?php include 'sql_connection.php'; ?>
<title>Inicio</title>
</head>  


<body>
    <?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Inicio</h1>
        <section>
            <h2>Resumen de las últimas 5 fotos</h2>
            <div class="grid-container">
                <?php
                    $conexion = Conexion();
                    $consulta = "SELECT * FROM fotos ORDER BY fRegistro DESC LIMIT 5";
                    $resultado = mysqli_query($conexion, $consulta);

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo '<article>';
                        echo '<a href="details.php?id=' . $fila['idFoto'] . '">';
                        echo '<img src="pictures/' . $fila['fichero'] . '" alt="Foto" width="300" height="300">';
                        echo '</a>';
                        echo '<br>';
                        echo '<label>' . $fila['titulo'] . '</label>';
                        echo '<br>';
                        echo '<time datetime="' . $fila['fRegistro'] . '">' . $fila['fRegistro'] . '</time>';
                        $pais = mysqli_fetch_assoc(mysqli_query($conexion,"SELECT * FROM paises WHERE idPais = ".$fila['pais']));
                        echo '<address>Pais: ' . $pais['nomPais'] . '</address>';
                        echo '</article>';
                    }
                ?>
            </div>
        </section>
    </main>
    
    
    
<?php include 'footer.php'; ?>
