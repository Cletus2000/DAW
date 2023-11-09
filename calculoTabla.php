<?php
// /album_confirmed?impres=750&color=on
$nFotos = 39;

// Obtener los parámetros de la URL
$impres = isset($_GET['impres']) ? intval($_GET['impres']) : 0;
$color = isset($_GET['color']) ? $_GET['color'] === 'on' : false;

// Calcular el precio final
$precio = 0;
$paginas = ceil($nFotos / 3) + 1; // Calcular el número de páginas

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
    $precio += $nFotos * 0.05;

if ($impres > 300)
    $precio += $nFotos * 0.02;

// Mostrar el precio final en la consola
echo number_format($precio, 2) . "€";
?>
