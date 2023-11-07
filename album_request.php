<?php include 'head.php'; ?>
<title>Pedido solicitud</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>

    <main>
        <h1>Solicitud de album</h1>
        <section>
            <h2>Tabla de precios</h2>
            <table class="precios">
                    <tr>
                        <!--    quitar scopes   -->
                        <th> Concepto</th>
                        <th>Tarifa</th>
                    </tr>
                    <tr>
                        <td> &lt; 5 páginas</td>
                        <td> 0.10 bolivares por pág.</td>
                    </tr>
                    <tr>
                        <td> 5 - 11 páginas</td>
                        <td> 0.08 bolivares por pág.</td>
                    </tr>
                    <tr>
                        <td> &gt; 11 páginas</td>
                        <td> 0.07 bolivares por pág.</td>
                    </tr>
                    <tr>
                        <td> Blanco y negro </td>
                        <td> Sin coste adicional </td>
                    </tr>
                    <tr>
                        <td> Color </td>
                        <td> 0.05 bolivares por foto</td>
                    </tr>
                    <tr>
                        <td> Resolución &gt; 300dpi</td>
                        <td> 0.02 bolivares por foto</td>
                    </tr>
                </table>

        </section>
        <section>
            <h2>Formulario de petición</h2>

            <!--Quitar la tabla y meterlo en flex y luego span para poder poner el campo encima y rellenar debajo -->
            <form action="album_confirmed.php" method="post"> <!--Acuerdate que aqui va el nombre de el archivo respuesta -->
                <table>
                    <caption>Rellena el siguiente formulario aportando todos los detalles para confeccionar tu album:</caption>
                    <tr>
                        <td class="nombreCampo">
                            <label for="nombreDest"> (*) Nombre destinatario: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" id="nombreDest" name="nombreDest" required maxlength="200" value="<?php echo isset($_POST['nombreDest']) ? $_POST['nombreDest'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="tituloAlb">(*) Título album: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" id="tituloAlb" name="tituloAlb" required maxlength="200" value="<?php echo isset($_POST['tituloAlb']) ? $_POST['tituloAlb'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="descr">Texto adicional: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="textarea" id="descr" name="descr" maxlength="4000" value="<?php echo isset($_POST['descr']) ? htmlspecialchars($_POST['descr']) : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="email">(*) Correo electrónico: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" id="email" name="email" required maxlength="200 value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="street">(*) Dirección: </label> 
                        </td>
                        <td class="campoRellenable">
                            <input type="text" id="street" name="street" placeholder="Calle" value="<?php echo isset($_POST['street']) ? $_POST['street'] : '' ?>">
                            <br>
                            <input type="number" id="num" name="num" placeholder="Numero" min=0 value="<?php echo isset($_POST['num']) ? $_POST['num'] : '' ?>">
                            <br>
                            <input type="text" id="cp" name="cp" placeholder="CP" value="<?php echo isset($_POST['cp']) ? $_POST['cp'] : '' ?>">
                            <br>
                            <select id="loc" placeholder="Localidad">
                                <option value="1">Alicante</option>
                                <option value="2">Juan</option>
                            </select>
                            <br>
                            <select id="prov" placeholder="Provincia">
                                <option value="1">Barcelona</option>
                                <option value="2">Bogota</option>
                            </select>
                            <!--Dirección     mirar field set para agrupar la direccion-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="tele">Telefono: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="tel" id="tele" name="tele" value="<?php echo isset($_POST['tele']) ? $_POST['tele'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="col">Color portada: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="color" id="col" name="col" value="<?php echo isset($_POST['col']) ? $_POST['col'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="numcopies">Numero de copias: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="number" id="numcopies" name="numcopies" value="1" min="1" max="99" value="<?php echo isset($_POST['numcopies']) ? $_POST['numcopies'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="impres">(*) Resolución de impresión: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="number" id="impres" name="impres" min="150" max="900" step="150" value="150 value="<?php echo isset($_POST['impres']) ? $_POST['impres'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="myAlb">(*) Album de PI: </label> 
                        </td>
                        <td class="campoRellenable">
                            <select id="myAlb">
                                <option value="1">Minions</option> 
                                <option value="2">China</option>
                                <option value="3">Spiderman</option> 
                                <option value="4">El Luisma</option>
                            </select>
                            <!--Album de PI-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="recdate">Fecha de recepcion: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="date" id="recdate" name="recdate" value="<?php echo isset($_POST['recdate']) ? $_POST['recdate'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="color">Impresion a color</label>
                        </td>
                        <td class="campoRellenable">
                            <input type="checkbox" id="color" name="color" value="<?php echo isset($_POST['color']) ? $_POST['color'] : '' ?>">
                        </td>
                    </tr>
                </table>

                
                <input type="submit" value="Enviar"/>

            </form>
        </section>
        <section>
            <a class="boton" href="index.php">Cancelar y volver al inicio</a>
        </section>

<?php include 'footer.php'; ?>