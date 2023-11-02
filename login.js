document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("iniciarSesion");

    form.addEventListener("submit", function (event) {
        // Detener el envío del formulario para realizar las validaciones
        event.preventDefault();

        // Obtener los valores de los campos
        const nombreUsuario = document.getElementById("user").value;
        const contrasena = document.getElementById("psw").value;
        
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
    
