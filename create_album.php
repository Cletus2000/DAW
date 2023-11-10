<?php include 'head.php'; ?>
<title>Crear álbum</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>
    
    <main>
        <h1>Crear album</h1>
        <section>
            <h2>Introduce los datos del album</h2>
            <form action="create_album.php" method="post">
            <table>
                    <tr>
                        <td>
                            <label for="tituloAlbum">Título de el album: </label>
                        </td>
                        <td>
                            <input type="text" id="tituloAlbum" name="tituloAlbum" value="<?php echo isset($_POST['tituloAlbum']) ? $_POST['tituloAlbum'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="descAlbum">Descripción de el album: </label>
                        </td>
                        <td>
                            <input type="textarea" id="descAlbum" name="descAlbum" value="<?php echo isset($_POST['descAlbum']) ? $_POST['descAlbum'] : '' ?>">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="CREAR">
            </form>
        </section>
    </main>