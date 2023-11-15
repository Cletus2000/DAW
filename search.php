<?php include 'head.php'; ?>
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
                            <select id="paisPubli" name="paisPubli">
                                <option value="1" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Alemania' ? 'selected' : '' ?>>Alemania</option>
                                <option value="2" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'China' ? 'selected' : '' ?>>China</option>
                                <option value="3" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'España' ? 'selected' : '' ?>>España</option>
                                <option value="4" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Estados Unidos' ? 'selected' : '' ?>>Estados Unidos</option>
                                <option value="5" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Francia' ? 'selected' : '' ?>>Francia</option>
                                <option value="6" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Grecia' ? 'selected' : '' ?>>Grecia</option>
                                <option value="7" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Italia' ? 'selected' : '' ?>>Italia</option>
                                <option value="8" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'México' ? 'selected' : '' ?>>México</option>
                                <option value="9" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Rusia' ? 'selected' : '' ?>>Rusia</option>
                                <option value="10" <?php echo isset($_POST['paisPubli']) && $_POST['paisPubli'] == 'Ucrania' ? 'selected' : '' ?>>Ucrania</option>
                            </select>            
                        </td>
                    </tr>
                </table>
                <input type="submit" value="BUSCAR">
            </form>
        </section>
    </main>
        
    
<?php include 'footer.php'; ?>