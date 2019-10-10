(() => {
    $.ajax({
        url: "../BackendProyecto/index-empresas.php",
        method: "GET",
        success: function(response) {
            //console.log(response);
            listarPromociones(response);
        },
        error: (error) => {
            console.log('error');
        }

    });

})();


// variables globales
var datosUsuario = {
    nombreUsuario: null,
    correoUsuario: null,
    idUsuario: null,
    direccionUsuario: null,
    telefonoUsuario: null,
    contrasenaUsuario: null,
    paisUsuario: null,
    nacimientoUsuario: null,
    generoUsuario: null
}
var verificarUsuario = [false, false, false, false, false, false, false, false, false];


// llenando el input de los paises
(() => {
    var paises = ["Afganistán", "Akrotiri", "Albania", "Alemania", "Andorra", "Angola", "Anguila", "Antártida", "Antigua y Barbuda", "Antillas Neerlandesas", "Arabia Saudí", "Arctic Ocean", "Argelia", "Argentina", "Armenia", "Aruba", "Ashmore andCartier Islands", "Atlantic Ocean", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahráin", "Bangladesh", "Barbados", "Bélgica", "Belice", "Benín", "Bermudas", "Bielorrusia", "Birmania Myanmar", "Bolivia", "Bosnia y Hercegovina", "Botsuana", "Brasil", "Brunéi", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "Chile", "China", "Chipre", "Clipperton Island", "Colombia", "Comoras", "Congo", "Coral Sea Islands", "Corea del Norte", "Corea del Sur", "Costa de Marfil", "Costa Rica", "Croacia", "Cuba", "Dhekelia", "Dinamarca", "Dominica", "Ecuador", "Egipto", "El Salvador", "El Vaticano", "Emiratos Árabes Unidos", "Eritrea", "Eslovaquia", "Eslovenia", "España", "Estados Unidos", "Estonia", "Etiopía", "Filipinas", "Finlandia", "Fiyi", "Francia", "Gabón", "Gambia", "Gaza Strip", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Ecuatorial", "Guinea-Bissau", "Guyana", "Haití", "Honduras", "Hong Kong", "Hungría", "India", "Indian Ocean", "Indonesia", "Irán", "Iraq", "Irlanda", "Isla Bouvet", "Isla Christmas", "Isla Norfolk", "Islandia", "Islas Caimán", "Islas Cocos", "Islas Cook", "Islas Feroe", "Islas Georgia del Sur y Sandwich del Sur", "Islas Heard y McDonald", "Islas Malvinas", "Islas Marianas del Norte", "IslasMarshall", "Islas Pitcairn", "Islas Salomón", "Islas Turcas y Caicos", "Islas Vírgenes Americanas", "Islas Vírgenes Británicas", "Israel", "Italia", "Jamaica", "Jan Mayen", "Japón", "Jersey", "Jordania", "Kazajistán", "Kenia", "Kirguizistán", "Kiribati", "Kuwait", "Laos", "Lesoto", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Macao", "Macedonia", "Madagascar", "Malasia", "Malaui", "Maldivas", "Malí", "Malta", "Man, Isle of", "Marruecos", "Mauricio", "Mauritania", "Mayotte", "México", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montserrat", "Mozambique", "Namibia", "Nauru", "Navassa Island", "Nepal", "Nicaragua", "Níger", "Nigeria", "Niue", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Pacific Ocean", "Países Bajos", "Pakistán", "Palaos", "Panamá", "Papúa-Nueva Guinea", "Paracel Islands", "Paraguay", "Perú", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República Democrática del Congo", "República Dominicana", "Ruanda", "Rumania", "Rusia", "Sáhara Occidental", "Samoa", "Samoa Americana", "San Cristóbal y Nieves", "San Marino", "San Pedro y Miquelón", "San Vicente y las Granadinas", "Santa Helena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Southern Ocean", "Spratly Islands", "Sri Lanka", "Suazilandia", "Sudáfrica", "Sudán", "Suecia", "Suiza", "Surinam", "Svalbard y Jan Mayen", "Tailandia", "Taiwán", "Tanzania", "Tayikistán", "TerritorioBritánicodel Océano Indico", "Territorios Australes Franceses", "Timor Oriental", "Togo", "Tokelau", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Unión Europea", "Uruguay", "Uzbekistán", "Vanuatu", "Venezuela", "Vietnam", "Wake Island", "Wallis y Futuna", "West Bank", "World", "Yemen", "Yibuti", "Zambia", "Zimbabue"];
    for (let i = 0; i < paises.length; i++) {
        $('#paisUsuario').append(`
         <option value="${paises[i]}">${paises[i]}</option>`);
    }

})();



// VALIDACIONES EN LINEA
//validando el nombre de la empresa
document.getElementById('nombreUsuario').addEventListener('input', function() {
    campo = event.target;
    if (campo.value.length == 0 || /^\s+$/.test(campo.value) || /[a-zA-Z]((\.|_|-)?[a-zA-Z0-9]+){3}/.test(campo.value) == false) {
        $('#listo-nombreUsuario').addClass('ds-color');
        $('#no-listo-nombreUsuario').removeClass('ds-color');
        verificarUsuario[0] = false;
    } else {
        $('#no-listo-nombreUsuario').addClass('ds-color');
        $('#listo-nombreUsuario').removeClass('ds-color');
        verificarUsuario[0] = true;
        datosUsuario.nombreUsuario = $('#nombreUsuario').val();
    }
});


// validando el correoEmpresa
document.getElementById('correoUsuario').addEventListener('input', function() {
    campo = event.target;
    let exp = /[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+([a-z]{2}|aero|asia|arpa|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|xxx)/;
    if (exp.test(campo.value) || /^\s+$/.test(campo.value)) {
        $('#listo-correoUsuario').removeClass('ds-color');
        $('#no-listo-correoUsuario').addClass('ds-color');
        verificarUsuario[1] = true;
        datosUsuario.correoUsuario = $('#correoUsuario').val();
    } else {
        $('#no-listo-correoUsuario').removeClass('ds-color');
        $('#listo-correoUsuario').addClass('ds-color');
        verificarUsuario[1] = false;
    }

});
// validar campo idEmpresa
document.getElementById('idUsuario').addEventListener('input', function() {
    campo = event.target;
    if (campo.value.length == 0 || /^\s+$/.test(campo.value) || campo.value.length < 4 || campo.value.length > 40) {
        $('#listo-idUsuario').addClass('ds-color');
        $('#no-listo-idUsuario').removeClass('ds-color');
        verificarUsuario[2] = false;
    } else {
        $('#no-listo-idUsuario').addClass('ds-color');
        $('#listo-idUsuario').removeClass('ds-color');
        verificarUsuario[2] = true;
        datosUsuario.idUsuario = $('#idUsuario').val();
    }

});

// validar campo de direccionUsuario
document.getElementById('direccionUsuario').addEventListener('input', function() {
    campo = event.target;
    if (campo.value.length == 0 || /^\s+$/.test(campo.value) || campo.value.length < 4 || campo.value.length > 40) {
        $('#listo-direccionUsuario').addClass('ds-color');
        $('#no-listo-direccionUsuario').removeClass('ds-color');
        verificarUsuario[3] = false;
    } else {
        $('#no-listo-direccionUsuario').addClass('ds-color');
        $('#listo-direccionUsuario').removeClass('ds-color');
        verificarUsuario[3] = true;
        datosUsuario.direccionUsuario = $('#direccionUsuario').val();
    }

});

// validar campo telefonoUsuario
document.getElementById('telefonoUsuario').addEventListener('input', function() {
    campo = event.target;
    let exp = /0{0,2}([\+]?[\d]{1,3} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?/;
    if (exp.test(campo.value)) {
        $('#no-listo-telefonoUsuario').addClass('ds-color');
        $('#listo-telefonoUsuario').removeClass('ds-color');
        verificarUsuario[4] = true;
        datosUsuario.telefonoUsuario = $('#telefonoUsuario').val();

    } else {
        $('#listo-telefonoUsuario').addClass('ds-color');
        $('#no-listo-telefonoUsuario').removeClass('ds-color');
        verificarUsuario[4] = false;
    }

});

// validar campo contraseñaUsuario
document.getElementById('contrasenaUsuario').addEventListener('input', function() {
    campo = event.target;
    var ayuda = false;
    if (campo.value.indexOf(" ") != -1) {
        ayuda = true;
    } else {
        ayuda = false;
    }
    if (ayuda == true || (campo.value.length == 0 || /^\s+$/.test(campo.value)) || (campo.value.length < 4 || campo.value.length > 40)) {
        $('#listo-contrasenaUsuario').addClass('ds-color');
        $('#no-listo-contrasenaUsuario').removeClass('ds-color');
        verificarUsuario[5] = false;
    } else {
        $('#no-listo-contrasenaUsuario').addClass('ds-color');
        $('#listo-contrasenaUsuario').removeClass('ds-color');
        verificarUsuario[5] = true;
        datosUsuario.contrasenaUsuario = $('#contrasenaUsuario').val();
    }

});

// button mostrar/ocultar contraseña del registro de Usuario
function mostrarContrasena() {
    var contrasena = document.getElementById('contrasenaUsuario');
    if (contrasena.type == "password") {
        contrasena.type = "text";
        $('#emojiRegistroUsuario').replaceWith(` <i id="emojiRegistroUsuario" onclick="mostrarContrasena()" class="fas fa-eye-slash emoji-form-registro-usuario"></i>`);
    } else {
        contrasena.type = "password";
        $('#emojiRegistroUsuario').replaceWith(` <i id="emojiRegistroUsuario" onclick="mostrarContrasena()" class="fas fa-eye emoji-form-registro-usuario"></i>`);
    }
}

//  validando campo paisUsuario
var sele = document.getElementById('paisUsuario');
sele.addEventListener('change', function() {
    var selecOption = this.options[sele.selectedIndex];
    if (selecOption.value.length == 0 || /^\s+$/.test(selecOption.value)) {
        $('#listo-paisUsuario').addClass('ds-color');
        $('#no-listo-paisUsuario').removeClass('ds-color');
        verificarUsuario[6] = false;
    } else {
        $('#no-listo-paisUsuario').addClass('ds-color');
        $('#listo-paisUsuario').removeClass('ds-color');
        verificarUsuario[6] = true;
        datosUsuario.paisUsuario = $('#paisUsuario').val();
    }
});


// validar campo fundacionEmpresa
document.getElementById('nacimientoUsuario').addEventListener('input', function() {
    campo = event.target;
    if (campo.value.length == 0 || /^\s+$/.test(campo.value)) {
        $('#listo-nacimientoUsuario').addClass('ds-color');
        $('#no-listo-nacimientoUsuario').removeClass('ds-color');
        verificarUsuario[7] = false;
    } else {
        $('#no-listo-nacimientoUsuario').addClass('ds-color');
        $('#listo-nacimientoUsuario').removeClass('ds-color');
        verificarUsuario[7] = true;
        datosUsuario.nacimientoUsuario = $('#nacimientoUsuario').val();
    }

});

// validar campo Genero
function validarGenero() {
    let inputGenero = document.querySelector('input[type="radio"][name="genero"]:checked');
    if (inputGenero == null) {
        $('#no-listo-generoUsuario').removeClass('ds-color');
        $('#listo-generoUsuario').addClass('ds-color');
        verificarUsuario[8] = false;
    } else {
        $('#listo-generoUsuario').removeClass('ds-color');
        $('#no-listo-generoUsuario').addClass('ds-color');
        verificarUsuario[8] = true;
        datosUsuario.generoUsuario = (inputGenero == null) ? '' : inputGenero.value;
    }
}


function enviarDatosUsuarios() {
    // utima validación de nombreUsuario
    if (verificarUsuario[0] == false) {
        $('#listo-nombreUsuario').addClass('ds-color');
        $('#no-listo-nombreUsuario').removeClass('ds-color');
        verificarUsuario[0] = false;
        datosUsuario.nombreUsuario = null;
        $('#nombreUsuario').focus();

    } else {
        $('#no-listo-nombreUsuario').addClass('ds-color');
        $('#listo-nombreUsuario').removeClass('ds-color');
        verificarUsuario[0] = true;
    }
    // utima validación de correoUsuario
    if (verificarUsuario[1] == false) {
        $('#listo-correoUsuario').addClass('ds-color');
        $('#no-listo-correoUsuario').removeClass('ds-color');
        verificarUsuario[1] = false;
        datosUsuario.correoUsuario = null;
        $('#correoUsuario').focus();

    } else {
        $('#no-listo-correoUsuario').addClass('ds-color');
        $('#listo-correoUsuario').removeClass('ds-color');
        verificarUsuario[1] = true;
    }
    // utima validación de idUsuario
    if (verificarUsuario[2] == false) {
        $('#listo-idUsuario').addClass('ds-color');
        $('#no-listo-idUsuario').removeClass('ds-color');
        verificarUsuario[2] = false;
        datosUsuario.idUsuario = null;
        $('#idUsuario').focus();
    } else {
        $('#no-listo-idUsuario').addClass('ds-color');
        $('#listo-idUsuario').removeClass('ds-color');
        verificarUsuario[2] = true;
    }
    // utima validación de direccionUsuario
    if (verificarUsuario[3] == false) {
        $('#listo-direccionUsuario').addClass('ds-color');
        $('#no-listo-direccionUsuario').removeClass('ds-color');
        verificarUsuario[3] = false;
        datosUsuario.direccionUsuario = null;
        $('#direccionUsuario').focus();
    } else {
        $('#no-listo-direccionUsuario').addClass('ds-color');
        $('#listo-direccionUsuario').removeClass('ds-color');
        verificarUsuario[3] = true;
    }

    // utima validación de telefonoUsuario
    if (verificarUsuario[4] == false) {
        $('#listo-telefonoUsuario').addClass('ds-color');
        $('#no-listo-telefonoUsuario').removeClass('ds-color');
        verificarUsuario[4] = false;
        datosUsuario.telefonoUsuario = null;
        $('#telefonoUsuario').focus();
    } else {
        $('#no-listo-telefonoUsuario').addClass('ds-color');
        $('#listo-telefonoUsuario').removeClass('ds-color');
        verificarUsuario[4] = true;
    }

    // utima validación de contrasenaUsuario
    if (verificarUsuario[5] == false) {
        $('#listo-contrasenaUsuario').addClass('ds-color');
        $('#no-listo-contrasenaUsuario').removeClass('ds-color');
        verificarUsuario[5] = false;
        datosUsuario.contrasenaUsuario = null;
        $('#contrasenaUsuario').focus();
    } else {
        $('#no-listo-contrasenaUsuario').addClass('ds-color');
        $('#listo-contrasenaUsuario').removeClass('ds-color');
        verificarUsuario[5] = true;
    }

    //  validando campo paisUsuario
    if (verificarUsuario[6] == false) {
        $('#listo-paisUsuario').addClass('ds-color');
        $('#no-listo-paisUsuario').removeClass('ds-color');
        verificarUsuario[6] = false;
        datosUsuario.paisUsuario = null;
    } else {
        $('#no-listo-paisUsuario').addClass('ds-color');
        $('#listo-paisUsuario').removeClass('ds-color');
        $('#paisUsuario').focus();
        verificarUsuario[6] = true;
    }


    // validar campo nacimientoUsuario
    if (verificarUsuario[7] == false) {
        $('#listo-nacimientoUsuario').addClass('ds-color');
        $('#no-listo-nacimientoUsuario').removeClass('ds-color');
        verificarUsuario[7] = false;
        datosUsuario.nacimientoUsuario = null;
        $('#nacimientoUsuario').focus();
    } else {
        $('#no-listo-nacimientoUsuario').addClass('ds-color');
        $('#listo-nacimientoUsuario').removeClass('ds-color');
        verificarUsuario[7] = true;
    }


    // validar campo Genero
    if (verificarUsuario[8] == false) {
        $('#no-listo-generoUsuario').removeClass('ds-color');
        $('#listo-generoUsuario').addClass('ds-color');
        verificarUsuario[8] = false;
        datosUsuario.generoUsuario = null;
    } else {
        $('#listo-generoUsuario').removeClass('ds-color');
        $('#no-listo-generoUsuario').addClass('ds-color');
        verificarUsuario[8] = true;
    }
    let cont = 0;
    let ayu = false;
    while (verificarUsuario[cont]) {
        ayu = true;
        cont++;
    }

    if (ayu) {
        $.ajax({
            type: "POST",
            url: "php/indexUsuarios.php",
            data: datosUsuario,
            dataType: "JSON",
            success: function(response) {
                if (response.datos != "incompletos") {
                    window.location.href = "verificarCorreo.html";
                } else {
                    alert("Complete todos los campos por favor!!");
                }
            }
        });
    } else {
        alert("Complete todos los campos por favor!!");
    }
}


function listarPromociones(Empresas) {
    console.log(Empresas);

    for (let idEmpresa in Empresas) {
        //console.log(idEmpresa);

        $('#promociones').append(`
    <!-- Producto 1-->
                <div class="pro" >
                    <!-- seccion de nombres pro  -->
                    <div class="namePro">${Empresas[idEmpresa].promociones.nombrePromocion}</div>
                    <div class="nameEmpre">${Empresas[idEmpresa].nombreEmpresa}</div>
                    <!-- seccion de imagenes pro  -->
                    <div class="img-prin">
                        <img src="${Empresas[idEmpresa].promociones.urlFotoFrente}" alt="">
                    </div>
                    <!-- sección de descripción producto  -->
                    <div class="des-prin">
                        <div class="titulo-descripcion"><span><i class="fas fa-list"></i> DESCRIPCIÓN</span>
                        </div>
                        <div class="parra">
                            <p>${Empresas[idEmpresa].promociones.descripcionPromocion}</p>
                        </div>
                    </div>

                    <!-- Botón para la ventana modal de IMAGENES pro 1-->
                    <div class="mas-imagenes" data-toggle="modal" data-target="#mas-img-de-pro-1">
                        <span>
                        VER MAS IMAGENES <span class="far fa-images"></span>
                        </span>
                    </div>

                    <!-- Ventana modal de más IMAGENES pro 1-->
                    <div class="modal fade" id="mas-img-de-pro-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">MÁS IMAGENES <span class="far fa-images"></span></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div id="carousel-pro-1" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-pro-1" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-pro-1" data-slide-to="1"></li>
                                            <li data-target="#carousel-pro-1" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-intervall="5000">
                                                <img src="${Empresas[idEmpresa].promociones.urlFotoFrente}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-intervall="5000">
                                                <img src="${Empresas[idEmpresa].promociones.urlFotoIzquierdo}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-intervall="5000">
                                                <img src="${Empresas[idEmpresa].promociones.urlFotoDerecho}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-pro-1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-pro-1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">CERRAR <i
                                        class="fas fa-window-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Seccion de Precios-->
                    <div class="cont-precio">
                        <div>
                            <p>PRECIO REAL: ${Empresas[idEmpresa].productos.Producto1.precio}</p>
                        </div>
                        <div>
                            <p>PRECIO OFERTA: ${Empresas[idEmpresa].promociones.precioFinalPromocion}</p>
                        </div>
                        <div>
                            <p>DESCUENTO: ${Empresas[idEmpresa].promociones.porcentajeDescuento}</p>
                        </div>
                        <div>
                            <p>FIN DE PROMOCIÓN: ${Empresas[idEmpresa].promociones.fechaVencimientoPromocion}</p>
                        </div>
                        <div data-toggle="modal" href="#login">
                            <p><i class="fas fa-shopping-cart"></i> COMPRAR</p>
                        </div>
                    </div>

                    <!-- Botón para la ventana modal de COMENTARIO pro 1-->
                    <div class="mas-imagenes" data-toggle="modal" data-target="#a${idEmpresa}">
                        <span>
                        COMENTARIOS <span class="fas fa-comments"></span>
                        </span>
                    </div>
                    
                    <!-- Ventana modal de COMENTARIOS  -->
                    <div class="modal fade" id="a${idEmpresa}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                       
                    </div>
                </div>

            `);
        listarComentarios(Empresas[idEmpresa].promociones.comentarios, idEmpresa);
    }




}

function listarComentarios(jsonComentarios, idEmpresa) {
    console.log(jsonComentarios);
    console.log('#' + 'a' + idEmpresa);
    for (let noComentario in jsonComentarios) {
        $('#' + 'a' + idEmpresa).append(`
     <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">COMENTARIO <span class="fas fa-comments"></span></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-12 comentarios">
                                        <div>
                                            <div class="comenta" id="comentariosModal">
                                                <div>
                                                    <img src="img/ani2.jpg">
                                                </div>
                                                <div class="conte-coment">
                                                    <div class="conte-coment-div-name"><span>${jsonComentarios[noComentario].usuarioComento}</span></div>
                                                    <div class="conte-coment-div-cont-pri">
                                                        <p>${jsonComentarios[noComentario].comentario}</p>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">CERRAR <i
                                        class="fas fa-window-close"></i></button>
                                </div>
                            </div>
                        </div>
    `);
    }

}