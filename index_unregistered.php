<?php include 'head.php'; ?>
<title>Index no registrado</title>
</head>
<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<body>
    <header>
        <a href="index.html" class="title">PI's - Pictures & Images</a>
        <nav>
            <ul>
                <li>
                    <a href="index_unregistered.php">🏠 Página de inicio</a>
                </li>
                <li>
                    <a href="form.php">👤 Formulario de registro</a>
                </li>
                <li>
                    <a href="search.php">🔍 Formulario de busqueda</a>
                </li>
                <li>
                    <a href="index.php">👥 Log in</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Inicio</h1>
        <section>
            <h2>Formulario de inicio de sesion</h2>
            <form action="access_control.php" method="post" id="iniciarSesion">
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena">
                <br>
                <input type="submit" value="Enviar">
            </form>
            <?php if ($error): ?>
                <div class="error">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
        </section>
        
        <section>
            <h2>Resumen de las últimas 5 fotos</h2>
            <div class="grid-container">
                <article>
                    <a href="details.php">
                        <img src="pictures/donpollo.jpg" alt="Foto" width="300" height="300">
                    </a>
                    <br>
                    <label>Don Pollo</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais: Perú</address>
                </article>
                <article>
                    <a href="details2.php">
                        <img src="pictures/pablomotos.jpg" alt="Foto" width="300" height="300">
                    </a>
                    <br>
                    <label>Pablo Motos</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais: El hormigueo</address>
                </article>
                <article>
                    <a href="details.php">
                        <img src="pictures/donpollo.jpg" alt="Foto" width="300" height="300">
                    </a>
                    <br>
                    <label>Don Pollo</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais: Perú</address>
                </article>
                <article>
                    <a href="details2.php">
                        <img src="pictures/pablomotos.jpg" alt="Foto" width="300" height="300">
                    </a>
                    <br>
                    <label>Pablo Motos</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais: El hormigueo</address>
                </article>
                <article>
                    <a href="details.php">
                        <img src="pictures/donpollo.jpg" alt="Foto" width="300" height="300">
                    </a>
                    <br>
                    <label>Don Pollo</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais: Perú</address>
                </article>
            </div>
        </section>
    </main>
    
    
<?php include 'footer.php'; ?>