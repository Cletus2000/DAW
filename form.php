
<?php include 'head.php'; ?>
<title>Formulario de registro</title>
</head>

<body>
<?php include 'nav_bar1.php'; ?>
    <main>
        <h1>Registrarse</h1>
        <section>
            <h2>Formulario de registro</h2>
            <form id="registroForm" action="new_user.php" method="POST">
                <table>
                    <caption>Por favor, introduce a continuación tus datos para registrarte</caption>
                    <tr>
                        <td>
                            <label for="nombreUsuario">Nombre de usuario:</label>
                        </td>
                        <td>
                            <input type="text" id="nombreUsuario" name="nombreUsuario" value="<?php echo isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="contrasena">Contraseña:</label>
                        </td>
                        <td>
                            <input type="pass" id="contrasena" name="contrasena" value="<?php echo isset($_POST['contrasena']) ? $_POST['contrasena'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="rep_contrasena">Repetir contraseña:</label>
                        </td>
                        <td>
                            <input type="pass" id="rep_contrasena" name="rep_contrasena" value="<?php echo isset($_POST['rep_contrasena']) ? $_POST['rep_contrasena'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genero">Género:</label>
                        </td>
                        <td>
                            <select id="genero">
                                <option value="Masculino" <?php echo isset($_POST['genero']) && $_POST['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                                <option value="Femenino" <?php echo isset($_POST['genero']) && $_POST['genero'] == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
                                <option value="Otro" <?php echo isset($_POST['genero']) && $_POST['genero'] == 'Otro' ? 'selected' : '' ?>>Otro</option>
                                <option value="Prefiero no decirlo" <?php echo isset($_POST['genero']) && $_POST['genero'] == 'Prefiero no decirlo' ? 'selected' : '' ?>>Prefiero no decirlo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        </td>
                        <td>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="DD/MM/AAAA" value="<?php echo isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ciudad">Ciudad de residencia:</label>

                        </td>
                        <td>
                            <input type="text" id="ciudad" name="ciudad" value="<?php echo isset($_POST['ciudad']) ? $_POST['ciudad'] : '' ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pais">País:</label>
                        </td>
                        <td>
                            <select id="pais">
                            <option value="1" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Alemania' ? 'selected' : '' ?>>Alemania</option>
                                <option value="2" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'China' ? 'selected' : '' ?>>China</option>
                                <option value="3" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'España' ? 'selected' : '' ?>>España</option>
                                <option value="4" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Estados Unidos' ? 'selected' : '' ?>>Estados Unidos</option>
                                <option value="5" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Francia' ? 'selected' : '' ?>>Francia</option>
                                <option value="6" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Grecia' ? 'selected' : '' ?>>Grecia</option>
                                <option value="7" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Italia' ? 'selected' : '' ?>>Italia</option>
                                <option value="8" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'México' ? 'selected' : '' ?>>México</option>
                                <option value="9" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Rusia' ? 'selected' : '' ?>>Rusia</option>
                                <option value="10" <?php echo isset($_POST['pais']) && $_POST['pais'] == 'Ucrania' ? 'selected' : '' ?>>Ucrania</option>
                            </select>
                        </td>
                    </tr>
                    <!--
                    <tr>
                        <td>
                            <label for="imagen">Seleccionar una imagen:</label>
                        </td>
                        <td>
                            <input type="file" id="imagen" accept="image/*">
                        </td>
                    </tr>
                    -->
                </table>
                <input type="submit" value="Registrar">
            </form>
        </section>
    </main>

<?php include 'footer.php'; ?>
