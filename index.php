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
                    $consulta = "SELECT * FROM fotos ORDER BY fRegistro DESC LIMIT 3";
                    $resultado = mysqli_query($conexion, $consulta);

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo '<article>';
                        echo '<a href="details.php">';
                        echo '<img src="pictures/' . $fila['fichero'] . '" alt="Foto" width="300" height="300">';
                        echo '</a>';
                        echo '<br>';
                        echo '<label>' . $fila['titulo'] . '</label>';
                        echo '<br>';
                        echo '<time datetime="' . $fila['fecha'] . '">Fecha</time>';
                        echo '<address>Pais: ' . $fila['pais'] . '</address>';
                        echo '</article>';
                    }
                ?>
            </div>
        </section>
    </main>
    
    
    
<?php include 'footer.php'; ?>
