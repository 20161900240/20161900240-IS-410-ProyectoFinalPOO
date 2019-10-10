(() => {
    $.ajax({
        url: "../index-empresas.php",
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

function listarPromociones(Empresa) {
    console.log(Empresa);

    for (let idEmpresa in Empresa) {
        $('#listarPromociones').append(`
    <div class="pro">
                        <!-- sección de nombre de promocion 1 -->
                        <div class="namePro">${Empresa[idEmpresa].promociones.nombrePromocion}</div>
                        <div class="nameEmpre">${Empresa[idEmpresa].nombreEmpresa}</div>
                        <!-- seccion de imagen princial promo 1 -->
                        <div class="img-prin">
                            <div class="bimg">
                                <img src="../../FrontedProyecto/${Empresa[idEmpresa].promociones.urlFotoFrente}" alt="">
                            </div>
                        </div>
                        <!-- seccion de descripcion de promo 1 -->
                        <div class="des-prin">
                            <div class="titulo-descripcion"><span><i class="fas fa-list"></i> DESCRIPCIÓN</span>
                            </div>
                            <div class="parra">
                                <p>${Empresa[idEmpresa].promociones.descripcionPromocion}</p>
                            </div>
                        </div>

                        <!--Seccion de Precios-->
                        <div class="cont-precio">
                            <div>
                                <p>PRECIO REAL: ${Empresa[idEmpresa].productos.Producto1.precio}</p>
                            </div>
                            <div>
                                <p>PRECIO OFERTA: ${Empresa[idEmpresa].promociones.precioFinalPromocion}</p>
                            </div>
                            <div>
                                <p>DESCUENTO: ${Empresa[idEmpresa].promociones.porcentajeDescuento}</p>
                            </div>
                            <div>
                                <p>FIN DE PROMOCIÓN: ${Empresa[idEmpresa].promociones.fechaVencimientoPromocion}</p>
                            </div>
                            <div data-toggle="modal" href="#login">
                                <p><i class="fas fa-shopping-cart"></i> COMPRAR</p>
                            </div>
                        </div>

                        <div class="row">
                            <!-- boton de ver mas imagenes promo 1 -->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <div class="mas-imagenes" data-toggle="modal" data-target="#mas-img-de-pro-2">
                                    <span><label>
                                            VER MAS IMAGENES
                                        </label> <span class="far fa-images"></span>
                                    </span>
                                </div>
                            </div>
                            <!-- boton de guardar promocion como favorita -->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12" onclick="ccgpcf()">
                                <div class="mas-imagenes">
                                    <span>
                                        <span>
                                            <label>
                                                GUARDAR PROMOCIÓN COMO FAVORITA
                                                <span style="color:white">
                                                    <span id="ccgpcf" class="fas fa-heart"></span>
                                                </span>
                                                <input type="checkbox" name="" id="cpf" style="display:none;">
                                            </label>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <!-- boton de guardar empresa como favorita promo 1 -->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12" onclick="ccgecf()">
                                <div class="mas-imagenes">
                                    <span>
                                        <label>
                                            GUARDAR EMPRESA COMO FAVORITA
                                            <span style="color: white">
                                                <span id="favGecf" class="fas fa-heart"></span>
                                            </span>
                                            <input type="checkbox" name="" id="cef" style="display:none;">
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- boton de ver comentarios promo 1 -->
                            <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                data-target="#ver-comentarios-pro-2">
                                <div class="mas-imagenes">
                                    <span>
                                        COMENTARIOS <span class="fas fa-comments"></span>
                                    </span>
                                </div>
                            </div>
                            <!-- boton de evaluar promocion promo 1 -->
                            <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                data-target="#evaluar-promocion">
                                <div class="mas-imagenes">
                                    <span>
                                        EVALUAR PROMOCIÓN <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- boton de ver la promocion en un mapa por google map -->
                            <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal" data-target="#promocion-mapa"
                                onclick="verPromocionMapa()">
                                <div class="mas-imagenes">
                                    <span>
                                        VER PROMOCIÓN EN MAPA <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Ventana modal de más IMAGENES PRO-2-->
                        <div class="modal fade" id="mas-img-de-pro-2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">MÁS IMAGENES <span class="far fa-images"></span></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="carousel-pro-2" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-pro-2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-pro-2" data-slide-to="1"></li>
                                                <li data-target="#carousel-pro-2" data-slide-to="2"></li>
                                                <li data-target="#carousel-pro-2" data-slide-to="3"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-intervall="5000">
                                                    <img src="../../FrontedProyecto/${Empresa[idEmpresa].promociones.urlFotoFrente}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item" data-intervall="5000">
                                                    <img src="../../FrontedProyecto/${Empresa[idEmpresa].promociones.urlFotoIzquierdo}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item" data-intervall="5000">
                                                    <img src="../../FrontedProyecto/${Empresa[idEmpresa].promociones.urlFotoDerecho}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item" data-intervall="5000">
                                                    <img src="../../FrontedProyecto/${Empresa[idEmpresa].promociones.urlFotoAtras}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carousel-pro-2" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-pro-2" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success"
                                            data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ventana modal de comentarios-->
                        <div class="modal fade" id="ver-comentarios-pro-2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">COMENTARIOS <span class="fas fa-comments"></span></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-12 comentarios">
                                            <div>
                                                <div class="comenta">
                                                    <div>
                                                        <img src="../../FrontedProyecto/img/avatar.png">
                                                    </div>
                                                    <div class="conte-coment">
                                                        <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                        </div>
                                                        <div class="conte-coment-div-cont">
                                                            <textarea name="" id=""
                                                                placeholder="Comentar..."></textarea><br>
                                                            <button type="button"
                                                                class="btn btn-outline-success m-x-10">Enviar
                                                                comentario</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comenta">
                                                    <div>
                                                        <img src="../../FrontedProyecto/img/prod5.jpg">
                                                    </div>
                                                    <div class="conte-coment">
                                                        <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                        </div>
                                                        <div class="conte-coment-div-cont-pri">
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Eaque

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comenta">
                                                    <div>
                                                        <img src="../../FrontedProyecto/img/prod6.jpg">
                                                    </div>
                                                    <div class="conte-coment">
                                                        <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                        </div>
                                                        <div class="conte-coment-div-cont-pri">
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Eaque minus dicta fugit, iusto non nulla est velit,
                                                                facilis
                                                                alias impedit , officia velit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comenta">
                                                    <div>
                                                        <img src="../../FrontedProyecto/img/prod7.jpg">
                                                    </div>
                                                    <div class="conte-coment">
                                                        <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                        </div>
                                                        <div class="conte-coment-div-cont-pri">
                                                            <p>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Eaque minus dicta fugit, iusto non nulla est velit,
                                                                facilis
                                                                alias res iste enim, officia velit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success"
                                            data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ventana modal de EvaluarPromoción-->
                        <div class="modal fade" id="evaluar-promocion" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">EVALUAR PROMOCIÓN <span class="fas fa-eye"></span></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="evaPromo">
                                            <label style="color:white">
                                                <i onclick="cambioColorEva1()" id="es1" class="fas fa-star "
                                                    style="font-size: 55px;"></i>
                                                <input class="ds-color" value="1" type="radio" name="evaluar-promo">
                                            </label>
                                            <label style="color:white">
                                                <i onclick="cambioColorEva2()" id="es2" class="fas fa-star"
                                                    style="font-size: 55px; "></i>
                                                <input class="ds-color" value="2" type="radio" name="evaluar-promo">
                                            </label>
                                            <label style="color:white">
                                                <i onclick="cambioColorEva3()" id="es3" class="fas fa-star"
                                                    style="font-size: 55px; "></i>
                                                <input class="ds-color" value="3" type="radio" name="evaluar-promo">
                                            </label>
                                            <label style="color:white">
                                                <i onclick="cambioColorEva4()" id="es4" class="fas fa-star"
                                                    style="font-size: 55px; "></i>
                                                <input class="ds-color" value="4" type="radio" name="evaluar-promo">
                                            </label>
                                            <label style="color:white">
                                                <i onclick="cambioColorEva5()" id="es5" class="fas fa-star"
                                                    style="font-size: 55px; "></i>
                                                <input class="ds-color" value="5" type="radio" name="evaluar-promo">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success"
                                            data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ventana modal de ver promoción en mapa por medio de ggogle map -->
                        <div class="modal fade" id="promocion-mapa" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div id="pro-mapa" class="maps">
                                    </div>
                                    <div class="modal-footer-maps">
                                        <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                                            Listo
                                            <i class="fas fa-window-close"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`);
    }
}


//header de la pagina
(() => {

    $('#empresasFavoritas').hide();
    $('#promocionesFavoritas').hide();
    $('#perfilesEmpresas').hide();
    $('#configuracion').hide();
})();

$('#mostrarInicio').click(function() {
    $('#inicio').show();
    $('#empresasFavoritas').hide();
    $('#promocionesFavoritas').hide();
    $('#perfilesEmpresas').hide();
    $('#configuracion').hide();
});
$('#mostrarEmpresasFavoritas').click(function() {
    $('#inicio').hide();
    $('#promocionesFavoritas').hide();
    $('#empresasFavoritas').show();
    $('#perfilesEmpresas').hide();
    $('#configuracion').hide();

});
$('#mostrarPromocionesFavoritas').click(function() {
    $('#empresasFavoritas').hide();
    $('#inicio').hide();
    $('#perfilesEmpresas').hide();
    $('#configuracion').hide();
    $('#promocionesFavoritas').show();
});
$('#mostrarPromocionesMaps').click(function() {
    $('#empresasFavoritas').hide();
    $('#promocionesFavoritas').hide();
    $('#inicio').hide();
    $('#perfilesEmpresas').hide();
    $('#configuracion').hide();
});
$('#mostrarPerfilesEmpresas').click(function() {
    $('#empresasFavoritas').hide();
    $('#promocionesFavoritas').hide();
    $('#inicio').hide();
    $('#configuracion').hide();
    $('#perfilesEmpresas').show();
});
$('#mostrarConfiguracionPerfil').click(function() {
    $('#empresasFavoritas').hide();
    $('#promocionesFavoritas').hide();
    $('#inicio').hide();
    $('#configuracion').show();
    $('#perfilesEmpresas').hide();
});

function cambioColorEva1() {
    document.getElementById('es5').classList.remove('verde');
    document.getElementById('es4').classList.remove('verde');
    document.getElementById('es3').classList.remove('verde');
    document.getElementById('es2').classList.remove('rojo');
    document.getElementById('es2').classList.remove('verde');
    document.getElementById('es1').classList.add('rojo');
    document.getElementById('es1').classList.remove('verde');
}

function cambioColorEva2() {
    document.getElementById('es1').classList.add('rojo');
    document.getElementById('es1').classList.remove('verde');
    document.getElementById('es2').classList.add('rojo');
    document.getElementById('es2').classList.remove('verde');
    document.getElementById('es3').classList.remove('verde');
    document.getElementById('es4').classList.remove('verde');
    document.getElementById('es5').classList.remove('verde');

}

function cambioColorEva3() {
    document.getElementById('es1').classList.add('verde');
    document.getElementById('es1').classList.remove('rojo');
    document.getElementById('es2').classList.add('verde');
    document.getElementById('es2').classList.remove('rojo');
    document.getElementById('es3').classList.add('verde');
    document.getElementById('es4').classList.remove('verde');
    document.getElementById('es5').classList.remove('verde');
}

function cambioColorEva4() {
    document.getElementById('es1').classList.add('verde');
    document.getElementById('es2').classList.add('verde');
    document.getElementById('es3').classList.add('verde');
    document.getElementById('es4').classList.add('verde');
    document.getElementById('es1').classList.remove('rojo');
    document.getElementById('es2').classList.remove('rojo');
    document.getElementById('es5').classList.remove('verde');
}

function cambioColorEva5() {
    document.getElementById('es1').classList.add('verde');
    document.getElementById('es1').classList.remove('rojo');
    document.getElementById('es2').classList.add('verde');
    document.getElementById('es2').classList.remove('rojo');
    document.getElementById('es3').classList.add('verde');
    document.getElementById('es4').classList.add('verde');
    document.getElementById('es5').classList.add('verde');
}


function verPromocionMapa() {
    coords = {
        lng: -87.23169279999999,
        lat: 14.0959744
    }
    id = 'pro-mapa'
    setMapa(coords, id);


}

function verPromocionMapaPe() {
    coords = {
        lng: -87.23169279999999,
        lat: 14.0959744
    }
    id = 'pro-mapa-pe';
    setMapa(coords, id);
}


function setMapa(coords, id) {
    //Se crea una nueva instancia del objeto mapa
    var map = new google.maps.Map(document.getElementById(id), {
        zoom: 15,
        center: coords,
    });

    //Creamos el marcador en el mapa con sus propiedades
    marker = new google.maps.Marker({
        map: map,
        position: coords
    });

}




// guardar empresa como favorita en inicio
function ccgecf() {
    document.getElementById('favGecf').classList.toggle("rojo");
    // console.log("checbox de empresa favorita"+document.getElementById('cef').checked);
}
// guardar promocion como favoritam en inicio
function ccgpcf() {
    document.getElementById('ccgpcf').classList.toggle("rojo");
    // console.log("checbox de promoción favorita"+document.getElementById('cpf').checked);

}

// guardar empresa como favorita en perfil empresa
function ccgecf1() {
    document.getElementById('favGecf1').classList.toggle("rojo");
    // console.log("checbox de empresa favorita"+document.getElementById('cef').checked);
}

// guardar promocion como favorita en perfil empresa
function ccgpcf1() {
    document.getElementById('ccgpcf1').classList.toggle("rojo");
    // console.log("checbox de promoción favorita"+document.getElementById('cpf').checked);

}
// guardar empresa como favorita en promocion favorita
function bccgecf() {
    document.getElementById('bfavGecf').classList.toggle("blanco");
    let a = document.getElementById("DECF").innerHTML;
    // console.log("checbox de promoción favorita"+document.getElementById('bcef').checked);
    if (a === "DESMARCAR EMPRESA COMO FAVORITA") {
        document.getElementById("DECF").innerHTML = "MARCAR EMPRESA COMO FAVORITA";
    } else {
        document.getElementById("DECF").innerHTML = 'DESMARCAR EMPRESA COMO FAVORITA';
    }
}

// guardar promocion como favorita en promocion favorita
function bccgpcf() {
    document.getElementById('bccgpcf').classList.toggle("blanco");
    let a = document.getElementById("DPCF").innerHTML;
    // console.log("checbox de promoción favorita"+document.getElementById('bcpf').checked);
    if (a === "DESMARCAR PROMOCIÓN COMO FAVORITA") {
        document.getElementById("DPCF").innerHTML = "MARCAR PROMOCIÓN COMO FAVORITA";
    } else {
        document.getElementById("DPCF").innerHTML = 'DESMARCAR PROMOCIÓN COMO FAVORITA';
    }

}