<?php include 'head.php'; ?>
<title>Perfil de usuario</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>
    
    <main>
        <!--  a en lugar de buttons  -->
        <h1>Tu perfil</h1>
        <section>
            <a class="boton" href="sql_connection.php">Modificar datos</a>
            <a class="boton" href="#">Darte de baja</a>
            <a class="boton" href="#">Tus álbumes</a>
            <a class="boton" href="create_album.php">Crear álbum nuevo</a>
            <a class="boton" href="album_request.html">Solicitar álbum impreso</a>
            <a class="boton" href="logout.php">Salir</a>
            <form method="post">
                    <?php
                        include 'sql_connection.php';
                        $conexion = Conexion();
                        $consulta = "SELECT * FROM estilos";
                        $resultado = mysqli_query($conexion, $consulta);
                    ?>

                    <select name="theme" onchange="this.form.submit()">
                        <?php while ($tema = mysqli_fetch_assoc($resultado)): ?>
                            <option value="<?php echo $tema['fichero']; ?>" <?php if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == $tema['fichero']) echo 'selected'; ?> ><?php echo $tema['nombre']; ?></option>
                        <?php endwhile; ?>
                    </select>
            </form>

        </section>

        <?php
            // Si se ha enviado el formulario, establecer el tema en la sesión y en una cookie
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['theme'])) {
                $theme = $_POST['theme'];
                // Establecer la cookie
                setcookie('theme', $theme, [
                    'expires' => time() + (86400 * 30), // 86400 = 1 día
                    'path' => '/',
                    'secure' => true, // true si tu sitio usa HTTPS
                    'samesite' => 'None',
                ]);
                $_SESSION['theme'] = $theme;
                // Redirigir al usuario a la misma página
                header("Location: " . $_SERVER['REQUEST_URI']);
                exit;
            }
        ?>


    </main>
    
<?php include 'footer.php'; ?>