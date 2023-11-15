<?php include 'head.php'; ?>
<title>Perfil de usuario</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>
    
    <main>
        <!--  a en lugar de buttons  -->
        <h1>Tu perfil</h1>
        <section>
            <a class="boton" href="#">Modificar datos</a>
            <a class="boton" href="#">Darte de baja</a>
            <a class="boton" href="#">Tus álbumes</a>
            <a class="boton" href="create_album.php">Crear álbum nuevo</a>
            <a class="boton" href="album_request.html">Solicitar álbum impreso</a>
            <a class="boton" href="logout.php">Salir</a>
            <form method="post">
                <select name="theme" onchange="this.form.submit()">
                    <option value="style.css" <?php if ($_COOKIE['theme'] == 'style.css') echo 'selected'; ?>>Estilo por defecto</option>
                    <option value="dark_style.css" <?php if ($_COOKIE['theme'] == 'dark_style.css') echo 'selected'; ?>>Estilo oscuro</option>
                    <option value="hf_style.css" <?php if ($_COOKIE['theme'] == 'hf_style.css') echo 'selected'; ?>>Estilo de high font</option>
                    <option value="hc_style.css" <?php if ($_COOKIE['theme'] == 'hc_style.css') echo 'selected'; ?>>Estilo de high contrast</option>
                    <option value="hcf_style.css" <?php if ($_COOKIE['theme'] == 'hcf_style.css') echo 'selected'; ?>>Estilo de high font & contrast</option>
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