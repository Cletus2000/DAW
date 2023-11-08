<?php include 'head.php'; ?>
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
                <article>
                    <a href="details.php">
                        <img src="pictures/donpollo.jpg" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Don Pollo</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
                <article>
                    <a href="details2.php">
                        <img src="pictures/pablomotos.jpg" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Pablo Motos</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
            </div>
        </section>
    </main>
        
<?php include 'footer.php'; ?>