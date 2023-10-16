document.addEventListener("DOMContentLoaded", function () {
    // 1 - Señalética de Normas del Condominio Portón Ingreso
    var precioTotal1 = 0 ;
    var cantidadPostes1 = 0;
    var cantidadPlacas1 = 0;
    var materialRadios1 = document.querySelectorAll('input[name="1-material"]');
    var instalacionRadios1 = document.querySelectorAll('input[name="1-instalar"]');
    var placasInput1 = document.getElementById("1-placas");
    var postesInput1 = document.getElementById("1-postes");
    var precioElement1 = document.getElementById("1-precio");
    var precioMaterial1 = 0; 
    var precioPoste1 = 48000; 

    var preciosMateriales1 = {
        "Aluminio Compuesto": 88500,
        "Sintra PVC": 68500
    };

    var preciosInstalacion1 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

function actualizarPrecio1() {
    var materialSeleccionado1 = obtenerSeleccion1(materialRadios1);
    var instalacionSeleccionada1 = obtenerSeleccion1(instalacionRadios1);
    
    precioMaterial1 = preciosMateriales1[materialSeleccionado1] || 0;
    var precioInstalacion1 = preciosInstalacion1[instalacionSeleccionada1] || "";
    
    
    var material1 = "";
    if (materialSeleccionado1) {
        material1 = materialSeleccionado1;
    }

    cantidadPlacas1 = parseInt(placasInput1.value) || 0;

    if (materialSeleccionado1 === "Sintra PVC") {
        postesInput1.value = "0"; 
        postesInput1.disabled = true; 
    } else {
        postesInput1.disabled = false; 
    }

    cantidadPostes1 = parseInt(postesInput1.value) || 0;

    precioTotal1 = (precioPoste1 * cantidadPostes1) + (precioMaterial1 * cantidadPlacas1);
    
    precioElement1.innerHTML = "Valor por Señalética en " + material1 + ": $" + precioMaterial1 + "<br>";
    
    if (materialSeleccionado1 !== "Sintra PVC") {
        precioElement1.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste1 + "<br>";
    }

    precioElement1.innerHTML += "<hr>Total Sección: $" + precioTotal1 + " (IVA Incluido)";
    
    precioElement1.style.textAlign = "right";

    var materialValorInputs1 = document.querySelectorAll('input[name="1-material-valor"]');
    materialValorInputs1.forEach(function(materialValorInput1) {
        materialValorInput1.value = precioMaterial1;
    });

    actualizarPrecioTotalGlobal();
}

    function obtenerSeleccion1(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios1.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio1);
    });

    instalacionRadios1.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio1);
    });

    placasInput1.addEventListener("input", actualizarPrecio1);
    postesInput1.addEventListener("input", actualizarPrecio1);

    actualizarPrecio1();

    //--------------------------------------------------------------------------------//

    // 2 - Señalética de Uso Correcto de Shaft de Basura
    var precioTotal2 = 0;
    var cantidadPlacas2 = 0;
    var materialRadios2 = document.querySelectorAll('input[name="2-material"]');
    var instalacionRadios2 = document.querySelectorAll('input[name="2-instalar"]');
    var placasInput2 = document.getElementById("2-placas");
    var precioElement2 = document.getElementById("2-precio");
    var precioMaterial2 = 0; 
    
    var preciosMateriales2 = {
        //"Aluminio Compuesto": 88500,
        "Sintra PVC": 9850
    };

    var preciosInstalacion2 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio2() {
        var materialSeleccionado2 = obtenerSeleccion2(materialRadios2);
        var instalacionSeleccionada2 = obtenerSeleccion2(instalacionRadios2);
        
        precioMaterial2 = preciosMateriales2[materialSeleccionado2] || 0;
        var precioInstalacion2 = preciosInstalacion2[instalacionSeleccionada2] || "";
        
        var material2 = "";
        if (materialSeleccionado2) {
            material2 = materialSeleccionado2;
        }

        cantidadPlacas2 = parseInt(placasInput2.value) || 0;
        precioTotal2 = (precioMaterial2 * cantidadPlacas2);
        
        precioElement2.innerHTML = "Valor por Señalética en " + material2 + ": $" + precioMaterial2 + "<br> <hr>" +
            "Total Sección: $" + precioTotal2  + " (IVA Incluido)" ;

        precioElement2.style.textAlign = "right";

        var materialValorInputs2 = document.querySelectorAll('input[name="2-material-valor"]');
        materialValorInputs2.forEach(function(materialValorInput2) {
            materialValorInput2.value = precioMaterial2;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion2(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios2.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio2);
    });

    instalacionRadios2.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio2);
    });

    placasInput2.addEventListener("input", actualizarPrecio2);

    actualizarPrecio2();


    //--------------------------------------------------------------------------------//

    // 3 - Señalética de Reglamento Tenencia Responsable de Mascotas
    var precioTotal3 = 0;
    var cantidadPlacas3 = 0;
    var medidasRadios3 = document.querySelectorAll('input[name="3-medidas"]');
    var instalacionRadios3 = document.querySelectorAll('input[name="3-instalar"]');
    var placasInput3 = document.getElementById("3-placas");
    var precioElement3 = document.getElementById("3-precio");
    var precioMedida3 = 0;
    
    var preciosMedidas3 = {
        "20cm x 30cm": 9580,
        "40cm x 60cm": 18500
    };

    var preciosInstalacion3 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio3() {
        var medidaSeleccionada3 = obtenerSeleccion3(medidasRadios3);
        var instalacionSeleccionada3 = obtenerSeleccion3(instalacionRadios3);
        
        var precioMedida3 = preciosMedidas3[medidaSeleccionada3] || 0;
        var precioInstalacion3 = preciosInstalacion3[instalacionSeleccionada3] || "";
        
        var medida3 = "";
        if (medidaSeleccionada3) {
            medida3 = medidaSeleccionada3;
        }

        cantidadPlacas3 = parseInt(placasInput3.value) || 0;
        precioTotal3 = (precioMedida3 * cantidadPlacas3);
        
        precioElement3.innerHTML = "Valor por Señalética Tamaño " + medida3 + ": $" + precioMedida3 + "<br> <hr>" +
            "Total Sección: $" + precioTotal3 + " (IVA Incluido)" ;

        precioElement2.style.textAlign = "right";
        
        var medidaValorInputs3 = document.querySelectorAll('input[name="3-medidas-valor"]');
        medidaValorInputs3.forEach(function(medidaValorInput3) {
            medidaValorInput3.value = precioMedida3;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion3(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }


    medidasRadios3.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio3);
    });

    instalacionRadios3.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio3);
    });

    placasInput3.addEventListener("input", actualizarPrecio3);


    actualizarPrecio3();

    //--------------------------------------------------------------------------------//

    // 4 - Sticker para Vehículos de Residentes
    var precioTotal4 = 0;
    var cantidadPlacas4 = 0;
    var medidasRadios4 = document.querySelectorAll('input[name="4-medidas"]');
    var instalacionRadios4 = document.querySelectorAll('input[name="4-instalar"]');
    var placasInput4 = document.getElementById("4-placas");
    var precioElement4 = document.getElementById("4-precio");
    var precioMedida4 = 0;
    
    var preciosMedidas4 = {
        "6cm x 6cm": 950,
        "Otra Medida": 1000
    };

    var preciosInstalacion4 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio4() {
        var medidaSeleccionada4 = obtenerSeleccion4(medidasRadios4);
        var instalacionSeleccionada4 = obtenerSeleccion4(instalacionRadios4);
        
        var precioMedida4 = preciosMedidas4[medidaSeleccionada4] || 0;
        var precioInstalacion4 = preciosInstalacion4[instalacionSeleccionada4] || "";
        
        var medida4 = "";
        if (medidaSeleccionada4) {
            medida4 = medidaSeleccionada4;
        }

        cantidadPlacas4 = parseInt(placasInput4.value) || 0;
        precioTotal4 = (precioMedida4 * cantidadPlacas4);

        precioElement4.innerHTML = "Valor por Señalética Tamaño " + medida4 + ": $" + precioMedida4 + "<br> <hr>" +
            "Total Sección: $" + precioTotal4 + " (IVA Incluido)" ;


        precioElement4.style.textAlign = "right";

        var medidaValorInputs4 = document.querySelectorAll('input[name="4-medidas-valor"]');
        medidaValorInputs4.forEach(function(medidaValorInput4) {
            medidaValorInput4.value = precioMedida4;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion4(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    medidasRadios4.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio4);
    });

    instalacionRadios4.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio4);
    });

    placasInput4.addEventListener("input", actualizarPrecio4);

    actualizarPrecio4();

    //--------------------------------------------------------------------------------//

    // 5 - Señalética de Conserje en Ronda
    var precioTotal5 = 0;
    var cantidadPlacas5 = 0;
    var medidasRadios5 = document.querySelectorAll('input[name="5-medidas"]');
    var instalacionRadios5 = document.querySelectorAll('input[name="5-instalar"]');
    var placasInput5 = document.getElementById("5-placas");
    var precioElement5 = document.getElementById("5-precio");
    var precioMedida5 = 0; 

    var preciosMedidas5 = {
        "30cm x 20cm": 9850
    };

    var preciosInstalacion5 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio5() {
        var medidaSeleccionada5 = obtenerSeleccion5(medidasRadios5);
        var instalacionSeleccionada5 = obtenerSeleccion5(instalacionRadios5);
        
        var precioMedida5 = preciosMedidas5[medidaSeleccionada5] || 0;
        var precioInstalacion5 = preciosInstalacion5[instalacionSeleccionada5] || "";
        
        var medida5 = "";
        if (medidaSeleccionada5) {
            medida5 = medidaSeleccionada5;
        }

        cantidadPlacas5 = parseInt(placasInput5.value) || 0;
        precioTotal5 = (precioMedida5 * cantidadPlacas5);
        
        precioElement5.innerHTML = "Valor por Señalética Tamaño " + medida5 + ": $" + precioMedida5 + "<br> <hr>" +
            "Total Sección: $" + precioTotal5 + " (IVA Incluido)" ;

        precioElement5.style.textAlign = "right";

        var medidaValorInputs5 = document.querySelectorAll('input[name="5-medidas-valor"]');
        medidaValorInputs5.forEach(function(medidaValorInput5) {
            medidaValorInput5.value = precioMedida5;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion5(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    medidasRadios5.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio5);
    });

    instalacionRadios5.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio5);
    });

    placasInput5.addEventListener("input", actualizarPrecio5);

    actualizarPrecio5();

    //--------------------------------------------------------------------------------//

    // 6 - Señalética Normas del Condominio
    var precioTotal6 = 0;
    var cantidadPlacas6 = 0;
    var materialRadios6 = document.querySelectorAll('input[name="6-material"]');
    var instalacionRadios6 = document.querySelectorAll('input[name="6-instalar"]');
    var placasInput6 = document.getElementById("6-placas");
    var precioElement6 = document.getElementById("6-precio");
    var precioMaterial6 = 0; 
    var preciosMateriales6 = {
        "Sintra Pvc": 18500
    };

    var preciosInstalacion6 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio6() {
        var materialSeleccionado6 = obtenerSeleccion6(materialRadios6);
        var instalacionSeleccionada6 = obtenerSeleccion6(instalacionRadios6);

        precioMaterial6 = preciosMateriales6[materialSeleccionado6] || 0; 
        var precioInstalacion6 = preciosInstalacion6[instalacionSeleccionada6] || "";

        var material6 = "";
        if (materialSeleccionado6) {
            material6 = materialSeleccionado6;
        }

        cantidadPlacas6 = parseInt(placasInput6.value) || 0;
        precioTotal6 = (precioMaterial6 * cantidadPlacas6);

        precioElement6.innerHTML = "Valor por Señalética en " + material6 + ": $" + precioMaterial6 + "<br> <hr>" +
            "Total Sección: $" + precioTotal6 + " (IVA Incluido)";

        precioElement6.style.textAlign = "right";

        var materialValorInputs6 = document.querySelectorAll('input[name="6-material-valor"]');
        materialValorInputs6.forEach(function (materialValorInput6) {
            materialValorInput6.value = precioMaterial6;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion6(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios6.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    instalacionRadios6.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio6);
    });

    placasInput6.addEventListener("input", actualizarPrecio6);

    actualizarPrecio6();

    //--------------------------------------------------------------------------------//

    // 7 - Reglamento de Quincho
    var precioTotal7 = 0;
    var cantidadPlacas7 = 0;
    var materialRadios7 = document.querySelectorAll('input[name="7-medidas"]');
    var instalacionRadios7 = document.querySelectorAll('input[name="7-instalar"]');
    var placasInput7 = document.getElementById("7-placas");
    var precioElemen7 = document.getElementById("7-precio");
    var precioMedida7 = 0; 

    var preciosMedidas7 = {
        "40cm x 60cm": 18500
    };

    var preciosInstalacion7 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio7() {
        var medidaSeleccionada7 = obtenerSeleccion7(materialRadios7);
        var instalacionSeleccionada7 = obtenerSeleccion7(instalacionRadios7);
        
        var precioMedida7 = preciosMedidas7[medidaSeleccionada7] || 0;
        var precioInstalacion7 = preciosInstalacion7[instalacionSeleccionada7] || "";
        
        var medida7 = "";
        if (medidaSeleccionada7) {
            medida7 = medidaSeleccionada7;
        }

        cantidadPlacas7 = parseInt(placasInput7.value) || 0;
        precioTotal7 = (precioMedida7 * cantidadPlacas7);
        
        precioElemen7.innerHTML = "Valor por Señalética Tamaño " + medida7 + ": $" + precioMedida7 + "<br> <hr>" +
            "Total Sección: $" + precioTotal7 + " (IVA Incluido)" ;

        precioElemen7.style.textAlign = "right";

        var medidaValorInputs7 = document.querySelectorAll('input[name="7-medidas-valor"]');
        medidaValorInputs7.forEach(function(medidaValorInput7) {
            medidaValorInput7.value = precioMedida7;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion7(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios7.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio7);
    });

    instalacionRadios7.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio7);
    });

    placasInput7.addEventListener("input", actualizarPrecio7);

    actualizarPrecio7();

    //--------------------------------------------------------------------------------//

    // 8 - Reglamento de Piscina
    var precioTotal8 = 0;
    var cantidadPostes8 = 0;
    var cantidadPlacas8 = 0;
    var materialRadios8 = document.querySelectorAll('input[name="8-material"]');
    var instalacionRadios8 = document.querySelectorAll('input[name="8-instalar"]');
    var placasInput8 = document.getElementById("8-placas");
    var postesInput8 = document.getElementById("8-postes");
    var precioElement8 = document.getElementById("8-precio");
    var precioMaterial8 = 0; 
    var precioPoste8 = 48000; 

    var preciosMateriales8 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion8 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio8() {
        var materialSeleccionado8 = obtenerSeleccion8(materialRadios8);
        var instalacionSeleccionada8 = obtenerSeleccion8(instalacionRadios8);
        
        precioMaterial8 = preciosMateriales8[materialSeleccionado8] || 0;
        var precioInstalacion8 = preciosInstalacion8[instalacionSeleccionada8] || "";
        
        var material8 = "";
        if (materialSeleccionado8) {
            material8 = materialSeleccionado8;
        }

        cantidadPlacas8 = parseInt(placasInput8.value) || 0;

        if (materialSeleccionado8 === "Sintra PVC") {
            postesInput8.value = "0"; 
            postesInput8.disabled = true; 
        } else {
            postesInput8.disabled = false; 
        }

        cantidadPostes8 = parseInt(postesInput8.value) || 0;

        precioTotal8 = (precioPoste8 * cantidadPostes8) +(precioMaterial8 * cantidadPlacas8);
        
        precioElement8.innerHTML = "Valor por Señalética en " + material8 + ": $" + precioMaterial8 + "<br>";
        
        if (materialSeleccionado8 !== "Sintra PVC") {
            precioElement8.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste8 + "<br>";
        }

        precioElement8.innerHTML += "<hr>Total Sección: $" + precioTotal8 + " (IVA Incluido)";
        
        precioElement8.style.textAlign = "right";

        var materialValorInputs8 = document.querySelectorAll('input[name="8-material-valor"]');
        materialValorInputs8.forEach(function(materialValorInput8) {
            materialValorInput8.value = precioMaterial8;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion8(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios8.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio8);
    });

    instalacionRadios8.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio8);
    });

    placasInput8.addEventListener("input", actualizarPrecio8);
    postesInput8.addEventListener("input", actualizarPrecio8);

    actualizarPrecio8();

    //--------------------------------------------------------------------------------//

    // 9 - Señalética de Normas del Condominio Portón Ingreso
    var precioTotal9 = 0;
    var cantidadPlacas9 = 0;
    var materialRadios9 = document.querySelectorAll('input[name="9-material"]');
    var instalacionRadios9 = document.querySelectorAll('input[name="9-instalar"]');
    var placasInput9 = document.getElementById("9-placas");
    var precioElement9 = document.getElementById("9-precio");
    var precioMaterial9 = 0; 

    var preciosMateriales9 = {
        "Aluminio Compuesto": 38500,
        "Sintra PVC": 18000
    };

    var preciosInstalacion9 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio9() {
        var materialSeleccionado9 = obtenerSeleccion9(materialRadios9);
        var instalacionSeleccionada9 = obtenerSeleccion9(instalacionRadios9);
        
        precioMaterial9 = preciosMateriales9[materialSeleccionado9] || 0;
        var precioInstalacion9 = preciosInstalacion9[instalacionSeleccionada9] || "";
        
        var material9 = "";
        if (materialSeleccionado9) {
            material9 = materialSeleccionado9;
        }

        cantidadPlacas9 = parseInt(placasInput9.value) || 0;
        precioTotal9 = (precioMaterial9 * cantidadPlacas9);
        
        precioElement9.innerHTML = "Valor por Señalética en " + material9 + ": $" + precioMaterial9 + "<br> <hr>" +
            "Total Sección: $" + precioTotal9 + " (IVA Incluido)" ;

        precioElement9.style.textAlign = "right";

        var materialValorInputs9 = document.querySelectorAll('input[name="9-material-valor"]');
        materialValorInputs9.forEach(function(materialValorInput9) {
            materialValorInput9.value = precioMaterial9
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion9(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios9.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio9);
    });

    instalacionRadios9.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio9);
    });

    placasInput9.addEventListener("input", actualizarPrecio9);

    actualizarPrecio9();


    //--------------------------------------------------------------------------------//

    // 10 - No Pisar el Cesped
    var  precioTotal10 = 0;
    var cantidadPlacas10 =  0;
    var cantidadPostes10 = 0;
    var materialRadios10 = document.querySelectorAll('input[name="10-material"]');
    var instalacionRadios10 = document.querySelectorAll('input[name="10-instalar"]');
    var placasInput10 = document.getElementById("10-placas");
    var postesInput10 = document.getElementById("10-postes");
    var precioElement10 = document.getElementById("10-precio");
    var precioMaterial10 = 0; 
    var precioPoste10 = 3500; 

    var preciosMateriales10 = {
        "Sintra PVC": 9850
    };

    var preciosInstalacion10 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio10() {
        var materialSeleccionado10 = obtenerSeleccion10(materialRadios10);
        var instalacionSeleccionada10 = obtenerSeleccion10(instalacionRadios10);

        var precioMaterial10 = preciosMateriales10[materialSeleccionado10] || 0;
        var precioInstalacion10 = preciosInstalacion10[instalacionSeleccionada10] || "";

        var material10 = "";
        if (materialSeleccionado10) {
            material10 = materialSeleccionado10;
        }

        cantidadPlacas10 = parseInt(placasInput10.value) || 0;
        cantidadPostes10 = parseInt(postesInput10.value) || 0;

        precioTotal10 = (precioPoste10 * cantidadPostes10) + (precioMaterial10 * cantidadPlacas10);

        precioElement10.innerHTML = "Valor por Señalética en " + material10 + ": $" + precioMaterial10 + "<br>" +
            "Valor por Estaca Madera de 1 Mt: $" + precioPoste10 + "<br>" +
            "<hr>Total Sección: $" + precioTotal10 + " (IVA Incluido)";

        precioElement10.style.textAlign = "right";

        var materialValorInputs10 = document.querySelectorAll('input[name="10-material-valor"]');
        materialValorInputs10.forEach(function (materialValorInput10) {
            materialValorInput10.value = precioMaterial10;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion10(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios10.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio10);
    });

    instalacionRadios10.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio10);
    });

    placasInput10.addEventListener("input", actualizarPrecio10);
    postesInput10.addEventListener("input", actualizarPrecio10);

    actualizarPrecio10();

    //--------------------------------------------------------------------------------//

    // 11 - No Jugar a la Pelota
    var precioTotal11 = 0;
    var cantidadPlacas11 =  0;
    var cantidadPostes11 = 0;
    var materialRadios11 = document.querySelectorAll('input[name="11-material"]');
    var instalacionRadios11 = document.querySelectorAll('input[name="11-instalar"]');
    var placasInput11 = document.getElementById("11-placas");
    var postesInput11 = document.getElementById("11-postes");
    var precioElement11 = document.getElementById("11-precio");
    var precioMaterial11 = 0; 
    var precioPoste11 = 3500; 

    var preciosMateriales11 = {
        "Sintra PVC": 9850
    };

    var preciosInstalacion11 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio11() {
        var materialSeleccionado11 = obtenerSeleccion11(materialRadios11);
        var instalacionSeleccionada11 = obtenerSeleccion11(instalacionRadios11);

        var precioMaterial11 = preciosMateriales11[materialSeleccionado11] || 0;
        var precioInstalacion11 = preciosInstalacion11[instalacionSeleccionada11] || "";

        var material11 = "";
        if (materialSeleccionado11) {
            material11 = materialSeleccionado11;
        }

        cantidadPlacas11 = parseInt(placasInput11.value) || 0;
        cantidadPostes11 = parseInt(postesInput11.value) || 0;

        precioTotal11 = ((precioPoste11 * cantidadPostes11) + precioMaterial11) * cantidadPlacas11;

        precioElement11.innerHTML = "Valor por Señalética en " + material11 + ": $" + precioMaterial11 + "<br>" +
            "Valor por Estaca Madera de 1 Mt: $" + precioPoste11 + "<br>" +
            "<hr>Total Sección: $" + precioTotal11 + " (IVA Incluido)";

        precioElement11.style.textAlign = "right";

        var materialValorInputs11 = document.querySelectorAll('input[name="11-material-valor"]');
        materialValorInputs11.forEach(function (materialValorInput11) {
            materialValorInput11.value = precioMaterial11;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion11(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios11.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio11);
    });

    instalacionRadios11.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio11);
    });

    placasInput11.addEventListener("input", actualizarPrecio11);
    postesInput11.addEventListener("input", actualizarPrecio11);

    actualizarPrecio11();

    //--------------------------------------------------------------------------------//

    // 12 - Sector de Área de Juego
    var precioTotal12 = 0;
    var cantidadPlacas12 = 0;
    var materialRadios12 = document.querySelectorAll('input[name="12-material"]');
    var instalacionRadios12 = document.querySelectorAll('input[name="12-instalar"]');
    var placasInput12 = document.getElementById("12-placas");
    var precioElement12 = document.getElementById("12-precio");
    var precioMaterial12 = 0; 

    var preciosMateriales12 = {
        "Sintra PVC": 48500
    };

    var preciosInstalacion12 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio12() {
        var materialSeleccionado12 = obtenerSeleccion12(materialRadios12);
        var instalacionSeleccionada12 = obtenerSeleccion12(instalacionRadios12);
        
        precioMaterial12 = preciosMateriales12[materialSeleccionado12] || 0;
        var precioInstalacion12 = preciosInstalacion12[instalacionSeleccionada12] || "";
        
        var material12 = "";
        if (materialSeleccionado12) {
            material12 = materialSeleccionado12;
        }

        cantidadPlacas12 = parseInt(placasInput12.value) || 0;
        precioTotal12 = (precioMaterial12 * cantidadPlacas12);
        
        precioElement12.innerHTML = "Valor por Señalética en " + material12 + ": $" + precioMaterial12 + "<br> <hr>" +
            "Total Sección: $" + precioTotal12 + " (IVA Incluido)" ;

        precioElement12.style.textAlign = "right";

        var materialValorInputs12 = document.querySelectorAll('input[name="12-material-valor"]');
        materialValorInputs12.forEach(function(materialValorInput12) {
            materialValorInput12.value = precioMaterial12
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion12(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios12.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio12);
    });

    instalacionRadios12.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio12);
    });

    placasInput12.addEventListener("input", actualizarPrecio12);

    actualizarPrecio12();

    //--------------------------------------------------------------------------------//

    // 13 - Zona de Reciclaje / Punto Limpio
    var precioTotal13 = 0;
    var cantidadPlacas13 = 0;
    var materialRadios13 = document.querySelectorAll('input[name="13-material"]');
    var instalacionRadios13 = document.querySelectorAll('input[name="13-instalar"]');
    var placasInput13 = document.getElementById("13-placas");
    var precioElement13 = document.getElementById("13-precio");
    var precioMaterial13 = 0; 

    var preciosMateriales13 = {
        "Sintra PVC": 48500
    };

    var preciosInstalacion13 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio13() {
        var materialSeleccionado13 = obtenerSeleccion13(materialRadios13);
        var instalacionSeleccionada13 = obtenerSeleccion13(instalacionRadios13);

        precioMaterial13 = preciosMateriales13[materialSeleccionado13] || 0;
        var precioInstalacion13 = preciosInstalacion13[instalacionSeleccionada13] || "";

        var material13 = "";
        if (materialSeleccionado13) {
            material13 = materialSeleccionado13;
        }

        cantidadPlacas13 = parseInt(placasInput13.value) || 0;
        precioTotal13 = (precioMaterial13 * cantidadPlacas13);

        precioElement13.innerHTML = "Valor por Señalética en " + material13 + ": $" + precioMaterial13 + "<br> <hr>" +
            "Total Sección: $" + precioTotal13 + " (IVA Incluido)";

        precioElement13.style.textAlign = "right";

        var materialValorInputs13 = document.querySelectorAll('input[name="13-material-valor"]');
        materialValorInputs13.forEach(function (materialValorInput13) {
            materialValorInput13.value = precioMaterial13;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion13(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios13.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio13);
    });

    instalacionRadios13.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio13);
    });

    placasInput13.addEventListener("input", actualizarPrecio13);

    actualizarPrecio13();

    //--------------------------------------------------------------------------------//

    // 14 - Estacionamiento de Visitas
    var precioTotal14 = 0;
    var cantidadPostes14 = 0;
    var cantidadPlacas14 = 0;
    var materialRadios14 = document.querySelectorAll('input[name="14-material"]');
    var instalacionRadios14 = document.querySelectorAll('input[name="14-instalar"]');
    var placasInput14 = document.getElementById("14-placas");
    var postesInput14 = document.getElementById("14-postes");
    var precioElement14 = document.getElementById("14-precio");
    var precioMaterial14 = 0; 
    var precioPoste14 = 48000; 

    var preciosMateriales14 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion14 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio14() {
        var materialSeleccionado14 = obtenerSeleccion14(materialRadios14);
        var instalacionSeleccionada14 = obtenerSeleccion14(instalacionRadios14);

        precioMaterial14 = preciosMateriales14[materialSeleccionado14] || 0;
        var precioInstalacion14 = preciosInstalacion14[instalacionSeleccionada14] || "";

        var material14 = "";
        if (materialSeleccionado14) {
            material14 = materialSeleccionado14;
        }

        cantidadPlacas14 = parseInt(placasInput14.value) || 0;

        if (materialSeleccionado14 === "Sintra PVC") {
            postesInput14.value = "0"; 
            postesInput14.disabled = true;
        } else {
            postesInput14.disabled = false; 
        }

        cantidadPostes14 = parseInt(postesInput14.value) || 0;

        precioTotal14 = (precioPoste14 * cantidadPostes14) + (precioMaterial14 * cantidadPlacas14);

        precioElement14.innerHTML = "Valor por Señalética en " + material14 + ": $" + precioMaterial14 + "<br>";

        if (materialSeleccionado14 !== "Sintra PVC") {
            precioElement14.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste14 + "<br>";
        }

        precioElement14.innerHTML += "<hr>Total Sección: $" + precioTotal14 + " (IVA Incluido)";

        precioElement14.style.textAlign = "right";

        var materialValorInputs14 = document.querySelectorAll('input[name="14-material-valor"]');
        materialValorInputs14.forEach(function (materialValorInput14) {
            materialValorInput14.value = precioMaterial14;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion14(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios14.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio14);
    });

    instalacionRadios14.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio14);
    });

    placasInput14.addEventListener("input", actualizarPrecio14);
    postesInput14.addEventListener("input", actualizarPrecio14);

    actualizarPrecio14();

    //--------------------------------------------------------------------------------//

    // 15 - Estacionamiento de Residentes
    var precioTotal15 = 0;
    var cantidadPostes15 = 0;
    var cantidadPlacas15 = 0;
    var materialRadios15 = document.querySelectorAll('input[name="15-material"]');
    var instalacionRadios15 = document.querySelectorAll('input[name="15-instalar"]');
    var placasInput15 = document.getElementById("15-placas");
    var postesInput15 = document.getElementById("15-postes");
    var precioElement15 = document.getElementById("15-precio");
    var precioMaterial15 = 0;
    var precioPoste15 = 48000;
    
    var preciosMateriales15 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion15 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio15() {
        var materialSeleccionado15 = obtenerSeleccion15(materialRadios15);
        var instalacionSeleccionada15 = obtenerSeleccion15(instalacionRadios15);

        precioMaterial15 = preciosMateriales15[materialSeleccionado15] || 0;
        var precioInstalacion15 = preciosInstalacion15[instalacionSeleccionada15] || "";

        var material15 = "";
        if (materialSeleccionado15) {
            material15 = materialSeleccionado15;
        }

        cantidadPlacas15 = parseInt(placasInput15.value) || 0;

        if (materialSeleccionado15 === "Sintra PVC") {
            postesInput15.value = "0"; 
            postesInput15.disabled = true; 
        } else {
            postesInput15.disabled = false;
        }

        cantidadPostes15 = parseInt(postesInput15.value) || 0;

        precioTotal15 = (precioPoste15 * cantidadPostes15) + (precioMaterial15 * cantidadPlacas15);

        precioElement15.innerHTML = "Valor por Señalética en " + material15 + ": $" + precioMaterial15 + "<br>";

        if (materialSeleccionado15 !== "Sintra PVC") {
            precioElement15.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste15 + "<br>";
        }

        precioElement15.innerHTML += "<hr>Total Sección: $" + precioTotal15 + " (IVA Incluido)";

        precioElement15.style.textAlign = "right";

        var materialValorInputs15 = document.querySelectorAll('input[name="15-material-valor"]');
        materialValorInputs15.forEach(function (materialValorInput15) {
            materialValorInput15.value = precioMaterial15;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion15(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios15.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio15);
    });

    instalacionRadios15.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio15);
    });

    placasInput15.addEventListener("input", actualizarPrecio15);
    postesInput15.addEventListener("input", actualizarPrecio15);

    actualizarPrecio15();

    //--------------------------------------------------------------------------------//

    // 16 - Estacionamiento de Motos
    var precioTotal16 = 0;
    var cantidadPostes16 = 0;
    var cantidadPlacas16 = 0;
    var materialRadios16 = document.querySelectorAll('input[name="16-material"]');
    var instalacionRadios16 = document.querySelectorAll('input[name="16-instalar"]');
    var placasInput16 = document.getElementById("16-placas");
    var postesInput16 = document.getElementById("16-postes");
    var precioElement16 = document.getElementById("16-precio");
    var precioMaterial16 = 0;
    var precioPoste16 = 48000;
    
    var preciosMateriales16 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion16 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio16() {
        var materialSeleccionado16 = obtenerSeleccion16(materialRadios16);
        var instalacionSeleccionada16 = obtenerSeleccion16(instalacionRadios16);

        precioMaterial16 = preciosMateriales16[materialSeleccionado16] || 0;
        var precioInstalacion16 = preciosInstalacion16[instalacionSeleccionada16] || "";

        var material16 = "";
        if (materialSeleccionado16) {
            material16 = materialSeleccionado16;
        }

        cantidadPlacas16 = parseInt(placasInput16.value) || 0;

        if (materialSeleccionado16 === "Sintra PVC") {
            postesInput16.value = "0"; 
            postesInput16.disabled = true; 
        } else {
            postesInput16.disabled = false; 
        }

        cantidadPostes16 = parseInt(postesInput16.value) || 0;

        precioTotal16 = (precioPoste16 * cantidadPostes16) + (precioMaterial16 * cantidadPlacas16);

        precioElement16.innerHTML = "Valor por Señalética en " + material16 + ": $" + precioMaterial16 + "<br>";

        if (materialSeleccionado16 !== "Sintra PVC") {
            precioElement16.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste16 + "<br>";
        }

        precioElement16.innerHTML += "<hr>Total Sección: $" + precioTotal16 + " (IVA Incluido)";

        precioElement16.style.textAlign = "right";

        var materialValorInputs16 = document.querySelectorAll('input[name="16-material-valor"]');
        materialValorInputs16.forEach(function (materialValorInput16) {
            materialValorInput16.value = precioMaterial16;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion16(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios16.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio16);
    });

    instalacionRadios16.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio16);
    });

    placasInput16.addEventListener("input", actualizarPrecio16);
    postesInput16.addEventListener("input", actualizarPrecio16);

    actualizarPrecio16();

    //--------------------------------------------------------------------------------//

    // 17 - Estacionamiento de Discapacitados
    var precioTotal17 = 0;
    var cantidadPostes17 = 0;
    var cantidadPlacas17 = 0;
    var materialRadios17 = document.querySelectorAll('input[name="17-material"]');
    var instalacionRadios17 = document.querySelectorAll('input[name="17-instalar"]');
    var placasInput17 = document.getElementById("17-placas");
    var postesInput17 = document.getElementById("17-postes");
    var precioElement17 = document.getElementById("17-precio");
    var precioMaterial17 = 0; 
    var precioPoste17 = 48000; 

    var preciosMateriales17 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion17 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio17() {
        var materialSeleccionado17 = obtenerSeleccion17(materialRadios17);
        var instalacionSeleccionada17 = obtenerSeleccion17(instalacionRadios17);

        precioMaterial17 = preciosMateriales17[materialSeleccionado17] || 0;
        var precioInstalacion17 = preciosInstalacion17[instalacionSeleccionada17] || "";

        var material17 = "";
        if (materialSeleccionado17) {
            material17 = materialSeleccionado17;
        }

        cantidadPlacas17 = parseInt(placasInput17.value) || 0;

        if (materialSeleccionado17 === "Sintra PVC") {
            postesInput17.value = "0"; 
            postesInput17.disabled = true; 
        } else {
            postesInput17.disabled = false; 
        }

        cantidadPostes17 = parseInt(postesInput17.value) || 0;

        precioTotal17 = (precioPoste17 * cantidadPostes17) + (precioMaterial17 * cantidadPlacas17);

        precioElement17.innerHTML = "Valor por Señalética en " + material17 + ": $" + precioMaterial17 + "<br>";

        if (materialSeleccionado17 !== "Sintra PVC") {
            precioElement17.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste17 + "<br>";
        }

        precioElement17.innerHTML += "<hr>Total Sección: $" + precioTotal17 + " (IVA Incluido)";

        precioElement17.style.textAlign = "right";

        var materialValorInputs17 = document.querySelectorAll('input[name="17-material-valor"]');
        materialValorInputs17.forEach(function (materialValorInput17) {
            materialValorInput17.value = precioMaterial17;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion17(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios17.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio17);
    });

    instalacionRadios17.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio17);
    });

    placasInput17.addEventListener("input", actualizarPrecio17);
    postesInput17.addEventListener("input", actualizarPrecio17);

    actualizarPrecio17();

    //--------------------------------------------------------------------------------//

    // 18 - No Estacionar
    var precioTotal18 = 0;
    var cantidadPostes18 = 0;
    var cantidadPlacas18 = 0;
    var materialRadios18 = document.querySelectorAll('input[name="18-material"]');
    var instalacionRadios18 = document.querySelectorAll('input[name="18-instalar"]');
    var placasInput18 = document.getElementById("18-placas");
    var postesInput18 = document.getElementById("18-postes");
    var precioElement18 = document.getElementById("18-precio");
    var precioMaterial18 = 0; 
    var precioPoste18 = 48000; 

    var preciosMateriales18 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion18 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio18() {
        var materialSeleccionado18 = obtenerSeleccion18(materialRadios18);
        var instalacionSeleccionada18 = obtenerSeleccion18(instalacionRadios18);

        precioMaterial18 = preciosMateriales18[materialSeleccionado18] || 0;
        var precioInstalacion18 = preciosInstalacion18[instalacionSeleccionada18] || "";

        var material18 = "";
        if (materialSeleccionado18) {
            material18 = materialSeleccionado18;
        }

        cantidadPlacas18 = parseInt(placasInput18.value) || 0;

        if (materialSeleccionado18 === "Sintra PVC") {
            postesInput18.value = "0"; 
            postesInput18.disabled = true; 
        } else {
            postesInput18.disabled = false; 
        }

        cantidadPostes18 = parseInt(postesInput18.value) || 0;

        precioTotal18 = (precioPoste18 * cantidadPostes18) + (precioMaterial18 * cantidadPlacas18);

        precioElement18.innerHTML = "Valor por Señalética en " + material18 + ": $" + precioMaterial18 + "<br>";

        if (materialSeleccionado18 !== "Sintra PVC") {
            precioElement18.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste18 + "<br>";
        }

        precioElement18.innerHTML += "<hr>Total Sección: $" + precioTotal18 + " (IVA Incluido)";

        precioElement18.style.textAlign = "right";

        var materialValorInputs18 = document.querySelectorAll('input[name="18-material-valor"]');
        materialValorInputs18.forEach(function (materialValorInput18) {
            materialValorInput18.value = precioMaterial18;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion18(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios18.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio18);
    });

    instalacionRadios18.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio18);
    });

    placasInput18.addEventListener("input", actualizarPrecio18);
    postesInput18.addEventListener("input", actualizarPrecio18);

    actualizarPrecio18();

    //--------------------------------------------------------------------------------//

    // 19 - Velocidad Máxima
    var precioTotal19 = 0;
    var cantidadPostes19 = 0;
    var cantidadPlacas19 = 0;
    var materialRadios19 = document.querySelectorAll('input[name="19-material"]');
    var instalacionRadios19 = document.querySelectorAll('input[name="19-instalar"]');
    var placasInput19 = document.getElementById("19-placas");
    var postesInput19 = document.getElementById("19-postes");
    var precioElement19 = document.getElementById("19-precio");
    var precioMaterial19 = 0; 
    var precioPoste19 = 48000; 

    var preciosMateriales19 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion19 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio19() {
        var materialSeleccionado19 = obtenerSeleccion19(materialRadios19);
        var instalacionSeleccionada19 = obtenerSeleccion19(instalacionRadios19);

        precioMaterial19 = preciosMateriales19[materialSeleccionado19] || 0;
        var precioInstalacion19 = preciosInstalacion19[instalacionSeleccionada19] || "";

        var material19 = "";
        if (materialSeleccionado19) {
            material19 = materialSeleccionado19;
        }

        cantidadPlacas19 = parseInt(placasInput19.value) || 0;

        if (materialSeleccionado19 === "Sintra PVC") {
            postesInput19.value = "0"; 
            postesInput19.disabled = true; 
        } else {
            postesInput19.disabled = false; 
        }

        cantidadPostes19 = parseInt(postesInput19.value) || 0;

        precioTotal19 = (precioPoste19 * cantidadPostes19) + (precioMaterial19 * cantidadPlacas19);

        precioElement19.innerHTML = "Valor por Señalética en " + material19 + ": $" + precioMaterial19 + "<br>";

        if (materialSeleccionado19 !== "Sintra PVC") {
            precioElement19.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste19 + "<br>";
        }

        precioElement19.innerHTML += "<hr>Total Sección: $" + precioTotal19 + " (IVA Incluido)";

        precioElement19.style.textAlign = "right";

        var materialValorInputs19 = document.querySelectorAll('input[name="19-material-valor"]');
        materialValorInputs19.forEach(function (materialValorInput19) {
            materialValorInput19.value = precioMaterial19;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion19(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios19.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio19);
    });

    instalacionRadios19.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio19);
    });

    placasInput19.addEventListener("input", actualizarPrecio19);
    postesInput19.addEventListener("input", actualizarPrecio19);

    actualizarPrecio19();

    //--------------------------------------------------------------------------------//

    // 20 - Zona Segura
    var precioTotal20 = 0;
    var cantidadPostes20 = 0;
    var cantidadPlacas20 = 0;
    var materialRadios20 = document.querySelectorAll('input[name="20-material"]');
    var instalacionRadios20 = document.querySelectorAll('input[name="20-instalar"]');
    var placasInput20 = document.getElementById("20-placas");
    var postesInput20 = document.getElementById("20-postes");
    var precioElement20 = document.getElementById("20-precio");
    var precioMaterial20 = 0; 
    var precioPoste20 = 48000; 
    
    var preciosMateriales20 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion20 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio20() {
        var materialSeleccionado20 = obtenerSeleccion20(materialRadios20);
        var instalacionSeleccionada20 = obtenerSeleccion20(instalacionRadios20);

        precioMaterial20 = preciosMateriales20[materialSeleccionado20] || 0;
        var precioInstalacion20 = preciosInstalacion20[instalacionSeleccionada20] || "";

        var material20 = "";
        if (materialSeleccionado20) {
            material20 = materialSeleccionado20;
        }

        cantidadPlacas20 = parseInt(placasInput20.value) || 0;

        if (materialSeleccionado20 === "Sintra PVC") {
            postesInput20.value = "0"; 
            postesInput20.disabled = true; 
        } else {
            postesInput20.disabled = false;
        }

        cantidadPostes20 = parseInt(postesInput20.value) || 0;

        precioTotal20 = (precioPoste20 * cantidadPostes20) + (precioMaterial20 * cantidadPlacas20);

        precioElement20.innerHTML = "Valor por Señalética en " + material20 + ": $" + precioMaterial20 + "<br>";

        if (materialSeleccionado20 !== "Sintra PVC") {
            precioElement20.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste20 + "<br>";
        }

        precioElement20.innerHTML += "<hr>Total Sección: $" + precioTotal20 + " (IVA Incluido)";

        precioElement20.style.textAlign = "right";

        var materialValorInputs20 = document.querySelectorAll('input[name="20-material-valor"]');
        materialValorInputs20.forEach(function (materialValorInput20) {
            materialValorInput20.value = precioMaterial20;
        });
        
        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion20(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios20.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio20);
    });

    instalacionRadios20.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio20);
    });

    placasInput20.addEventListener("input", actualizarPrecio20);
    postesInput20.addEventListener("input", actualizarPrecio20);

    actualizarPrecio20();

    //--------------------------------------------------------------------------------//

    // 21 - Vías de Evacuación
    var precioTotal21 = 0;
    var cantidadPlacas21 = 0;
    var materialRadios21 = document.querySelectorAll('input[name="21-material"]');
    var instalacionRadios21 = document.querySelectorAll('input[name="21-instalar"]');
    var placasInput21 = document.getElementById("21-placas");
    var precioElement21 = document.getElementById("21-precio");
    var precioMaterial21 = 0; 

    var preciosMateriales21 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion21 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio21() {
        var materialSeleccionado21 = obtenerSeleccion21(materialRadios21);
        var instalacionSeleccionada21 = obtenerSeleccion21(instalacionRadios21);

        precioMaterial21 = preciosMateriales21[materialSeleccionado21] || 0;
        var precioInstalacion21 = preciosInstalacion21[instalacionSeleccionada21] || "";

        var material21 = "";
        if (materialSeleccionado21) {
            material21 = materialSeleccionado21;
        }

        cantidadPlacas21 = parseInt(placasInput21.value) || 0;
        precioTotal21 = (precioMaterial21 * cantidadPlacas21);

        precioElement21.innerHTML = "Valor por Señalética en " + material21 + ": $" + precioMaterial21 + "<br> <hr>" +
            "Total Sección: $" + precioTotal21 + " (IVA Incluido)";

        precioElement21.style.textAlign = "right";

        var materialValorInputs21 = document.querySelectorAll('input[name="21-material-valor"]');
        materialValorInputs21.forEach(function (materialValorInput21) {
            materialValorInput21.value = precioMaterial21;
        });
        
        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion21(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios21.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio21);
    });

    instalacionRadios21.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio21);
    });

    placasInput21.addEventListener("input", actualizarPrecio21);

    actualizarPrecio21();

    //--------------------------------------------------------------------------------//

    // 22 - Salida de Emergencia
    var precioTotal22 = 0;
    var cantidadPlacas22 = 0;
    var materialRadios22 = document.querySelectorAll('input[name="22-material"]');
    var instalacionRadios22 = document.querySelectorAll('input[name="22-instalar"]');
    var placasInput22 = document.getElementById("22-placas");
    var precioElement22 = document.getElementById("22-precio");
    var precioMaterial22 = 0; 

    var preciosMateriales22 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion22 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio22() {
        var materialSeleccionado22 = obtenerSeleccion22(materialRadios22);
        var instalacionSeleccionada22 = obtenerSeleccion22(instalacionRadios22);

        precioMaterial22 = preciosMateriales22[materialSeleccionado22] || 0;
        var precioInstalacion22 = preciosInstalacion22[instalacionSeleccionada22] || "";

        var material22 = "";
        if (materialSeleccionado22) {
            material22 = materialSeleccionado22;
        }

        cantidadPlacas22 = parseInt(placasInput22.value) || 0;
        precioTotal22 = (precioMaterial22 * cantidadPlacas22);

        precioElement22.innerHTML = "Valor por Señalética en " + material22 + ": $" + precioMaterial22 + "<br> <hr>" +
            "Total Sección: $" + precioTotal22 + " (IVA Incluido)";

        precioElement22.style.textAlign = "right";

        var materialValorInputs22 = document.querySelectorAll('input[name="22-material-valor"]');
        materialValorInputs22.forEach(function (materialValorInput22) {
            materialValorInput22.value = precioMaterial22;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion22(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios22.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio22);
    });

    instalacionRadios22.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio22);
    });

    placasInput22.addEventListener("input", actualizarPrecio22);

    actualizarPrecio22();

    //--------------------------------------------------------------------------------//

    // 23 - Extintor
    var precioTotal23 = 0;
    var cantidadPlacas23 = 0;
    var materialRadios23 = document.querySelectorAll('input[name="23-material"]');
    var instalacionRadios23 = document.querySelectorAll('input[name="23-instalar"]');
    var placasInput23 = document.getElementById("23-placas");
    var precioElement23 = document.getElementById("23-precio");
    var precioMaterial23 = 0; 

    var preciosMateriales23 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion23 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio23() {
        var materialSeleccionado23 = obtenerSeleccion23(materialRadios23);
        var instalacionSeleccionada23 = obtenerSeleccion23(instalacionRadios23);

        precioMaterial23 = preciosMateriales23[materialSeleccionado23] || 0;
        var precioInstalacion23 = preciosInstalacion23[instalacionSeleccionada23] || "";

        var material23 = "";
        if (materialSeleccionado23) {
            material23 = materialSeleccionado23;
        }

        cantidadPlacas23 = parseInt(placasInput23.value) || 0;
        precioTotal23 = (precioMaterial23 * cantidadPlacas23);

        precioElement23.innerHTML = "Valor por Señalética en " + material23 + ": $" + precioMaterial23 + "<br> <hr>" +
            "Total Sección: $" + precioTotal23 + " (IVA Incluido)";

        precioElement23.style.textAlign = "right";

        var materialValorInputs23 = document.querySelectorAll('input[name="23-material-valor"]');
        materialValorInputs23.forEach(function (materialValorInput23) {
            materialValorInput23.value = precioMaterial23;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion23(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios23.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio23);
    });

    instalacionRadios23.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio23);
    });

    placasInput23.addEventListener("input", actualizarPrecio23);

    actualizarPrecio23();
        
    //--------------------------------------------------------------------------------//

    // 24 - Red Húmeda
    var precioTotal24 = 0;
    var cantidadPlacas24 = 0;
    var materialRadios24 = document.querySelectorAll('input[name="24-material"]');
    var instalacionRadios24 = document.querySelectorAll('input[name="24-instalar"]');
    var placasInput24 = document.getElementById("24-placas");
    var precioElement24 = document.getElementById("24-precio");
    var precioMaterial24 = 0; 

    var preciosMateriales24 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion24 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio24() {
        var materialSeleccionado24 = obtenerSeleccion24(materialRadios24);
        var instalacionSeleccionada24 = obtenerSeleccion24(instalacionRadios24);

        precioMaterial24 = preciosMateriales24[materialSeleccionado24] || 0;
        var precioInstalacion24 = preciosInstalacion24[instalacionSeleccionada24] || "";

        var material24 = "";
        if (materialSeleccionado24) {
            material24 = materialSeleccionado24;
        }

        cantidadPlacas24 = parseInt(placasInput24.value) || 0;
        precioTotal24 = (precioMaterial24 * cantidadPlacas24);

        precioElement24.innerHTML = "Valor por Señalética en " + material24 + ": $" + precioMaterial24 + "<br> <hr>" +
            "Total Sección: $" + precioTotal24 + " (IVA Incluido)";

        precioElement24.style.textAlign = "right";

        var materialValorInputs24 = document.querySelectorAll('input[name="24-material-valor"]');
        materialValorInputs24.forEach(function (materialValorInput24) {
            materialValorInput24.value = precioMaterial24;
        });
        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion24(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios24.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio24);
    });

    instalacionRadios24.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio24);
    });

    placasInput24.addEventListener("input", actualizarPrecio24);

    actualizarPrecio24();

    //--------------------------------------------------------------------------------//

    // 25 - Red Seca SALIDA
    var precioTotal25 = 0;
    var cantidadPlacas25 = 0;
    var materialRadios25 = document.querySelectorAll('input[name="25-material"]');
    var instalacionRadios25 = document.querySelectorAll('input[name="25-instalar"]');
    var placasInput25 = document.getElementById("25-placas");
    var precioElement25 = document.getElementById("25-precio");
    var precioMaterial25 = 0; 
    
    var preciosMateriales25 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion25 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio25() {
        var materialSeleccionado25 = obtenerSeleccion25(materialRadios25);
        var instalacionSeleccionada25 = obtenerSeleccion25(instalacionRadios25);

        precioMaterial25 = preciosMateriales25[materialSeleccionado25] || 0;
        var precioInstalacion25 = preciosInstalacion25[instalacionSeleccionada25] || "";

        var material25 = "";
        if (materialSeleccionado25) {
            material25 = materialSeleccionado25;
        }

        cantidadPlacas25 = parseInt(placasInput25.value) || 0;
        precioTotal25 = (precioMaterial25 * cantidadPlacas25);

        precioElement25.innerHTML = "Valor por Señalética en " + material25 + ": $" + precioMaterial25 + "<br> <hr>" +
            "Total Sección: $" + precioTotal25 + " (IVA Incluido)";

        precioElement25.style.textAlign = "right";

        var materialValorInputs25 = document.querySelectorAll('input[name="25-material-valor"]');
        materialValorInputs25.forEach(function (materialValorInput25) {
            materialValorInput25.value = precioMaterial25;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion25(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }
    materialRadios25.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio25);
    });

    instalacionRadios25.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio25);
    });

    placasInput25.addEventListener("input", actualizarPrecio25);

    actualizarPrecio25();

    //--------------------------------------------------------------------------------//

    // 26 - Red Inerte
    var precioTotal26 = 0;
    var cantidadPlacas26 = 0;
    var materialRadios26 = document.querySelectorAll('input[name="26-material"]');
    var instalacionRadios26 = document.querySelectorAll('input[name="26-instalar"]');
    var placasInput26 = document.getElementById("26-placas");
    var precioElement26 = document.getElementById("26-precio");
    var precioMaterial26 = 0; 

    var preciosMateriales26 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion26 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio26() {
        var materialSeleccionado26 = obtenerSeleccion26(materialRadios26);
        var instalacionSeleccionada26 = obtenerSeleccion26(instalacionRadios26);

        precioMaterial26 = preciosMateriales26[materialSeleccionado26] || 0;
        var precioInstalacion26 = preciosInstalacion26[instalacionSeleccionada26] || "";

        var material26 = "";
        if (materialSeleccionado26) {
            material26 = materialSeleccionado26;
        }

        cantidadPlacas26 = parseInt(placasInput26.value) || 0;
        precioTotal27 = (precioMaterial26 * cantidadPlacas26);

        precioElement26.innerHTML = "Valor por Señalética en " + material26 + ": $" + precioMaterial26 + "<br> <hr>" +
            "Total Sección: $" + precioTotal27 + " (IVA Incluido)";

        precioElement26.style.textAlign = "right";

        var materialValorInputs26 = document.querySelectorAll('input[name="26-material-valor"]');
        materialValorInputs26.forEach(function (materialValorInput26) {
            materialValorInput26.value = precioMaterial26;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion26(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios26.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio26);
    });

    instalacionRadios26.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio26);
    });

    placasInput26.addEventListener("input", actualizarPrecio26);

    actualizarPrecio26();

    //--------------------------------------------------------------------------------//

    // 27 - PELIGRO Red de Gas
    var precioTotal27 = 0;
    var cantidadPlacas27 = 0;
    var materialRadios27 = document.querySelectorAll('input[name="27-material"]');
    var instalacionRadios27 = document.querySelectorAll('input[name="27-instalar"]');
    var placasInput27 = document.getElementById("27-placas");
    var precioElement27 = document.getElementById("27-precio");
    var precioMaterial27 = 0; 

    var preciosMateriales27 = {
        "Sintra PVC": 8500
    };

    var preciosInstalacion27 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio27() {
        var materialSeleccionado27 = obtenerSeleccion27(materialRadios27);
        var instalacionSeleccionada27 = obtenerSeleccion27(instalacionRadios27);

        precioMaterial27 = preciosMateriales27[materialSeleccionado27] || 0;
        var precioInstalacion27 = preciosInstalacion27[instalacionSeleccionada27] || "";

        var material27 = "";
        if (materialSeleccionado27) {
            material27 = materialSeleccionado27;
        }

        cantidadPlacas27 = parseInt(placasInput27.value) || 0;
        precioTotal27 = (precioMaterial27 * cantidadPlacas27);

        precioElement27.innerHTML = "Valor por Señalética en " + material27 + ": $" + precioMaterial27 + "<br> <hr>" +
            "Total Sección: $" + precioTotal27 + " (IVA Incluido)";

        precioElement27.style.textAlign = "right";

        var materialValorInputs27 = document.querySelectorAll('input[name="27-material-valor"]');
        materialValorInputs27.forEach(function (materialValorInput27) {
            materialValorInput27.value = precioMaterial27;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion27(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios27.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio27);
    });

    instalacionRadios27.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio27);
    });

    placasInput27.addEventListener("input", actualizarPrecio27);

    actualizarPrecio27();

    //--------------------------------------------------------------------------------//

    // 28 - Señaletica Pare - REFLECTANTE
    var precioTotal28 = 0;
    var cantidadPlacas28 = 0;
    var cantidadPostes28 = 0;
    var medidasRadios28 = document.querySelectorAll('input[name="28-medidas"]');
    var instalacionRadios28 = document.querySelectorAll('input[name="28-instalar"]');
    var materialRadios28 = document.querySelectorAll('input[name="28-material"]');
    var placasInput28 = document.getElementById("28-placas");
    var postesInput28 = document.getElementById("28-postes");
    var precioElement28 = document.getElementById("28-precio");
    var precioMedidas28 = 0; 
    var precioPoste28 = 48000; 
    
    var preciosMedidasSintra28 = {
        "60cm X 60cm": 38500,
        "40cm X 40cm": 28500
    };
    
    var preciosMedidasAluminio28 = {
        "60cm X 60cm": 49500,
        "40cm X 40cm": 59500 
    };
    
    var preciosInstalacion28 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };
    
    function actualizarPrecio28() {
        var medidasSeleccionadas28 = obtenerSeleccion28(medidasRadios28);
        var instalacionSeleccionada28 = obtenerSeleccion28(instalacionRadios28);
        var materialSeleccionado28 = obtenerSeleccion28(materialRadios28);
    
        precioMedidas28 = 0;
        if (medidasSeleccionadas28) {
            if (materialSeleccionado28 === "Sintra PVC") {
                precioMedidas28 = preciosMedidasSintra28[medidasSeleccionadas28] || 0;
            } else if (materialSeleccionado28 === "Aluminio Compuesto") {
                precioMedidas28 = preciosMedidasAluminio28[medidasSeleccionadas28] || 0;
            }
        }
    
        var precioInstalacion28 = preciosInstalacion28[instalacionSeleccionada28] || "";
    
        var medidas28 = "";
        if (medidasSeleccionadas28) {
            medidas28 = medidasSeleccionadas28;
        }
    
        cantidadPlacas28 = parseInt(placasInput28.value) || 0;
    
        if (medidasSeleccionadas28 === "40cm X 40cm" || (materialSeleccionado28 === "Aluminio Compuesto" && medidasSeleccionadas28 !== "60cm X 60cm")) {
            postesInput28.value = "0"; 
            postesInput28.disabled = true; 
        } else {
            postesInput28.disabled = false; 
        }
    
        cantidadPostes28 = parseInt(postesInput28.value) || 0;
    
        precioTotal28 = (precioPoste28 * cantidadPostes28) + (precioMedidas28 * cantidadPlacas28);
    
        precioElement28.innerHTML = "Valor por Señalética en " + medidas28 + ": $" + precioMedidas28 + "<br>";
    
        if ((medidasSeleccionadas28 !== "40cm X 40cm" && medidasSeleccionadas28 !== "60cm X 60cm") || (materialSeleccionado28 === "Aluminio Compuesto" && medidasSeleccionadas28 === "60cm X 60cm")) {
            precioElement28.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste28 + "<br>";
        }
    
        precioElement28.innerHTML += "<hr>Total Sección: $" + precioTotal28 + " (IVA Incluido)";
    
        precioElement28.style.textAlign = "right";
    
        var medidasValorInputs28 = document.querySelectorAll('input[name="28-medidas-valor"]');
        medidasValorInputs28.forEach(function (medidasValorInput28) {
            medidasValorInput28.value = precioMedidas28;
        });
    
        actualizarPrecioTotalGlobal();
    }
    
    function obtenerSeleccion28(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }
    
    medidasRadios28.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio28);
    });
    
    instalacionRadios28.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio28);
    });
    
    materialRadios28.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio28);
    });
    
    placasInput28.addEventListener("input", actualizarPrecio28);
    postesInput28.addEventListener("input", actualizarPrecio28);
    
    actualizarPrecio28();
    
    //--------------------------------------------------------------------------------//

    // 29 - Display Informativo - Formato Carta
    var precioTotal29 = 0;
    var cantidadPlacas29 = 0;
    var materialRadios29 = document.querySelectorAll('input[name="29-material"]');
    var instalacionRadios29 = document.querySelectorAll('input[name="29-instalar"]');
    var placasInput29 = document.getElementById("29-placas");
    var precioElement29 = document.getElementById("29-precio");
    var precioMaterial29 = 0; 

    var preciosMateriales29 = {
        "Acrílico": 47500
    };

    var preciosInstalacion29 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio29() {
        var materialSeleccionado29 = obtenerSeleccion29(materialRadios29);
        var instalacionSeleccionada29 = obtenerSeleccion29(instalacionRadios29);

        precioMaterial29 = preciosMateriales29[materialSeleccionado29] || 0;
        var precioInstalacion29 = preciosInstalacion29[instalacionSeleccionada29] || "";

        var material29 = "";
        if (materialSeleccionado29) {
            material29 = materialSeleccionado29;
        }

        cantidadPlacas29 = parseInt(placasInput29.value) || 0;
        precioTotal29 = (precioMaterial29 * cantidadPlacas29);

        precioElement29.innerHTML = "Valor por Señalética en " + material29 + ": $" + precioMaterial29 + "<br> <hr>" +
            "Total Sección: $" + precioTotal29 + " (IVA Incluido)";

        precioElement29.style.textAlign = "right";

        var materialValorInputs29 = document.querySelectorAll('input[name="29-material-valor"]');
        materialValorInputs29.forEach(function (materialValorInput29) {
            materialValorInput29.value = precioMaterial29;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion29(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }

    materialRadios29.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio29);
    });

    instalacionRadios29.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio29);
    });

    placasInput29.addEventListener("input", actualizarPrecio29);

    actualizarPrecio29();

    //--------------------------------------------------------------------------------//

    // 30 - Planos de Distribución y Seguridad
    var precioTotal30 = 0;
    var cantidadPlacas30 = 0;
    var materialRadios30 = document.querySelectorAll('input[name="30-material"]');
    var instalacionRadios30 = document.querySelectorAll('input[name="30-instalar"]');
    var placasInput30 = document.getElementById("30-placas");
    var precioElement30 = document.getElementById("30-precio");
    var precioMaterial30 = 0; 

    var preciosMateriales30 = {
        "Acrílico": 398000,
        "Sintra PVC": 378000
    };

    var preciosInstalacion30 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio30() {
        var materialSeleccionado30 = obtenerSeleccion30(materialRadios30);
        var instalacionSeleccionada30 = obtenerSeleccion30(instalacionRadios30);

        precioMaterial30 = preciosMateriales30[materialSeleccionado30] || 0;
        var precioInstalacion30 = preciosInstalacion30[instalacionSeleccionada30] || "";

        var material30 = "";
        if (materialSeleccionado30) {
            material30 = materialSeleccionado30;
        }

        cantidadPlacas30 = parseInt(placasInput30.value) || 0;
        precioTotal30 = (precioMaterial30 * cantidadPlacas30);

        precioElement30.innerHTML = "Valor por Señalética en " + material30 + ": $" + precioMaterial30 + "<br> <hr>" +
            "Total Sección: $" + precioTotal30 + " (IVA Incluido)";

        precioElement30.style.textAlign = "right";

        var materialValorInputs30 = document.querySelectorAll('input[name="30-material-valor"]');
        materialValorInputs30.forEach(function (materialValorInput30) {
            materialValorInput30.value = precioMaterial30;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion30(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";
    }
    actualizarPrecio30();

    materialRadios30.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio30);
    });

    instalacionRadios30.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio30);
    });

    placasInput30.addEventListener("input", actualizarPrecio30);

    

    //--------------------------------------------------------------------------------//
    
    // 31 - Planos de Zona de Seguridad
    var precioTotal31 = 0;
    var cantidadPlacas31 = 0;
    var materialRadios31 = document.querySelectorAll('input[name="31-material"]');
    var instalacionRadios31 = document.querySelectorAll('input[name="31-instalar"]');
    var placasInput31 = document.getElementById("31-placas");
    var precioElement31 = document.getElementById("31-precio");
    var precioMaterial31 = 0; 
    
    var preciosMateriales31 = {
        "Acrílico": 88500,
        "Sintra Pvc": 68500
    };

    var preciosInstalacion31 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function actualizarPrecio31() {
        var materialSeleccionado31 = obtenerSeleccion31(materialRadios31);
        var instalacionSeleccionada31 = obtenerSeleccion31(instalacionRadios31);

        precioMaterial31 = preciosMateriales31[materialSeleccionado31] || 0;
        var precioInstalacion31 = preciosInstalacion31[instalacionSeleccionada31] || "";

        var material31 = "";
        if (materialSeleccionado31) {
            material31 = materialSeleccionado31;
        }

        cantidadPlacas31 = parseInt(placasInput31.value) || 0;
        precioTotal31 = (precioMaterial31 * cantidadPlacas31);

        if (materialSeleccionado31 === "Sintra PVC") {
            precioMaterial31 = preciosMateriales31["Sintra PVC"] || 0;
        }

        precioElement31.innerHTML = "Valor por Señalética en " + material31 + ": $" + precioMaterial31 + "<br> <hr>" +
            "Total Sección: $" + precioTotal31 + " (IVA Incluido)";

        precioElement31.style.textAlign = "right";

        var materialValorInputs31 = document.querySelectorAll('input[name="31-material-valor"]');
        materialValorInputs31.forEach(function (materialValorInput31) {
            materialValorInput31.value = precioMaterial31;
        });

        actualizarPrecioTotalGlobal();
    }

    function obtenerSeleccion31(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return "";

    }
    actualizarPrecio31();

    materialRadios31.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio31);
    });

    instalacionRadios31.forEach(function (radio) {
        radio.addEventListener("change", actualizarPrecio31);
    });

    placasInput31.addEventListener("input", actualizarPrecio31);

    //--------------------------------------------------------------------------------//
    
    // 32 - Señalética de Punto de Encuentro
    var precioTotal32 = 0;
    var cantidadPlacas32 = 0;
    var cantidadPostes32 = 0;
    var materialRadios32 = document.querySelectorAll('input[name="32-material"]');
    var instalacionRadios32 = document.querySelectorAll('input[name="32-instalar"]');
    var placasInput32 = document.getElementById("32-placas");
    var postesInput32 = document.getElementById("32-postes");
    var precioElement32 = document.getElementById("32-precio");
    var precioMaterial32 = 0; 
    var precioPoste32 = 48000; 

    var preciosMateriales32 = {
        "Aluminio Compuesto": 39000,
        "Sintra PVC": 18500
    };

    var preciosInstalacion32 = {
        "Con Instalación": "(MÁS INSTALACIÓN)",
        "Sin Instalación": "(SIN INSTALACIÓN)",
        "Solo Entrega": "(SOLO ENTREGA)"
    };

    function obtenerSeleccion32(radios) {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return null; // O un valor por defecto si no hay selección
    }

    function actualizarPrecio32() {
        var materialSeleccionado32 = obtenerSeleccion32(materialRadios32);
        var instalacionSeleccionada32 = obtenerSeleccion32(instalacionRadios32);

        precioMaterial32 = preciosMateriales32[materialSeleccionado32] || 0;
        var precioInstalacion32 = preciosInstalacion32[instalacionSeleccionada32] || "";

        var material32 = "";
        if (materialSeleccionado32) {
            material32 = materialSeleccionado32;
        }

        cantidadPlacas32 = parseInt(placasInput32.value) || 0;

        if (materialSeleccionado32 === "Sintra PVC") {
            postesInput32.value = "0"; // Establece la cantidad de postes en 0
            postesInput32.disabled = true; // Deshabilita el campo de entrada de postes
        } else {
            postesInput32.disabled = false; // Habilita el campo de entrada de postes
        }

        cantidadPostes32 = parseInt(postesInput32.value) || 0;

        precioTotal32 = (precioPoste32 * cantidadPostes32) + (precioMaterial32 * cantidadPlacas32);

        precioElement32.innerHTML = "Valor por Señalética en " + material32 + ": $" + precioMaterial32 + "<br>";

        if (materialSeleccionado32 !== "Sintra PVC") {
            precioElement32.innerHTML += "Valor por Poste Metálico de 3 Mts: $" + precioPoste32 + "<br>";
        }

        precioElement32.innerHTML += "<hr>Total Sección: $" + precioTotal32 + " (IVA Incluido)";

        precioElement32.style.textAlign = "right";

        var materialValorInputs32 = document.querySelectorAll('input[name="32-material-valor"]');
        materialValorInputs32.forEach(function(materialValorInput32) {
            materialValorInput32.value = precioMaterial32;
        });
        actualizarPrecioTotalGlobal();

    }

    actualizarPrecio32();

    materialRadios32.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio32);
    });

    instalacionRadios32.forEach(function(radio) {
        radio.addEventListener("change", actualizarPrecio32);
    });

    placasInput32.addEventListener("input", actualizarPrecio32);
    postesInput32.addEventListener("input", actualizarPrecio32);

//----------------------------------------------------------------------------------------------------//

function actualizarPrecioTotalGlobal() {
    var placasTotalGlobal = cantidadPlacas1 + cantidadPlacas2 + cantidadPlacas3 + cantidadPlacas4 + cantidadPlacas5 + cantidadPlacas6 + cantidadPlacas7 + cantidadPlacas8 + cantidadPlacas9 + cantidadPlacas10 + cantidadPlacas11 + cantidadPlacas12 + cantidadPlacas13 + cantidadPlacas14 + cantidadPlacas15 + cantidadPlacas16 + cantidadPlacas17 + cantidadPlacas18 + cantidadPlacas19 + cantidadPlacas20 + cantidadPlacas21 + cantidadPlacas22 + cantidadPlacas23 + cantidadPlacas24 + cantidadPlacas25 + cantidadPlacas26 + cantidadPlacas27 + cantidadPlacas28 + cantidadPlacas29 + cantidadPlacas30 + cantidadPlacas31 + cantidadPlacas32;
    var postesTotalGlobal = cantidadPostes1 + cantidadPostes8 + cantidadPostes10 + cantidadPostes11 + cantidadPostes14 + cantidadPostes15 + cantidadPostes16 + cantidadPostes17 + cantidadPostes18 + cantidadPostes19 + cantidadPostes20 + cantidadPostes28 + cantidadPostes32;
    var precioTotalGlobal = precioTotal1 + precioTotal2 + precioTotal3 + precioTotal4 + precioTotal5 + precioTotal6 + precioTotal7 + precioTotal8 + precioTotal9 + precioTotal10 + precioTotal11 + precioTotal12 + precioTotal13 + precioTotal14 + precioTotal15 + precioTotal16 + precioTotal17 + precioTotal18 + precioTotal19 + precioTotal20 + precioTotal21 + precioTotal22 + precioTotal23 + precioTotal24 + precioTotal25 + precioTotal26 + precioTotal27 + precioTotal28 + precioTotal29 + precioTotal30 + precioTotal31 + precioTotal32;
    var valorTotalElement = document.getElementById("cantidadPlacas");
    valorTotalElement.innerHTML = "<h3>" + placasTotalGlobal + " </h3><h5>AGREGADAS</h5>";
    var valorTotalElement = document.getElementById("cantidadPostes");
    valorTotalElement.innerHTML = "<h3>" + postesTotalGlobal + " </h3><h5>AGREGADOS</h5>";
    var valorTotalElement = document.getElementById("valorTotal");
    valorTotalElement.innerHTML = "<h3>$" + precioTotalGlobal + "</h3><h5>PRECIO IVA INCLUIDO</h5>";
}
    
});
