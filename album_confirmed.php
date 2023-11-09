<?php include 'head.php'; ?>
<title>Pedido confirmado</title>
</head>

<body>
    <?php include 'nav_bar1.php'; ?>

    
    <main>
        <h1>Resumen del pedido</h1>
        <section>
            <h2>Detalles de impresión</h2>
            <form>
                <table>
                    <caption>Por favor, revise los datos:</caption>
                    <tr>
                        <td class="nombreCampo">
                            <label for="tituloAlb">Título album: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" name="tituloAlb" id="tituloAlb" value=<?php echo $_POST['tituloAlb']; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="descr">Texto adicional: </label>
                        </td>
                        <td class="campoRellenable">
                        <input type="textarea" name="descr" id="descr" value="<?php echo isset($_POST['descr']) ? htmlspecialchars($_POST['descr']) : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="col">Color portada: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="color" name="col" id="col" value=<?php echo $_POST['col']; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="numcopies">Numero de copias: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="number" name="numcopies" id="numcopies" min="0" value=<?php echo $_POST['numcopies']; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <strong>    Precio Final: </strong>
                        </td>
                        <td class="campoRellenable">
                            <strong>    <?php include 'calculoTabla.php'; ?> </strong>
                        </td>
                    </tr>
                </table>
            </form>
            <a class="boton" href="index.php">Volver a la página principal</a>
            <a class="boton" href="album_request.php">Hacer otro pedido</a>
                            
        </section>
    </main>

<?php include 'footer.php'; ?>