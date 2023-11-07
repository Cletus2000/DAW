<?php include 'head.php'; ?>
<title>Pedido confirmado</title>
</head>

<body>
    <script src="calcularPrecio.js"></script>
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
                            <input type="text" name="tituloAlb" id="tituloAlb" disabled value="Nombre">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="descr">Texto adicional: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" name="descr" id="dedscr" disabled value="Descripcion">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="col">Color portada: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="color" name="col" id="col" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="numcopies">Numero de copias: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="number" name="numcopies" id="numcopies" min="0" disabled value="99">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <strong>Precio total del pedido: </strong>
                        </td>
                        <td class="campoRellenable">
                            <p id="precioFinal" >23.495.607.139.482,75 bolívares </p>
                        </td>
                    </tr>
                </table>
            </form>
            <a class="boton" href="index.html">Volver a la página principal</a>
            <a class="boton" href="album_request.html">Hacer otro pedido</a>
                            
        </section>
    </main>

<?php include 'footer.php'; ?>