<?php include 'head.php'; ?>
<title>Index no registrado</title>
</head>
<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<?php
function mostrarInicioSesion()
{   
    // Verificar si las cookies están presentes
    if (isset($_COOKIE['nombre_usuario']) && isset($_COOKIE['contrasena_usuario'])) {
        // El usuario está logueado
        $email = $_COOKIE['nombre_usuario'];
        $clave = $_COOKIE['contrasena_usuario'];
        $ultimaSesion = isset($_COOKIE['ultima_sesion']) ? $_COOKIE['ultima_sesion'] : "desconocida";
    
        echo '<p>Hola, <strong>' . $email . '</strong>,<br> tu última visita fue: <strong>' . $ultimaSesion . '</strong></p>';
        echo '<form method="post" action="access_control.php">';
        echo '<input type="hidden" name="nombre" value="' . $email . '">';
        echo '<input type="hidden" name="contrasena" value="' . $clave . '">';
        echo '<input type="submit" value="Iniciar Sesión con Datos Guardados">';
        echo '</form>';
        echo '<form method="post" action="logout.php">';
        echo '<input type="submit" value="Cerrar Sesión">';
        echo '</form>';
    }
    else
    {
        echo '<form action="access_control.php" method="post" id="iniciarSesion">';
        echo     '<label for="email">Correo electrónico:</label>';
        echo     '<input type="text" id="email" name="email">';
        echo     '<br>';
        echo     '<label for="clave">Contraseña:</label>';
        echo     '<input type="password" id="clave" name="clave">';
        echo     '<br>';
        echo     '<label for="recordar">Recordar datos</label>';
        echo     '<input type="checkbox" id="recordar" name="recordar">';
        echo     '<br>';
        echo     '<input type="submit" value="Enviar">';
        echo '</form>';
        

    }
}

// Resto del contenido de index_unregistered.php
?>

<body>
    <header>
        <a href="index.php" class="title">PI's - Pictures & Images</a>
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
            <?php mostrarInicioSesion(); ?>
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