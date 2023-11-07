<?php include 'head.php'; ?>
<title>Index no registrado</title>
</head>


<body>
    <header>
        <a href="index.html" class="title">PI's - Pictures & Images</a>
        <nav>
            <ul>
                <li>
                    <a href="index_unregistered.html">🏠 Página de inicio</a>
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
            <form action="index.html" id="iniciarSesion">
                <label for="user">Nombre de usuario:</label>
                <input type="text" id="user">
                <br>
                <label for="text">Contraseña:</label>
                <input type="text" id="psw">
                <br>
                <input type="submit" value="Enviar">
            </form>
        </section>
        
        <section>
            <h2>Resumen de las ultimas 5 fotos</h2>
            <div class="grid-container">
                <article>
                    <a href="error.html">
                        <img src="nullPhoto.webp" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Nombre foto</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
                <article>
                    <a href="error.html">
                        <img src="nullPhoto.webp" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Nombre foto</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
                <article>
                    <a href="error.html">
                        <img src="nullPhoto.webp" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Nombre foto</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
                <article>
                    <a href="error.html">
                        <img src="nullPhoto.webp" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Nombre foto</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
                <article>
                    <a href="error.html">
                        <img src="nullPhoto.webp" alt="Foto" width="100" height="100">
                    </a>
                    <br>
                    <label>Nombre foto</label>
                    <br>
                    <time datetime="2023-09-28">Fecha</time>
                    <address>Pais</address>
                </article>
            </div>
        </section>
    </main>
    
    
<?php include 'footer.php'; ?>