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
            <form action="album_confirmed.html"> <!--Acuerdate que aqui va el nombre de el archivo respuesta -->
                <table>
                    <caption>Rellena el siguiente formulario aportando todos los detalles para confeccionar tu album:</caption>
                    <tr>
                        <td class="nombreCampo">
                            <label for="nombreDest"> (*) Nombre destinatario: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" name="nombreDest" id="nombreDest" required maxlength="200"> <!--Nombre del destinatario-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="tituloAlb">(*) Título album: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" name="tituloAlb" id="tituloAlb" required maxlength="200"> <!--Título del album-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="descr">Texto adicional: </label>
                        </td>
                        <td class="campoRellenable">
                            <textarea name="descr" id="dedscr" maxlength="4000"></textarea> <!--Descripcion-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="email">(*) Correo electrónico: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="text" name="email" id="email" required maxlength="200"> <!--Email-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="street">(*) Dirección: </label> 
                        </td>
                        <td class="campoRellenable">
                            <input type="text" name="street" id="street" placeholder="Calle">
                            <br>
                            <input type="number" name="num" id="num" placeholder="Numero">
                            <br>
                            <input type="text" name="cp" id="cp" placeholder="CP">
                            <br>
                            <select id="loc" placeholder="Localidad">
                                <option value="1">Alicante</option>
                                <option value="2">Juan</option>
                            </select>
                            <br>
                            <select id="prov" placeholder="Provincia">
                                <option value="1">Alicante</option>
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
                            <input type="tel" name="tele" id="tele"> <!--Telefono-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="col">Color portada: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="color" name="col" id="col"> <!--Color portada-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="numcopies">Numero de copias: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="number" name="numcopies" id="numcopies" value="1" min="1" max="99"> <!--Numero de copias-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="impres">(*) Resolución de impresión: </label>
                        </td>
                        <td class="campoRellenable">
                            <input type="number" name="impres" id="impres" min="150" max="900" step="150" value="150"> <!--Resolución de impresión-->
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
                            <input type="date" name="recdate" id="recdate"> <!--Fecha de recepcion-->
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreCampo">
                            <label for="color">Impresion a color</label>
                        </td>
                        <td class="campoRellenable">
                            <input type="checkbox" name="color" id="color">
                        </td>
                    </tr>
                </table>

                
                <input type="submit" value="Enviar"/>

            </form>
        </section>
        <section>
            <a class="boton" href="index.html">Cancelar y volver al inicio</a>
        </section>

<?php include 'footer.php'; ?>