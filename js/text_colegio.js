// Código creado por Christian Tapia (ComikSama)
// Correo electrónico: comiksamadesing@gmail.com
// Fecha de creación: Octubre 2023

document.addEventListener("DOMContentLoaded", function () {
// Función para manejar el evento de cambio de tamaño de pantalla
function ajustarAlineacion() {
    // Verificar el ancho de pantalla actual
    var screenWidth = window.innerWidth;

    // Obtener todos los elementos de precio y nombre en un solo bucle
    for (var i = 1; i <= 25; i++) {
        var precioElement = document.getElementById(i + "-precio");
        var nombreElement = document.getElementById(i + "-nombre");

        // Verificar si el ancho de pantalla es menor o igual a 768px
        if (screenWidth <= 768) {
            // Si es menor o igual a 768px, verificar si el elemento <hr> existe antes de intentar eliminarlo
            if (!document.getElementById("head")) {
                // Crear un elemento <hr> (línea horizontal)
                var hrElement = document.createElement("hr");
                hrElement.id = "head";

                // Insertar el <hr> antes del elemento de precio
                if (precioElement && precioElement.parentElement) {
                    precioElement.parentElement.insertBefore(hrElement, precioElement);
                }
            }

            // Establecer la clase "text-center" y "lista_precio_2"
            if (precioElement) {
                precioElement.classList.remove("text-end");
                precioElement.classList.add("text-center");
                precioElement.classList.add("lista_precio_2");
            }
            if (nombreElement) {
                nombreElement.classList.remove("text-start");
                nombreElement.classList.add("text-center");
                nombreElement.classList.add("lista_precio_2");
            }
        } else {
            // Si es mayor a 768px, eliminar el elemento <hr> si existe
            var hrElement = document.getElementById("head");
            if (hrElement && hrElement.parentElement) {
                hrElement.parentElement.removeChild(hrElement);
            }

            // Establecer la clase "text-end" y quitar "lista_precio_2"
            if (precioElement) {
                precioElement.classList.remove("text-center");
                precioElement.classList.add("text-end");
                precioElement.classList.remove("lista_precio_2");
            }
            if (nombreElement) {
                nombreElement.classList.remove("text-center");
                nombreElement.classList.add("text-start");
                nombreElement.classList.remove("lista_precio_2");
            }
        }
    }
}

// Llama a la función al cargar la página y cuando cambie el tamaño de la pantalla
window.addEventListener("load", ajustarAlineacion);
window.addEventListener("resize", ajustarAlineacion);
});