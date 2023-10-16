document.addEventListener("DOMContentLoaded", function () {
    // 1 - Señalética de Normas del Condominio Portón Ingreso    
    var materialRadios1 = document.querySelectorAll('input[name="1-material"]');
    var instalacionRadios1 = document.querySelectorAll('input[name="1-instalar"]');
    var precioElement1 = document.getElementById("1-precio");

    // Precios de los materiales
    var preciosMateriales1 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 22222
    };

    // Precios de instalación
    var preciosInstalacion1 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio1() {
        var materialSeleccionado1 = obtenerSeleccion1(materialRadios1);
        var instalacionSeleccionada1 = obtenerSeleccion1(instalacionRadios1);
        
        var precioMaterial1 = preciosMateriales1[materialSeleccionado1] || 0;
        var precioInstalacion1 = preciosInstalacion1[instalacionSeleccionada1] || "";
        
        var precioTotal1 = precioMaterial1;
        if (precioInstalacion1 !== "") {
            precioTotal1 += " c/u " + precioInstalacion1;
        }
        
        precioElement1.innerHTML = "Valor por Señalética $" + precioTotal1 + "(IVA Incluido)";
        
        // Actualiza el valor del atributo 'value' de 1-material-valor para ambos campos ocultos
        var materialValorInputs1 = document.querySelectorAll('input[name="1-material-valor"]');
        materialValorInputs1.forEach(function(materialValorInput1) {
            materialValorInput1.value = precioMaterial1;
        });
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
    materialRadios1.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio1);
    });

    instalacionRadios1.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio1);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio1();

    //--------------------------------------------------------------------------------//

    // 2 - Señalética de Uso Correcto de Shaft de Basura  
    var materialRadios2 = document.querySelectorAll('input[name="2-material"]');
    var instalacionRadios2 = document.querySelectorAll('input[name="2-instalar"]');
    var precioElement2 = document.getElementById("2-precio");

    // Precios de los materiales para SINTRA PVC
    var preciosMateriales2 = {
        "Sintra PVC": 8950
    };

    // Precios de instalación
    var preciosInstalacion2 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio2() {
        var materialSeleccionado2 = obtenerSeleccion2(materialRadios2);
        var instalacionSeleccionada2 = obtenerSeleccion2(instalacionRadios2);
        
        var precioMaterial2 = preciosMateriales2[materialSeleccionado2] || 0;
        var precioInstalacion2 = preciosInstalacion2[instalacionSeleccionada2] || "";
        
        var precioTotal2 = precioMaterial2;
        if (precioInstalacion2 !== "") {
            precioTotal2 += " c/u " + precioInstalacion2;
        }
        
        precioElement2.innerHTML = "Valor por Señalética $" + precioTotal2 + "(IVA Incluido)";
        
        // Actualiza el valor del campo oculto '2-material-valor' específicamente para SINTRA PVC
        if (materialSeleccionado2 === "Sintra PVC") {
            var materialValorInput2 = document.querySelector('input[name="2-material-valor"]');
            materialValorInput2.value = precioMaterial2;
        }
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
    materialRadios2.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio2);
    });

    instalacionRadios2.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio2);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio2();

    //--------------------------------------------------------------------------------//

    // 3 - Señalética de Reglamento Tenencia Responsable de Mascotas
    var medidasRadios3 = document.querySelectorAll('input[name="3-medidas"]');
    var instalacionRadios3 = document.querySelectorAll('input[name="3-instalar"]');
    var precioElement3 = document.getElementById("3-precio");

    // Precios de las medidas
    var preciosMedidas3 = {
        "20cm X 30cm": 8950,
        "40cm X 60cm": 18500
    };

    // Precios de instalación
    var preciosInstalacion3 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio3() {
        var medidaSeleccionada3 = obtenerSeleccion3(medidasRadios3);
        var instalacionSeleccionada3 = obtenerSeleccion3(instalacionRadios3);
        
        var precioMedida3 = preciosMedidas3[medidaSeleccionada3] || 0;
        var precioInstalacion3 = preciosInstalacion3[instalacionSeleccionada3] || "";
        
        var precioTotal3 = precioMedida3;
        if (precioInstalacion3 !== "") {
            precioTotal3 += " c/u " + precioInstalacion3;
        }
        
        precioElement3.innerHTML = "Valor por Señalética $" + precioTotal3 + "(IVA Incluido)";
        
        // Actualiza el valor del atributo 'value' de 3-medidas-valor para ambos campos ocultos
        var medidaValorInputs3 = document.querySelectorAll('input[name="3-medidas-valor"]');
        medidaValorInputs3.forEach(function(medidaValorInput3) {
            medidaValorInput3.value = precioMedida3;
        });
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
    medidasRadios3.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio3);
    });

    instalacionRadios3.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio3);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio3();

    //--------------------------------------------------------------------------------//

    // 4 - Sticker para Vehículos de Residentes
    var medidasRadios4 = document.querySelectorAll('input[name="4-medidas"]');
    var instalacionRadios4 = document.querySelectorAll('input[name="4-instalar"]');
    var precioElement4 = document.getElementById("4-precio");

    // Precios de las medidas para 6cm X 6cm
    var preciosMedidas4 = {
        "6cm X 6cm": 750,
        "Otra Medida": 0  // Agrega otras medidas y sus precios aquí
    };

    // Precios de instalación
    var preciosInstalacion4 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio4() {
        var medidaSeleccionada4 = obtenerSeleccion4(medidasRadios4);
        var instalacionSeleccionada4 = obtenerSeleccion4(instalacionRadios4);
        
        var precioMedida4 = preciosMedidas4[medidaSeleccionada4] || 0;
        var precioInstalacion4 = preciosInstalacion4[instalacionSeleccionada4] || "";
        
        var precioTotal4 = precioMedida4;
        if (precioInstalacion4 !== "") {
            precioTotal4 += " c/u " + precioInstalacion4;
        }
        
        precioElement4.innerHTML = "Valor por Señalética $" + precioTotal4 + "(IVA Incluido)";
        
        // Actualiza el valor del campo oculto '4-medidas-valor' específicamente para 6cm X 6cm
        if (medidaSeleccionada4 === "6cm X 6cm") {
            var medidaValorInput4 = document.querySelector('input[name="4-medidas-valor"]');
            medidaValorInput4.value = precioMedida4;
        }
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
    medidasRadios4.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio4);
    });

    instalacionRadios4.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio4);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio4();

    //--------------------------------------------------------------------------------//

    // 5 - Señalética de Conserje en Ronda
    var medidasRadios5 = document.querySelectorAll('input[name="5-medidas"]');
    var instalacionRadios5 = document.querySelectorAll('input[name="5-instalar"]');
    var precioElement5 = document.getElementById("5-precio");

    // Precios de las medidas para 6cm X 6cm
    var preciosMedidas5 = {
        "30cm X 20cm": 9850,
        "Otra Medida": 0  // Agrega otras medidas y sus precios aquí
    };

    // Precios de instalación
    var preciosInstalacion5 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio5() {
        var medidaSeleccionada5 = obtenerSeleccion5(medidasRadios5);
        var instalacionSeleccionada5 = obtenerSeleccion5(instalacionRadios5);
        
        var precioMedida5 = preciosMedidas5[medidaSeleccionada5] || 0;
        var precioInstalacion5 = preciosInstalacion5[instalacionSeleccionada5] || "";
        
        var precioTotal5 = precioMedida5;
        if (precioInstalacion5 !== "") {
            precioTotal5 += " c/u " + precioInstalacion5;
        }
        
        precioElement5.innerHTML = "Valor por Señalética $" + precioTotal5 + "(IVA Incluido)";
        
        // Actualiza el valor del campo oculto '5-medidas-valor' específicamente para 30cm X 20cm
        if (medidaSeleccionada5 === "30cm X 20cm") {
            var medidaValorInput5 = document.querySelector('input[name="5-medidas-valor"]');
            medidaValorInput5.value = precioMedida5;
        }
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
    medidasRadios5.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio5);
    });

    instalacionRadios5.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio5);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio5();

    //--------------------------------------------------------------------------------//

    // 6 - Señalética Normas del Condominio
    var materialRadios6 = document.querySelectorAll('input[name="6-material"]');
    var instalacionRadios6 = document.querySelectorAll('input[name="6-instalar"]');
    var placasInput6 = document.getElementById("6-placas");
    var precioElement6 = document.getElementById("6-precio");
    var precioMaterial6 = 0; // Valor por defecto para el material
    var precioPoste6 = 48000; // Valor por defecto para el poste (puedes cambiar este valor)

    // Precios de los materiales para la sección 6
    var preciosMateriales6 = {
        //"Aluminio Compuesto": 88500,
        "Sintra PVC": 68500
    };

    // Precios de instalación para la sección 6
    var preciosInstalacion6 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio para la sección 6
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

        var cantidadPlacas6 = parseInt(placasInput6.value) || 0;
        
        precioElement6.innerHTML = "Valor por Señalética en " + material6 + ": $" + precioMaterial6 + "<br>" +
            "Valor por Poste Metálico de 3 Mts: $" + precioPoste6 + "<br> <hr>" +
            "Total Sección: $" + ((precioMaterial6 * cantidadPlacas6) + (precioPoste6 * cantidadPostes6)) + " (IVA Incluido)<br>"+
            "No ";

        // Alínea el texto a la derecha
        precioElement6.style.textAlign = "right";

        // Actualiza el valor del atributo 'value' de 6-material-valor para ambos campos ocultos
        var materialValorInputs6 = document.querySelectorAll('input[name="6-material-valor"]');
        materialValorInputs6.forEach(function(materialValorInput6) {
            materialValorInput6.value = precioMaterial6;
        });
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

    // Agrega eventos de cambio a los grupos de radio buttons para la sección 6
    materialRadios6.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    instalacionRadios6.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    // Agrega eventos de cambio a los campos de entrada de placas para la sección 6
    placasInput6.addEventListener("input", actualizarPrecio6);

    // Llama a la función para calcular el precio inicial para la sección 6
    actualizarPrecio6();


    //--------------------------------------------------------------------------------//

    // 7 - Reglamento de Quincho
    var materialRadios7 = document.querySelectorAll('input[name="7-material"]');
    var instalacionRadios7 = document.querySelectorAll('input[name="7-instalar"]');
    var precioElement7 = document.getElementById("7-precio");

    // Precios de los materiales para SINTRA PVC
    var preciosMateriales7 = {
        "Sintra PVC": 18500
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
        
        var precioMaterial7 = preciosMateriales7[materialSeleccionado7] || 0;
        var precioInstalacion7 = preciosInstalacion7[instalacionSeleccionada7] || "";
        
        var precioTotal7 = precioMaterial7;
        if (precioInstalacion7 !== "") {
            precioTotal7 += " c/u " + precioInstalacion7;
        }
        
        precioElement7.innerHTML = "Valor por Señalética $" + precioTotal7 + "(IVA Incluido)";
        
        // Actualiza el valor del campo oculto '7-material-valor' específicamente para SINTRA PVC
        if (materialSeleccionado7 === "Sintra PVC") {
            var materialValorInput7 = document.querySelector('input[name="7-material-valor"]');
            materialValorInput7.value = precioMaterial7;
        }
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio7();

    //--------------------------------------------------------------------------------//

    // 8 - Reglamento de Piscina 
    var materialRadios8 = document.querySelectorAll('input[name="8-material"]');
    var instalacionRadios8 = document.querySelectorAll('input[name="8-instalar"]');
    var precioElement8 = document.getElementById("8-precio");

    // Precios de los materiales
    var preciosMateriales8 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 28500
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
        
        var precioMaterial8 = preciosMateriales8[materialSeleccionado8] || 0;
        var precioInstalacion8 = preciosInstalacion8[instalacionSeleccionada8] || "";
        
        var precioTotal8 = precioMaterial8;
        if (precioInstalacion8 !== "") {
            precioTotal8 += " c/u " + precioInstalacion8;
        }
        
        precioElement8.innerHTML = "Valor por Señalética $" + precioTotal8 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";
        
        // Actualiza el valor del atributo 'value' de 8-material-valor para ambos campos ocultos
        var materialValorInputs8 = document.querySelectorAll('input[name="8-material-valor"]');
        materialValorInputs8.forEach(function(materialValorInput8) {
            materialValorInput8.value = precioMaterial8;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio8();

    //--------------------------------------------------------------------------------//

    // 9 - Señalética de Normas del Condominio Portón Ingreso    
    var materialRadios9 = document.querySelectorAll('input[name="9-material"]');
    var instalacionRadios9 = document.querySelectorAll('input[name="9-instalar"]');
    var precioElement9 = document.getElementById("9-precio");

    // Precios de los materiales
    var preciosMateriales9 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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
        
        var precioMaterial9 = preciosMateriales9[materialSeleccionado9] || 0;
        var precioInstalacion9 = preciosInstalacion9[instalacionSeleccionada9] || "";
        
        var precioTotal9 = precioMaterial9;
        if (precioInstalacion9 !== "") {
            precioTotal9 += " c/u " + precioInstalacion9;
        }
        
        precioElement9.innerHTML = "Valor por Señalética $" + precioTotal9 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";
        
        // Actualiza el valor del atributo 'value' de 9-material-valor para ambos campos ocultos
        var materialValorInputs9 = document.querySelectorAll('input[name="9-material-valor"]');
        materialValorInputs9.forEach(function(materialValorInput9) {
            materialValorInput9.value = precioMaterial9;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio9();

    //--------------------------------------------------------------------------------//

    // 10 - Señalética de Normas del Condominio Portón Ingreso    
    var materialRadios10 = document.querySelectorAll('input[name="10-material"]');
    var instalacionRadios10 = document.querySelectorAll('input[name="10-instalar"]');
    var precioElement10 = document.getElementById("10-precio");

    // Precios de los materiales
    var preciosMateriales10 = {
        "Aluminio Compuesto": 8950,
        "Sintra PVC": 6900
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
        
        var precioMaterial10 = preciosMateriales10[materialSeleccionado10] || 0;
        var precioInstalacion10 = preciosInstalacion10[instalacionSeleccionada10] || "";
        
        var precioTotal10 = precioMaterial10;
        if (precioInstalacion10 !== "") {
            precioTotal10 += " c/u " + precioInstalacion10;
        }
        
        precioElement10.innerHTML = "Valor por Señalética $" + precioTotal10 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";
        
        // Actualiza el valor del atributo 'value' de 10-material-valor para ambos campos ocultos
        var materialValorInputs10 = document.querySelectorAll('input[name="10-material-valor"]');
        materialValorInputs10.forEach(function(materialValorInput10) {
            materialValorInput10.value = precioMaterial10;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio10();

    //--------------------------------------------------------------------------------//

    // 11 - No Jugar a la Pelota
    var materialRadios11 = document.querySelectorAll('input[name="11-material"]');
    var instalacionRadios11 = document.querySelectorAll('input[name="11-instalar"]');
    var precioElement11 = document.getElementById("11-precio");

    // Precios de los materiales
    var preciosMateriales11 = {
        "Aluminio Compuesto": 8950,
        "Sintra PVC": 6900
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

        var precioMaterial11 = preciosMateriales11[materialSeleccionado11] || 0;
        var precioInstalacion11 = preciosInstalacion11[instalacionSeleccionada11] || "";

        var precioTotal11 = precioMaterial11;
        if (precioInstalacion11 !== "") {
            precioTotal11 += " c/u " + precioInstalacion11;
        }

        precioElement11.innerHTML = "Valor por Señalética $" + precioTotal11 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 11-material-valor para ambos campos ocultos
        var materialValorInputs11 = document.querySelectorAll('input[name="11-material-valor"]');
        materialValorInputs11.forEach(function (materialValorInput11) {
            materialValorInput11.value = precioMaterial11;
        });
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
    materialRadios11.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio11);
    });

    instalacionRadios11.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio11);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio11();

    //--------------------------------------------------------------------------------//

    // 12 - Sector de Área de Juego
    var materialRadios12 = document.querySelectorAll('input[name="12-material"]');
    var instalacionRadios12 = document.querySelectorAll('input[name="12-instalar"]');
    var precioElement12 = document.getElementById("12-precio");

    // Precios de los materiales
    var preciosMateriales12 = {
        "Aluminio Compuesto": 48500,
        "Sintra PVC": 38500
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

        var precioMaterial12 = preciosMateriales12[materialSeleccionado12] || 0;
        var precioInstalacion12 = preciosInstalacion12[instalacionSeleccionada12] || "";

        var precioTotal12 = precioMaterial12;
        if (precioInstalacion12 !== "") {
            precioTotal12 += " c/u " + precioInstalacion12;
        }

        precioElement12.innerHTML = "Valor por Señalética $" + precioTotal12 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 12-material-valor para ambos campos ocultos
        var materialValorInputs12 = document.querySelectorAll('input[name="12-material-valor"]');
        materialValorInputs12.forEach(function (materialValorInput12) {
            materialValorInput12.value = precioMaterial12;
        });
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
    materialRadios12.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio12);
    });

    instalacionRadios12.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio12);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio12();

    //--------------------------------------------------------------------------------//

    // 13 - Zona de Reciclaje / Punto Limpio
    var materialRadios13 = document.querySelectorAll('input[name="13-material"]');
    var instalacionRadios13 = document.querySelectorAll('input[name="13-instalar"]');
    var precioElement13 = document.getElementById("13-precio");

    // Precios de los materiales
    var preciosMateriales13 = {
        "Aluminio Compuesto": 48500,
        "Sintra PVC": 38500
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

        var precioMaterial13 = preciosMateriales13[materialSeleccionado13] || 0;
        var precioInstalacion13 = preciosInstalacion13[instalacionSeleccionada13] || "";

        var precioTotal13 = precioMaterial13;
        if (precioInstalacion13 !== "") {
            precioTotal13 += " c/u " + precioInstalacion13;
        }

        precioElement13.innerHTML = "Valor por Señalética $" + precioTotal13 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 13-material-valor para ambos campos ocultos
        var materialValorInputs13 = document.querySelectorAll('input[name="13-material-valor"]');
        materialValorInputs13.forEach(function (materialValorInput13) {
            materialValorInput13.value = precioMaterial13;
        });
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
    materialRadios13.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio13);
    });

    instalacionRadios13.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio13);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio13();

    //--------------------------------------------------------------------------------//

    // 14 - Estacionamiento de Visitas
    var materialRadios14 = document.querySelectorAll('input[name="14-material"]');
    var instalacionRadios14 = document.querySelectorAll('input[name="14-instalar"]');
    var precioElement14 = document.getElementById("14-precio");

    // Precios de los materiales
    var preciosMateriales14 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial14 = preciosMateriales14[materialSeleccionado14] || 0;
        var precioInstalacion14 = preciosInstalacion14[instalacionSeleccionada14] || "";

        var precioTotal14 = precioMaterial14;
        if (precioInstalacion14 !== "") {
            precioTotal14 += " c/u " + precioInstalacion14;
        }

        precioElement14.innerHTML = "Valor por Señalética $" + precioTotal14 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 14-material-valor para ambos campos ocultos
        var materialValorInputs14 = document.querySelectorAll('input[name="14-material-valor"]');
        materialValorInputs14.forEach(function (materialValorInput14) {
            materialValorInput14.value = precioMaterial14;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio14();

    //--------------------------------------------------------------------------------//

    // 15 - Estacionamiento de Residentes
    var materialRadios15 = document.querySelectorAll('input[name="15-material"]');
    var instalacionRadios15 = document.querySelectorAll('input[name="15-instalar"]');
    var precioElement15 = document.getElementById("15-precio");

    // Precios de los materiales
    var preciosMateriales15 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial15 = preciosMateriales15[materialSeleccionado15] || 0;
        var precioInstalacion15 = preciosInstalacion15[instalacionSeleccionada15] || "";

        var precioTotal15 = precioMaterial15;
        if (precioInstalacion15 !== "") {
            precioTotal15 += " c/u " + precioInstalacion15;
        }

        precioElement15.innerHTML = "Valor por Señalética $" + precioTotal15 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 15-material-valor para ambos campos ocultos
        var materialValorInputs15 = document.querySelectorAll('input[name="15-material-valor"]');
        materialValorInputs15.forEach(function (materialValorInput15) {
            materialValorInput15.value = precioMaterial15;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio15();

    //--------------------------------------------------------------------------------//

    // 16 - Estacionamiento de Motos
    var materialRadios16 = document.querySelectorAll('input[name="16-material"]');
    var instalacionRadios16 = document.querySelectorAll('input[name="16-instalar"]');
    var precioElement16 = document.getElementById("16-precio");

    // Precios de los materiales
    var preciosMateriales16 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial16 = preciosMateriales16[materialSeleccionado16] || 0;
        var precioInstalacion16 = preciosInstalacion16[instalacionSeleccionada16] || "";

        var precioTotal16 = precioMaterial16;
        if (precioInstalacion16 !== "") {
            precioTotal16 += " c/u " + precioInstalacion16;
        }

        precioElement16.innerHTML = "Valor por Señalética $" + precioTotal16 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 16-material-valor para ambos campos ocultos
        var materialValorInputs16 = document.querySelectorAll('input[name="16-material-valor"]');
        materialValorInputs16.forEach(function (materialValorInput16) {
            materialValorInput16.value = precioMaterial16;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio16();

    //--------------------------------------------------------------------------------//

    // 17 - Estacionamiento de Discapacitados
    var materialRadios17 = document.querySelectorAll('input[name="17-material"]');
    var instalacionRadios17 = document.querySelectorAll('input[name="17-instalar"]');
    var precioElement17 = document.getElementById("17-precio");

    // Precios de los materiales
    var preciosMateriales17 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial17 = preciosMateriales17[materialSeleccionado17] || 0;
        var precioInstalacion17 = preciosInstalacion17[instalacionSeleccionada17] || "";

        var precioTotal17 = precioMaterial17;
        if (precioInstalacion17 !== "") {
            precioTotal17 += " c/u " + precioInstalacion17;
        }

        precioElement17.innerHTML = "Valor por Señalética $" + precioTotal17 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 17-material-valor para ambos campos ocultos
        var materialValorInputs17 = document.querySelectorAll('input[name="17-material-valor"]');
        materialValorInputs17.forEach(function (materialValorInput17) {
            materialValorInput17.value = precioMaterial17;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio17();

    //--------------------------------------------------------------------------------//

    // 18 - No Estacionar
    var materialRadios18 = document.querySelectorAll('input[name="18-material"]');
    var instalacionRadios18 = document.querySelectorAll('input[name="18-instalar"]');
    var precioElement18 = document.getElementById("18-precio");

    // Precios de los materiales
    var preciosMateriales18 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial18 = preciosMateriales18[materialSeleccionado18] || 0;
        var precioInstalacion18 = preciosInstalacion18[instalacionSeleccionada18] || "";

        var precioTotal18 = precioMaterial18;
        if (precioInstalacion18 !== "") {
            precioTotal18 += " c/u " + precioInstalacion18;
        }

        precioElement18.innerHTML = "Valor por Señalética $" + precioTotal18 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 18-material-valor para ambos campos ocultos
        var materialValorInputs18 = document.querySelectorAll('input[name="18-material-valor"]');
        materialValorInputs18.forEach(function (materialValorInput18) {
            materialValorInput18.value = precioMaterial18;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio18();

    //--------------------------------------------------------------------------------//

    // 19 - Velocidad Máxima
    var materialRadios19 = document.querySelectorAll('input[name="19-material"]');
    var instalacionRadios19 = document.querySelectorAll('input[name="19-instalar"]');
    var precioElement19 = document.getElementById("19-precio");

    // Precios de los materiales
    var preciosMateriales19 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial19 = preciosMateriales19[materialSeleccionado19] || 0;
        var precioInstalacion19 = preciosInstalacion19[instalacionSeleccionada19] || "";

        var precioTotal19 = precioMaterial19;
        if (precioInstalacion19 !== "") {
            precioTotal19 += " c/u " + precioInstalacion19;
        }

        precioElement19.innerHTML = "Valor por Señalética $" + precioTotal19 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 19-material-valor para ambos campos ocultos
        var materialValorInputs19 = document.querySelectorAll('input[name="19-material-valor"]');
        materialValorInputs19.forEach(function (materialValorInput19) {
            materialValorInput19.value = precioMaterial19;
        });
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

    // Llama a la función para calcular el precio inicial
    actualizarPrecio19();

    //--------------------------------------------------------------------------------//

    // 20 - Zona Segura
    var materialRadios20 = document.querySelectorAll('input[name="20-material"]');
    var instalacionRadios20 = document.querySelectorAll('input[name="20-instalar"]');
    var precioElement20 = document.getElementById("20-precio");

    // Precios de los materiales
    var preciosMateriales20 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 28500
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

        var precioMaterial20 = preciosMateriales20[materialSeleccionado20] || 0;
        var precioInstalacion20 = preciosInstalacion20[instalacionSeleccionada20] || "";

        var precioTotal20 = precioMaterial20;
        if (precioInstalacion20 !== "") {
            precioTotal20 += " c/u " + precioInstalacion20;
        }

        precioElement20.innerHTML = "Valor por Señalética $" + precioTotal20 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 20-material-valor para ambos campos ocultos
        var materialValorInputs20 = document.querySelectorAll('input[name="20-material-valor"]');
        materialValorInputs20.forEach(function (materialValorInput20) {
            materialValorInput20.value = precioMaterial20;
        });
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
    materialRadios20.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio20);
    });

    instalacionRadios20.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio20);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio20();

    //--------------------------------------------------------------------------------//

    // 21 - Vías de Evacuación
    var materialRadios21 = document.querySelectorAll('input[name="21-material"]');
    var instalacionRadios21 = document.querySelectorAll('input[name="21-instalar"]');
    var precioElement21 = document.getElementById("21-precio");

    // Precios de los materiales
    var preciosMateriales21 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
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

        var precioMaterial21 = preciosMateriales21[materialSeleccionado21] || 0;
        var precioInstalacion21 = preciosInstalacion21[instalacionSeleccionada21] || "";

        var precioTotal21 = precioMaterial21;
        if (precioInstalacion21 !== "") {
            precioTotal21 += " c/u " + precioInstalacion21;
        }

        precioElement21.innerHTML = "Valor por Señalética $" + precioTotal21 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 21-material-valor para ambos campos ocultos
        var materialValorInputs21 = document.querySelectorAll('input[name="21-material-valor"]');
        materialValorInputs21.forEach(function (materialValorInput21) {
            materialValorInput21.value = precioMaterial21;
        });
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
    materialRadios21.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio21);
    });

    instalacionRadios21.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio21);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio21();

    //--------------------------------------------------------------------------------//

    // 22 - Salida de Emergencia
    var materialRadios22 = document.querySelectorAll('input[name="22-material"]');
    var instalacionRadios22 = document.querySelectorAll('input[name="22-instalar"]');
    var precioElement22 = document.getElementById("22-precio");

    // Precios de los materiales
    var preciosMateriales22 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
    };

    // Precios de instalación
    var preciosInstalacion22 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio22() {
        var materialSeleccionado22 = obtenerSeleccion22(materialRadios22);
        var instalacionSeleccionada22 = obtenerSeleccion22(instalacionRadios22);

        var precioMaterial22 = preciosMateriales22[materialSeleccionado22] || 0;
        var precioInstalacion22 = preciosInstalacion22[instalacionSeleccionada22] || "";

        var precioTotal22 = precioMaterial22;
        if (precioInstalacion22 !== "") {
            precioTotal22 += " c/u " + precioInstalacion22;
        }

        precioElement22.innerHTML = "Valor por Señalética $" + precioTotal22 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 22-material-valor para ambos campos ocultos
        var materialValorInputs22 = document.querySelectorAll('input[name="22-material-valor"]');
        materialValorInputs22.forEach(function (materialValorInput22) {
            materialValorInput22.value = precioMaterial22;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion22(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios22.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio22);
    });

    instalacionRadios22.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio22);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio22();

    //--------------------------------------------------------------------------------//

    // 23 - Extintor
    var materialRadios23 = document.querySelectorAll('input[name="23-material"]');
    var instalacionRadios23 = document.querySelectorAll('input[name="23-instalar"]');
    var precioElement23 = document.getElementById("23-precio");

    // Precios de los materiales
    var preciosMateriales23 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
    };

    // Precios de instalación
    var preciosInstalacion23 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio23() {
        var materialSeleccionado23 = obtenerSeleccion23(materialRadios23);
        var instalacionSeleccionada23 = obtenerSeleccion23(instalacionRadios23);

        var precioMaterial23 = preciosMateriales23[materialSeleccionado23] || 0;
        var precioInstalacion23 = preciosInstalacion23[instalacionSeleccionada23] || "";

        var precioTotal23 = precioMaterial23;
        if (precioInstalacion23 !== "") {
            precioTotal23 += " c/u " + precioInstalacion23;
        }

        precioElement23.innerHTML = "Valor por Señalética $" + precioTotal23 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 23-material-valor para ambos campos ocultos
        var materialValorInputs23 = document.querySelectorAll('input[name="23-material-valor"]');
        materialValorInputs23.forEach(function (materialValorInput23) {
            materialValorInput23.value = precioMaterial23;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion23(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios23.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio23);
    });

    instalacionRadios23.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio23);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio23();

    //--------------------------------------------------------------------------------//

    // 24 - Red Húmeda
    var materialRadios24 = document.querySelectorAll('input[name="24-material"]');
    var instalacionRadios24 = document.querySelectorAll('input[name="24-instalar"]');
    var precioElement24 = document.getElementById("24-precio");

    // Precios de los materiales
    var preciosMateriales24 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
    };

    // Precios de instalación
    var preciosInstalacion24 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio24() {
        var materialSeleccionado24 = obtenerSeleccion24(materialRadios24);
        var instalacionSeleccionada24 = obtenerSeleccion24(instalacionRadios24);

        var precioMaterial24 = preciosMateriales24[materialSeleccionado24] || 0;
        var precioInstalacion24 = preciosInstalacion24[instalacionSeleccionada24] || "";

        var precioTotal24 = precioMaterial24;
        if (precioInstalacion24 !== "") {
            precioTotal24 += " c/u " + precioInstalacion24;
        }

        precioElement24.innerHTML = "Valor por Señalética $" + precioTotal24 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 24-material-valor para ambos campos ocultos
        var materialValorInputs24 = document.querySelectorAll('input[name="24-material-valor"]');
        materialValorInputs24.forEach(function (materialValorInput24) {
            materialValorInput24.value = precioMaterial24;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion24(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios24.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio24);
    });

    instalacionRadios24.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio24);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio24();

    //--------------------------------------------------------------------------------//

    // 25 - Red Seca SALIDA
    var materialRadios25 = document.querySelectorAll('input[name="25-material"]');
    var instalacionRadios25 = document.querySelectorAll('input[name="25-instalar"]');
    var precioElement25 = document.getElementById("25-precio");

    // Precios de los materiales
    var preciosMateriales25 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
    };

    // Precios de instalación
    var preciosInstalacion25 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio25() {
        var materialSeleccionado25 = obtenerSeleccion25(materialRadios25);
        var instalacionSeleccionada25 = obtenerSeleccion25(instalacionRadios25);

        var precioMaterial25 = preciosMateriales25[materialSeleccionado25] || 0;
        var precioInstalacion25 = preciosInstalacion25[instalacionSeleccionada25] || "";

        var precioTotal25 = precioMaterial25;
        if (precioInstalacion25 !== "") {
            precioTotal25 += " c/u " + precioInstalacion25;
        }

        precioElement25.innerHTML = "Valor por Señalética $" + precioTotal25 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 25-material-valor para ambos campos ocultos
        var materialValorInputs25 = document.querySelectorAll('input[name="25-material-valor"]');
        materialValorInputs25.forEach(function (materialValorInput25) {
            materialValorInput25.value = precioMaterial25;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion25(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios25.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio25);
    });

    instalacionRadios25.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio25);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio25();

    //--------------------------------------------------------------------------------//

    // 26 - Red Inerte
    var materialRadios26 = document.querySelectorAll('input[name="26-material"]');
    var instalacionRadios26 = document.querySelectorAll('input[name="26-instalar"]');
    var precioElement26 = document.getElementById("26-precio");

    // Precios de los materiales
    var preciosMateriales26 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
    };

    // Precios de instalación
    var preciosInstalacion26 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio26() {
        var materialSeleccionado26 = obtenerSeleccion26(materialRadios26);
        var instalacionSeleccionada26 = obtenerSeleccion26(instalacionRadios26);

        var precioMaterial26 = preciosMateriales26[materialSeleccionado26] || 0;
        var precioInstalacion26 = preciosInstalacion26[instalacionSeleccionada26] || "";

        var precioTotal26 = precioMaterial26;
        if (precioInstalacion26 !== "") {
            precioTotal26 += " c/u " + precioInstalacion26;
        }

        precioElement26.innerHTML = "Valor por Señalética $" + precioTotal26 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 26-material-valor para ambos campos ocultos
        var materialValorInputs26 = document.querySelectorAll('input[name="26-material-valor"]');
        materialValorInputs26.forEach(function (materialValorInput26) {
            materialValorInput26.value = precioMaterial26;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion26(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios26.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio26);
    });

    instalacionRadios26.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio26);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio26();

    //--------------------------------------------------------------------------------//

    // 27 - PELIGRO Red de Gas
    var materialRadios27 = document.querySelectorAll('input[name="27-material"]');
    var instalacionRadios27 = document.querySelectorAll('input[name="27-instalar"]');
    var precioElement27 = document.getElementById("27-precio");

    // Precios de los materiales
    var preciosMateriales27 = {
        "Aluminio Compuesto": 1111,
        "Sintra PVC": 6850
    };

    // Precios de instalación
    var preciosInstalacion27 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio
    function actualizarPrecio27() {
        var materialSeleccionado27 = obtenerSeleccion27(materialRadios27);
        var instalacionSeleccionada27 = obtenerSeleccion27(instalacionRadios27);

        var precioMaterial27 = preciosMateriales27[materialSeleccionado27] || 0;
        var precioInstalacion27 = preciosInstalacion27[instalacionSeleccionada27] || "";

        var precioTotal27 = precioMaterial27;
        if (precioInstalacion27 !== "") {
            precioTotal27 += " c/u " + precioInstalacion27;
        }

        precioElement27.innerHTML = "Valor por Señalética $" + precioTotal27 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 27-material-valor para ambos campos ocultos
        var materialValorInputs27 = document.querySelectorAll('input[name="27-material-valor"]');
        materialValorInputs27.forEach(function (materialValorInput27) {
            materialValorInput27.value = precioMaterial27;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion27(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons
    materialRadios27.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio27);
    });

    instalacionRadios27.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio27);
    });

    // Llama a la función para calcular el precio inicial
    actualizarPrecio27();

    //--------------------------------------------------------------------------------//

    // 28 - Señaletica Pare - REFLECTANTE
    var materialRadios28 = document.querySelectorAll('input[name="28-material"]');
    var instalacionRadios28 = document.querySelectorAll('input[name="28-instalar"]');
    var precioElement28 = document.getElementById("28-precio");

    // Precios de los materiales para la señalética 28
    var preciosMateriales28 = {
        "Aluminio Compuesto": 38000,
        "Sintra PVC": 32500
    };

    // Precios de instalación para la señalética 28
    var preciosInstalacion28 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    // Función para calcular y actualizar el precio de la señalética 28
    function actualizarPrecio28() {
        var materialSeleccionado28 = obtenerSeleccion28(materialRadios28);
        var instalacionSeleccionada28 = obtenerSeleccion28(instalacionRadios28);

        var precioMaterial28 = preciosMateriales28[materialSeleccionado28] || 0;
        var precioInstalacion28 = preciosInstalacion28[instalacionSeleccionada28] || "";

        var precioTotal28 = precioMaterial28;
        if (precioInstalacion28 !== "") {
            precioTotal28 += " c/u " + precioInstalacion28;
        }

        precioElement28.innerHTML = "Valor por Señalética $" + precioTotal28 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

        // Actualiza el valor del atributo 'value' de 28-material-valor para ambos campos ocultos
        var materialValorInputs28 = document.querySelectorAll('input[name="28-material-valor"]');
        materialValorInputs28.forEach(function (materialValorInput28) {
            materialValorInput28.value = precioMaterial28;
        });
    }

    // Función para obtener la opción seleccionada de un grupo de radio buttons
    function obtenerSeleccion28(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    // Agrega eventos de cambio a los grupos de radio buttons para la señalética 28
    materialRadios28.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio28);
    });

    instalacionRadios28.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio28);
    });

    // Llama a la función para calcular el precio inicial de la señalética 28
    actualizarPrecio28();

    //--------------------------------------------------------------------------------//

// 29 - Señalética de Uso Correcto de Shaft de Basura
var materialRadios29 = document.querySelectorAll('input[name="29-material"]');
var instalacionRadios29 = document.querySelectorAll('input[name="29-instalar"]');
var precioElement29 = document.getElementById("29-precio");

// Precios de los materiales para Acrílico
var preciosMateriales29 = {
    "Acrílico": 11111
};

// Precios de instalación para la señalética 29
var preciosInstalacion29 = {
    "Con Instalación": "(MÁS INSTALACIÓN)",
    "Sin Instalación": "(SIN INSTALACIÓN)",
    "Solo Entrega": "(SOLO ENTREGA)"
};

// Función para calcular y actualizar el precio
function actualizarPrecio29() {
    var materialSeleccionado29 = obtenerSeleccion29(materialRadios29);
    var instalacionSeleccionada29 = obtenerSeleccion29(instalacionRadios29);

    var precioMaterial29 = preciosMateriales29[materialSeleccionado29] || 0;
    var precioInstalacion29 = preciosInstalacion29[instalacionSeleccionada29] || "";

    var precioTotal29 = precioMaterial29;
    if (precioInstalacion29 !== "") {
        precioTotal29 += " c/u " + precioInstalacion29;
    }

    precioElement29.innerHTML = "Valor por Señalética $" + precioTotal29 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

    // Actualiza el valor del campo oculto '29-material-valor' específicamente para Acrílico
    if (materialSeleccionado29 === "Acrílico") {
        var materialValorInput29 = document.querySelector('input[name="29-material-valor"]');
        materialValorInput29.value = precioMaterial29;
    }
}

// Función para obtener la opción seleccionada de un grupo de radio buttons
function obtenerSeleccion29(radios) {
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return radios[i].value;
        }
    }
    return "";
}

// Agrega eventos de cambio a los grupos de radio buttons
materialRadios29.forEach(function(radio) {
    radio.addEventListener("change", actualizarPrecio29);
});

instalacionRadios29.forEach(function(radio) {
    radio.addEventListener("change", actualizarPrecio29);
});

// Llama a la función para calcular el precio inicial
actualizarPrecio29();

//--------------------------------------------------------------------------------//

// 30 - Planos de Distribución y Seguridad
var materialRadios30 = document.querySelectorAll('input[name="30-material"]');
var instalacionRadios30 = document.querySelectorAll('input[name="30-instalar"]');
var precioElement30 = document.getElementById("30-precio");

// Precios de los materiales para la señalética 30
var preciosMateriales30 = {    
    "Acrílico": 11111,
    "Aluminio Compuesto": 22222
};

// Precios de instalación para la señalética 30
var preciosInstalacion30 = {
    "Con Instalación": "(MÁS INSTALACIÓN)",
    "Sin Instalación": "(SIN INSTALACIÓN)",
    "Solo Entrega": "(SOLO ENTREGA)"
};

// Función para calcular y actualizar el precio de la señalética 30
function actualizarPrecio30() {
    var materialSeleccionado30 = obtenerSeleccion30(materialRadios30);
    var instalacionSeleccionada30 = obtenerSeleccion30(instalacionRadios30);

    var precioMaterial30 = preciosMateriales30[materialSeleccionado30] || 0;
    var precioInstalacion30 = preciosInstalacion30[instalacionSeleccionada30] || "";

    var precioTotal30 = precioMaterial30;
    if (precioInstalacion30 !== "") {
        precioTotal30 += " c/u " + precioInstalacion30;
    }

    precioElement30.innerHTML = "Valor por Señalética $" + precioTotal30 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

    // Actualiza el valor del atributo 'value' de 30-material-valor para ambos campos ocultos
    var materialValorInputs30 = document.querySelectorAll('input[name="30-material-valor"]');
    materialValorInputs30.forEach(function (materialValorInput30) {
        materialValorInput30.value = precioMaterial30;
    });
}

// Función para obtener la opción seleccionada de un grupo de radio buttons
function obtenerSeleccion30(radios) {
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return radios[i].value;
        }
    }
    return "";
}

// Agrega eventos de cambio a los grupos de radio buttons para la señalética 30
materialRadios30.forEach(function (radio) {
    radio.addEventListener("change", actualizarPrecio30);
});

instalacionRadios30.forEach(function (radio) {
    radio.addEventListener("change", actualizarPrecio30);
});

// Llama a la función para calcular el precio inicial de la señalética 30
actualizarPrecio30();

//--------------------------------------------------------------------------------//

// 31 - Planos de Distribución y Seguridad
var materialRadios31 = document.querySelectorAll('input[name="31-material"]');
var instalacionRadios31 = document.querySelectorAll('input[name="31-instalar"]');
var precioElement31 = document.getElementById("31-precio");

// Precios de los materiales para la señalética 31
var preciosMateriales31 = {    
    "Acrílico": 11111,
    "Aluminio Compuesto": 22222
};

// Precios de instalación para la señalética 31
var preciosInstalacion31 = {
    "Con Instalación": "(MÁS INSTALACIÓN)",
    "Sin Instalación": "(SIN INSTALACIÓN)",
    "Solo Entrega": "(SOLO ENTREGA)"
};

// Función para calcular y actualizar el precio de la señalética 31
function actualizarPrecio31() {
    var materialSeleccionado31 = obtenerSeleccion31(materialRadios31);
    var instalacionSeleccionada31 = obtenerSeleccion31(instalacionRadios31);

    var precioMaterial31 = preciosMateriales31[materialSeleccionado31] || 0;
    var precioInstalacion31 = preciosInstalacion31[instalacionSeleccionada31] || "";

    var precioTotal31 = precioMaterial31;
    if (precioInstalacion31 !== "") {
        precioTotal31 += " c/u " + precioInstalacion31;
    }

    precioElement31.innerHTML = "Valor por Señalética $" + precioTotal31 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

    // Actualiza el valor del atributo 'value' de 31-material-valor para ambos campos ocultos
    var materialValorInputs31 = document.querySelectorAll('input[name="31-material-valor"]');
    materialValorInputs31.forEach(function (materialValorInput31) {
        materialValorInput31.value = precioMaterial31;
    });
}

// Función para obtener la opción seleccionada de un grupo de radio buttons
function obtenerSeleccion31(radios) {
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return radios[i].value;
        }
    }
    return "";
}

// Agrega eventos de cambio a los grupos de radio buttons para la señalética 31
materialRadios31.forEach(function (radio) {
    radio.addEventListener("change", actualizarPrecio31);
});

instalacionRadios10.forEach(function (radio) {
    radio.addEventListener("change", actualizarPrecio31);
});

// Llama a la función para calcular el precio inicial de la señalética 31
actualizarPrecio31();

//--------------------------------------------------------------------------------//

// 32 - Señalética de Punto de Encuentro
var materialRadios32 = document.querySelectorAll('input[name="32-material"]');
var instalacionRadios32 = document.querySelectorAll('input[name="32-instalar"]');
var precioElement32 = document.getElementById("32-precio");

// Precios de los materiales para la señalética 32
var preciosMateriales32 = {    
    "Acrílico": 11111,
    "Aluminio Compuesto": 22222
};

// Precios de instalación para la señalética 32
var preciosInstalacion32 = {
    "Con Instalación": "(MÁS INSTALACIÓN)",
    "Sin Instalación": "(SIN INSTALACIÓN)",
    "Solo Entrega": "(SOLO ENTREGA)"
};

// Función para calcular y actualizar el precio de la señalética 32
function actualizarPrecio32() {
    var materialSeleccionado32 = obtenerSeleccion32(materialRadios32);
    var instalacionSeleccionada32 = obtenerSeleccion32(instalacionRadios32);

    var precioMaterial32 = preciosMateriales32[materialSeleccionado32] || 0;
    var precioInstalacion32 = preciosInstalacion32[instalacionSeleccionada32] || "";

    var precioTotal32 = precioMaterial32;
    if (precioInstalacion32 !== "") {
        precioTotal32 += " c/u " + precioInstalacion32;
    }

    precioElement32.innerHTML = "Valor por Señalética $" + precioTotal32 + "(IVA Incluido - NO INCLUYE VALOR POSTES)";

    // Actualiza el valor del atributo 'value' de 32-material-valor para ambos campos ocultos
    var materialValorInputs32 = document.querySelectorAll('input[name="32-material-valor"]');
    materialValorInputs32.forEach(function (materialValorInput32) {
        materialValorInput32.value = precioMaterial32;
    });
}

// Función para obtener la opción seleccionada de un grupo de radio buttons
function obtenerSeleccion32(radios) {
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return radios[i].value;
        }
    }
    return "";
}

// Agrega eventos de cambio a los grupos de radio buttons para la señalética 32
materialRadios32.forEach(function (radio) {
    radio.addEventListener("change", actualizarPrecio32);
});

instalacionRadios32.forEach(function (radio) {
    radio.addEventListener("change", actualizarPrecio32);
});

// Llama a la función para calcular el precio inicial de la señalética 32
actualizarPrecio32();

//--------------------------------------------------------------------------------//
//--------------------------------------------------------------------------------//

// Función para calcular y actualizar la suma total de "x-placas"
function actualizarSumaPlacas() {
    var sumaTotalPlacas = 0;

    for (var i = 1; i <= 32; i++) {
        var placasInput = document.getElementById(i + "-placas");
        var cantidad = parseInt(placasInput.value) || 0;
        sumaTotalPlacas += cantidad;
    }

    var cantidadTotal = document.getElementById("cantidadTotal");
    cantidadTotal.innerHTML = "<h5>" + sumaTotalPlacas + "</h5>";
}

// Escucha cambios en los campos de entrada "X-placas" y actualiza la suma total de "x-placas"
for (var i = 1; i <= 32; i++) {
    var placasInput = document.getElementById(i + "-placas");
    placasInput.addEventListener("input", actualizarSumaPlacas);
}

// Llama a la función para calcular el valor inicial de la suma de "x-placas"
actualizarSumaPlacas();


// Función para calcular y actualizar el precio total
function calcularPrecioTotal() {
    var precioTotal = 0;

    for (var i = 1; i <= 32; i++) {
        var placasInput = document.getElementById(i + "-placas");
        var cantidad = parseFloat(placasInput.value) || 0;

        // Obtener el precio del elemento actual usando jQuery
        var precio = parseFloat($("#" + i + "-precio").text().replace(/[^0-9.-]+/g, "")) || 0;

        // Calcular el precio total para el elemento actual
        var totalPorItem = cantidad * precio;

        precioTotal += totalPorItem;
    }

    var valorTotal = document.getElementById("valorTotal");
    valorTotal.innerHTML = "<h5>$" + parseInt(precioTotal) + "</h5>";
}

// Escucha cambios en los campos de entrada "X-placas" y actualiza el precio total
for (var i = 1; i <= 32; i++) {
    var placasInput = document.getElementById(i + "-placas");
    placasInput.addEventListener("input", calcularPrecioTotal);
}

// Escucha cambios en los radio buttons de material y de instalación
for (var i = 1; i <= 32; i++) {
    var materialRadios = document.querySelectorAll('input[name="' + i + '-material"]');
    var instalacionRadios = document.querySelectorAll('input[name="' + i + '-instalar"]');

    materialRadios.forEach(function(radio) {
        radio.addEventListener("change", calcularPrecioTotal);
    });

    instalacionRadios.forEach(function(radio) {
        radio.addEventListener("change", calcularPrecioTotal);
    });
}

// Llama a la función para calcular el precio inicial
calcularPrecioTotal();









});

