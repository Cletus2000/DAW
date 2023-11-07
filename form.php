<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario registro</title>
    <link href="style.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    </style>
    <script src="formjava.js"></script>
</head>

<body>
<?php include 'nav_bar1.php'; ?>

    <main>
        <h1>Registrarse</h1>
        <section>
            <h2>Formulario de registro</h2>
            <form id="registroForm" action="index.html">
                <table>
                    <caption>Por favor, introduce a continuación tus datos para registrarte</caption>
                    <tr>
                        <td>
                            <label for="nombreUsuario">Nombre de usuario:</label>
                        </td>
                        <td>
                            <input type="text" id="nombreUsuario">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="contrasena">Contraseña:</label>
                        </td>
                        <td>
                            <input type="text" id="contrasena">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="rep_contrasena">Repetir contraseña:</label>
                        </td>
                        <td>
                            <input type="text" id="rep_contrasena">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="text" id="email" placeholder="nombre@email.loquesea">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="genero">Género:</label>
                        </td>
                        <td>
                            <select id="genero">
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="otro">Otro</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        </td>
                        <td>
                            <input type="text" id="fechaNacimiento" placeholder="DD/MM/AAAA">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ciudad">Ciudad de residencia:</label>
                        </td>
                        <td>
                            <input type="text" id="ciudad">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pais">País:</label>
                        </td>
                        <td>
                            <select id="pais">
                                <option value="1">Alemania</option>
                                <option value="2">China</option>
                                <option value="3">España</option>
                                <option value="4">Estados Unidos</option>
                                <option value="5">Francia</option>
                                <option value="6">Grecia</option>
                                <option value="7">Italia</option>
                                <option value="8">México</option>
                                <option value="9">Rusia</option>
                                <option value="10">Ucrania</option>
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

    <footer>
        <p>PI's - Pictures & Images ©</p>
        <p>Raul Ganga González y Carlos Rocamora Colomer</p>
        <p>2023</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
