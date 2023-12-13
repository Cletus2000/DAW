<?php include 'head.php'; ?>
<?php include 'sql_connection.php'; ?>
<title>Formulario búsqueda imagen</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Búsqueda</h1>
        <section>
            <h2>Formulario de búsqueda</h2>
            <form action="results.php" method="post">
            <table>
                    <tr>
                        <td>
                            <label for="tituloPubli">Título de la publicación: </label>
                        </td>
                        <td>
                            <input type="text" id="tituloPubli" name="tituloPubli" value="<?php echo isset($_POST['tituloPubli']) ? $_POST['tituloPubli'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fechaPubli">Fecha de la publicación: </label>
                        </td>
                        <td>
                            <input type="date" id="fechaPubli" name="fechaPubli" value="<?php echo isset($_POST['fechaPubli']) ? $_POST['fechaPubli'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="paisPubli">Pais:</label>
                        </td>
                        <td>
                        <?php
                            $conexion = Conexion();
                            $consulta = "SELECT * FROM paises";
                            $resultado = mysqli_query($conexion, $consulta);
                        ?>
                        <select id="paisPubli" name="paisPubli">
                            <?php if ($resultado): ?>
                                <?php while ($pais = mysqli_fetch_assoc($resultado)): ?>
                                    <option value="<?= $pais['idPais']; ?>">
                                        <?= $pais['nomPais']; ?>
                                    </option>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <option value="">No hay países disponibles</option>
                            <?php endif; ?>
                        </select>           
                        </td>
                    </tr>
                </table>
                <input type="submit" value="BUSCAR">
            </form>
        </section>
    </main>
        
    
<?php include 'footer.php'; ?>