document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registroForm");

    form.addEventListener("submit", function (event) {
        // Detener el envío del formulario para realizar las validaciones
        event.preventDefault();

        // Obtener los valores de los campos
        const nombreUsuario = document.getElementById("nombreUsuario").value;
        const contrasena = document.getElementById("contrasena").value;
        const repContrasena = document.getElementById("rep_contrasena").value;
        const email = document.getElementById("email").value;
        const fechaNacimiento = document.getElementById("fechaNacimiento").value;

        // Realizar las validaciones aquí y mostrar mensajes de error si es necesario

        // Validación de nombre de usuario
        if (!isValidUsername(nombreUsuario)) {
            alert("Nombre de usuario no válido");
            return;
        }

        // Validación de contraseña
        if (!isValidPassword(contrasena)) {
            alert("Contraseña no válida");
            return;
        }

        // Validacion repeticion contraseña
        if (!isValidRepPassword(repContrasena,contrasena)) {
            alert("Las contraseñas no coinciden")
            return;
        }

        // Validación de email
        if (!isValidEmail(email)) {
            alert("Email no válido");
            return;
        }

        // Validación de fecha de nacimiento
        if (!isValidDate(fechaNacimiento)) {
            alert("Fecha de nacimiento no válida");
            return;
        }

        // Si todas las validaciones pasan, puedes enviar el formulario
        form.submit();
    });
});

// Funciones de validación
function isValidUsername(username) {
    // Comprueba la longitud del nombre de usuario
    if (username.length < 3 || username.length > 15) {
        console.log("La longitud del nombre de usuario debe estar entre 3 y 15 caracteres.");
        return false;
    }

    // Comprueba si el nombre de usuario comienza con un número
    if (/^[0-9]/.test(username)) {
        console.log("El nombre de usuario no puede comenzar con un número.");
        return false;
    }

    // Comprueba los caracteres permitidos en el nombre de usuario
    if (!/^[a-zA-Z0-9]+$/.test(username)) {
        console.log("El nombre de usuario sólo puede contener letras del alfabeto inglés y números.");
        return false;
    }

    // Si todas las comprobaciones pasan, el nombre de usuario es válido
    console.log("El nombre de usuario es válido.");
    return true;
}


function isValidPassword(password) {
        // Comprueba la longitud de la contraseña
        if (password.length < 6 || password.length > 15) {
            console.log("La longitud de la contraseña debe estar entre 6 y 15 caracteres.");
            return false;
        }
    
        // Comprueba los caracteres permitidos en la contraseña
        if (!/^[a-zA-Z0-9-_]+$/.test(password)) {
            console.log("La contraseña sólo puede contener letras del alfabeto inglés, números, guiones y guiones bajos.");
            return false;
        }
    
        // Comprueba si la contraseña contiene al menos una letra mayúscula, una letra minúscula y un número
        if (!/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/[0-9]/.test(password)) {
            console.log("La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un número.");
            return false;
        }
    
        // Si todas las comprobaciones pasan, la contraseña es válida
        console.log("La contraseña es válida.");
        return true;
}
    


function isValidRepPassword(repContrasena, contrasena) {
    // Comprueba si la repetición de la contraseña es idéntica a la contraseña original
    if (repContrasena === contrasena) {
        console.log("La repetición de la contraseña es válida.");
        return true;
    } else {
        console.log("La repetición de la contraseña no coincide con la contraseña original.");
        return false;
    }
}

function isValidEmail(email) {
    // Comprueba si el email está vacío
    if (email === "") {
        console.log("El correo electrónico no puede estar vacío.");
        return false;
    }

    // Divide el email en la parte local y el dominio
    var partes = email.split("@");
    if (partes.length !== 2) {
        console.log("El correo electrónico debe contener una '@'.");
        return false;
    }

    var parteLocal = partes[0];
    var dominio = partes[1];

    // Comprueba la longitud de la parte local y del dominio
    if (parteLocal.length > 64 || parteLocal.length < 1) {
        console.log("La longitud de la parte local debe estar entre 1 y 64 caracteres.");
        return false;
    }
    if (dominio.length > 255 || dominio.length < 1) {
        console.log("La longitud del dominio debe estar entre 1 y 255 caracteres.");
        return false;
    }

    // Comprueba los caracteres permitidos en la parte local
    if (!/^[a-zA-Z0-9!#$%&'*+-/=?^_`{|}~.]+$/.test(parteLocal)) {
        console.log("La parte local contiene caracteres no permitidos.");
        return false;
    }
    if (parteLocal.startsWith(".") || parteLocal.endsWith(".") || parteLocal.includes("..")) {
        console.log("La parte local no puede empezar ni terminar con un punto, ni contener dos puntos seguidos.");
        return false;
    }

    // Comprueba los subdominios
    var subdominios = dominio.split(".");
    for (var i = 0; i < subdominios.length; i++) {
        if (subdominios[i].length > 63 || subdominios[i].length < 1) {
            console.log("La longitud de cada subdominio debe estar entre 1 y 63 caracteres.");
            return false;
        }
        if (!/^[a-zA-Z0-9-]+$/.test(subdominios[i])) {
            console.log("Los subdominios contienen caracteres no permitidos.");
            return false;
        }
        if (subdominios[i].startsWith("-") || subdominios[i].endsWith("-")) {
            console.log("Los subdominios no pueden empezar ni terminar con un guion.");
            return false;
        }
    }

    // Si todas las comprobaciones pasan, el email es válido
    console.log("El correo electrónico es válido.");
    return true;
}

function isValidDate(fechaNacimiento) {
    // Divide la fecha en día, mes y año
    var partes = fechaNacimiento.split("/");
    if (partes.length !== 3) {
        console.log("La fecha debe estar en el formato día/mes/año.");
        return false;
    }

    var dia = parseInt(partes[0]);
    var mes = parseInt(partes[1]);
    var ano = parseInt(partes[2]);

    // Comprueba el día
    if (dia < 1 || dia > 31) {
        console.log("El día debe estar entre 1 y 31.");
        return false;
    }

    // Comprueba el mes
    if (mes < 1 || mes > 12) {
        console.log("El mes debe estar entre 1 y 12.");
        return false;
    }

    // Crea un objeto Date con la fecha proporcionada
    var fecha = new Date(ano, mes - 1, dia);

    // Comprueba si la fecha es válida
    if (fecha.getFullYear() !== ano || fecha.getMonth() + 1 !== mes || fecha.getDate() !== dia) {
        console.log("La fecha proporcionada no es válida.");
        return false;
    }

    // Obtiene la fecha actual
    var ahora = new Date();

    // Calcula la edad del usuario
    var edad = ahora.getFullYear() - ano;
    if (ahora.getMonth() < mes - 1 || (ahora.getMonth() === mes - 1 && ahora.getDate() < dia)) {
        edad--;
    }

    // Comprueba si el usuario es mayor de edad
    if (edad < 18) {
        console.log("El usuario debe ser mayor de edad.");
        return false;
    }

    // Si todas las comprobaciones pasan, la fecha es válida y el usuario es mayor de edad
    console.log("La fecha es válida y el usuario es mayor de edad.");
    return true;
}

