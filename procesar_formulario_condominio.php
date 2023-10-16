<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombreContacto"];
    $condominio = $_POST["nombreCondominio"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $logo = $_POST["logotipo"];
    


  //1 - Señaletica de Normas del Condominio Portón Ingreso
    $placas1 = $_POST["1-placas"];
    $postes1 = $_POST["1-postes"];
    $medidas1 = $_POST["1-medidas"];
    $material1 = $_POST["1-material"];
    $grafica1 = $_POST["1-vinilo"];
    $instalacion1 = $_POST["1-instalar"];
    $valor1 = $_POST["1-material-valor"];
    // Obtener el valor de 1-lugar seleccionado
    $lugarSeleccionado1 = $_POST["1-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar1 en consecuencia
    if ($lugarSeleccionado1 === "OTRO") {
        $lugar1 = $_POST["1-ciudadEspecifica"];
    } else {
        $lugar1 = $lugarSeleccionado1;
    }
    $total1 = $valor1*$placas1;
    $totalpostes1 = $placas1*$postes1;

  //2 - Señaletica de Uso Correcto de Shaft de Basura
    $placas2 = $_POST["2-placas"];
    $postes2 = $_POST["2-postes"];
    $medidas2 = $_POST["2-medidas"];
    $material2 = $_POST["2-material"];
    $grafica2 = $_POST["2-vinilo"];
    $instalacion2 = $_POST["2-instalar"];
    $valor2 = $_POST["2-material-valor"];
    // Obtener el valor de 2-lugar seleccionado
    $lugarSeleccionado2 = $_POST["2-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar2 en consecuencia
    if ($lugarSeleccionado2 === "OTRO") {
        $lugar2 = $_POST["2-ciudadEspecifica"];
    } else {
        $lugar2 = $lugarSeleccionado2;
    }
    $total2 = $valor2*$placas2;
    $totalpostes2 = $placas2*$postes2;

  //3 - Señalética de Reglamento Tenencia Responsable de Mascotas
    $placas3 = $_POST["3-placas"];
    $postes3 = $_POST["3-postes"];
    $medidas3 = $_POST["3-medidas"];
    $material3 = $_POST["3-material"];
    $grafica3 = $_POST["3-vinilo"];
    $instalacion3 = $_POST["3-instalar"];
    $valor3 = $_POST["3-medidas-valor"];
    // Obtener el valor de 3-lugar seleccionado
    $lugarSeleccionado3 = $_POST["3-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar3 en consecuencia
    if ($lugarSeleccionado3 === "OTRO") {
        $lugar3 = $_POST["3-ciudadEspecifica"];
    } else {
        $lugar3 = $lugarSeleccionado3;
    }
    $total3 = $valor3*$placas3;
    $totalpostes3 = $placas3*$postes3;

  //4 -  Sticker para Vehículos de Residentes
    $placas4 = $_POST["4-placas"];
    $medidas4 = $_POST["4-medidas"];
    $material4 = $_POST["4-material"];
    $grafica4 = $_POST["4-vinilo"];
    $instalacion4 = $_POST["4-instalar"];
    $valor4 = $_POST["4-medidas-valor"];
    // Obtener el valor de 4-lugar seleccionado
    $lugarSeleccionado4 = $_POST["4-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar4 en consecuencia
    if ($lugarSeleccionado4 === "OTRO") {
        $lugar4 = $_POST["4-ciudadEspecifica"];
    } else {
        $lugar4 = $lugarSeleccionado4;
    }
    $total4 = $valor4*$placas4;
    $totalpostes4 = $placas4*$postes4;

    //5 - Señalética de Conserje en Ronda
    $placas5 = $_POST["5-placas"];
    $medidas5 = $_POST["5-medidas"];
    $material5 = $_POST["5-material"];
    $grafica5 = $_POST["5-vinilo"];
    $instalacion5 = $_POST["5-instalar"];
    $valor5 = $_POST["5-medidas-valor"];
    // Obtener el valor de 5-lugar seleccionado
    $lugarSeleccionado5 = $_POST["5-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar5 en consecuencia
    if ($lugarSeleccionado5 === "OTRO") {
        $lugar5 = $_POST["5-ciudadEspecifica"];
    } else {
        $lugar5 = $lugarSeleccionado5;
    }
    $total5 = $valor5*$placas5;
    $totalpostes5 = $placas5*$postes5;

    //6 - Señalética Normas del Condominio
    $placas6 = $_POST["6-placas"];
    $postes6 = $_POST["6-postes"];
    $medidas6 = $_POST["6-medidas"];
    $material6 = $_POST["6-material"];
    $grafica6 = $_POST["6-vinilo"];
    $instalacion6 = $_POST["6-instalar"];
    $valor6 = $_POST["6-material-valor"];
    // Obtener el valor de 6-lugar seleccionado
    $lugarSeleccionado6 = $_POST["6-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar6 en consecuencia
    if ($lugarSeleccionado6 === "OTRO") {
        $lugar6 = $_POST["6-ciudadEspecifica"];
    } else {
        $lugar6 = $lugarSeleccionado6;
    }
    $total6 = $valor6*$placas6;
    $totalpostes6 = $placas6*$postes6;

    //7 - Reglamento de Quincho
    $placas7 = $_POST["7-placas"];
    $postes7 = $_POST["7-postes"];
    $medidas7 = $_POST["7-medidas"];
    $material7 = $_POST["7-material"];
    $grafica7 = $_POST["7-vinilo"];
    $instalacion7 = $_POST["7-instalar"];
    $valor7 = $_POST["7-medidas-valor"];
    // Obtener el valor de 7-lugar seleccionado
    $lugarSeleccionado7 = $_POST["7-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar7 en consecuencia
    if ($lugarSeleccionado7 === "OTRO") {
        $lugar7 = $_POST["7-ciudadEspecifica"];
    } else {
        $lugar7 = $lugarSeleccionado7;
    }
    $total7 = $valor7*$placas7;
    $totalpostes7 = $placas7*$postes7;

    //8 - Reglamento de Piscina
    $placas8 = $_POST["8-placas"];
    $postes8 = $_POST["8-postes"];
    $medidas8 = $_POST["8-medidas"];
    $material8 = $_POST["8-material"];
    $grafica8 = $_POST["8-vinilo"];
    $instalacion8 = $_POST["8-instalar"];
    $valor8 = $_POST["8-material-valor"];
    // Obtener el valor de 8-lugar seleccionado
    $lugarSeleccionado8 = $_POST["8-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar7 en consecuencia
    if ($lugarSeleccionado8 === "OTRO") {
        $lugar8 = $_POST["8-ciudadEspecifica"];
    } else {
        $lugar8 = $lugarSeleccionado8;
    }
    $total8 = $valor8*$placas8;
    $totalpostes8 = $placas8*$postes8;

    //9 - Piscina sin Salvavidas
    $placas9 = $_POST["9-placas"];
    $postes9 = $_POST["9-postes"];
    $medidas9 = $_POST["9-medidas"];
    $material9 = $_POST["9-material"];
    $grafica9 = $_POST["9-vinilo"];
    $instalacion9 = $_POST["9-instalar"];
    $valor9 = $_POST["9-material-valor"];
    // Obtener el valor de 9-lugar seleccionado
    $lugarSeleccionado9 = $_POST["9-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar7 en consecuencia
    if ($lugarSeleccionado9 === "OTRO") {
        $lugar9 = $_POST["9-ciudadEspecifica"];
    } else {
        $lugar9 = $lugarSeleccionado9;
    }
    $total9 = $valor9*$placas9;
    $totalpostes9 = $placas9*$postes9;

    //10 - No Pisar el Cesped
    $placas10 = $_POST["10-placas"];
    $postes10 = $_POST["10-postes"];
    $medidas10 = $_POST["10-medidas"];
    $material10 = $_POST["10-material"];
    $grafica10 = $_POST["10-vinilo"];
    $instalacion10 = $_POST["10-instalar"];
    $valor10 = $_POST["10-material-valor"];
    // Obtener el valor de 10-lugar seleccionado
    $lugarSeleccionado10 = $_POST["10-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar10 en consecuencia
    if ($lugarSeleccionado10 === "OTRO") {
        $lugar10 = $_POST["10-ciudadEspecifica"];
    } else {
        $lugar10 = $lugarSeleccionado10;
    }
    $total10 = $valor10*$placas10;
    $totalpostes10 = $placas10*$postes10;

    //11 - No Jugar a la Pelota
    $placas11 = $_POST["11-placas"];
    $postes11 = $_POST["11-postes"];
    $medidas11 = $_POST["11-medidas"];
    $material11 = $_POST["11-material"];
    $grafica11 = $_POST["11-vinilo"];
    $instalacion11 = $_POST["11-instalar"];
    $valor11 = $_POST["11-material-valor"];
    // Obtener el valor de 11-lugar seleccionado
    $lugarSeleccionado11 = $_POST["11-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar11 en consecuencia
    if ($lugarSeleccionado11 === "OTRO") {
        $lugar11 = $_POST["11-ciudadEspecifica"];
    } else {
        $lugar11 = $lugarSeleccionado11;
    }
    $total11 = $valor11*$placas11;
    $totalpostes11 = $placas11*$postes11;

    //12 - Sector de Área de Juego
    $placas12 = $_POST["12-placas"];
    $postes12 = $_POST["12-postes"];
    $medidas12 = $_POST["12-medidas"];
    $material12 = $_POST["12-material"];
    $grafica12 = $_POST["12-vinilo"];
    $instalacion12 = $_POST["12-instalar"];
    $valor12 = $_POST["12-material-valor"];
    // Obtener el valor de 12-lugar seleccionado
    $lugarSeleccionado12 = $_POST["12-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar12 en consecuencia
    if ($lugarSeleccionado12 === "OTRO") {
        $lugar12 = $_POST["12-ciudadEspecifica"];
    } else {
        $lugar12 = $lugarSeleccionado12;
    }
    $total12 = $valor12*$placas12;
    $totalpostes12 = $placas12*$postes12;

    //13 - Zona de Reciclaje / Punto Limpio
    $placas13 = $_POST["13-placas"];
    $postes13 = $_POST["13-postes"];
    $medidas13 = $_POST["13-medidas"];
    $material13 = $_POST["13-material"];
    $grafica13 = $_POST["13-vinilo"];
    $instalacion13 = $_POST["13-instalar"];
    $valor13 = $_POST["13-material-valor"];
    // Obtener el valor de 13-lugar seleccionado
    $lugarSeleccionado13 = $_POST["13-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar13 en consecuencia
    if ($lugarSeleccionado13 === "OTRO") {
        $lugar13 = $_POST["13-ciudadEspecifica"];
    } else {
        $lugar13 = $lugarSeleccionado13;
    }
    $total13 = $valor13*$placas13;
    $totalpostes13 = $placas13*$postes13;

    //14 - Estacionamiento de Visitas
    $placas14 = $_POST["14-placas"];
    $postes14 = $_POST["14-postes"];
    $medidas14 = $_POST["14-medidas"];
    $material14 = $_POST["14-material"];
    $grafica14 = $_POST["14-vinilo"];
    $instalacion14 = $_POST["14-instalar"];
    $valor14 = $_POST["14-material-valor"];
    // Obtener el valor de 14-lugar seleccionado
    $lugarSeleccionado14 = $_POST["14-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar14 en consecuencia
    if ($lugarSeleccionado14 === "OTRO") {
        $lugar14 = $_POST["14-ciudadEspecifica"];
    } else {
        $lugar14 = $lugarSeleccionado14;
    }
    $total14 = $valor14*$placas14;
    $totalpostes14 = $placas14*$postes14;

    //15 - Estacionamiento de Residentes
    $placas15 = $_POST["15-placas"];
    $postes15 = $_POST["15-postes"];
    $medidas15 = $_POST["15-medidas"];
    $material15 = $_POST["15-material"];
    $grafica15 = $_POST["15-vinilo"];
    $instalacion15 = $_POST["15-instalar"];
    $valor15 = $_POST["15-material-valor"];
    // Obtener el valor de 15-lugar seleccionado
    $lugarSeleccionado15 = $_POST["15-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar15 en consecuencia
    if ($lugarSeleccionado15 === "OTRO") {
        $lugar15 = $_POST["15-ciudadEspecifica"];
    } else {
        $lugar15 = $lugarSeleccionado15;
    }
    $total15 = $valor15*$placas15;
    $totalpostes15 = $placas15*$postes15;

    //16 - Estacionamiento de Motos
    $placas16 = $_POST["16-placas"];
    $postes16 = $_POST["16-postes"];
    $medidas16 = $_POST["16-medidas"];
    $material16 = $_POST["16-material"];
    $grafica16 = $_POST["16-vinilo"];
    $instalacion16 = $_POST["16-instalar"];
    $valor16 = $_POST["16-material-valor"];
    // Obtener el valor de 16-lugar seleccionado
    $lugarSeleccionado16 = $_POST["16-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar16 en consecuencia
    if ($lugarSeleccionado16 === "OTRO") {
        $lugar16 = $_POST["16-ciudadEspecifica"];
    } else {
        $lugar16 = $lugarSeleccionado16;
    }
    $total16 = $valor16*$placas16;
    $totalpostes17 = $placas17*$postes17;

    //17 - Estacionamiento de Discapacitados
    $placas17 = $_POST["17-placas"];
    $postes17 = $_POST["17-postes"];
    $medidas17 = $_POST["17-medidas"];
    $material17 = $_POST["17-material"];
    $grafica17 = $_POST["17-vinilo"];
    $instalacion17 = $_POST["17-instalar"];
    $valor17 = $_POST["17-material-valor"];
    // Obtener el valor de 17-lugar seleccionado
    $lugarSeleccionado17 = $_POST["17-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar17 en consecuencia
    if ($lugarSeleccionado17 === "OTRO") {
        $lugar17 = $_POST["17-ciudadEspecifica"];
    } else {
        $lugar17 = $lugarSeleccionado17;
    }
    $total17 = $valor17*$placas17;
    $totalpostes17 = $placas17*$postes17;

    //18 - No Estacionar
    $placas18 = $_POST["18-placas"];
    $postes18 = $_POST["18-postes"];
    $medidas18 = $_POST["18-medidas"];
    $material18 = $_POST["18-material"];
    $grafica18 = $_POST["18-vinilo"];
    $instalacion18 = $_POST["18-instalar"];
    $valor18 = $_POST["18-material-valor"];
    // Obtener el valor de 18-lugar seleccionado
    $lugarSeleccionado18 = $_POST["18-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar18 en consecuencia
    if ($lugarSeleccionado18 === "OTRO") {
        $lugar18 = $_POST["18-ciudadEspecifica"];
    } else {
        $lugar18 = $lugarSeleccionado18;
    }
    $total18 = $valor18*$placas18;
    $totalpostes18 = $placas18*$postes18;

    //19 - Velocidad Máxima
    $placas19 = $_POST["19-placas"];
    $postes19 = $_POST["19-postes"];
    $medidas19 = $_POST["19-medidas"];
    $material19 = $_POST["19-material"];
    $grafica19 = $_POST["19-vinilo"];
    $instalacion19 = $_POST["19-instalar"];
    $valor19 = $_POST["19-material-valor"];
    // Obtener el valor de 19-lugar seleccionado
    $lugarSeleccionado19 = $_POST["19-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar19 en consecuencia
    if ($lugarSeleccionado19 === "OTRO") {
        $lugar19 = $_POST["19-ciudadEspecifica"];
    } else {
        $lugar19 = $lugarSeleccionado19;
    }
    $total19 = $valor19*$placas19;
    $totalpostes19 = $placas19*$postes19;

    //20 - Zona Segura
    $placas20 = $_POST["20-placas"];
    $postes20 = $_POST["20-postes"];
    $medidas20 = $_POST["20-medidas"];
    $material20 = $_POST["20-material"];
    $grafica20 = $_POST["20-vinilo"];
    $instalacion20 = $_POST["20-instalar"];
    $valor20 = $_POST["20-material-valor"];
    //Obtener el valor de 20-lugar seleccionado
    $lugarSeleccionado20 = $_POST["20-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar20 en consecuencia
    if ($lugarSeleccionado20 === "OTRO") {
        $lugar20 = $_POST["20-ciudadEspecifica"];
    } else {
        $lugar20 = $lugarSeleccionado20;
    }
    $total20 = $valor20*$placas20;
    $totalpostes20 = $placas20*$postes20;

    //21 - Vías de Evacuación
    $placas21 = $_POST["21-placas"];
    $postes21 = $_POST["21-postes"];
    $medidas21 = $_POST["21-medidas"];
    $material21 = $_POST["21-material"];
    $grafica21 = $_POST["21-vinilo"];
    $instalacion21 = $_POST["21-instalar"];
    $valor21 = $_POST["21-material-valor"];
    //Obtener el valor de 21-lugar seleccionado
    $lugarSeleccionado21 = $_POST["21-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar21 en consecuencia
    if ($lugarSeleccionado21 === "OTRO") {
        $lugar21 = $_POST["21-ciudadEspecifica"];
    } else {
        $lugar21 = $lugarSeleccionado21;
    }
    $total21 = $valor21*$placas21;
    $totalpostes21 = $placas21*$postes21;

    //22 - Salida de Emergencia
    $placas22 = $_POST["22-placas"];
    $postes22 = $_POST["22-postes"];
    $medidas22 = $_POST["22-medidas"];
    $material22 = $_POST["22-material"];
    $grafica22 = $_POST["22-vinilo"];
    $instalacion22 = $_POST["22-instalar"];
    $valor22 = $_POST["22-material-valor"];
    //Obtener el valor de 22-lugar seleccionado
    $lugarSeleccionado22 = $_POST["22-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar22 en consecuencia
    if ($lugarSeleccionado22 === "OTRO") {
        $lugar22 = $_POST["22-ciudadEspecifica"];
    } else {
        $lugar22 = $lugarSeleccionado22;
    }
    $total22 = $valor22*$placas22;
    $totalpostes22 = $placas22*$postes22;

    //23 - Extintor
    $placas23 = $_POST["23-placas"];
    $postes23 = $_POST["23-postes"];
    $medidas23 = $_POST["23-medidas"];
    $material23 = $_POST["23-material"];
    $grafica23 = $_POST["23-vinilo"];
    $instalacion23 = $_POST["23-instalar"];
    $valor23 = $_POST["23-material-valor"];
    //Obtener el valor de 23-lugar seleccionado
    $lugarSeleccionado23 = $_POST["23-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar23 en consecuencia
    if ($lugarSeleccionado23 === "OTRO") {
        $lugar23 = $_POST["23-ciudadEspecifica"];
    } else {
        $lugar23 = $lugarSeleccionado23;
    }
    $total23 = $valor23*$placas23;
    $totalpostes23 = $placas23*$postes23;

    //24 - Red Húmeda
    $placas24 = $_POST["24-placas"];
    $postes24 = $_POST["24-postes"];
    $medidas24 = $_POST["24-medidas"];
    $material24 = $_POST["24-material"];
    $grafica24 = $_POST["24-vinilo"];
    $instalacion24 = $_POST["24-instalar"];
    $valor24 = $_POST["24-material-valor"];
    //Obtener el valor de 24-lugar seleccionado
    $lugarSeleccionado24 = $_POST["24-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar24 en consecuencia
    if ($lugarSeleccionado24 === "OTRO") {
        $lugar24 = $_POST["24-ciudadEspecifica"];
    } else {
        $lugar24 = $lugarSeleccionado24;
    }
    $total24 = $valor24 * $placas24;
    $totalpostes24 = $placas24*$postes24;

    //25 - Red Seca SALIDA
    $placas25 = $_POST["25-placas"];
    $postes25 = $_POST["25-postes"];
    $medidas25 = $_POST["25-medidas"];
    $material25 = $_POST["25-material"];
    $grafica25 = $_POST["25-vinilo"];
    $instalacion25 = $_POST["25-instalar"];
    $valor25 = $_POST["25-material-valor"];
    //Obtener el valor de 25-lugar seleccionado
    $lugarSeleccionado25 = $_POST["25-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar25 en consecuencia
    if ($lugarSeleccionado25 === "OTRO") {
        $lugar25 = $_POST["25-ciudadEspecifica"];
    } else {
        $lugar25 = $lugarSeleccionado25;
    }
    $total25 = $valor25 * $placas25;
    $totalpostes25 = $placas25*$postes26;

    //26 - Red Inerte
    $placas26 = $_POST["26-placas"];
    $postes26 = $_POST["26-postes"];
    $medidas26 = $_POST["26-medidas"];
    $material26 = $_POST["26-material"];
    $grafica26 = $_POST["26-vinilo"];
    $instalacion26 = $_POST["26-instalar"];
    $valor26 = $_POST["26-material-valor"];
    //Obtener el valor de 26-lugar seleccionado
    $lugarSeleccionado26 = $_POST["26-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar26 en consecuencia
    if ($lugarSeleccionado26 === "OTRO") {
        $lugar26 = $_POST["26-ciudadEspecifica"];
    } else {
        $lugar26 = $lugarSeleccionado26;
    }
    $total26 = $valor26 * $placas26;
    $totalpostes26 = $placas26*$postes26;

    //27 - PELIGRO Red de Gas
    $placas27 = $_POST["27-placas"];
    $postes27 = $_POST["27-postes"];
    $medidas27 = $_POST["27-medidas"];
    $material27 = $_POST["27-material"];
    $grafica27 = $_POST["27-vinilo"];
    $instalacion27 = $_POST["27-instalar"];
    $valor27 = $_POST["27-material-valor"];
    //Obtener el valor de 27-lugar seleccionado
    $lugarSeleccionado27 = $_POST["27-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar27 en consecuencia
    if ($lugarSeleccionado27 === "OTRO") {
        $lugar27 = $_POST["27-ciudadEspecifica"];
    } else {
        $lugar27 = $lugarSeleccionado27;
    }
    $total27 = $valor27 * $placas27;
    $totalpostes27 = $placas27*$postes27;

    //28 - Señaletica Pare - REFLECTANTE
    $placas28 = $_POST["28-placas"];
    $postes28 = $_POST["28-postes"];
    $medidas28 = $_POST["28-medidas"];
    $material28 = $_POST["28-material"];
    $grafica28 = $_POST["28-vinilo"];
    $instalacion28 = $_POST["28-instalar"];
    $valor28 = $_POST["28-medidas-valor"];
    //Obtener el valor de 28-lugar seleccionado
    $lugarSeleccionado28 = $_POST["28-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar28 en consecuencia
    if ($lugarSeleccionado28 === "OTRO") {
        $lugar28 = $_POST["28-ciudadEspecifica"];
    } else {
        $lugar28 = $lugarSeleccionado28;
    }
    $total28 = $valor28 * $placas28;
    $totalpostes28 = $placas28*$postes28;

    //29 - Display Informativo - Formato Carta
    $placas29 = $_POST["29-placas"];
    $postes29 = $_POST["29-postes"];
    $medidas29 = $_POST["29-medidas"];
    $material29 = $_POST["29-material"];
    $grafica29 = $_POST["29-vinilo"];
    $instalacion29 = $_POST["29-instalar"];
    $valor29 = $_POST["29-material-valor"];
    //Obtener el valor de 29-lugar seleccionado
    $lugarSeleccionado29 = $_POST["29-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar29 en consecuencia
    if ($lugarSeleccionado29 === "OTRO") {
        $lugar29 = $_POST["29-ciudadEspecifica"];
    } else {
        $lugar29 = $lugarSeleccionado29;
    }
    $total29 = $valor29 * $placas29;
    $totalpostes29 = $placas29*$postes29;

    //30 - Planos de Distribución y Seguridad
    $placas30 = $_POST["30-placas"];
    $postes30 = $_POST["30-postes"];
    $medidas30 = $_POST["30-medidas"];
    $material30 = $_POST["30-material"];
    $grafica30 = $_POST["30-vinilo"];
    $instalacion30 = $_POST["30-instalar"];
    $valor30 = $_POST["30-material-valor"];
    //Obtener el valor de 30-lugar seleccionado
    $lugarSeleccionado30 = $_POST["30-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar30 en consecuencia
    if ($lugarSeleccionado30 === "OTRO") {
        $lugar30 = $_POST["30-ciudadEspecifica"];
    } else {
        $lugar30 = $lugarSeleccionado30;
    }
    $total30 = $valor30 * $placas30;
    $totalpostes30 = $placas30*$postes30;

    //31 - Planos de Zona de Seguridad
    $placas31 = $_POST["31-placas"];
    $postes31 = $_POST["31-postes"];
    $medidas31 = $_POST["31-medidas"];
    $material31 = $_POST["31-material"];
    $grafica31 = $_POST["31-vinilo"];
    $instalacion31 = $_POST["31-instalar"];
    $valor31 = $_POST["31-material-valor"];
    //Obtener el valor de 31-lugar seleccionado
    $lugarSeleccionado31 = $_POST["31-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar31 en consecuencia
    if ($lugarSeleccionado31 === "OTRO") {
        $lugar31 = $_POST["31-ciudadEspecifica"];
    } else {
        $lugar31 = $lugarSeleccionado31;
    }
    $total31 = $valor31 * $placas31;
    $totalpostes31 = $placas31*$postes31;

    //32 - Señalética de Punto de Encuentro
    $placas32 = $_POST["32-placas"];
    $postes32 = $_POST["32-postes"];
    $medidas32 = $_POST["32-medidas"];
    $material32 = $_POST["32-material"];
    $grafica32 = $_POST["32-vinilo"];
    $instalacion32 = $_POST["32-instalar"];
    $valor32 = $_POST["32-material-valor"];
    //Obtener el valor de 32-lugar seleccionado
    $lugarSeleccionado32 = $_POST["32-lugar"];
    // Verificar si se seleccionó "OTRO" y ajustar $lugar32 en consecuencia
    if ($lugarSeleccionado32 === "OTRO") {
        $lugar32 = $_POST["32-ciudadEspecifica"];
    } else {
        $lugar32 = $lugarSeleccionado32;
    }
    $total32 = $valor32 * $placas32;
    $totalpostes32 = $placas32*$postes32;



    

    //--------------------------------------------------------------------//

    $totalprecio = 0;

    for ($i = 1; $i <= 32; $i++) {
        $nombreVariable = "total" . $i; // Construir el nombre de la variable dinámicamente
        if (isset($$nombreVariable)) {
            $totalprecio += $$nombreVariable;
        }
    }

    $totalplacas = 0;

    for ($i = 1; $i <= 32; $i++) {
        $nombreVariable1 = "placas" . $i; // Construir el nombre de la variable dinámicamente
        if (isset($$nombreVariable1)) {
            $totalplacas += $$nombreVariable1;
        }
    }

    $totalpostes = 0;

    for ($i = 1; $i <= 32; $i++) {
        $nombreVariable2 = "postes" . $i; // Construir el nombre de la variable dinámicamente
        if (isset($$nombreVariable2) && $i != 10 && $i != 11) {
            $totalpostes += $$nombreVariable2;
        }
    }


    $precioposte = 48000;
    $precioestaca = 3500;

    //--------------------------------------------------------------------//
    
    //**ENVIO DEL MENSAJE */
    $to = "arte@aranciopublicidad.cl"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de Cotización del Condominio: ".$condominio;

    //----------------------------------------------------------------------//

    // CUERPO DEL MENSAJE
    $body = "Nombre de Contacto: ".$nombre."\n";
    $body .= "Nombre del Condominio: ".$condominio."\n";
    $body .= "Dirección del Condominio: ".$direccion."\n";
    $body .= "Telefono Contacto: ".$telefono."\n";
    $body .= "E-mail: ".$email."\n";
    $body .= "Logotipo: ".$logo."\n";
    $body .= "Cantidad de Placas: ".$totalplacas."\n";
    $body .= "Cantidad de Postes: ".$totalpostes."\n";
    $body .= "Cantidad de Estacas: ".($totalpostes10 + $totalpostes11)."\n";
    $body .= "Valor Solo Placas: $".$totalprecio."\n";
    $body .= "Valor Solo Postes: $" . ($totalpostes * $precioposte) . "\n";
    $body .= "Valor Solo Estacas: $" . ($valorestaca * ($poste10 + $poste11)) . "\n";
    $body .= "Valor Total: $" . (($valorestaca * ($poste10 + $poste11)) + ($totalpostes * $precioposte) + $totalprecio) .  "\n\n";


    
    $body .= "**PRODUCTOS:**\n";
    $body .= "1 - Señaletica de Normas del Condominio Portón Ingreso ( ".$placas1." )\n";
    $body .= "  Cantidad de Placas: ".$placas1."\n";
    $body .= "  Cantidad de Postes: ".$postes1."\n";
    $body .= "  Medida: ".$medidas1."\n";
    $body .= "  Materialidad de la Placa: ".$material1."\n";
    $body .= "  Gráfica Personalizada : ".$grafica1."\n";
    $body .= "  Instalación: ".$instalacion1."\n";
    $body .= "  Valor Unitario: $".$valor1."\n";
    $body .= "  Lugar de Instalación: ".$lugar1."\n";
    $body .= "  VALOR PLACAS: $".$total1." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes1 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total1 + ($postes1 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "2 - Señaletica de Uso Correcto de Shaft de Basura ( ".$placas2." )\n";
    $body .= "  Cantidad de Placas: ".$placas2."\n";
    $body .= "  Medida: ".$medidas2."\n";
    $body .= "  Materialidad de la Placa: ".$material2."\n";
    $body .= "  Gráfica Personalizada : ".$grafica2."\n";
    $body .= "  Instalación: ".$instalacion2."\n";
    $body .= "  Valor Unitario: $".$valor2."\n";
    $body .= "  Lugar de Instalación: ".$lugar2."\n";
    $body .= "  VALOR TOTAL: $".$total2." (IVA INCLUIDO)\n\n";

    $body .= "3 - Señalética de Reglamento Tenencia Responsable de Mascotas ( ".$placas3." )\n";
    $body .= "  Cantidad de Placas: ".$placas3."\n";
    $body .= "  Medida: ".$medidas3."\n";
    $body .= "  Materialidad de la Placa: ".$material3."\n";
    $body .= "  Gráfica Personalizada : ".$grafica3."\n";
    $body .= "  Instalación: ".$instalacion3."\n";
    $body .= "  Valor Unitario: $".$valor3."\n";
    $body .= "  Lugar de Instalación: ".$lugar3."\n";
    $body .= "  VALOR TOTAL: $".$total3." (IVA INCLUIDO)\n\n";

    $body .= "4 -  Sticker para Vehículos de Residentes ( ".$placas4." )\n";
    $body .= "  Cantidad de Placas: ".$placas4."\n";
    $body .= "  Medida: ".$medidas4."\n";
    $body .= "  Materialidad de la Placa: ".$material4."\n";
    $body .= "  Gráfica Personalizada : ".$grafica4."\n";
    $body .= "  Instalación: ".$instalacion4."\n";
    $body .= "  Valor Unitario: $".$valor4."\n";
    $body .= "  Lugar de Instalación:".$lugar4."\n";
    $body .= "  VALOR TOTAL: $".$total4." (IVA INCLUIDO)\n\n";

    $body .= "5 - Señalética de Conserje en Ronda ( ".$placas5." )\n";
    $body .= "  Cantidad de Placas: ".$placas5."\n";
    $body .= "  Medida: ".$medidas5."\n";
    $body .= "  Materialidad de la Placa: ".$material5."\n";
    $body .= "  Gráfica Personalizada : ".$grafica5."\n";
    $body .= "  Instalación: ".$instalacion5."\n";
    $body .= "  Valor Unitario: $".$valor5."\n";
    $body .= "  Lugar de Instalación: ".$lugar5."\n";
    $body .= "  VALOR TOTAL: $".$total5." (IVA INCLUIDO)\n\n";

    $body .= "6 - Señalética Normas del Condominio ( ".$placas6." )\n";
    $body .= "  Cantidad de Placas: ".$placas6."\n";
    $body .= "  Medida: ".$medidas6."\n";
    $body .= "  Materialidad de la Placa: ".$material6."\n";
    $body .= "  Gráfica Personalizada : ".$grafica6."\n";
    $body .= "  Instalación: ".$instalacion6."\n";
    $body .= "  Valor Unitario: $".$valor6."\n";
    $body .= "  Lugar de Instalación: ".$lugar6."\n";
    $body .= "  VALOR TOTAL: $".$total6." (IVA INCLUIDO)\n\n";
    
    $body .= "7 - Reglamento de Quincho ( ".$placas7." )\n";
    $body .= "  Cantidad de Placas: ".$placas7."\n";
    $body .= "  Medida: ".$medidas7."\n";
    $body .= "  Materialidad de la Placa: ".$material7."\n";
    $body .= "  Gráfica Personalizada : ".$grafica7."\n";
    $body .= "  Instalación: ".$instalacion7."\n";
    $body .= "  Valor Unitario: $".$valor7."\n";
    $body .= "  Lugar de Instalación: ".$lugar7."\n";
    $body .= "  VALOR TOTAL: $".$total7." (IVA INCLUIDO)\n\n";

    $body .= "8 - Reglamento de Piscina ( ".$placas8." )\n";
    $body .= "  Cantidad de Placas: ".$placas8."\n";
    $body .= "  Cantidad de Postes: ".$postes8."\n";
    $body .= "  Medida: ".$medidas8."\n";
    $body .= "  Materialidad de la Placa: ".$material8."\n";
    $body .= "  Gráfica Personalizada : ".$grafica8."\n";
    $body .= "  Instalación: ".$instalacion8."\n";
    $body .= "  Valor Unitario: $".$valor8."\n";
    $body .= "  Lugar de Instalación: ".$lugar8."\n";
    $body .= "  VALOR PLACAS: $".$total8." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes8 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total8 + ($postes8 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "9 - Piscina sin Salvavidas ( ".$placas9." )\n";
    $body .= "  Cantidad de Placas: ".$placas9."\n";
    $body .= "  Medida: ".$medidas9."\n";
    $body .= "  Materialidad de la Placa: ".$material9."\n";
    $body .= "  Gráfica Personalizada : ".$grafica9."\n";
    $body .= "  Instalación: ".$instalacion9."\n";
    $body .= "  Valor Unitario: $".$valor9."\n";
    $body .= "  Lugar de Instalación: ".$lugar9."\n";
    $body .= "  VALOR TOTAL: $".$total9." (IVA INCLUIDO)\n\n";

    $body .= "10 - No Pisar el Cesped ( ".$placas10." )\n";
    $body .= "  Cantidad de Placas: ".$placas10."\n";
    $body .= "  Cantidad de Estacas: ".$postes10."\n";
    $body .= "  Medida: ".$medidas10."\n";
    $body .= "  Materialidad de la Placa: ".$material10."\n";
    $body .= "  Gráfica Personalizada : ".$grafica10."\n";
    $body .= "  Instalación: ".$instalacion10."\n";
    $body .= "  Valor Unitario: $".$valor10."\n";
    $body .= "  Lugar de Instalación: ".$lugar10."\n";
    $body .= "  VALOR PLACAS: $".$total10." (IVA INCLUIDO)\n";
    $body .= "  VALOR ESTACAS: $".($postes10 * $precioestaca)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total10 + ($postes10 * $precioestaca))." (IVA INCLUIDO)\n\n";

    $body .= "11 - No Jugar a la Pelota ( ".$placas11." )\n";
    $body .= "  Cantidad de Placas: ".$placas11."\n";
    $body .= "  Cantidad de Estacas: ".$postes11."\n";
    $body .= "  Medida: ".$medidas11."\n";
    $body .= "  Materialidad de la Placa: ".$material11."\n";
    $body .= "  Gráfica Personalizada : ".$grafica11."\n";
    $body .= "  Instalación: ".$instalacion11."\n";
    $body .= "  Valor Unitario: $".$valor11."\n";
    $body .= "  Lugar de Instalación: ".$lugar11."\n";
    $body .= "  VALOR PLACAS: $".$total11." (IVA INCLUIDO)\n";
    $body .= "  VALOR ESTACAS: $".($postes11 * $precioestaca)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total11 + ($postes11 * $precioestaca))." (IVA INCLUIDO)\n\n";

    $body .= "12 - No Jugar a la Pelota ( ".$placas12." )\n";
    $body .= "  Cantidad de Placas: ".$placas12."\n";
    $body .= "  Medida: ".$medidas12."\n";
    $body .= "  Materialidad de la Placa: ".$material12."\n";
    $body .= "  Gráfica Personalizada : ".$grafica12."\n";
    $body .= "  Instalación: ".$instalacion12."\n";
    $body .= "  Valor Unitario: $".$valor12."\n";
    $body .= "  Lugar de Instalación: ".$lugar12."\n";
    $body .= "  VALOR TOTAL: $".$total12." (IVA INCLUIDO)\n\n";

    $body .= "13 - Zona de Reciclaje / Punto Limpio  ( ".$placas13." )\n";
    $body .= "  Cantidad de Placas: ".$placas13."\n";
    $body .= "  Cantidad de Postes: ".$postes13."\n";
    $body .= "  Medida: ".$medidas13."\n";
    $body .= "  Materialidad de la Placa: ".$material13."\n";
    $body .= "  Gráfica Personalizada : ".$grafica13."\n";
    $body .= "  Instalación: ".$instalacion13."\n";
    $body .= "  Valor Unitario: $".$valor13."\n";
    $body .= "  Lugar de Instalación: ".$lugar13."\n";
    $body .= "  VALOR PLACAS: $".$total13." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes13 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total13 + ($postes13 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "14 - Estacionamiento de Visitas ( ".$placas14." )\n";
    $body .= "  Cantidad de Placas: ".$placas14."\n";
    $body .= "  Cantidad de Postes: ".$postes14."\n";
    $body .= "  Medida: ".$medidas14."\n";
    $body .= "  Materialidad de la Placa: ".$material14."\n";
    $body .= "  Gráfica Personalizada : ".$grafica14."\n";
    $body .= "  Instalación: ".$instalacion14."\n";
    $body .= "  Valor Unitario: $".$valor14."\n";
    $body .= "  Lugar de Instalación: ".$lugar14."\n";
    $body .= "  VALOR PLACAS: $".$total14." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes14 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total14 + ($postes14 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "15 - Estacionamiento de Residentes ( ".$placas15." )\n";
    $body .= "  Cantidad de Placas: ".$placas15."\n";
    $body .= "  Cantidad de Postes: ".$postes15."\n";
    $body .= "  Medida: ".$medidas15."\n";
    $body .= "  Materialidad de la Placa: ".$material15."\n";
    $body .= "  Gráfica Personalizada : ".$grafica15."\n";
    $body .= "  Instalación: ".$instalacion15."\n";
    $body .= "  Valor Unitario: $".$valor15."\n";
    $body .= "  Lugar de Instalación: ".$lugar15."\n";
    $body .= "  VALOR PLACAS: $".$total15." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes15 * $precioposte) ." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total5 + ($postes15 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "16 - Estacionamiento de Motos ( ".$placas16." )\n";
    $body .= "  Cantidad de Placas: ".$placas16."\n";
    $body .= "  Cantidad de Postes: ".$postes16."\n";
    $body .= "  Medida: ".$medidas16."\n";
    $body .= "  Materialidad de la Placa: ".$material16."\n";
    $body .= "  Gráfica Personalizada : ".$grafica16."\n";
    $body .= "  Instalación: ".$instalacion16."\n";
    $body .= "  Valor Unitario: $".$valor16."\n";
    $body .= "  Lugar de Instalación: ".$lugar16."\n";
    $body .= "  VALOR PLACAS: $".$total16." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes16 * $precioposte) ." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total16 + ($postes16 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "17 - Estacionamiento de Discapacitados ( ".$placas17." )\n";
    $body .= "  Cantidad de Placas: ".$placas17."\n";
    $body .= "  Cantidad de Postes: ".$postes17."\n";
    $body .= "  Medida: ".$medidas17."\n";
    $body .= "  Materialidad de la Placa: ".$material17."\n";
    $body .= "  Gráfica Personalizada : ".$grafica17."\n";
    $body .= "  Instalación: ".$instalacion17."\n";
    $body .= "  Valor Unitario: $".$valor17."\n";
    $body .= "  Lugar de Instalación: ".$lugar17."\n";
    $body .= "  VALOR PLACAS: $".$total17." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes17 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total17 + ($postes17 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "18 - No Estacionar ( ".$placas18." )\n";
    $body .= "  Cantidad de Placas: ".$placas18."\n";
    $body .= "  Cantidad de Postes: ".$postes18."\n";
    $body .= "  Medida: ".$medidas18."\n";
    $body .= "  Materialidad de la Placa: ".$material18."\n";
    $body .= "  Gráfica Personalizada : ".$grafica18."\n";
    $body .= "  Instalación: ".$instalacion18."\n";
    $body .= "  Valor Unitario: $".$valor18."\n";
    $body .= "  Lugar de Instalación: ".$lugar18."\n";
    $body .= "  VALOR PLACAS: $".$total18." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes18 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total8 + ($postes18 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "19 - Velocidad Máxima ( ".$placas19." )\n";
    $body .= "  Cantidad de Placas: ".$placas19."\n";
    $body .= "  Cantidad de Postes: ".$postes19."\n";
    $body .= "  Medida: ".$medidas19."\n";
    $body .= "  Materialidad de la Placa: ".$material19."\n";
    $body .= "  Gráfica Personalizada : ".$grafica19."\n";
    $body .= "  Instalación: ".$instalacion19."\n";
    $body .= "  Valor Unitario: $".$valor19."\n";
    $body .= "  Lugar de Instalación: ".$lugar19."\n";
    $body .= "  VALOR PLACAS: $".$total19." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes19 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total19 + ($postes19 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "20 - Zona Segura ( ".$placas20." )\n";
    $body .= "  Cantidad de Placas: ".$placas20."\n";
    $body .= "  Cantidad de Postes: ".$postes20."\n";
    $body .= "  Medida: ".$medidas20."\n";
    $body .= "  Materialidad de la Placa: ".$material20."\n";
    $body .= "  Gráfica Personalizada : ".$grafica20."\n";
    $body .= "  Instalación: ".$instalacion20."\n";
    $body .= "  Valor Unitario: $".$valor20."\n";
    $body .= "  Lugar de Instalación: ".$lugar20."\n";
    $body .= "  VALOR PLACAS: $".$total20." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes20 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total20 + ($postes20 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "21 - Vías de Evacuación ( ".$placas21." )\n";
    $body .= "  Cantidad de Placas: ".$placas21."\n";
    $body .= "  Medida: ".$medidas21."\n";
    $body .= "  Materialidad de la Placa: ".$material21."\n";
    $body .= "  Gráfica Personalizada : ".$grafica21."\n";
    $body .= "  Instalación: ".$instalacion21."\n";
    $body .= "  Valor Unitario: $".$valor21."\n";
    $body .= "  Lugar de Instalación: ".$lugar21."\n";
    $body .= "  VALOR TOTAL: $".$total21." (IVA INCLUIDO)\n\n";

    $body .= "22 - Salida de Emergencia ( ".$placas22." )\n";
    $body .= "  Cantidad de Placas: ".$placas22."\n";
    $body .= "  Medida: ".$medidas22."\n";
    $body .= "  Materialidad de la Placa: ".$material22."\n";
    $body .= "  Gráfica Personalizada : ".$grafica22."\n";
    $body .= "  Instalación: ".$instalacion22."\n";
    $body .= "  Valor Unitario: $".$valor22."\n";
    $body .= "  Lugar de Instalación: ".$lugar22."\n";
    $body .= "  VALOR TOTAL: $".$total22." (IVA INCLUIDO)\n\n";

    $body .= "23 - Extintor ( ".$placas23." )\n";
    $body .= "  Cantidad de Placas: ".$placas23."\n";
    $body .= "  Medida: ".$medidas23."\n";
    $body .= "  Materialidad de la Placa: ".$material23."\n";
    $body .= "  Gráfica Personalizada : ".$grafica23."\n";
    $body .= "  Instalación: ".$instalacion23."\n";
    $body .= "  Valor Unitario: $".$valor23."\n";
    $body .= "  Lugar de Instalación: ". $lugar23."\n";
    $body .= "  VALOR TOTAL: $".$total23." (IVA INCLUIDO)\n\n";
   
    $body .= "24 - Red Húmeda ( ".$placas24." )\n";
    $body .= "  Cantidad de Placas: ".$placas24."\n";
    $body .= "  Medida: ".$medidas24."\n";
    $body .= "  Materialidad de la Placa: ".$material24."\n";
    $body .= "  Gráfica Personalizada : ".$grafica24."\n";
    $body .= "  Instalación: ".$instalacion24 . "\n";
    $body .= "  Valor Unitario: $".$valor24."\n";
    $body .= "  Lugar de Instalación: ". $lugar24."\n";
    $body .= "  VALOR TOTAL: $".$total24." (IVA INCLUIDO)\n\n";

    $body .= "25 - Red Seca SALIDA ( ".$placas25." )\n";
    $body .= "  Cantidad de Placas: ".$placas25."\n";
    $body .= "  Medida: ".$medidas25."\n";
    $body .= "  Materialidad de la Placa: ".$material25."\n";
    $body .= "  Gráfica Personalizada : ".$grafica25."\n";
    $body .= "  Instalación: ".$instalacion25."\n";
    $body .= "  Valor Unitario: $".$valor25."\n";
    $body .= "  Lugar de Instalación: ".$lugar25."\n";
    $body .= "  VALOR TOTAL: $".$total25." (IVA INCLUIDO)\n\n";

    $body .= "26 - Red Inerte ( ".$placas26." )\n";
    $body .= "  Cantidad de Placas: ".$placas26."\n";
    $body .= "  Medida: ".$medidas26."\n";
    $body .= "  Materialidad de la Placa: ".$material26."\n";
    $body .= "  Gráfica Personalizada : ".$grafica26."\n";
    $body .= "  Instalación: ".$instalacion26."\n";
    $body .= "  Valor Unitario: $".$valor2."\n";
    $body .= "  Lugar de Instalación: ".$lugar26."\n";
    $body .= "  VALOR TOTAL: $".$total26." (IVA INCLUIDO)\n\n";

    $body .= "27 - PELIGRO Red de Gas ( ".$placas27." )\n";
    $body .= "  Cantidad de Placas: ".$placas27."\n";
    $body .= "  Medida: ".$medidas27."\n";
    $body .= "  Materialidad de la Placa: ". $material27."\n";
    $body .= "  Gráfica Personalizada : ".$grafica27."\n";
    $body .= "  Instalación: ".$instalacion27."\n";
    $body .= "  Valor Unitario: $".$valor27."\n";
    $body .= "  Lugar de Instalación: ".$lugar27."\n";
    $body .= "  VALOR TOTAL: $".$total27." (IVA INCLUIDO)\n\n";

    $body .= "28 - Señaletica Pare - REFLECTANTE ( ".$placas28." )\n";
    $body .= "  Cantidad de Placas: ".$placas28."\n";
    $body .= "  Cantidad de Postes: ".$postes28."\n";
    $body .= "  Medida: ".$medidas28."\n";
    $body .= "  Materialidad de la Placa: ".$material28."\n";
    $body .= "  Gráfica Personalizada : ".$grafica28."\n";
    $body .= "  Instalación: ".$instalacion28."\n";
    $body .= "  Valor Unitario: $".$valor28."\n";
    $body .= "  Lugar de Instalación: ".$lugar28."\n";
    $body .= "  VALOR PLACAS: $".$total28." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes28 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total28 + ($postes28 * $precioposte))." (IVA INCLUIDO)\n\n";

    $body .= "29 - Display Informativo - Formato Carta ( ".$placas29." )\n";
    $body .= "  Cantidad de Placas: ".$placas29."\n";
    $body .= "  Medida: ".$medidas29."\n";
    $body .= "  Materialidad de la Placa: ".$material2."\n";
    $body .= "  Gráfica Personalizada : ".$grafica29."\n";
    $body .= "  Instalación: ".$instalacion29."\n";
    $body .= "  Valor Unitario: $".$valor29."\n";
    $body .= "  Lugar de Instalación: ".$lugar29."\n";
    $body .= "  VALOR TOTAL: $".$total29." (IVA INCLUIDO)\n\n";

    $body .= "30 - Planos de Distribución y Seguridad ( ".$placas30." )\n";
    $body .= "  Cantidad de Placas: ".$placas30."\n";
    $body .= "  Medida: ".$medidas30."\n";
    $body .= "  Materialidad de la Placa: ".$material30."\n";
    $body .= "  Gráfica Personalizada : ".$grafica30."\n";
    $body .= "  Instalación: ".$instalacion30."\n";
    $body .= "  Valor Unitario: $".$valor30."\n";
    $body .= "  Lugar de Instalación: ".$lugar30."\n";
    $body .= "  VALOR TOTAL: $".$total30." (IVA INCLUIDO)\n\n";

    $body .= "31 - Planos de Zona de Seguridad ( ".$placas31." )\n";
    $body .= "  Cantidad de Placas: ".$placas31."\n";
    $body .= "  Medida: ".$medidas31."\n";
    $body .= "  Materialidad de la Placa: ".$material31."\n";
    $body .= "  Gráfica Personalizada : ".$grafica31."\n";
    $body .= "  Instalación: ".$instalacion31."\n";
    $body .= "  Valor Unitario: $".$valor31."\n";
    $body .= "  Lugar de Instalación: ".$lugar31."\n";
    $body .= "  VALOR TOTAL: $".$total31." (IVA INCLUIDO)\n\n";

    $body .= "32 - Señalética de Punto de Encuentro ( ".$placas32." )\n";
    $body .= "  Cantidad de Placas: ".$placas32."\n";
    $body .= "  Cantidad de Postes: ".$postes32."\n";
    $body .= "  Medida: ".$medidas32."\n";
    $body .= "  Materialidad de la Placa: ". $material32."\n";
    $body .= "  Gráfica Personalizada : ".$grafica32."\n";
    $body .= "  Instalación: ".$instalacion32."\n";
    $body .= "  Valor Unitario: $".$valor32."\n";
    $body .= "  Lugar de Instalación:".$lugar32."\n";
    $body .= "  VALOR PLACAS: $".$total32." (IVA INCLUIDO)\n";
    $body .= "  VALOR POSTES: $".($postes32 * $precioposte)." (IVA INCLUIDO)\n";
    $body .= "  VALOR TOTAL: $".($total32 + ($postes32 * $precioposte))." (IVA INCLUIDO)\n\n";




    //Envío del correo
    if (mail($to, $subject, $body)) {
      echo "success";
    } else {
      echo "error";
    }

}
?>
