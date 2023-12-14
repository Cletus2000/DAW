<?php include 'head.php'; ?>
<title>Detalles foto 2</title>
</head>  


<body>
<?php include 'nav_bar1.php'; ?>
    
    <main>
        <h1>Detalles de la imagen</h1>
        <section>
            <?php  //Obtener los datos de la imagen
                include 'sql_connection.php';
                $conexion = Conexion();
                $id = $_GET['id'];
                $consulta = "SELECT * FROM fotos WHERE idFoto = $id";
                $resultado = mysqli_query($conexion, $consulta);
                $foto = mysqli_fetch_assoc($resultado);
                
                echo '<h2>Nombre de la foto: ' .$foto['titulo']. '</h2>';
                echo '<img src="pictures/' . $foto['fichero'] . '" alt="Foto" width="500" height="500">';
                echo '<br>';
                echo '<p>' .$foto['descripcion']. '</p>';
                echo '<br>';
                echo '<time datetime="' . $foto['fecha'] . '">' . $foto['fecha'] . '</time>';
                $pais = mysqli_fetch_assoc(mysqli_query($conexion,"SELECT * FROM paises WHERE idPais = ".$foto['pais']));
                echo '<address>Pais: ' . $pais['nomPais'] . '</address>';
                $album = mysqli_fetch_assoc(mysqli_query($conexion,"SELECT * FROM albumes WHERE idAlbum = ".$foto['album']));
                echo '<strong>Album: ' .$album['titulo'].'</strong>';
                echo '<br>';
                echo '<i>Autor: DonPollo</i>';

            ?>
        <nav>
            <ul>
                <li>
                    <a href="add_pta.php">Añadir foto a album</a>
                </li>
            </ul>
        </nav>
        
        </section> 
    </main>

<?php include 'footer.php'; ?>