<?php include 'head.php'; ?>
<title>Pedido solicitud</title>
</head>

<?php
// /album_confirmed?impres=750&color=on
function precio($fotos, $dpi, $color)
{
    $precio = 0;
    $paginas = ceil($fotos / 3) + 1; // Calcular el número de páginas
    
    for($i = 1; $i < $paginas; $i++)
    {
        if ($i < 5)
            $precio += 0.10;
        else if ($i >= 5 && $i <= 11)
            $precio += 0.08;
        else
            $precio += 0.07;
    }
    
    if ($color)
        $precio += $fotos * 0.05;
    
    if ($dpi > 300)
        $precio += $fotos * 0.02;
    
    echo number_format($precio, 2);
}
?>


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
            <h2>Tabla de precios</h2>
            <table class="precios">
                <tr>
                    <th>Nº páginas</th>
                    <th>Nº fotos</th>
                    <th>ByN <br> 150-300dpi</th>
                    <th>ByN <br> 450-900dpi</th>
                    <th>Color <br> 150-300dpi</th>
                    <th>Color <br> 450-900dpi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3</td>
                    <td><?php precio(3, 200, false); ?></td>
                    <td><?php precio(3, 700, false); ?></td>
                    <td><?php precio(3, 200, true); ?></td>
                    <td><?php precio(3, 700, true); ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>6</td>
                    <td><?php precio(6, 200, false); ?></td>
                    <td><?php precio(6, 700, false); ?></td>
                    <td><?php precio(6, 200, true); ?></td>
                    <td><?php precio(6, 700, true); ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>9</td>
                    <td><?php precio(9, 200, false); ?></td>
                    <td><?php precio(9, 700, false); ?></td>
                    <td><?php precio(9, 200, true); ?></td>
                    <td><?php precio(9, 700, true); ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>12</td>
                    <td><?php precio(12, 200, false); ?></td>
                    <td><?php precio(12, 700, false); ?></td>
                    <td><?php precio(12, 200, true); ?></td>
                    <td><?php precio(12, 700, true); ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>15</td>
                    <td><?php precio(15, 200, false); ?></td>
                    <td><?php precio(15, 700, false); ?></td>
                    <td><?php precio(15, 200, true); ?></td>
                    <td><?php precio(15, 700, true); ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>18</td>
                    <td><?php precio(18, 200, false); ?></td>
                    <td><?php precio(18, 700, false); ?></td>
                    <td><?php precio(18, 200, true); ?></td>
                    <td><?php precio(18, 700, true); ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>21</td>
                    <td><?php precio(21, 200, false); ?></td>
                    <td><?php precio(21, 700, false); ?></td>
                    <td><?php precio(21, 200, true); ?></td>
                    <td><?php precio(21, 700, true); ?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>24</td>
                    <td><?php precio(24, 200, false); ?></td>
                    <td><?php precio(24, 700, false); ?></td>
                    <td><?php precio(24, 200, true); ?></td>
                    <td><?php precio(24, 700, true); ?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>27</td>
                    <td><?php precio(27, 200, false); ?></td>
                    <td><?php precio(27, 700, false); ?></td>
                    <td><?php precio(27, 200, true); ?></td>
                    <td><?php precio(27, 700, true); ?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>30</td>
                    <td><?php precio(30, 200, false); ?></td>
                    <td><?php precio(30, 700, false); ?></td>
                    <td><?php precio(30, 200, true); ?></td>
                    <td><?php precio(30, 700, true); ?></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>33</td>
                    <td><?php precio(33, 200, false); ?></td>
                    <td><?php precio(33, 700, false); ?></td>
                    <td><?php precio(33, 200, true); ?></td>
                    <td><?php precio(33, 700, true); ?></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>36</td>
                    <td><?php precio(36, 200, false); ?></td>
                    <td><?php precio(36, 700, false); ?></td>
                    <td><?php precio(36, 200, true); ?></td>
                    <td><?php precio(36, 700, true); ?></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>39</td>
                    <td><?php precio(39, 200, false); ?></td>
                    <td><?php precio(39, 700, false); ?></td>
                    <td><?php precio(39, 200, true); ?></td>
                    <td><?php precio(39, 700, true); ?></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>42</td>
                    <td><?php precio(42, 200, false); ?></td>
                    <td><?php precio(42, 700, false); ?></td>
                    <td><?php precio(42, 200, true); ?></td>
                    <td><?php precio(42, 700, true); ?></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>45</td>
                    <td><?php precio(45, 200, false); ?></td>
                    <td><?php precio(45, 700, false); ?></td>
                    <td><?php precio(45, 200, true); ?></td>
                    <td><?php precio(45, 700, true); ?></td>
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