// Código creado por Christian Tapia (ComikSama)
// Correo electrónico: comiksamadesing@gmail.com
// Fecha de creación: Octubre 2023

// Función para gestionar la visibilidad de campos de postes
function gestionarVisibilidadPostes(materialRadioName, postesDivId) {
    var materialRadios = document.getElementsByName(materialRadioName);
    var postesDiv = document.getElementById(postesDivId);

    // Agrega un evento de cambio a todos los radios del material
    materialRadios.forEach(function (radio) {
        radio.addEventListener("change", function () {
            if (radio.value === "Sintra PVC") {
                // Si Sintra PVC está seleccionado, oculta el elemento de postes
                postesDiv.style.display = "none";
            } else {
                // Si se selecciona otro material, muestra el elemento de postes
                postesDiv.style.display = "block";
            }
        });
    });

    // Verifica el estado inicial para ocultar o mostrar en función de la selección inicial
    var selectedRadio = document.querySelector('input[name="' + materialRadioName + '"]:checked');
    if (selectedRadio && selectedRadio.value === "Sintra PVC") {
        postesDiv.style.display = "none";
    }
}

// Llama a la función para el campo "1"
gestionarVisibilidadPostes("1-material", "1-postes1");
// Llama a la función para el campo "8"
gestionarVisibilidadPostes("8-material", "8-postes1");
// Llama a la función para el campo "14"
gestionarVisibilidadPostes("14-material", "14-postes1");
// Llama a la función para el campo "15"
gestionarVisibilidadPostes("15-material", "15-postes1");
// Llama a la función para el campo "16"
gestionarVisibilidadPostes("16-material", "16-postes1");
// Llama a la función para el campo "17"
gestionarVisibilidadPostes("17-material", "17-postes1");
// Llama a la función para el campo "18"
gestionarVisibilidadPostes("18-material", "18-postes1");
// Llama a la función para el campo "19"
gestionarVisibilidadPostes("19-material", "19-postes1");
// Llama a la función para el campo "20"
gestionarVisibilidadPostes("20-material", "20-postes1");
// Llama a la función para el campo "28"
gestionarVisibilidadPostes("28-material", "28-postes1");
// Llama a la función para el campo "32"
gestionarVisibilidadPostes("32-material", "32-postes1");


// Función para gestionar la visibilidad de campos de medidas
function gestionarVisibilidadMedidas(materialRadioName) {
    var materialRadios = document.getElementsByName(materialRadioName);
    var radio40x40 = document.getElementById("28-40x40");
    var radio60x60 = document.getElementById("28-60x60");
    var label40x40 = document.querySelector('label[for="28-40x40"]');

    // Agrega un evento de cambio a todos los radios del material
    materialRadios.forEach(function (radio) {
        radio.addEventListener("change", function () {
            if (radio.value === "Aluminio Compuesto") {
                // Si Sintra PVC está seleccionado, oculta la opción "28-40x40" y su etiqueta
                radio40x40.style.display = "none";
                label40x40.style.display = "none";
                // También selecciona automáticamente la opción "28-60x60"
                radio60x60.checked = true;
            } else {
                // Si se selecciona otro material, muestra la opción "28-40x40" y su etiqueta si es necesario
                radio40x40.style.display = "block";
                label40x40.style.display = "block";
            }
        });
    });

    // Verifica el estado inicial para ocultar o mostrar en función de la selección inicial
    var selectedRadio = document.querySelector('input[name="' + materialRadioName + '"]:checked');
    if (selectedRadio && selectedRadio.value === "Aluminio Compuesto") {
        // Si Sintra PVC está seleccionado inicialmente, oculta la opción "28-40x40" y su etiqueta, y selecciona "28-60x60"
        radio40x40.style.display = "none";
        label40x40.style.display = "none";
        radio60x60.checked = true;
    }
}

// Llama a la función para el campo "28"
gestionarVisibilidadMedidas("28-material");



