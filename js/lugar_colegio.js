// Código creado por Christian Tapia (ComikSama)
// Correo electrónico: comiksamadesing@gmail.com
// Fecha de creación: Octubre 2023

document.addEventListener("DOMContentLoaded", function() {
    var numSeñaléticas = 24;

    // Itera a través de todas las señaléticas
    for (var i = 1; i <= numSeñaléticas; i++) {
        // Obtén referencias a los elementos relevantes para la señalética actual
        var radioLaSerena = document.getElementById(i + "-laSerena");
        var radioCoquimbo = document.getElementById(i + "-coquimbo");
        var radioOtro = document.getElementById(i + "-otro");
        var ciudadEspecifica = document.getElementById(i + "-otroCiudad");

        // Agrega un evento de cambio a los elementos de radio relevantes
        radioLaSerena.addEventListener("change", mostrarOcultarCiudad);
        radioCoquimbo.addEventListener("change", mostrarOcultarCiudad);
        radioOtro.addEventListener("change", mostrarOcultarCiudad);

        // Asegúrate de que el estado inicial refleje la selección actual
        mostrarOcultarCiudad();
    }

    // Función para mostrar u ocultar el campo de ciudad según la selección de "OTRO"
    function mostrarOcultarCiudad() {
        for (var i = 1; i <= numSeñaléticas; i++) {
            var radioOtro = document.getElementById(i + "-otro");
            var ciudadEspecifica = document.getElementById(i + "-otroCiudad");

            if (radioOtro.checked) {
                ciudadEspecifica.style.removeProperty("display");
            } else {
                ciudadEspecifica.style.setProperty("display", "none");
                ciudadEspecifica.querySelector("input").value = ""; // Borra el contenido del campo de texto
            }
        }
    }
});
