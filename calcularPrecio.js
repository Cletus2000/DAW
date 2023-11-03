
//	/album_confirmed?impres=750&color=on
const nFotos = 39;

// Obtener los parámetros de la URL
const urlParams = new URLSearchParams(window.location.search);
const impres = parseInt(urlParams.get('impres'));
const color = urlParams.get('color') === 'on';

// Calcular el precio final
let precio = 0;
const paginas = Math.ceil(nFotos / 3)+1; // Calcular el número de páginas

for(var i=1; i<paginas; i++)
{
	if (i < 5)
		precio += 0.10;
	else if (i >= 5 && i <= 11)
		precio += 0.08;
	else
		precio += 0.07;
}

if (color)
    precio += nFotos * 0.05;

if (impres > 300)
    precio += nFotos * 0.02;

document.addEventListener('DOMContentLoaded', function() {
	var p =document.getElementById('precioFinal');
	p.textContent = '‎ ' + precio.toFixed(2) + '€';
})
