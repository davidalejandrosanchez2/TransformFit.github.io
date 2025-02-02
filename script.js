// Mensaje dinámico en la bienvenida
document.addEventListener("DOMContentLoaded", () => {
    const bienvenidaMensaje = document.querySelector(".bienvenida h1");
    const usuarioLogueado = false; // Simula si un usuario está logueado

    if (usuarioLogueado) {
        bienvenidaMensaje.textContent = "¡Bienvenido de nuevo, atleta!";
    } else {
        bienvenidaMensaje.textContent = "¡Únete a EntrenamientoPersonal y mejora tu vida!";
    }
});

// Interacción con los botones "Iniciar Sesión" y "Registrarse"
const botones = document.querySelectorAll("header nav ul li a");
botones.forEach(boton => {
    boton.addEventListener("click", (e) => {
        if (boton.classList.contains("disabled")) {
            e.preventDefault();
            alert("La función de registro está deshabilitada por el momento.");
        }
    });
});

// Validación de formulario de inicio de sesión
const formularioLogin = document.querySelector(".form-container form");
if (formularioLogin) {
    formularioLogin.addEventListener("submit", (e) => {
        e.preventDefault(); // Prevenimos el envío para realizar la validación

        const emailInput = formularioLogin.querySelector("input[type='email']");
        const passwordInput = formularioLogin.querySelector("input[type='password']");

        if (!emailInput.value || !passwordInput.value) {
            alert("Por favor, completa todos los campos.");
        } else if (passwordInput.value.length < 6) {
            alert("La contraseña debe tener al menos 6 caracteres.");
        } else {
            alert("¡Inicio de sesión exitoso!");
            // Simula la redirección
            window.location.href = "inicio.html";
        }
    });
}

// Animación hover en las categorías
const categorias = document.querySelectorAll(".categoria");
categorias.forEach(categoria => {
    categoria.addEventListener("mouseover", () => {
        categoria.style.transform = "scale(1.05)";
    });
    categoria.addEventListener("mouseout", () => {
        categoria.style.transform = "scale(1)";
    });
});





// Seleccionamos el botón y el contenido desplegable
document.addEventListener("DOMContentLoaded", function () {
    const boton = document.querySelector(".desplegable");
    const contenido = document.querySelector(".contenido-desplegable");

    boton.addEventListener("click", function () {
        // Alternar la visibilidad del contenido
        if (contenido.style.display === "none" || contenido.style.display === "") {
            contenido.style.display = "block"; // Mostrar contenido
        } else {
            contenido.style.display = "none"; // Ocultar contenido
        }
    });
});

/*-----------CALISTENIA----------------------- */

document.addEventListener("DOMContentLoaded", function () {
    const botonCalistenia = document.querySelector(".desplegable-calistenia");

    botonCalistenia.addEventListener("click", function () {
        const contenido = document.querySelector(".contenido-calistenia");
        const icono = document.querySelector(".icono-calistenia");

        if (contenido.style.display === "block") {
            contenido.style.display = "none";
            icono.textContent = "+";
        } else {
            contenido.style.display = "block";
            icono.textContent = "-";
        }
    });
});

/*-----------CASA----------------------- */

document.addEventListener("DOMContentLoaded", function () {
    const botonEnCasa = document.querySelector(".desplegable-EnCasa");

    botonEnCasa.addEventListener("click", function () {
        const contenido = document.querySelector(".contenido-EnCasa");
        const icono = document.querySelector(".icono-EnCasa");

        if (contenido.style.display === "block") {
            contenido.style.display = "none";
            icono.textContent = "+";
        } else {
            contenido.style.display = "block";
            icono.textContent = "-";
        }
    });
});

/*-----------Gimnasio----------------------- */

document.addEventListener("DOMContentLoaded", function () {
    const botonGimnasio = document.querySelector(".desplegable-Gimnasio");

    botonGimnasio.addEventListener("click", function () {
        const contenido = document.querySelector(".contenido-Gimnasio");
        const icono = document.querySelector(".icono-Gimnasio");

        if (contenido.style.display === "block") {
            contenido.style.display = "none";
            icono.textContent = "+";
        } else {
            contenido.style.display = "block";
            icono.textContent = "-";
        }
    });
});


window.addEventListener("beforeunload", () => {
    document.cookie.split(";").forEach(cookie => {
        const name = cookie.split("=")[0].trim();
        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    });
    console.log("Cookies eliminadas.");
});
