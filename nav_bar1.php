<header>
        <a href="index.php" class="title">PI's - Pictures & Images</a>
        <nav>
            <ul>
                <li>
                    <a href="index.php">🏠 Página de inicio</a>
                </li>
                <li>
                    <a href="search.php">🔍Formulario de busqueda</a>
                </li>
                <li>
                    <a href="album_request.php">📋 Imprimir album</a>
                </li>
                <li>
					<a href="album.php">🖨 Mis albumes</a>
				</li>
                <li>
					<a href="pictures.php">🎞 Mis fotos</a>
				</li>
                <li>
                    <a href="logout.php">🚪 Log out</a>
                </li>
                <li>
					<a href="profile.php">👤<?php echo obtenerSaludo(); ?></a>
				</li>
            </ul>
        </nav>
</header>

<?php
// Si el usuario está registrado, muestra un mensaje de buenos días
function obtenerSaludo() {
    if(isset($_SESSION['usuario_registrado']))
    {
        $hora_actual = date("H");
        
        if ($hora_actual >= 6 && $hora_actual < 12)
            echo 'Buenos dias, ' . $_SESSION['usuario_registrado'];
        elseif ($hora_actual >= 12 && $hora_actual < 16)
            echo 'Hola, ' . $_SESSION['usuario_registrado'];
        elseif ($hora_actual >= 16 && $hora_actual < 20)
            echo 'Buenas tardes, ' . $_SESSION['usuario_registrado'];
        else
            echo 'Buenas noches, ' . $_SESSION['usuario_registrado'];
    }
}
?>