<!-- Código HTML creado por Christian Tapia (ComikSama) -->
<!-- Correo electrónico: comiksamadesing@gmail.com -->
<!-- Fecha de creación: Octubre 2023 -->

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presupuestos - Condominio</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .btn-thick-border {
        border-width: 3px;
        }
        /* Estilos para el icono de cierre */
        .close-icon {
            font-size: 20px;
            cursor: pointer;
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XG3WTHTT15"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XG3WTHTT15');
    </script>

  </head>
  <body>

    <!-- Pantalla de carga utilizando Bootstrap 5 -->
    <div id="loader-container" class="d-flex flex-column align-items-center justify-content-center vh-100">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Cargando...</span>
        </div>
        <p class="mt-2 h2">Cargando...</p>
    </div>

    <!-- El contenido principal de tu página -->
    <div id="content" style="display: none;">
        <!-- Aquí va tu contenido principal -->
    </div>
    <script>
        // JavaScript para ocultar la pantalla de carga y eliminarla después de 2 segundos
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var loader = document.getElementById("loader-container");
                var content = document.getElementById("content");
                var loadingText = document.getElementById("loading-text");

                loader.style.display = "none";
                content.style.display = "block";

                // Elimina el contenedor de la pantalla de carga después de 2 segundos
                setTimeout(function() {
                    loader.remove();
                }, 200); // Cambia este valor a la cantidad de milisegundos que desees
            }, 200); // Cambia este valor a la cantidad de milisegundos que desees
        });
    </script>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top nav-underline">
        <div class="container my-0 py-0">
            <a class="navbar-brand" href="index.php">
            <img src="img/logo_4.svg" alt="Logo" height="90" class="d-inline-block align-text-top m-0 p-0">
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="condominio.php">Presupuesto</a>
                </li>
                <li class="nav-item d-flex nav-justified">
                <a class="nav-link" href="https://www.instagram.com/aranciopublicidad" target="_blank">
                    <img src="img/icon/instagram.svg" height="25">
                </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <!--Final Navbar-->
    <div class="container shadow pb-5">
        <hr>
        <h5 class="text-center">FORMULARIO DE COTIZACIÓN PARA SEÑALETICAS PERSONALIZADAS DE CONDOMINIO</h5>
        <hr>
        <form class="col-md-10 mx-auto" id="contactForm" method="post" action="procesar_formulario_condominio.php" novalidate>
            <div id="error-message" class="alert alert-danger" style="display: none;"> <p>Por favor, completa todos los campos requeridos.</p></div>
            <div class="mb-3 row ">
                <label for="nombreContacto" class="col-md-2 col-form-label">Nombre de Contacto:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="nombreContacto" name="nombreContacto"placeholder="Escriba aquí" required>
                    <div class="invalid-feedback">Falta tu NOMBRE para contactarte</div>
                </div>
                
            </div>
            <div class="mb-3 row">
                <label for="nombreCondominio" class="col-md-2 col-form-label">Nombre del Condominio:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="nombreCondominio" name="nombreCondominio" placeholder="Escriba aquí" required>
                    <div class="invalid-feedback">Falta el NOMBRE DEL CONDOMINIO.</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="direccion" class="col-md-2 col-form-label">Dirección del Condominio:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="direccion" name="direccion"placeholder="Escriba aquí" required>
                    <div class="invalid-feedback">Falta la DIRECCIÓN del Condominio</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telefono" class="col-md-2 col-form-label">Fono de Contacto:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba aquí" required>
                    <div class="invalid-feedback">Por favor, ingrese un Número Válido</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-md-2 col-form-label">E-mail:</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Escriba aquí" required>
                    <div class="invalid-feedback">Por favor, ingrese un correo electrónico válido.</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="logotipo" class="col-md-2 col-form-label">Posee Logotipo de Condominio:</label>
                <div class="col-md-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="logotipo" id="noTengoLogotipo" value="No Tengo Logotipo" checked>
                        <label class="form-check-label" for="noTengoLogotipo">NO TENGO LOGOTIPO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="logotipo" id="siTengoLogotipo" value="Si Tengo Logotipo">
                        <label class="form-check-label" for="siTengoLogotipo">SI TENGO LOGOTIPO</label>
                    </div>                    
                </div>
            </div>

            
            <hr>
<!--Productos-->
            <h5 class="">Seleccione los Productos a Cotizar</h5>
            <div class="accordion" id="accordionExample">
                <!--1 - Señaletica de Normas del Condominio Portón Ingreso-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="row ">
                            <div class="col-md-6 lista_precio " id="1-nombre">01 - Señalética de Normas del Condominio Portón Ingreso <p class="txt_special">Lorem ipsum dolor sit, amet consectetur adipiaut. Perferendis reiciam labore quae placeat repudiandae quod nobis?</p></div>
                            <div class="col-md-6 text-end fw-bold lista_precio " id="1-precio" name="1-precio">Valor $</div>                           
                        </div>
                    </button>

                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/001.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/001.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="1-placas" name="1-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row" >
                                    <label for="postes" class="col col-form-label" id="1-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="1-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="1-postes" name="1-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" name="1-medidas" id="1-100x80" value="100cm x 80cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="1-100x80">100cm x 80cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12  text-center lista_presupuesto">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-material" id="1-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="1-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="1-material-valor" value="2000">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-material" id="1-sintraPvc" value="Sintra PVC" data-valor="2000">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="1-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="1-material-valor" id="1-material-valor-sintra" value="00">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label lista_presupuesto">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="1-vinilo" id="1-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="1-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center" id="1-instalacion">
                                <div class="mb-3 row justify-content-center" >
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7" >
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="1-instalar" id="1-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="1-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-instalar" id="1-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="1-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-instalar" id="1-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="1-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center text-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-lugar" id="1-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="1-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-lugar" id="1-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="1-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="1-lugar" id="1-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="1-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="1-otroCiudad" style="display: none;">
                                            <label for="1-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="1-ciudadEspecifica" name="1-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2 - Uso Correcto de Shaft de Basura-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        <div class="row">
                            <div class="col-md-6 lista_precio text-start" id="2-nombre">02 - Señalética de Uso Correcto de Shaft de Basura <p class="txt_special" id="txt_special">Lorem ipsum dolor sit amet consculpa quasiodit fugit perspiciatis blanditiis a?</p></div>
                            <div class="col-md-6 text-end fw-bold lista_precio " id="2-precio" name="2-precio">Valor $</div>
                        </div>
                    </button>

                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/002.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio me-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/002.jpg" >
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="2-placas" name="2-placas" min="0" value="00">
                                    </div>
                                </div>
                                <!--<div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Postes por Placa:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto_2" id="2-postes" name="2-postes" min="0" value="00">
                                    </div>
                                </div>-->
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-medidas" id="2-20x30" value="20cm x 30cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="2-20x30">20cm x 30cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-material" id="2-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2" for="2-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="2-material-valor" value="2000">
                                        </div>-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-material" id="2-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="2-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="2-material-valor" value="00">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-vinilo" id="2-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center  pmx-4" for="2-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-instalar" id="2-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-2 pmx-4" for="2-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-instalar" id="2-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-3 pmx-4" for="2-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-instalar" id="2-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-3 pmx-5" for="2-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-lugar" id="2-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="2-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-lugar" id="2-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center py-2 pmx-3" for="2-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-lugar" id="2-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-2 pmx-4 pmy-2" for="2-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="2-otroCiudad" style="display: none;">
                                            <label for="2-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="2-ciudadEspecifica" name="2-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--3 - Reglamento Tenencia Responsable de Mascotas-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <div class="row ">
                                <div class="col-md-6 lista_precio text-start" id="3-nombre">03 - Señalética de Reglamento Tenencia Responsable de Mascotas <p class="txt_special">Lorem, ipsum dolor amet consectetur adipisicing elitodio eaque distinctio!</p></div>
                                <div class="col-md-6 text-end fw-bold lista_precio " id="3-precio">Valor $</div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/003.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/003.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="3-placas" name="3-placas" min="0" value="00">
                                    </div>
                                </div>
                                <!--<div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Postes por Placa:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto_2" id="3-postes" name="3-postes" min="0" value="00">
                                    </div>
                                </div>-->
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-medidas" id="3-20x30" value="20cm x 30cm" data-valor="2000"checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="3-20x30">20cm x 30cm</label>
                                            <input type="hidden" name="3-medidas-valor" id="3-medidas-valor-20x30" value="01">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-medidas" id="3-40x60" value="40cm x 60cm">
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="3-40x60">40cm x 60cm</label>
                                            <input type="hidden" name="3-medidas-valor" id="3-medidas-valor-40x60" value="02">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-material" id="2-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2" for="2-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="2-material-valor" value="2000">
                                        </div>-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-material" id="3-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="3-sintraPvc">SINTRA PVC</label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-vinilo" id="3-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="3-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-instalar" id="3-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="3-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-instalar" id="3-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="3-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-instalar" id="3-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="3-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-lugar" id="3-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="3-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-lugar" id="3-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="3-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<spam class="txt_special_2">Lore.</span</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="3-lugar" id="3-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="3-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="3-otroCiudad" style="display: none;">
                                            <label for="3-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="3-ciudadEspecifica" name="3-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--4 - Sticker para Vehículos de Residentes-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="4-nombre">04 - Sticker para Vehículos de Residentes <p class="txt_special">Lorem ipsum dolor, sit amet consectetur am atque odit, unde alias praesem?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio ps-md-5 " id="4-precio" name="4-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/004.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/004.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="4-placas" name="4-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">                                     
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-medidas" id="4-6x6" value="6cm x 6cm" data-valor="2000"checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="4-6x6">6cm x 6cm</label>
                                            <input type="hidden" name="4-medidas-valor" value="00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-material" id="4-adhesivo" value="Adhesivo" data-valor="00" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-5" for="4-adhesivo"><span class="txt_special">Lo.</span>ADHESIVO <span class="txt_special">Lo.</span></label>
                                            <input type="hidden" name="4-material-valor" value="00">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-vinilo" id="4-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="4-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-instalar" id="4-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="4-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-instalar" id="4-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="4-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-instalar" id="4-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="4-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-lugar" id="4-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 py-2 pmx-5" for="4-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-lugar" id="4-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="4-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="4-lugar" id="4-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="4-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="4-otroCiudad" style="display: none;">
                                            <label for="4-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="4-ciudadEspecifica" name="4-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--5 - Señalética de Conserje en Ronda-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="5-nombre">05 - Señalética de Conserje en Ronda (Con Chupón) <p class="txt_special">Lorem ipsum dolor sit amet consectetur, adipisicinlendus asperiores dolore.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio ps-md-5 " id="5-precio" name="5-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/005.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/005.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="5-placas" name="5-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">                                      
                                        <div class="form-check text-center">
                                            <input class="form-check-input" type="radio" name="5-medidas" id="5-30x20" value="30cm x 20cm" data-valor="2000"checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="5-30x20">30cm x 20cm</label>
                                            <input type="hidden" name="5-medidas-valor" value="00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-material" id="5-sintraPVC" value="SintraPVC" data-valor="780" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center pmx-5 px-4" for="5-sintraPVC">SINTRA PVC</label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-vinilo" id="5-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="5-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-instalar" id="5-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="5-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-instalar" id="5-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="5-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-instalar" id="5-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="5-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-lugar" id="5-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="5-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-lugar" id="5-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="5-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="5-lugar" id="5-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="5-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="5-otroCiudad" style="display: none;">
                                            <label for="5-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="5-ciudadEspecifica" name="5-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--6 - Señalética Normas del Condominio-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="6-nombre">06 - Señalética Normas del Condominio <p class="txt_special">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio doloribus maVoluptate similiquaerat.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="6-precio" name="6-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/006.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/006.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="6-placas" name="6-placas" min="0" value="00">
                                    </div>
                                </div>
                                <!--<div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Postes por Placa:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto_2" id="6-postes" name="6-postes" min="0" value="00">
                                    </div>
                                </div>-->
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">                            
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-medidas" id="6-40x60" value="40cm x 60cm" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="6-40x60">40cm x 60cm</label>
                                            <input type="hidden" name="6-medidas-valor" id="6-medidas-valor-40x60" value="00">
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-medidas" id="6-60x80" value="60cm X 80cm" data-valor="2000">
                                            <label class="form-check-label lista_presupuesto_2" for="6-60x80">60cm x 80cm</label>
                                            <input type="hidden" name="6-medidas-valor" id="6-medidas-valor-60x80" value="01">
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-material" id="6-sintraPvc" value="Sintra Pvc" data-valor="780" checked>
                                            <label class="form-check-label lista_presupuesto_2  border border-secondary-subtle rounded px-4 pmx-5" for="6-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="6-material-valor" id="6-material-valor-sintra" value="02">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-vinilo" id="6-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="6-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-instalar" id="6-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="6-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-instalar" id="6-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="6-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-instalar" id="6-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="6-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-lugar" id="6-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 py-2 pmx-5" for="6-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-lugar" id="6-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="6-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="6-lugar" id="6-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="6-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="6-otroCiudad" style="display: none;">
                                            <label for="6-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="6-ciudadEspecifica" name="6-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--7 - Reglamento de Quincho-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="7-nombre">07 - Señalética del Reglamento de Quincho <p class="txt_special">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio doloribus maVoluptate similiquaerat.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="7-precio" name="7-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/007.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/007.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="7-placas" name="7-placas" min="0" value="00">
                                    </div>
                                </div>
                                <!--div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Postes por Placa:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto_2" id="7-postes" name="7-postes" min="0" value="00">
                                    </div>
                                </div>-->
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-medidas" id="7-40x60" value="40cm x 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="7-40x60">40cm x 60cm</label>
                                            <input type="hidden" name="7-medidas-valor" value="00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="2-material" id="2-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2" for="2-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="2-material-valor" value="2000">
                                        </div>-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-material" id="7-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="7-sintraPvc">SINTRA PVC</label>                                            
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-vinilo" id="7-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="7-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-instalar" id="7-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="7-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-instalar" id="7-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="7-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-instalar" id="7-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="7-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-lugar" id="7-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="7-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-lugar" id="7-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="7-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="7-lugar" id="7-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="7-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="7-otroCiudad" style="display: none;">
                                            <label for="7-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="7-ciudadEspecifica" name="7-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--8 - Reglamento de Piscina-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="8-nombre">08 - Señalética de Reglamento de Piscina <p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione deleniti error aliquid ? Consequatur, facere?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="8-precio" name="8-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/008.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/008.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="8-placas" name="8-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="8-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="8-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="8-postes" name="8-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-medidas" id="8-40x60" value="40cm x 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="8-40x60">40cm x 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-material" id="8-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="8-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="8-material-valor" id="8-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-material" id="8-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="8-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="8-material-valor" id="8-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-vinilo" id="8-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="8-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-instalar" id="8-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="8-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-instalar" id="8-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="8-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-instalar" id="8-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="8-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-lugar" id="8-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="8-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-lugar" id="8-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="8-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="8-lugar" id="8-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="8-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="8-otroCiudad" style="display: none;">
                                            <label for="8-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="8-ciudadEspecifica" name="8-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--9 - Piscina sin Salvavidas-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="9-nombre">09 - Señalética de Piscina sin Salvavidas <p class="txt_special">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti explicrcitationem dolorum ar</p> </div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="9-precio" name="9-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/009.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/009.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="9-placas" name="9-placas" min="0" value="00">
                                    </div>
                                </div>
                                <!--<div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Postes por Placa:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto_2" id="9-postes" name="9-postes" min="0" value="00">
                                    </div>
                                </div>-->
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-medidas" id="9-60x30" value="60cm x 30cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="9-60x30">60cm x 30cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-material" id="9-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="9-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="9-material-valor" id="9-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-material" id="9-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="9-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="9-material-valor" id="9-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-vinilo" id="9-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="9-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-instalar" id="9-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="9-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-instalar" id="9-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="9-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-instalar" id="9-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="9-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-lugar" id="9-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="9-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-lugar" id="9-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="9-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="9-lugar" id="9-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="9-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="9-otroCiudad" style="display: none;">
                                            <label for="9-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="9-ciudadEspecifica" name="9-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--10 - No Pisar el Cesped-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="10-nombre">10 - Señalética de No Pisar el Cesped <p class="txt_special">Lorem ipsum dolor sit, amet consectetur ahic voluptatumias sed dolor. ic atque laboriosam!</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="10-precio" name="10-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/010.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/010.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="10-placas" name="10-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Estacas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="10-postes" name="10-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-medidas" id="10-20x30" value="20cm X 30cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="10-20x30">20cm X 30cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-material" id="10-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" >
                                            <label class="form-check-label lista_presupuesto_2" for="10-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="10-material-valor" id="10-material-valor-aluminio" value="00">
                                        </div>-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-material" id="10-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="10-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="10-material-valor" id="10-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-vinilo" id="10-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="10-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-instalar" id="10-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="10-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-instalar" id="10-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="10-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-instalar" id="10-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="10-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-lugar" id="10-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="10-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-lugar" id="10-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="10-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="10-lugar" id="10-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="10-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="10-otroCiudad" style="display: none;">
                                            <label for="10-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="10-ciudadEspecifica" name="10-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--11 - No Jugar a la Pelota-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="11-nombre">11 - Señalética de No Jugar a la Pelota<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptat voluptmque. Sed?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="11-precio" name="11-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse11" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/011.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/011.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="11-placas" name="11-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Estacas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="11-postes" name="11-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-medidas" id="11-20x30" value="20cm X 30cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="11-20x30">20cm X 30cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-material" id="11-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" >
                                            <label class="form-check-label lista_presupuesto_2" for="11-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="11-material-valor" id="11-material-valor-aluminio" value="00">
                                        </div>-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-material" id="11-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="11-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="11-material-valor" id="11-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-vinilo" id="11-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="11-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-instalar" id="11-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="11-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-instalar" id="11-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="11-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-instalar" id="11-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="11-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-lugar" id="11-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="11-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-lugar" id="11-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="11-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="11-lugar" id="11-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="11-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="11-otroCiudad" style="display: none;">
                                            <label for="11-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="11-ciudadEspecifica" name="11-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--12 - Sector de Área de Juego-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="12-nombre">12 - Señalética de Sector de Área de Juego<p class="txt_special">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur amet officia illum? Omnis, labore consequuntur.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="12-precio" name="12-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/012.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/012.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="12-placas" name="12-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-medidas" id="12-100x40" value="100cm x 40cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="12-100x40">100cm x 40cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-material" id="12-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="12-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="12-material-valor" id="12-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-vinilo" id="12-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="12-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-instalar" id="12-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="12-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-instalar" id="12-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="12-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-instalar" id="12-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="12-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-lugar" id="12-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="12-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-lugar" id="12-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="12-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="12-lugar" id="12-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="12-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="12-otroCiudad" style="display: none;">
                                            <label for="12-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="12-ciudadEspecifica" name="12-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--13 - Zona de Reciclaje / Punto Limpio-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="13-nombre">13 - Señalética de Zona de Reciclaje / Punto Limpio <p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt magnam dicta dolores sint accusantium nostrum!</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="13-precio" name="13-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/013.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/013.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="13-placas" name="13-placas" min="0" value="00">
                                    </div>
                                </div>
                                <!--<div class="mb-3 row">
                                    <label for="postes" class="col col-form-label">Cantidad de Postes por Placa:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto_2" id="13-postes" name="13-postes" min="0" value="00">
                                    </div>
                                </div>-->
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check bo">
                                            <input class="form-check-input" type="radio" name="13-medidas" id="13-100x40" value="60cm X 30cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="13-100x40">100cm x 40cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-material" id="13-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" >
                                            <label class="form-check-label lista_presupuesto_2" for="13-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="13-material-valor" id="13-material-valor-aluminio" value="00">
                                        </div>-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-material" id="13-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="13-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="13-material-valor" id="13-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-vinilo" id="13-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="13-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-instalar" id="13-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="13-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-instalar" id="13-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="13-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-instalar" id="13-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="13-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-lugar" id="13-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="13-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-lugar" id="13-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="13-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="13-lugar" id="13-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4 pmy-2" for="13-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="13-otroCiudad" style="display: none;">
                                            <label for="13-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="13-ciudadEspecifica" name="13-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--14 - Estacionamiento de Visitas-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="14-nombre">14 - Señalética de Estacionamiento de Visitas<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore expedita id.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="14-precio" name="14-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/014.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/014.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="14-placas" name="14-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="14-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="14-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="14-postes" name="14-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-medidas" id="14-40x60" value="40cm x 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="14-40x60">40cm x 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-material" id="14-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="14-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="14-material-valor" id="14-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-material" id="14-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="14-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="14-material-valor" id="14-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-vinilo" id="14-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="14-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-vinilo" id="14-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="14-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-instalar" id="14-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="14-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-instalar" id="14-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="14-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-instalar" id="14-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="14-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-lugar" id="14-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="14-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-lugar" id="14-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="14-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="14-lugar" id="14-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="14-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="14-otroCiudad" style="display: none;">
                                            <label for="14-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="14-ciudadEspecifica" name="14-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--15 - Estacionamiento de Residentes-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="15-nombre">15 - Señalética de Estacionamiento de Residentes<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ex provident,</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="15-precio" name="15-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/015.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/015.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="15-placas" name="15-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label"  id="15-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="15-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="15-postes" name="15-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-medidas" id="15-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="15-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-material" id="15-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="15-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="15-material-valor" id="15-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-material" id="15-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="15-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="15-material-valor" id="15-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-vinilo" id="15-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="15-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-vinilo" id="15-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="15-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-instalar" id="15-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="15-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-instalar" id="15-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="15-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-instalar" id="15-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="15-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-lugar" id="15-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="15-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-lugar" id="15-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="15-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="15-lugar" id="15-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="15-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="15-otroCiudad" style="display: none;">
                                            <label for="15-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="15-ciudadEspecifica" name="15-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--16 - Estacionamiento de Motos-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="16-nombre">16 - Señalética de Estacionamiento de Motos<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique quaerat?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="16-precio" name="16-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse16" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/016.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/016.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="16-placas" name="16-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="16-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="16-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="16-postes" name="16-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-medidas" id="16-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="16-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-material" id="16-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="16-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="16-material-valor" id="16-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-material" id="16-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="16-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="16-material-valor" id="16-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-vinilo" id="16-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="16-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-vinilo" id="16-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="16-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-instalar" id="16-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="16-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-instalar" id="16-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="16-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-instalar" id="16-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="16-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-lugar" id="16-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="16-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-lugar" id="16-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="16-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="16-lugar" id="16-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="16-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="16-otroCiudad" style="display: none;">
                                            <label for="16-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="16-ciudadEspecifica" name="16-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--17 - Estacionamiento de Discapacitados-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="17-nombre">17 - Señalética de Estacionamiento de Discapacitados<p class="txt_special">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, suscipit.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="17-precio" name="17-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse17" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/017.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/017.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="17-placas" name="17-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="17-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="17-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="17-postes" name="17-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-medidas" id="17-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto  border border-secondary-subtle rounded text-center px-2 pmx-4" for="17-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-material" id="17-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2  border border-secondary-subtle rounded pmx-2" for="17-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="17-material-valor" id="17-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-material" id="17-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="17-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="17-material-valor" id="17-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-vinilo" id="17-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="17-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-vinilo" id="17-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="17-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-instalar" id="17-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="17-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-instalar" id="17-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="17-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-instalar" id="17-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="17-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-lugar" id="17-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="17-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-lugar" id="17-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="17-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="17-lugar" id="17-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="17-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="17-otroCiudad" style="display: none;">
                                            <label for="17-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="17-ciudadEspecifica" name="17-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--18 - No Estacionar-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="18-nombre">18 - Señalética de No Estacionar<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis repudiandae aut non dolorum aliquam, fugit aperiam iusto.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="18-precio" name="18-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/018.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/018.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="18-placas" name="18-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="18-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="18-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="18-postes" name="18-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-medidas" id="18-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="18-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-material" id="18-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="18-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="18-material-valor" id="18-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-material" id="18-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="18-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="18-material-valor" id="18-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-vinilo" id="18-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="18-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-vinilo" id="18-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="18-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-instalar" id="18-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="18-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-instalar" id="18-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="18-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-instalar" id="18-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="18-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-lugar" id="18-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="18-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-lugar" id="18-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="18-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="18-lugar" id="18-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="18-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="18-otroCiudad" style="display: none;">
                                            <label for="18-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="18-ciudadEspecifica" name="18-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--19 - Velocidad Máxima-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="19-nombre">19 - Señalética de Velocidad Máxima<p class="txt_special">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur dolorum dolores quisquam.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio" id="19-precio" name="19-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse19" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/019.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/019.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="19-placas" name="19-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="19-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="19-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="19-postes" name="19-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-medidas" id="19-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-2 pmx-4" for="19-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-material" id="19-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="19-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="19-material-valor" id="19-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-material" id="19-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="19-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="19-material-valor" id="19-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-vinilo" id="19-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="19-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-vinilo" id="19-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="19-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-instalar" id="19-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="19-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-instalar" id="19-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="19-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-instalar" id="19-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="19-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-lugar" id="19-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 py-2 pmx-5" for="19-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-lugar" id="19-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="19-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="19-lugar" id="19-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="19-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="19-otroCiudad" style="display: none;">
                                            <label for="19-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="19-ciudadEspecifica" name="19-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--20 - Zona Segura-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="20-nombre">20 - Señalética de Zona Segura<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laborum dolores harum.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="20-precio" name="20-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse20" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/020.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/020.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="20-placas" name="20-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="20-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="20-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="20-postes" name="20-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-medidas" id="20-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="20-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-material" id="20-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="20-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="20-material-valor" id="20-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-material" id="20-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="20-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="20-material-valor" id="20-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-vinilo" id="20-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="20-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-vinilo" id="20-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="20-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-instalar" id="20-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="20-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-instalar" id="20-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="20-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-instalar" id="20-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="20-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-lugar" id="20-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="20-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-lugar" id="20-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="20-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="20-lugar" id="20-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="20-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="20-otroCiudad" style="display: none;">
                                            <label for="20-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="20-ciudadEspecifica" name="20-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--21 - Vías de Evacuación-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="21-nombre">21 - Señalética de Vías de Evacuación<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ex est nesciunt.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="21-precio" name="21-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse21" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/021.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/021.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="21-placas" name="21-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-medidas" id="21-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="21-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-material" id="21-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="21-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="21-material-valor" id="21-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-vinilo" id="21-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="21-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-instalar" id="21-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="21-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-instalar" id="21-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="21-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-instalar" id="21-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="21-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-lugar" id="21-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="21-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-lugar" id="21-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="21-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="21-lugar" id="21-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="21-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="21-otroCiudad" style="display: none;">
                                            <label for="21-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="21-ciudadEspecifica" name="21-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--22 - Salida de Emergencia-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="22-nombre">22 - Señalética de Salida de Emergencia<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat facere incidunt et minus nam quo?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="22-precio" name="22-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse22" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/022.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/022.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="22-placas" name="22-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-medidas" id="22-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="22-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-material" id="22-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="22-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="22-material-valor" id="22-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-vinilo" id="22-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="22-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-instalar" id="22-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="22-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-instalar" id="22-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="22-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-instalar" id="22-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="22-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-lugar" id="22-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="22-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-lugar" id="22-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="22-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="22-lugar" id="22-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="22-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="22-otroCiudad" style="display: none;">
                                            <label for="22-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control" id="22-ciudadEspecifica" name="22-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--23 - Extintor-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="23-nombre">23 - Señalética de Extintor<p class="txt_special">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam consequuntur, nihil nostrum voluptate?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="23-precio" name="23-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse23" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/023.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/023.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="23-placas" name="23-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-medidas" id="23-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="23-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-material" id="23-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="23-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="23-material-valor" id="23-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-vinilo" id="23-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="23-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-instalar" id="23-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="23-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-instalar" id="23-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="23-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-instalar" id="23-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="23-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-lugar" id="23-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="23-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-lugar" id="23-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="23-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="23-lugar" id="23-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="23-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="23-otroCiudad" style="display: none;">
                                            <label for="23-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="23-ciudadEspecifica" name="23-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--24 - Red Húmeda-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="24-nombre">24 - Señalética de  Red Húmeda<p class="txt_special">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem animi, commodi.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="24-precio" name="24-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse24" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/024.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/024.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="24-placas" name="24-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-medidas" id="24-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="24-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-material" id="24-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="24-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="24-material-valor" id="24-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-vinilo" id="24-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="24-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                        <!--<div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-vinilo" id="24-viniloCorte" value="Vinilo Corte">
                                            <label class="form-check-label lista_presupuesto_2" for="24-viniloCorte">VINILO CORTE</label>
                                        </div>-->
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                 <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-instalar" id="24-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="24siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-instalar" id="24-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="24-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-instalar" id="24-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="24-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-lugar" id="24-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="24-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-lugar" id="24-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="24-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="24-lugar" id="24-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="24-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="24-otroCiudad" style="display: none;">
                                            <label for="24-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="24-ciudadEspecifica" name="24-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--25 - Red Seca SALIDA-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                        <div class="row ">
                                <div class="col col-md-6 lista_precio text-start" id="25-nombre">25 - Señalética de Red Seca - SALIDA<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni repudiandae quam?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="25-precio" name="25-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse25" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/025.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/025.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="25-placas" name="25-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-medidas" id="25-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="25-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-material" id="25-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="25-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="25-material-valor" id="25-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-vinilo" id="25-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="25-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-instalar" id="25-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="25-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-instalar" id="25-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="25-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-instalar" id="25-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="25-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-lugar" id="25-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="25-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-lugar" id="25-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="25-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="25-lugar" id="25-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="25-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="25-otroCiudad" style="display: none;">
                                            <label for="25-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="25-ciudadEspecifica" name="25-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--26 - Red Inerte-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                            <div class="row">
                                <div class="col col-md-6 lista_precio text-start" id="26-nombre">26 - Señalética de Red Inerte<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="26-precio" name="26-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse26" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/026.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/026.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="26-placas" name="26-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-medidas" id="26-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="26-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-material" id="26-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="26-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="26-material-valor" id="26-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-vinilo" id="26-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="26-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-instalar" id="26-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="26-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-instalar" id="26-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="26-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-instalar" id="26-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="26-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-lugar" id="26-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="26-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-lugar" id="26-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="26-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="26-lugar" id="26-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="26-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="26-otroCiudad" style="display: none;">
                                            <label for="26-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="26-ciudadEspecifica" name="26-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--27 - PELIGRO Red de Gas-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                            <div class="row">
                                <div class="col col-md-6 lista_precio text-start" id="27-nombre">27 - Señalética de PELIGRO Red de Gas<p class="txt_special">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum aliquam suscipit.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="27-precio" name="27-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse27" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/027.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/027.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="27-placas" name="27-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-medidas" id="27-15x20" value="15cm X 20cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="27-15x20">15cm X 20cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-material" id="27-sintraPvc" value="Sintra PVC" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="27-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="27-material-valor" id="27-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-vinilo" id="27-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="27-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-instalar" id="27-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="27-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-instalar" id="27-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="27-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-instalar" id="27-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="27-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-lugar" id="27-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="27-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-lugar" id="27-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="27-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="27-lugar" id="27-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="27-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="27-otroCiudad" style="display: none;">
                                            <label for="27-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="27-ciudadEspecifica" name="27-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--28 - Señaletica Pare - REFLECTANTE-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                            <div class="row">
                                <div class="col col-md-6 lista_precio text-start" id="28-nombre">28 - Señalética Pare - REFLECTANTE<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sunt tenetur voluptatum?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="28-precio" name="28-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse28" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/028.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/028.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="28-placas" name="28-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="28-cambio">Cantidad de postes:</label>
                                    <div class="col" id="28-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="28-postes" name="28-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-medidas" id="28-40x40" value="40cm X 40cm">
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="28-40x40">40cm X 40cm</label>
                                            <input type="hidden" name="28-medidas-valor" id="28-medidas-valor-40x40" value="01">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-medidas" id="28-60x60" value="60cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="28-60x60">60cm X 60cm</label>
                                            <input type="hidden" name="28-medidas-valor" id="28-medidas-valor-60x60" value="02">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-material" id="28-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="28-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="28-material-valor" id="28-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-material" id="28-sintraPvc" value="Sintra PVC" data-valor="8950" >
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="28-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="28-material-valor" id="28-material-valor-sintra" value="01">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-vinilo" id="28-viniloCorte" value="Vinilo Corte" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-5 px-4" for="28-viniloCorte">VINILO CORTE</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-instalar" id="28-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="28-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-instalar" id="28-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="28-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-instalar" id="28-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="28-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-lugar" id="28-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="28-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-lugar" id="28-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="28-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="28-lugar" id="28-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="28-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="28-otroCiudad" style="display: none;">
                                            <label for="28-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="28-ciudadEspecifica" name="28-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--29 - Display Informativo - Formato Carta-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                            <div class="row ">
                                <div class="col-md-6 lista_precio text-start" id="29-nombre">29 - Display Informativo - Formato Carta<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eos molestias magni!</p></div>
                                <hr id="head">
                                <div class="col-md-6 text-end fw-bold lista_precio d-block" id="29-precio" name="29-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse29" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/029.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/029.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="29-placas" name="29-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-medidas" id="29-23x38" value="20cm X 30cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="29-23x38">23cm X 38cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check text-center">
                                            <input class="form-check-input" type="radio" name="29-material" id="29-acrilico" value="Acrílico" data-valor="8950" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-5 px-4 py-2" for="29-acrilico">ACRÍLICO</label>
                                            <input type="hidden" name="29-material-valor" value="00">
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-vinilo" id="29-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="29-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-instalar" id="29-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="29-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-instalar" id="29-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="29-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-instalar" id="29-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="29-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-lugar" id="29-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="29-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-lugar" id="29-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="29-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="29-lugar" id="29-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="29-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="29-otroCiudad" style="display: none;">
                                            <label for="29-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="29-ciudadEspecifica" name="29-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--30 - Planos de Distribución y Seguridad-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                            <div class="row">
                                <div class="col col-md-6 lista_precio text-start" id="30-nombre">30 - Planos de Distribución y Seguridad (Incluye Diseño)<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet possimus ex quia quo.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="30-precio" name="30-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse30" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/030.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/030.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="30-placas" name="30-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-medidas" id="30-100x120" value="100cm X 120cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="30-100x120">100cm X 120cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-material" id="30-acrilico" value="Acrílico" data-valor="8950"  checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-5 px-4 py-2" for="30-acrilico">ACRÍLICO</label>
                                            <input type="hidden" name="30-material-valor" id="30-material-valor-acrilico" value="01">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-material" id="30-sintraPvc" value="Sintra PVC" data-valor="2000">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="30-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="30-material-valor" id="30-material-valor-sintra" value="00">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="30-vinilo" id="30-viniloImpreso" value="Vinilo Impreso" checked>
                                        <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="30-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-instalar" id="30-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="30-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-instalar" id="30-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="30-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-instalar" id="30-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="30-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-lugar" id="30-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="30-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-lugar" id="30-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="30-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="30-lugar" id="30-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="30-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="30-otroCiudad" style="display: none;">
                                            <label for="30-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-success-subtle" id="30-ciudadEspecifica" name="30-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--31 - Planos de Zona de Seguridad-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                            <div class="row">
                                <div class="col col-md-6 lista_precio text-start" id="31-nombre">31 - Planos de Zona de Seguridad (Incluye Diseño)<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet possimus ex quia quo.</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="31-precio" name="31-recio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse31" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/031.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/031.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="31-placas" name="31-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-medidas" id="31-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="31-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-material" id="31-acrilico" value="Acrílico" data-valor="8950"  checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-5 px-4 py-2" for="31-acrilico">ACRÍLICO</label>
                                            <input type="hidden" name="31-material-valor" id="31-material-valor-acrilico" value="01">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-material" id="31-sintraPvc" value="Sintra Pvc" data-valor="2000">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="31-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="31-material-valor" id="31-material-valor-sintra" value="00">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="31-vinilo" id="31-viniloImpreso" value="Vinilo Impreso" checked>
                                        <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="31-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-instalar" id="31-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="31-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-instalar" id="31-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="31-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-instalar" id="31-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="31-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-lugar" id="31-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="31-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-lugar" id="31-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="31-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="31-lugar" id="31-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="31-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="31-otroCiudad" style="display: none;">
                                            <label for="31-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="31-ciudadEspecifica" name="31-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--32 - Señalética de Punto de Encuentro-->
                <div class="accordion-item border-arancio">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                            <div class="row">
                                <div class="col col-md-6 lista_precio text-start" id="32-nombre">32 - Señalética de Punto de Encuentro<p class="txt_special">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ex quod perferendis exercitationem?</p></div>
                                <hr id="head">
                                <div class="col col-md-6 text-end fw-bold lista_precio " id="32-precio" name="32-precio"><span class="d-block text-end">Valor $</span></div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapse32" class="accordion-collapse collapse justify-content-center" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-white row">
                            <div class="col-md-3 text-center">
                                <img src="img/presupuesto/condominio/032.jpg" alt="" class="img-fluid mb-2 border border-dark-subtle">
                                <button type="button" class="btn btn-outline-arancio mt-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#miModal" data-imagen="img/presupuesto/condominio/032.jpg">
                                    Ver Imagen Ampliada
                                </button>
                            </div>
                            <div class="col-md-3 lista_presupuesto">
                                <div class="mb-3 row">
                                    <label for="placas" class="col col-form-label">Cantidad de Placas:</label>
                                    <div class="col">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="32-placas" name="32-placas" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postes" class="col col-form-label" id="32-cambio">Cantidad de Postes:</label>
                                    <div class="col" id="32-postes1">
                                        <input type="number" class="form-control lista_presupuesto border-secondary-subtle" id="32-postes" name="32-postes" min="0" value="00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="medidas" class="col col-form-label">Medida (Ancho x Alto)</label>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-medidas" id="32-40x60" value="40cm X 60cm" checked>
                                            <label class="form-check-label lista_presupuesto border border-secondary-subtle rounded text-center px-2 pmx-4" for="32-40x60">40cm X 60cm</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="materialidad" class="col-md-5 col-form-label">Materialidad de la Placa</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="32-material" id="32-aluminioCompuesto" value="Aluminio Compuesto" data-valor="2000" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-2" for="32-aluminioCompuesto">ALUMINIO COMPUESTO</label>
                                            <input type="hidden" name="32-material-valor" id="32-material-valor-aluminio" value="00">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-material" id="32-sintraPvc" value="Sintra PVC" data-valor="2000">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-4 pmx-5" for="32-sintraPvc">SINTRA PVC</label>
                                            <input type="hidden" name="32-material-valor" id="32-material-valor-sintra" value="01">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="grafica" class="col-md-5 col-form-label">Gráfica Personalizada</label>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-vinilo" id="32-viniloImpreso" value="Vinilo Impreso" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded pmx-4" for="32-viniloImpreso">VINILO IMPRESIÓN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 lista_presupuesto text-center">
                                <div class="mb-3 row justify-content-center">
                                    <label for="instalacion" class="col-md-4 col-form-label">Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-instalar" id="32-siInstala" value="Con Instalación" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 pmx-4" for="32-siInstala">CON INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-instalar" id="32-noInstala" value="Sin Instalación">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-4" for="32-noInstala">SIN INSTALACIÓN</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-instalar" id="32-soloEntrega" value="Solo Entrega">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-3 pmx-5" for="32-soloEntrega">SOLO ENTREGA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <label for="sector" class="col-md-4 col-form-label">Lugar de Instalación</label>
                                    <div class="col-md-8 col-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-lugar" id="32-laSerena" value="La Serena" checked>
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded text-center px-4 py-2 pmx-5" for="32-laSerena"><span class="txt_special_2">...</span>LA  SERENA<span class="txt_special_2">..</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-lugar" id="32-coquimbo" value="Coquimbo">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded py-2 pmx-3" for="32-coquimbo"><span class="txt_special_2">Lore.</span>COQUIMBO<span class="txt_special_2">Lore.</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="32-lugar" id="32-otro" value="OTRO">
                                            <label class="form-check-label lista_presupuesto_2 border border-secondary-subtle rounded px-2 py-2 pmx-4 pmy-2" for="32-otro"><span class="txt_special_2">Lorem.</span>OTRO<span class="txt_special_2">Lorem.</span></label>
                                        </div>
                                        <div id="32-otroCiudad" style="display: none;">
                                            <label for="32-ciudadEspecifica">Especifique su ciudad:</label>
                                            <input type="text" class="form-control border-secondary-subtle" id="32-ciudadEspecifica" name="32-ciudadEspecifica">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Total-->
                <hr>
                <div class="mt-3 mb-3">
                    <h1 class="text-center fw-bold fst-italic mb-5">Total de tu Cotización</h1>
                    <div class="row mb-1">
                        <div class="col-md-4 fst-italic"><h4>Total cantidad de los Placas / Señaleticas:</h4></div>
                        <div class="col-md-8 border border-info text-end py-4" id="cantidadPlacas"><h3>00</h3></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-4 fst-italic mmt-4"><h4>Total cantidad de los Postes:</h4></div>
                        <div class="col-md-8 border border-info text-end py-4" id="cantidadPostes"><h3>00</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 fst-italic">
                            <h4 class="mb-0 pb-0 mmt-4">Total Valor de los Productos:</h4>
                            <p class="mt-0 pt-0">(Valor no incluye Instalación y Envio)</p>
                        </div>
                        <div class="col-md-8 border border-info text-end py-4" id="valorTotal"><h3>00</h3></div>
                    </div>
                    <h5 class="mb-0 pb-0 mt-5 text-end fst-italic">Al momento de recibir su Formulario de Cotización le enviaremos, una Cotización Formal junto a los tiempos de entrega.</h5>
                </div>
                <hr>           
            </div>

<!--Fin Productos-->

            <div class="text-end">
                <button type="submit" class="btn btn-outline-arancio"><h3>Enviar</h3></button>
            </div>
        </form>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-custom"> <!-- Aplicamos la clase personalizada al modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Aquí colocamos la imagen que cambiará dinámicamente -->
        <img src="" alt="Imagen" class="img-fluid modal-img border border-dark-subtle" id="imagenModal" >
      </div>
    </div>
  </div>
</div>

<!--MENSAJE ENVIO-->
<!-- Pop-up de éxito -->
<div id="popupSuccess" class="popup" style="display: none;">
    <button type="button" class="btn-close" aria-label="Close" id="closeButtonSuccess"></button>
    <h3>Mensaje enviado correctamente</h3>
    <p>Gracias por contactarnos. En Arancio estamos muy felices de trabajar contigo.</p>
</div>

<!-- Pop-up de error -->
<div id="popupError" class="popup" style="display: none;">
    <button type="button" class="btn-close" aria-label="Close" id="closeButtonError"></button>
    <h3>Error al enviar el mensaje</h3>
    <p>Lo sentimos, ha ocurrido un error al enviar el mensaje. Por favor, inténtelo de nuevo.</p>
</div>


    <!--Footer-->
    <?php
      include('footer.php')
    ?>
    <!--Final Footer-->

    <!--Script-->
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/lugar.js"></script>
    <script src="js/precio_condominio.js"></script>
    <script src="js/text.js"></script>
    <script src="js/required.js"></script>
    <script src="js/ocultar.js"></script>
    <script src="js/cambio.js"></script>
    <script>
        // Función para cambiar la imagen del modal según el botón que se hizo clic
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function (button) {
            button.addEventListener('click', function () {
            var imagen = this.getAttribute('data-imagen');
            document.getElementById('imagenModal').src = imagen;
            });
        });
    </script>
    <script>
        // Función para mostrar un mensaje cuando se hace clic derecho
        window.oncontextmenu = function () {
            alert("El clic derecho está deshabilitado en esta página.");
            return false; // Esto evita que aparezca el menú contextual
        };
    </script>
    

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        if (this.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        this.classList.add('was-validated');
    });

    var popupSuccess = document.getElementById('popupSuccess');
    var popupError = document.getElementById('popupError');
    var contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', function(event) {
        if (this.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            // Envío del formulario mediante AJAX
            event.preventDefault();
            var formData = new FormData(this);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', this.action, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // El envío fue exitoso
                    popupSuccess.style.display = 'block';
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                } else {
                    // Hubo un error en el envío
                    popupError.style.display = 'block';
                }
            };
            xhr.onerror = function() {
                // Hubo un error en el envío
                popupError.style.display = 'block';
            };
            xhr.send(formData);
        }
    });

    // Cerrar los pop-ups al hacer clic en el icono de "X"
    document.getElementById('closeButtonSuccess').addEventListener('click', function() {
        popupSuccess.style.display = 'none';
        // Refrescar la página
        location.reload();
        // Desplazarse hacia la parte superior después de cerrar el popup
        window.scrollTo(0, 0);
    });

    document.getElementById('closeButtonError').addEventListener('click', function() {
        popupError.style.display = 'none';
        // Refrescar la página
        location.reload();
        // Desplazarse hacia la parte superior después de cerrar el popup
        window.scrollTo(0, 0);
    });
</script>




  </body>
</html>