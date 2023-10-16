// Código creado por Christian Tapia (ComikSama)
// Correo electrónico: comiksamadesing@gmail.com
// Fecha de creación: Octubre 2023

document.addEventListener("DOMContentLoaded", function () {
    //1 - Calendario Organizador
    var precioTotal1 = 0;
    var cantidadPlacas1 = 0;
    var medidasRadios1 = document.querySelectorAll('input[name="1-medidas"]');
    var instalacionRadios1 = document.querySelectorAll('input[name="1-instalar"]');
    var placasInput1 = document.getElementById("1-placas");
    var precioElement1 = document.getElementById("1-precio");
    var precioMedida1 = 0
    ; // Valor por defecto para el medida

    // Precios de las medidas
    var preciosMedidas1 = {
        "60cm x 40cm": 88500,
        "80cm x 60cm": 98500
    };

    // Precios de instalación
    var preciosInstalacion1 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio1() {
        var medidaSeleccionada1 = obtenerSeleccion1(medidasRadios1);
        var instalacionSeleccionada1 = obtenerSeleccion1(instalacionRadios1);
        
        var precioMedida1 = preciosMedidas1[medidaSeleccionada1] || 0;
        var precioInstalacion1 = preciosInstalacion1[instalacionSeleccionada1] || "";
        
        // Obtén las medidas seleccionadas
        var medida1 = "";
        if (medidaSeleccionada1) {
            medida1 = medidaSeleccionada1;
        }

        cantidadPlacas1 = parseInt(placasInput1.value) || 0;
        precioTotal1 = (precioMedida1 * cantidadPlacas1);
        
        precioElement1.innerHTML = "Valor por Calendario Tamaño " + medida1 + ": $" + precioMedida1 + "<br> <hr>" +
            "Total Sección: $" + precioTotal1 + " (IVA Incluido)" ;

            // Alínea el texto a la derecha
        precioElement1.style.textAlign = "right";
        
        // Actualiza el valor del atributo 'value' de 1-medidas-valor para ambos campos ocultos
        var medidaValorInputs1 = document.querySelectorAll('input[name="1-medidas-valor"]');
        medidaValorInputs1.forEach(function(medidaValorInput1) {
            medidaValorInput1.value = precioMedida1;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion1(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }


    // Agrega eventos de cambio a los grupos de radio buttons
    medidasRadios1.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio1);
    });

    instalacionRadios1.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio1);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput1.addEventListener("input", actualizarPrecio1);


    // Llama a la función para calcular el precio inicial
    actualizarPrecio1();

    //--------------------------------------------------------------------------------//

    //2 - Placa Logo Corporativo
    var precioTotal2 = 0;
    var cantidadPlacas2 = 0;
    var medidasRadios2 = document.querySelectorAll('input[name="2-medidas"]');
    var instalacionRadios2 = document.querySelectorAll('input[name="2-instalar"]');
    var placasInput2 = document.getElementById("2-placas");
    var precioElement2 = document.getElementById("2-precio");
    var precioMedida2 = 0; // Valor por defecto para el medida

    // Precios de las medidas
    var preciosMedidas2 = {
        "100cm x 80cm": 210000
    };

    // Precios de instalación
    var preciosInstalacion2 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio2() {
        var medidaSeleccionada2 = obtenerSeleccion2(medidasRadios2);
        var instalacionSeleccionada2 = obtenerSeleccion2(instalacionRadios2);

        var precioMedida2 = preciosMedidas2[medidaSeleccionada2] || 0;
        var precioInstalacion2 = preciosInstalacion2[instalacionSeleccionada2] || "";

        // Obtén las medidas seleccionadas
        var medida2 = "";
        if (medidaSeleccionada2) {
            medida2 = medidaSeleccionada2;
        }

        cantidadPlacas2 = parseInt(placasInput2.value) || 0;
        precioTotal2 = precioMedida2 * cantidadPlacas2;

        precioElement2.innerHTML = "Valor por Calendario Tamaño " + medida2 + ": $" + precioMedida2 + "<br> <hr>" +
            "Total Sección: $" + precioTotal2 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement2.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 2-medidas-valor para ambos campos ocultos
        var medidaValorInputs2 = document.querySelectorAll('input[name="2-medidas-valor"]');
        medidaValorInputs2.forEach(function (medidaValorInput2) {
            medidaValorInput2.value = precioMedida2;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion2(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    medidasRadios2.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio2);
    });

    instalacionRadios2.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio2);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput2.addEventListener("input", actualizarPrecio2);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio2();

    //--------------------------------------------------------------------------------//
  
    // 3 - Placa Baño Niño
    var precioTotal3 = 0;
    var cantidadPlacas3 = 0;
    var materialRadios3 = document.querySelectorAll('input[name="3-material"]');
    var instalacionRadios3 = document.querySelectorAll('input[name="3-instalar"]');
    var placasInput3 = document.getElementById("3-placas");
    var precioElement3 = document.getElementById("3-precio");
    var precioMaterial3 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales3 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion3 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio3() {
        var materialSeleccionado3 = obtenerSeleccion3(materialRadios3);
        var instalacionSeleccionada3 = obtenerSeleccion3(instalacionRadios3);
        
        precioMaterial3 = preciosMateriales3[materialSeleccionado3] || 0;
        var precioInstalacion3 = preciosInstalacion3[instalacionSeleccionada3] || "";
        
        // Obtén el nombre del material seleccionado
        var material3 = "";
        if (materialSeleccionado3) {
            material3 = materialSeleccionado3;
        }

        cantidadPlacas3 = parseInt(placasInput3.value) || 0;
        precioTotal3 = (precioMaterial3 * cantidadPlacas3);
        
        precioElement3.innerHTML = "Valor por Señalética en " + material3 + ": $" + precioMaterial3 + "<br> <hr>" +
            "Total Sección: $" + precioTotal3 + " (IVA Incluido)" ;

            // Alínea el texto a la derecha
        precioElement3.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 3-material-valor para ambos campos ocultos
        var materialValorInputs3 = document.querySelectorAll('input[name="3-material-valor"]');
        materialValorInputs3.forEach(function(materialValorInput3) {
            materialValorInput3.value = precioMaterial3
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion3(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios3.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio3);
    });

    instalacionRadios3.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio3);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput3.addEventListener("input", actualizarPrecio3);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio3();

    //--------------------------------------------------------------------------------//

    // 4 - Placa Baño Niña
    var precioTotal4 = 0;
    var cantidadPlacas4 = 0;
    var materialRadios4 = document.querySelectorAll('input[name="4-material"]');
    var instalacionRadios4 = document.querySelectorAll('input[name="4-instalar"]');
    var placasInput4 = document.getElementById("4-placas");
    var precioElement4 = document.getElementById("4-precio");
    var precioMaterial4 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales4 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion4 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio4() {
        var materialSeleccionado4 = obtenerSeleccion4(materialRadios4);
        var instalacionSeleccionada4 = obtenerSeleccion4(instalacionRadios4);
        
        precioMaterial4 = preciosMateriales4[materialSeleccionado4] || 0;
        var precioInstalacion4 = preciosInstalacion4[instalacionSeleccionada4] || "";
        
        // Obtén el nombre del material seleccionado
        var material4 = "";
        if (materialSeleccionado4) {
            material4 = materialSeleccionado4;
        }

        cantidadPlacas4 = parseInt(placasInput4.value) || 0;
        precioTotal4 = precioMaterial4 * cantidadPlacas4;
        
        precioElement4.innerHTML = "Valor por Señalética en " + material4 + ": $" + precioMaterial4 + "<br> <hr>" +
            "Total Sección: $" + precioTotal4 + " (IVA Incluido)" ;

        // Alínea el texto a la derecha
        precioElement4.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 4-material-valor para ambos campos ocultos
        var materialValorInputs4 = document.querySelectorAll('input[name="4-material-valor"]');
        materialValorInputs4.forEach(function(materialValorInput4) {
            materialValorInput4.value = precioMaterial4;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion4(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios4.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio4);
    });

    instalacionRadios4.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio4);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput4.addEventListener("input", actualizarPrecio4);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio4();

    //--------------------------------------------------------------------------------//

    // 5 - Placa Baño Universal
    var precioTotal5 = 0;
    var cantidadPlacas5 = 0;
    var materialRadios5 = document.querySelectorAll('input[name="5-material"]');
    var instalacionRadios5 = document.querySelectorAll('input[name="5-instalar"]');
    var placasInput5 = document.getElementById("5-placas");
    var precioElement5 = document.getElementById("5-precio");
    var precioMaterial5 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales5 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion5 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio5() {
        var materialSeleccionado5 = obtenerSeleccion5(materialRadios5);
        var instalacionSeleccionada5 = obtenerSeleccion5(instalacionRadios5);
        
        precioMaterial5 = preciosMateriales5[materialSeleccionado5] || 0;
        var precioInstalacion5 = preciosInstalacion5[instalacionSeleccionada5] || "";
        
        // Obtén el nombre del material seleccionado
        var material5 = "";
        if (materialSeleccionado5) {
            material5 = materialSeleccionado5;
        }

        cantidadPlacas5 = parseInt(placasInput5.value) || 0;
        precioTotal5 = precioMaterial5 * cantidadPlacas5;
        
        precioElement5.innerHTML = "Valor por Señalética en " + material5 + ": $" + precioMaterial5 + "<br> <hr>" +
            "Total Sección: $" + precioTotal5 + " (IVA Incluido)" ;

        // Alínea el texto a la derecha
        precioElement5.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 5-material-valor para ambos campos ocultos
        var materialValorInputs5 = document.querySelectorAll('input[name="5-material-valor"]');
        materialValorInputs5.forEach(function(materialValorInput5) {
            materialValorInput5.value = precioMaterial5;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion5(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios5.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio5);
    });

    instalacionRadios5.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio5);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput5.addEventListener("input", actualizarPrecio5);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio5();

    //--------------------------------------------------------------------------------//

    // 6 - Placa Baño Profesor
    var precioTotal6 = 0;
    var cantidadPlacas6 = 0;
    var materialRadios6 = document.querySelectorAll('input[name="6-material"]');
    var instalacionRadios6 = document.querySelectorAll('input[name="6-instalar"]');
    var placasInput6 = document.getElementById("6-placas");
    var precioElement6 = document.getElementById("6-precio");
    var precioMaterial6 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales6 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion6 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio6() {
        var materialSeleccionado6 = obtenerSeleccion6(materialRadios6);
        var instalacionSeleccionada6 = obtenerSeleccion6(instalacionRadios6);
        
        precioMaterial6 = preciosMateriales6[materialSeleccionado6] || 0;
        var precioInstalacion6 = preciosInstalacion6[instalacionSeleccionada6] || "";
        
        // Obtén el nombre del material seleccionado
        var material6 = "";
        if (materialSeleccionado6) {
            material6 = materialSeleccionado6;
        }

        cantidadPlacas6 = parseInt(placasInput6.value) || 0;
        precioTotal6 = precioMaterial6 * cantidadPlacas6;
        
        precioElement6.innerHTML = "Valor por Señalética en " + material6 + ": $" + precioMaterial6 + "<br> <hr>" +
            "Total Sección: $" + precioTotal6 + " (IVA Incluido)" ;

        // Alínea el texto a la derecha
        precioElement6.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 6-material-valor para ambos campos ocultos
        var materialValorInputs6 = document.querySelectorAll('input[name="6-material-valor"]');
        materialValorInputs6.forEach(function(materialValorInput6) {
            materialValorInput6.value = precioMaterial6;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion6(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios6.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    instalacionRadios6.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput6.addEventListener("input", actualizarPrecio6);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio6();

    //--------------------------------------------------------------------------------//

    // 7 - Placa Recepción
    var precioTotal7 = 0;
    var cantidadPlacas7 = 0;
    var materialRadios7 = document.querySelectorAll('input[name="7-material"]');
    var instalacionRadios7 = document.querySelectorAll('input[name="7-instalar"]');
    var placasInput7 = document.getElementById("7-placas");
    var precioElement7 = document.getElementById("7-precio");
    var precioMaterial7 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales7 = {
        "Acrílico": 58500
    };

    // Precios de instalación
    var preciosInstalacion7 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio7() {
        var materialSeleccionado7 = obtenerSeleccion7(materialRadios7);
        var instalacionSeleccionada7 = obtenerSeleccion7(instalacionRadios7);

        precioMaterial7 = preciosMateriales7[materialSeleccionado7] || 0;
        var precioInstalacion7 = preciosInstalacion7[instalacionSeleccionada7] || "";

        // Obtén el nombre del material seleccionado
        var material7 = "";
        if (materialSeleccionado7) {
            material7 = materialSeleccionado7;
        }

        cantidadPlacas7 = parseInt(placasInput7.value) || 0;
        precioTotal7 = precioMaterial7 * cantidadPlacas7;

        precioElement7.innerHTML = "Valor por Señalética en " + material7 + ": $" + precioMaterial7 + "<br><hr>" +
            "Total Sección: $" + precioTotal7 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement7.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 7-material-valor para ambos campos ocultos
        var materialValorInputs7 = document.querySelectorAll('input[name="7-material-valor"]');
        materialValorInputs7.forEach(function(materialValorInput7) {
            materialValorInput7.value = precioMaterial7
        });

        // Llama a la función para actualizar el precio total global (si es necesario)
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion7(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios7.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio7);
    });

    instalacionRadios7.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio7);
    });

    // Agrega un evento de entrada para el campo de "placasInput7"
    placasInput7.addEventListener("input", actualizarPrecio7);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio7();

    //--------------------------------------------------------------------------------//

    // 8 - Señaletica de Red Húmeda
    var precioTotal8 = 0;
    var cantidadPlacas8 = 0;
    var materialRadios8 = document.querySelectorAll('input[name="8-material"]');
    var instalacionRadios8 = document.querySelectorAll('input[name="8-instalar"]');
    var placasInput8 = document.getElementById("8-placas");
    var precioElement8 = document.getElementById("8-precio");
    var precioMaterial8 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales8 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion8 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio8() {
        var materialSeleccionado8 = obtenerSeleccion8(materialRadios8);
        var instalacionSeleccionada8 = obtenerSeleccion8(instalacionRadios8);

        precioMaterial8 = preciosMateriales8[materialSeleccionado8] || 0;
        var precioInstalacion8 = preciosInstalacion8[instalacionSeleccionada8] || "";

        // Obtén el nombre del material seleccionado
        var material8 = "";
        if (materialSeleccionado8) {
            material8 = materialSeleccionado8;
        }

        cantidadPlacas8 = parseInt(placasInput8.value) || 0;
        precioTotal8 = precioMaterial8 * cantidadPlacas8;

        precioElement8.innerHTML = "Valor por Señalética en " + material8 + ": $" + precioMaterial8 + "<br><hr>" +
            "Total Sección: $" + precioTotal8 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement8.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 8-material-valor para ambos campos ocultos
        var materialValorInputs8 = document.querySelectorAll('input[name="8-material-valor"]');
        materialValorInputs8.forEach(function(materialValorInput8) {
            materialValorInput8.value = precioMaterial8;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion8(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios8.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio8);
    });

    instalacionRadios8.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio8);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput8.addEventListener("input", actualizarPrecio8);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio8();

    //--------------------------------------------------------------------------------//

    // 6 - Red Seca SALIDA
    var precioTotal6 = 0;
    var cantidadPlacas6 = 0;
    var materialRadios6 = document.querySelectorAll('input[name="6-material"]');
    var instalacionRadios6 = document.querySelectorAll('input[name="6-instalar"]');
    var placasInput6 = document.getElementById("6-placas");
    var precioElement6 = document.getElementById("6-precio");
    var precioMaterial6 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales6 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion6 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio6() {
        var materialSeleccionado6 = obtenerSeleccion6(materialRadios6);
        var instalacionSeleccionada6 = obtenerSeleccion6(instalacionRadios6);

        precioMaterial6 = preciosMateriales6[materialSeleccionado6] || 0;
        var precioInstalacion6 = preciosInstalacion6[instalacionSeleccionada6] || "";

        // Obtén el nombre del material seleccionado
        var material6 = "";
        if (materialSeleccionado6) {
            material6 = materialSeleccionado6;
        }

        cantidadPlacas6 = parseInt(placasInput6.value) || 0;
        precioTotal6 = (precioMaterial6 * cantidadPlacas6);

        precioElement6.innerHTML = "Valor por Señalética en " + material6 + ": $" + precioMaterial6 + "<br> <hr>" +
            "Total Sección: $" + precioTotal6 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement6.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 6-material-valor para ambos campos ocultos
        var materialValorInputs6 = document.querySelectorAll('input[name="6-material-valor"]');
        materialValorInputs6.forEach(function(materialValorInput6) {
            materialValorInput6.value = precioMaterial6;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion6(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios6.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    instalacionRadios6.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput6.addEventListener("input", actualizarPrecio6);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio6();

    //--------------------------------------------------------------------------------//

    // 7 - Placa Extintor
    var precioTotal7 = 0;
    var cantidadPlacas7 = 0;
    var materialRadios7 = document.querySelectorAll('input[name="7-material"]');
    var instalacionRadios7 = document.querySelectorAll('input[name="7-instalar"]');
    var placasInput7 = document.getElementById("7-placas");
    var precioElement7 = document.getElementById("7-precio");
    var precioMaterial7 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales7 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion7 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio7() {
        var materialSeleccionado7 = obtenerSeleccion7(materialRadios7);
        var instalacionSeleccionada7 = obtenerSeleccion7(instalacionRadios7);

        precioMaterial7 = preciosMateriales7[materialSeleccionado7] || 0;
        var precioInstalacion7 = preciosInstalacion7[instalacionSeleccionada7] || "";

        // Obtén el nombre del material seleccionado
        var material7 = "";
        if (materialSeleccionado7) {
            material7 = materialSeleccionado7;
        }

        cantidadPlacas7 = parseInt(placasInput7.value) || 0;
        precioTotal7 = (precioMaterial7 * cantidadPlacas7);

        precioElement7.innerHTML = "Valor por Señalética en " + material7 + ": $" + precioMaterial7 + "<br> <hr>" +
            "Total Sección: $" + precioTotal7 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement7.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 7-material-valor para ambos campos ocultos
        var materialValorInputs7 = document.querySelectorAll('input[name="7-material-valor"]');
        materialValorInputs7.forEach(function(materialValorInput7) {
            materialValorInput7.value = precioMaterial7;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion7(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios7.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio7);
    });

    instalacionRadios7.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio7);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput7.addEventListener("input", actualizarPrecio7);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio7();

    //--------------------------------------------------------------------------------//

    // 8 - Red Inerte
    var precioTotal8 = 0;
    var cantidadPlacas8 = 0;
    var materialRadios8 = document.querySelectorAll('input[name="8-material"]');
    var instalacionRadios8 = document.querySelectorAll('input[name="8-instalar"]');
    var placasInput8 = document.getElementById("8-placas");
    var precioElement8 = document.getElementById("8-precio");
    var precioMaterial8 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales8 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion8 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio8() {
        var materialSeleccionado8 = obtenerSeleccion8(materialRadios8);
        var instalacionSeleccionada8 = obtenerSeleccion8(instalacionRadios8);

        precioMaterial8 = preciosMateriales8[materialSeleccionado8] || 0;
        var precioInstalacion8 = preciosInstalacion8[instalacionSeleccionada8] || "";

        // Obtén el nombre del material seleccionado
        var material8 = "";
        if (materialSeleccionado8) {
            material8 = materialSeleccionado8;
        }

        cantidadPlacas8 = parseInt(placasInput8.value) || 0;
        precioTotal8 = (precioMaterial8 * cantidadPlacas8);

        precioElement8.innerHTML = "Valor por Señalética en " + material8 + ": $" + precioMaterial8 + "<br> <hr>" +
            "Total Sección: $" + precioTotal8 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement8.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 8-material-valor para ambos campos ocultos
        var materialValorInputs8 = document.querySelectorAll('input[name="8-material-valor"]');
        materialValorInputs8.forEach(function(materialValorInput8) {
            materialValorInput8.value = precioMaterial8;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion8(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios8.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio8);
    });

    instalacionRadios8.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio8);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput8.addEventListener("input", actualizarPrecio8);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio8();

    //--------------------------------------------------------------------------------//

    // 9 - Red Eléctrica
    var precioTotal9 = 0;
    var cantidadPlacas9 = 0;
    var materialRadios9 = document.querySelectorAll('input[name="9-material"]');
    var instalacionRadios9 = document.querySelectorAll('input[name="9-instalar"]');
    var placasInput9 = document.getElementById("9-placas");
    var precioElement9 = document.getElementById("9-precio");
    var precioMaterial9 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales9 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion9 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio9() {
        var materialSeleccionado9 = obtenerSeleccion9(materialRadios9);
        var instalacionSeleccionada9 = obtenerSeleccion9(instalacionRadios9);

        precioMaterial9 = preciosMateriales9[materialSeleccionado9] || 0;
        var precioInstalacion9 = preciosInstalacion9[instalacionSeleccionada9] || "";

        // Obtén el nombre del material seleccionado
        var material9 = "";
        if (materialSeleccionado9) {
            material9 = materialSeleccionado9;
        }

        cantidadPlacas9 = parseInt(placasInput9.value) || 0;
        precioTotal9 = (precioMaterial9 * cantidadPlacas9);

        precioElement9.innerHTML = "Valor por Señalética en " + material9 + ": $" + precioMaterial9 + "<br> <hr>" +
            "Total Sección: $" + precioTotal9 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement9.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 9-material-valor para ambos campos ocultos
        var materialValorInputs9 = document.querySelectorAll('input[name="9-material-valor"]');
        materialValorInputs9.forEach(function(materialValorInput9) {
            materialValorInput9.value = precioMaterial9;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion9(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios9.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio9);
    });

    instalacionRadios9.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio9);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput9.addEventListener("input", actualizarPrecio9);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio9();

    //--------------------------------------------------------------------------------//

    // 10 - Peligro Red de Gas
    var precioTotal10 = 0;
    var cantidadPlacas10 = 0;
    var materialRadios10 = document.querySelectorAll('input[name="10-material"]');
    var instalacionRadios10 = document.querySelectorAll('input[name="10-instalar"]');
    var placasInput10 = document.getElementById("10-placas");
    var precioElement10 = document.getElementById("10-precio");
    var precioMaterial10 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales10 = {
        "Acrílico": 18500,
        "Sintra PVC": 8500
    };

    // Precios de instalación
    var preciosInstalacion10 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio10() {
        var materialSeleccionado10 = obtenerSeleccion10(materialRadios10);
        var instalacionSeleccionada10 = obtenerSeleccion10(instalacionRadios10);

        precioMaterial10 = preciosMateriales10[materialSeleccionado10] || 0;
        var precioInstalacion10 = preciosInstalacion10[instalacionSeleccionada10] || "";

        // Obtén el nombre del material seleccionado
        var material10 = "";
        if (materialSeleccionado10) {
            material10 = materialSeleccionado10;
        }

        cantidadPlacas10 = parseInt(placasInput10.value) || 0;
        precioTotal10 = (precioMaterial10 * cantidadPlacas10);

        precioElement10.innerHTML = "Valor por Señalética en " + material10 + ": $" + precioMaterial10 + "<br> <hr>" +
            "Total Sección: $" + precioTotal10 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement10.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 10-material-valor para ambos campos ocultos
        var materialValorInputs10 = document.querySelectorAll('input[name="10-material-valor"]');
        materialValorInputs10.forEach(function(materialValorInput10) {
            materialValorInput10.value = precioMaterial10;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion10(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios10.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio10);
    });

    instalacionRadios10.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio10);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput10.addEventListener("input", actualizarPrecio10);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio10();

    //--------------------------------------------------------------------------------//

    // 11 - Señalética Vias de Evacuación
    var precioTotal11 = 0;
    var cantidadPlacas11 = 0;
    var materialRadios11 = document.querySelectorAll('input[name="11-material"]');
    var instalacionRadios11 = document.querySelectorAll('input[name="11-instalar"]');
    var placasInput11 = document.getElementById("11-placas");
    var precioElement11 = document.getElementById("11-precio");
    var precioMaterial11 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales11 = {
        "Sintra PVC": 9850
    };

    // Precios de instalación
    var preciosInstalacion11 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio11() {
        var materialSeleccionado11 = obtenerSeleccion11(materialRadios11);
        var instalacionSeleccionada11 = obtenerSeleccion11(instalacionRadios11);

        precioMaterial11 = preciosMateriales11[materialSeleccionado11] || 0;
        var precioInstalacion11 = preciosInstalacion11[instalacionSeleccionada11] || "";

        // Obtén el nombre del material seleccionado
        var material11 = "";
        if (materialSeleccionado11) {
            material11 = materialSeleccionado11;
        }

        cantidadPlacas11 = parseInt(placasInput11.value) || 0;
        precioTotal11 = (precioMaterial11 * cantidadPlacas11);

        precioElement11.innerHTML = "Valor por Señalética en " + material11 + ": $" + precioMaterial11 + "<br> <hr>" +
            "Total Sección: $" + precioTotal11 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement11.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 11-material-valor para ambos campos ocultos
        var materialValorInputs11 = document.querySelectorAll('input[name="11-material-valor"]');
        materialValorInputs11.forEach(function(materialValorInput11) {
            materialValorInput11.value = precioMaterial11;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion11(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios11.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio11);
    });

    instalacionRadios11.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio11);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput11.addEventListener("input", actualizarPrecio11);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio11();

    //--------------------------------------------------------------------------------//

    // 12 - Señalética Salida de Emergencia
    var precioTotal12 = 0;
    var cantidadPlacas12 = 0;
    var materialRadios12 = document.querySelectorAll('input[name="12-material"]');
    var instalacionRadios12 = document.querySelectorAll('input[name="12-instalar"]');
    var placasInput12 = document.getElementById("12-placas");
    var precioElement12 = document.getElementById("12-precio");
    var precioMaterial12 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales12 = {
        "Sintra PVC": 9850
    };

    // Precios de instalación
    var preciosInstalacion12 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio12() {
        var materialSeleccionado12 = obtenerSeleccion12(materialRadios12);
        var instalacionSeleccionada12 = obtenerSeleccion12(instalacionRadios12);

        precioMaterial12 = preciosMateriales12[materialSeleccionado12] || 0;
        var precioInstalacion12 = preciosInstalacion12[instalacionSeleccionada12] || "";

        // Obtén el nombre del material seleccionado
        var material12 = "";
        if (materialSeleccionado12) {
            material12 = materialSeleccionado12;
        }

        cantidadPlacas12 = parseInt(placasInput12.value) || 0;
        precioTotal12 = (precioMaterial12 * cantidadPlacas12);

        precioElement12.innerHTML = "Valor por Señalética en " + material12 + ": $" + precioMaterial12 + "<br> <hr>" +
            "Total Sección: $" + precioTotal12 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement12.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 12-material-valor para ambos campos ocultos
        var materialValorInputs12 = document.querySelectorAll('input[name="12-material-valor"]');
        materialValorInputs12.forEach(function(materialValorInput12) {
            materialValorInput12.value = precioMaterial12;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion12(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios12.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio12);
    });

    instalacionRadios12.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio12);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput12.addEventListener("input", actualizarPrecio12);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio12();

    //--------------------------------------------------------------------------------//

    // 13 - Señalética Salida de Emergencia - Iluminación LED
    var precioTotal13 = 0;
    var cantidadPlacas13 = 0;
    var materialRadios13 = document.querySelectorAll('input[name="13-material"]');
    var instalacionRadios13 = document.querySelectorAll('input[name="13-instalar"]');
    var placasInput13 = document.getElementById("13-placas");
    var precioElement13 = document.getElementById("13-precio");
    var precioMaterial13 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales13 = {
        "Acrílico": 35500
    };

    // Precios de instalación
    var preciosInstalacion13 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio13() {
        var materialSeleccionado13 = obtenerSeleccion13(materialRadios13);
        var instalacionSeleccionada13 = obtenerSeleccion13(instalacionRadios13);
        
        precioMaterial13 = preciosMateriales13[materialSeleccionado13] || 0;
        var precioInstalacion13 = preciosInstalacion13[instalacionSeleccionada13] || "";
        
        // Obtén el nombre del material seleccionado
        var material13 = "";
        if (materialSeleccionado13) {
            material13 = materialSeleccionado13;
        }

        cantidadPlacas13 = parseInt(placasInput13.value) || 0;
        precioTotal13 = (precioMaterial13 * cantidadPlacas13);
        
        precioElement13.innerHTML = "Valor por Señalética en " + material13 + ": $" + precioMaterial13 + "<br> <hr>" +
            "Total Sección: $" + precioTotal13 + " (IVA Incluido)" ;

        // Alínea el texto a la derecha
        precioElement13.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 13-material-valor para ambos campos ocultos
        var materialValorInputs13 = document.querySelectorAll('input[name="13-material-valor"]');
        materialValorInputs13.forEach(function(materialValorInput13) {
            materialValorInput13.value = precioMaterial13
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion13(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios13.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio13);
    });

    instalacionRadios13.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio13);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput13.addEventListener("input", actualizarPrecio13);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio13();

    //--------------------------------------------------------------------------------//

    // 14 - Señalética de Punto de Encuentro
    var precioTotal14 = 0;
    var cantidadPostes14 = 0;
    var cantidadPlacas14 = 0;
    var materialRadios14 = document.querySelectorAll('input[name="14-material"]');
    var instalacionRadios14 = document.querySelectorAll('input[name="14-instalar"]');
    var placasInput14 = document.getElementById("14-placas");
    var postesInput14 = document.getElementById("14-postes");
    var precioElement14 = document.getElementById("14-precio");
    var precioMaterial14 = 0; // Valor por defecto para el material
    var precioPoste14 = 48000; // Valor por defecto para el poste (puedes cambiar este valor)

    // Precios de los materiales
    var preciosMateriales14 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    // Precios de instalación
    var preciosInstalacion14 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio14() {
        var materialSeleccionado14 = obtenerSeleccion14(materialRadios14);
        var instalacionSeleccionada14 = obtenerSeleccion14(instalacionRadios14);

        precioMaterial14 = preciosMateriales14[materialSeleccionado14] || 0;
        var precioInstalacion14 = preciosInstalacion14[instalacionSeleccionada14] || "";

        // Obtén el nombre del material seleccionado
        var material14 = "";
        if (materialSeleccionado14) {
            material14 = materialSeleccionado14;
        }

        cantidadPlacas14 = parseInt(placasInput14.value) || 0;

        // Verifica si el material seleccionado es "Sintra PVC"
        if (materialSeleccionado14 === "Sintra PVC") {
            postesInput14.value = "0"; // Establece la cantidad de postes en 0
            postesInput14.disabled = true; // Deshabilita el campo de entrada de postes
        } else {
            postesInput14.disabled = false; // Habilita el campo de entrada de postes
        }

        cantidadPostes14 = parseInt(postesInput14.value) || 0;

        // Calcula el precio total considerando la lógica condicional
        precioTotal14 = (precioPoste14 * cantidadPostes14) + (precioMaterial14 * cantidadPlacas14);

        precioElement14.innerHTML = "Valor por Señalética en " + material14 + ": $" + precioMaterial14 + "<br>";

        if (materialSeleccionado14 !== "Sintra PVC") {
            precioElement14.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste14 + "<br>";
        }

        precioElement14.innerHTML += "<hr>Total Sección: $" + precioTotal14 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement14.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 14-material-valor para ambos campos ocultos
        var materialValorInputs14 = document.querySelectorAll('input[name="14-material-valor"]');
        materialValorInputs14.forEach(function (materialValorInput14) {
            materialValorInput14.value = precioMaterial14;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion14(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios14.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio14);
    });

    instalacionRadios14.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio14);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput14.addEventListener("input", actualizarPrecio14);
    postesInput14.addEventListener("input", actualizarPrecio14);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio14();

    //--------------------------------------------------------------------------------//

    // 15 - Zona Segura
    var precioTotal15 = 0;
    var cantidadPostes15 = 0;
    var cantidadPlacas15 = 0;
    var materialRadios15 = document.querySelectorAll('input[name="15-material"]');
    var instalacionRadios15 = document.querySelectorAll('input[name="15-instalar"]');
    var placasInput15 = document.getElementById("15-placas");
    var postesInput15 = document.getElementById("15-postes");
    var precioElement15 = document.getElementById("15-precio");
    var precioMaterial15 = 0; // Valor por defecto para el material
    var precioPoste15 = 48000; // Valor por defecto para el poste (puedes cambiar este valor)

    // Precios de los materiales
    var preciosMateriales15 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    // Precios de instalación
    var preciosInstalacion15 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio15() {
        var materialSeleccionado15 = obtenerSeleccion15(materialRadios15);
        var instalacionSeleccionada15 = obtenerSeleccion15(instalacionRadios15);

        precioMaterial15 = preciosMateriales15[materialSeleccionado15] || 0;
        var precioInstalacion15 = preciosInstalacion15[instalacionSeleccionada15] || "";

        // Obtén el nombre del material seleccionado
        var material15 = "";
        if (materialSeleccionado15) {
            material15 = materialSeleccionado15;
        }

        cantidadPlacas15 = parseInt(placasInput15.value) || 0;

        // Verifica si el material seleccionado es "Sintra PVC"
        if (materialSeleccionado15 === "Sintra PVC") {
            postesInput15.value = "0"; // Establece la cantidad de postes en 0
            postesInput15.disabled = true; // Deshabilita el campo de entrada de postes
        } else {
            postesInput15.disabled = false; // Habilita el campo de entrada de postes
        }

        cantidadPostes15 = parseInt(postesInput15.value) || 0;

        // Calcula el precio total considerando la lógica condicional
        precioTotal15 = (precioPoste15 * cantidadPostes15) + (precioMaterial15 * cantidadPlacas15);

        precioElement15.innerHTML = "Valor por Señalética en " + material15 + ": $" + precioMaterial15 + "<br>";

        if (materialSeleccionado15 !== "Sintra PVC") {
            precioElement15.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste15 + "<br>";
        }

        precioElement15.innerHTML += "<hr>Total Sección: $" + precioTotal15 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement15.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 15-material-valor para ambos campos ocultos
        var materialValorInputs15 = document.querySelectorAll('input[name="15-material-valor"]');
        materialValorInputs15.forEach(function (materialValorInput15) {
            materialValorInput15.value = precioMaterial15;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion15(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios15.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio15);
    });

    instalacionRadios15.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio15);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput15.addEventListener("input", actualizarPrecio15);
    postesInput15.addEventListener("input", actualizarPrecio15);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio15();    

    //--------------------------------------------------------------------------------//

    // 16 - No Estacionar
    var precioTotal16 = 0;
    var cantidadPostes16 = 0;
    var cantidadPlacas16 = 0;
    var materialRadios16 = document.querySelectorAll('input[name="16-material"]');
    var instalacionRadios16 = document.querySelectorAll('input[name="16-instalar"]');
    var placasInput16 = document.getElementById("16-placas");
    var postesInput16 = document.getElementById("16-postes");
    var precioElement16 = document.getElementById("16-precio");
    var precioMaterial16 = 0; // Valor por defecto para el material
    var precioPoste16 = 48000; // Valor por defecto para el poste (puedes cambiar este valor)

    // Precios de los materiales
    var preciosMateriales16 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    // Precios de instalación
    var preciosInstalacion16 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio16() {
        var materialSeleccionado16 = obtenerSeleccion16(materialRadios16);
        var instalacionSeleccionada16 = obtenerSeleccion16(instalacionRadios16);

        precioMaterial16 = preciosMateriales16[materialSeleccionado16] || 0;
        var precioInstalacion16 = preciosInstalacion16[instalacionSeleccionada16] || "";

        // Obtén el nombre del material seleccionado
        var material16 = "";
        if (materialSeleccionado16) {
            material16 = materialSeleccionado16;
        }

        cantidadPlacas16 = parseInt(placasInput16.value) || 0;

        // Verifica si el material seleccionado es "Sintra PVC"
        if (materialSeleccionado16 === "Sintra PVC") {
            postesInput16.value = "0"; // Establece la cantidad de postes en 0
            postesInput16.disabled = true; // Deshabilita el campo de entrada de postes
        } else {
            postesInput16.disabled = false; // Habilita el campo de entrada de postes
        }

        cantidadPostes16 = parseInt(postesInput16.value) || 0;

        // Calcula el precio total considerando la lógica condicional
        precioTotal16 = (precioPoste16 * cantidadPostes16) + (precioMaterial16 * cantidadPlacas16);

        precioElement16.innerHTML = "Valor por Señalética en " + material16 + ": $" + precioMaterial16 + "<br>";

        if (materialSeleccionado16 !== "Sintra PVC") {
            precioElement16.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste16 + "<br>";
        }

        precioElement16.innerHTML += "<hr>Total Sección: $" + precioTotal16 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement16.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 16-material-valor para ambos campos ocultos
        var materialValorInputs16 = document.querySelectorAll('input[name="16-material-valor"]');
        materialValorInputs16.forEach(function (materialValorInput16) {
            materialValorInput16.value = precioMaterial16;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion16(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios16.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio16);
    });

    instalacionRadios16.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio16);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput16.addEventListener("input", actualizarPrecio16);
    postesInput16.addEventListener("input", actualizarPrecio16);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio16();  

    //--------------------------------------------------------------------------------//

    // 17 - No Estacionar
    var precioTotal17 = 0;
    var cantidadPostes17 = 0;
    var cantidadPlacas17 = 0;
    var materialRadios17 = document.querySelectorAll('input[name="17-material"]');
    var instalacionRadios17 = document.querySelectorAll('input[name="17-instalar"]');
    var placasInput17 = document.getElementById("17-placas");
    var postesInput17 = document.getElementById("17-postes");
    var precioElement17 = document.getElementById("17-precio");
    var precioMaterial17 = 0; // Valor por defecto para el material
    var precioPoste17 = 48000; // Valor por defecto para el poste (puedes cambiar este valor);

    // Precios de los materiales
    var preciosMateriales17 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    // Precios de instalación
    var preciosInstalacion17 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio17() {
        var materialSeleccionado17 = obtenerSeleccion17(materialRadios17);
        var instalacionSeleccionada17 = obtenerSeleccion17(instalacionRadios17);

        precioMaterial17 = preciosMateriales17[materialSeleccionado17] || 0;
        var precioInstalacion17 = preciosInstalacion17[instalacionSeleccionada17] || "";

        // Obtén el nombre del material seleccionado
        var material17 = "";
        if (materialSeleccionado17) {
            material17 = materialSeleccionado17;
        }

        cantidadPlacas17 = parseInt(placasInput17.value) || 0;

        // Verifica si el material seleccionado es "Sintra PVC"
        if (materialSeleccionado17 === "Sintra PVC") {
            postesInput17.value = "0"; // Establece la cantidad de postes en 0
            postesInput17.disabled = true; // Deshabilita el campo de entrada de postes
        } else {
            postesInput17.disabled = false; // Habilita el campo de entrada de postes
        }

        cantidadPostes17 = parseInt(postesInput17.value) || 0;

        // Calcula el precio total considerando la lógica condicional
        precioTotal17 = (precioPoste17 * cantidadPostes17) + (precioMaterial17 * cantidadPlacas17);

        precioElement17.innerHTML = "Valor por Señalética en " + material17 + ": $" + precioMaterial17 + "<br>";

        if (materialSeleccionado17 !== "Sintra PVC") {
            precioElement17.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste17 + "<br>";
        }

        precioElement17.innerHTML += "<hr>Total Sección: $" + precioTotal17 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement17.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 17-material-valor para ambos campos ocultos
        var materialValorInputs17 = document.querySelectorAll('input[name="17-material-valor"]');
        materialValorInputs17.forEach(function (materialValorInput17) {
            materialValorInput17.value = precioMaterial17;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion17(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios17.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio17);
    });

    instalacionRadios17.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio17);
    });

    // Agrega eventos de cambio a los campos de entrada de placas y postes
    placasInput17.addEventListener("input", actualizarPrecio17);
    postesInput17.addEventListener("input", actualizarPrecio17);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio17();  

    //--------------------------------------------------------------------------------//

    // 18 - Display Informativo - Formato Carta
    var precioTotal18 = 0;
    var cantidadPlacas18 = 0;
    var materialRadios18 = document.querySelectorAll('input[name="18-material"]');
    var instalacionRadios18 = document.querySelectorAll('input[name="18-instalar"]');
    var placasInput18 = document.getElementById("18-placas");
    var precioElement18 = document.getElementById("18-precio");
    var precioMaterial18 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales18 = {
        "Acrílico": 47500
    };

    // Precios de instalación
    var preciosInstalacion18 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio18() {
        var materialSeleccionado18 = obtenerSeleccion18(materialRadios18);
        var instalacionSeleccionada18 = obtenerSeleccion18(instalacionRadios18);

        precioMaterial18 = preciosMateriales18[materialSeleccionado18] || 0;
        var precioInstalacion18 = preciosInstalacion18[instalacionSeleccionada18] || "";

        // Obtén el nombre del material seleccionado
        var material18 = "";
        if (materialSeleccionado18) {
            material18 = materialSeleccionado18;
        }

        cantidadPlacas18 = parseInt(placasInput18.value) || 0;
        precioTotal18 = (precioMaterial18 * cantidadPlacas18);

        precioElement18.innerHTML = "Valor por Display Informativo en " + material18 + ": $" + precioMaterial18 + "<br> <hr>" +
            "Total Sección: $" + precioTotal18 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement18.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 18-material-valor para ambos campos ocultos
        var materialValorInputs18 = document.querySelectorAll('input[name="18-material-valor"]');
        materialValorInputs18.forEach(function (materialValorInput18) {
            materialValorInput18.value = precioMaterial18;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion18(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios18.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio18);
    });

    instalacionRadios18.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio18);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput18.addEventListener("input", actualizarPrecio18);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio18();

    //--------------------------------------------------------------------------------//

    // 19 - Display Informativo - Formato Carta
    var precioTotal19 = 0;
    var cantidadPlacas19 = 0;
    var materialRadios19 = document.querySelectorAll('input[name="19-material"]');
    var instalacionRadios19 = document.querySelectorAll('input[name="19-instalar"]');
    var placasInput19 = document.getElementById("19-placas");
    var precioElement19 = document.getElementById("19-precio");
    var precioMaterial19 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales19 = {
        "Tela PVC": 48500
    };

    // Precios de instalación
    var preciosInstalacion19 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio19() {
        var materialSeleccionado19 = obtenerSeleccion19(materialRadios19);
        var instalacionSeleccionada19 = obtenerSeleccion19(instalacionRadios19);

        precioMaterial19 = preciosMateriales19[materialSeleccionado19] || 0;
        var precioInstalacion19 = preciosInstalacion19[instalacionSeleccionada19] || "";

        // Obtén el nombre del material seleccionado
        var material19 = "";
        if (materialSeleccionado19) {
            material19 = materialSeleccionado19;
        }

        cantidadPlacas19 = parseInt(placasInput19.value) || 0;
        precioTotal19 = (precioMaterial19 * cantidadPlacas19);

        precioElement19.innerHTML = "Valor por Señalética en " + material19 + ": $" + precioMaterial19 + "<br> <hr>" +
            "Total Sección: $" + precioTotal19 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement19.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 19-material-valor para ambos campos ocultos
        var materialValorInputs19 = document.querySelectorAll('input[name="19-material-valor"]');
        materialValorInputs19.forEach(function (materialValorInput19) {
            materialValorInput19.value = precioMaterial19;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion19(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios19.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio19);
    });

    instalacionRadios19.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio19);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput19.addEventListener("input", actualizarPrecio19);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio19();

    //--------------------------------------------------------------------------------//

    // 20 - Planos de Distribución y Seguridad
    var precioTotal20 = 0;
    var cantidadPlacas20 = 0;
    var materialRadios20 = document.querySelectorAll('input[name="20-material"]');
    var instalacionRadios20 = document.querySelectorAll('input[name="20-instalar"]');
    var placasInput20 = document.getElementById("20-placas");
    var precioElement20 = document.getElementById("20-precio");
    var precioMaterial20 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales20 = {
        "Acrílico": 398000,
        "Sintra PVC": 378000
    };

    // Precios de instalación
    var preciosInstalacion20 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio20() {
        var materialSeleccionado20 = obtenerSeleccion20(materialRadios20);
        var instalacionSeleccionada20 = obtenerSeleccion20(instalacionRadios20);

        precioMaterial20 = preciosMateriales20[materialSeleccionado20] || 0;
        var precioInstalacion20 = preciosInstalacion20[instalacionSeleccionada20] || "";

        // Obtén el nombre del material seleccionado
        var material20 = "";
        if (materialSeleccionado20) {
            material20 = materialSeleccionado20;
        }

        cantidadPlacas20 = parseInt(placasInput20.value) || 0;
        precioTotal20 = (precioMaterial20 * cantidadPlacas20);

        precioElement20.innerHTML = "Valor por Señalética en " + material20 + ": $" + precioMaterial20 + "<br> <hr>" +
            "Total Sección: $" + precioTotal20 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement20.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 20-material-valor para ambos campos ocultos
        var materialValorInputs20 = document.querySelectorAll('input[name="20-material-valor"]');
        materialValorInputs20.forEach(function(materialValorInput20) {
            materialValorInput20.value = precioMaterial20;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion20(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios20.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio20);
    });

    instalacionRadios20.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio20);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput20.addEventListener("input", actualizarPrecio20);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio20();

    //--------------------------------------------------------------------------------//

    // 21 - Planos de Zona de Seguridad
    var precioTotal21 = 0;
    var cantidadPlacas21 = 0;
    var materialRadios21 = document.querySelectorAll('input[name="21-material"]');
    var instalacionRadios21 = document.querySelectorAll('input[name="21-instalar"]');
    var placasInput21 = document.getElementById("21-placas");
    var precioElement21 = document.getElementById("21-precio");
    var precioMaterial21 = 0; // Valor por defecto para el material

    // Precios de los materiales
    var preciosMateriales21 = {
        "Acrílico": 88500,
        "Sintra Pvc": 68500
    };

    // Precios de instalación
    var preciosInstalacion21 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio21() {
        var materialSeleccionado21 = obtenerSeleccion21(materialRadios21);
        var instalacionSeleccionada21 = obtenerSeleccion21(instalacionRadios21);

        precioMaterial21 = preciosMateriales21[materialSeleccionado21] || 0;
        var precioInstalacion21 = preciosInstalacion21[instalacionSeleccionada21] || "";

        // Obtén el nombre del material seleccionado
        var material21 = "";
        if (materialSeleccionado21) {
            material21 = materialSeleccionado21;
        }

        cantidadPlacas21 = parseInt(placasInput21.value) || 0;
        precioTotal21 = (precioMaterial21 * cantidadPlacas21);

        precioElement21.innerHTML = "Valor por Señalética en " + material21 + ": $" + precioMaterial21 + "<br> <hr>" +
            "Total Sección: $" + precioTotal21 + " (IVA Incluido)";

        // Alínea el texto a la derecha
        precioElement21.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 21-material-valor para ambos campos ocultos
        var materialValorInputs21 = document.querySelectorAll('input[name="21-material-valor"]');
        materialValorInputs21.forEach(function(materialValorInput21) {
            materialValorInput21.value = precioMaterial21;
        });

        // Llama a la función para actualizar el precio total global
        actualizarPrecioTotalGlobal();
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion21(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios21.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio21);
    });

    instalacionRadios21.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio21);
    });

    // Agrega eventos de cambio a los campos de entrada de placas
    placasInput21.addEventListener("input", actualizarPrecio21);

    // Llama a la función para calcular el precio inicial
    actualizarPrecio21();

    //--------------------------------------------------------------------------------//

    // Función para actualizar el precio total global y mostrarlo en "valorTotal"
    function actualizarPrecioTotalGlobal() {
        
        // Suma las placas totales de las secciones
        var placasTotalGlobal = cantidadPlacas1 + cantidadPlacas2 + cantidadPlacas3 + cantidadPlacas4 + cantidadPlacas5 + cantidadPlacas6 + cantidadPlacas7 + cantidadPlacas8 + cantidadPlacas9 + cantidadPlacas10 + cantidadPlacas11 + cantidadPlacas12 + cantidadPlacas13 + cantidadPlacas14 + cantidadPlacas15 + cantidadPlacas16 + cantidadPlacas17 + cantidadPlacas18 + cantidadPlacas19 + cantidadPlacas20 + cantidadPlacas21;

        // Suma los postes totales de las secciones
        var postesTotalGlobal = cantidadPostes14 + cantidadPostes15 + cantidadPostes16 + cantidadPostes17;

        // Suma los precios totales de las secciones
        var precioTotalGlobal = precioTotal1 + precioTotal2 + precioTotal3 + precioTotal4 + precioTotal5 + precioTotal6 + precioTotal7 + precioTotal8 + precioTotal9 + precioTotal10 + precioTotal11 + precioTotal12 + precioTotal13 + precioTotal14 + precioTotal15 + precioTotal16 + precioTotal17 + precioTotal18 + precioTotal19 + precioTotal20 + precioTotal21;

        // Actualiza el elemento HTML global "cantidadPlacas"
        var valorTotalElement = document.getElementById("cantidadPlacas");
        valorTotalElement.innerHTML = "<h3>" + placasTotalGlobal + " </h3><h5>AGREGADAS</h5>";

        // Actualiza el elemento HTML global ""
        var valorTotalElement = document.getElementById("cantidadPostes");
        valorTotalElement.innerHTML = "<h3>" + postesTotalGlobal + " </h3><h5>AGREGADOS</h5>";
        
        // Actualiza el elemento HTML global "valorTotal"
        var valorTotalElement = document.getElementById("valorTotal");
        valorTotalElement.innerHTML = "<h3>$" + precioTotalGlobal + "</h3><h5>PRECIO IVA INCLUIDO</h5>";


        //console.log("TOTAL PLACAS: "+placasTotalGlobal);
        //console.log("TOTAL POSTES: "+postesTotalGlobal);
        //console.log("TOTAL PRECIOS: $"+precioTotalGlobal);
        
    }


    



});

