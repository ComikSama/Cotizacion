// Código creado por Christian Tapia (ComikSama)
// Correo electrónico: comiksamadesing@gmail.com
// Fecha de creación: Octubre 2023

// Función para gestionar el texto del <label> según la selección
function gestionarTextoLabel(section) {
    var materialRadios = document.getElementsByName(section + "-material");
    var label = document.getElementById(section + "-cambio");

    materialRadios.forEach(function (radio) {
        radio.addEventListener("change", function () {
            if (radio.value === "Sintra PVC") {
                label.innerText = "Este material no utiliza Poste";
                label.style.color = "red";
            } else {
                // Restaura el texto original
                label.innerText = "Cantidad de Postes por Placa:";
                label.style.color = "";
            }
        });
    });
}

// Llama a la función para las secciones que lo requieren
var secciones = ["1", "8", "14", "15", "16", "17", "18", "19", "20", ,"28", "32"];
secciones.forEach(function (section) {
    gestionarTextoLabel(section);
});